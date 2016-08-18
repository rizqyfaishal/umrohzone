<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Provinsi;
use App\User;
use Hashids\Hashids;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AngularController extends Controller
{
    public function getPaketPenerbangan($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->load('penerbanganBerangkat.bandaraBerangkat','penerbanganBerangkat.bandaraTujuan','penerbanganPulang.bandaraBerangkat','penerbanganPulang.bandaraTujuan','manasik.address','penerbanganBerangkat.terminalBerangkat','penerbanganPulang.terminalBerangkat','penerbanganBerangkat.terminalTujuan','penerbanganPulang.terminalTujuan')
        ]);
    }

    public function checkAuth(Request $request){
        if(!is_null(Auth::user())){
            $paketId = $request->query('paketId');
            if(is_null($paketId)){
                return response()->json([
                    'status' => true
                ]);
            }
            $hashids = new Hashids(env('RECAPTCHA_PRIVATE_KEY'), 9, 'abcdefghijlmnopqwrstuvwxyzABCKSJASAKNAKS1234567890');
            return response()->json([
                'status' => true,
                'redirectTo' => action('PemesanController@isiDataJamaah',$hashids->encode($paketId))
            ]);
        }
        return response()->json([
            'status' => false,
        ]);

    }

    public function getToken(){
        return response()->json([
            'status' => true,
            'data' => csrf_token()
        ]);
    }

    public function getPaketPesawat($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->pesawat->load('logo','photos')
        ]);
    }

    public function getPaketHotelMekahReview($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMekah->review
        ]);
    }

    public function getPaketHotelMadinahReview($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMadinah->review
        ]);
    }

    public function getPaketHotelMekah($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMekah->load('address')
        ]);
    }

    public function getPaketHotelMadinah($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMadinah->load('address')
        ]);
    }

    public function getPaketHotelMekahPhotos($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMekah->photos
        ]);
    }

    public function getPaketHotelMadinahPhotos($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->hotelMadinah->photos
        ]);
    }

    public function getPaketAgenda($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->agenda
        ]);
    }

    public function getPeketFasilitas(){

    }

    public function checkEmailUnique($email){
        $email = User::where('email','=',$email)->first();
        if(is_null($email)){
            return response()->json([
                'status' => true
            ]);
        }
        return response()->json([
            'status' => false
        ]);
    }

    public function getAllProvinsi(){
        return response()->json([
            'status' => true,
            'data' => Provinsi::all()
        ]);
    }
    public function getPaketFasilitas($id){
        $paket = Paket::find($id);
        if(is_null($paket)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $paket->fasilitas
        ]);
    }



}
