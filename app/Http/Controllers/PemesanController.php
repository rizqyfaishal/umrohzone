<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Helper\RegistersUsers;
use App\Paket;
use App\Pemesan;
use Hashids\Hashids;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PemesanController extends Controller
{

    use RegistersUsers;

    protected $registerView = 'pemesan.register';


    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-pemesan', ['only' => ['isiDataJamaah', 'getInformation']]);
    }

    public function showRegister()
    {
        $this->page->setTitle('Register');
        return $this->showRegistrationForm($this->page);
    }

    public function postRegister(Requests\RegisterPemesanRequest $request)
    {
        $this->reg($request);
        return redirect('/');
    }

    public function reg($request)
    {
        $user = $this->register($request);
        $pemesan = Pemesan::create($request->all());
        $pemesan->user()->save($user);
        return $pemesan;
    }

    public function registerPemesan(Requests\RegisterPemesanRequest $request)
    {
        $pemesan = $this->reg($request);
        $pemesan->paket()->attach($request->input('paket_id'));
        $paket = Paket::find($request->input('paket_id'));
        $paket->setSisaKuota();
        $paket->save();
        $hashids = new Hashids(env('RECAPTCHA_PRIVATE_KEY'), 9, '6LfAkSYTAAAAACIlI9fTob3-UmJBFyRo9y9w7y0F
RECAPTCHA_PRIVATE_KEY=6LfAkSYTAAAAAFeKL4KvHOd3z0fIAfNnWr6EgkCh');
        return redirect(action('PemesanController@isiDataJamaah', $hashids->encode($request->input('paket_id'))));
    }

    public function isiDataJamaah($id)
    {
        $hashids = new Hashids(env('RECAPTCHA_PRIVATE_KEY'), 9, 'abcdefghijlmnopqwrstuvwxyzABCKSJASAKNAKS1234567890');
        if (!$hashids->decode($id)) {
            abort(404);
        }
        $this->page->setTitle('Isi data jamaah');
        return view('pemesan.data-jamaah')->with([
            'page' => $this->page,
            'hash_id_paket' => $id
        ]);
    }

    public function getInformation()
    {
        $user = Auth::user();
        if (!$user->isPemesan()) {
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $user->load('user')
        ]);
    }

    public function getInformationPaket($hash)
    {
        $hashids = new Hashids(env('RECAPTCHA_PRIVATE_KEY'), 9, 'abcdefghijlmnopqwrstuvwxyzABCKSJASAKNAKS1234567890');
        $id = $hashids->decode($hash);
        $paket = Paket::where('id', '=', $id)->first();
        if (is_null($paket)) {
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->load('agen.attachments', 'pesawat', 'embarkasi')
        ]);
    }

    public function toogleCheckMitra()
    {
        $user = Auth::user();
        if (!$user->isPemesan()) {
            abort(404);
        }
        $check = $user->user->get_mitra == 1;
        $user->user->get_mitra = !$check;
        $t = $user->user->save();
        if (!$t) {
            abort(500);
        }
        return response()->json([
            'status' => true,
        ]);
    }

    public function toogleCheckPromo()
    {
        $user = Auth::user();
        if (!$user->isPemesan()) {
            abort(404);
        }
        $check = $user->user->get_promo == 1;
        $user->user->get_promo = !$check;
        $t = $user->user->save();
        if (!$t) {
            abort(500);
        }
        return response()->json([
            'status' => true,
        ]);
    }
}
