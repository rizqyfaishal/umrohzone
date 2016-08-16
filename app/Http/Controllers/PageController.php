<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Paket;
use App\Provinsi;
use App\Booking;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{


    public function __construct(PageDescription $pageDescription){
        $this->page = $pageDescription;
        $this->middleware('guest',['only' => ['login']]);
        $this->middleware('auth-pemesan',['only'=> ['dashboardUser','dashboardAgent']]);

    }

    public function index(){
        $this->page->setTitle('Home');
        return view('index')->with([
            'page' => $this->page
        ]);
    }

    public function dashboard(){
        return Auth::user();
    }

    public function bookingStatus(){
        $this->page->setTitle('Booking Status');
        $phone = Input::get('booking_status_phone_number');
        $id = Input::get('booking_status_code');
        if($phone == '' && $id == '')
            $bookings = Booking::get();
        else if($phone != '')   {
            $user = User::where('phone','=',$phone)->get();
            $bookings = Booking::where('user_id','=',$user->id)->get();
        }
        else
            $bookings = Booking::where('id','=',$id)->get();

        return view('booking-status')->with([
            'page' => $this->page,'bookings'=>$bookings
        ]);
    }

    public function features(){
        $this->page->setTitle('Features');
        return view('features')->with([
            'page' => $this->page
        ]);
    }

    public function login(){
        $this->page->setTitle('Login');
        return view('login')->with([
            'page' => $this->page
        ]);
    }


    public function getRegencies($id){
        $res = Provinsi::where('id','=',$id)->first();
        $res = $res->regencies()->get();
        return response()->json([
            'status' => true,
            'data' => $res
        ]);
    }

//    public function dashboard(){
//        $this->page->setTitle('Dashboard');
//        return view('dashboard')->with([
//            'page' => $this->page
//        ]);
//    }


    //di bawah ini tambahan luthfi dashboard
    public function dashboardAgent(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard-agent')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardAgentInfoAkun(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard-agent-infoakun')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardAgentDaftarPaket(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard-agent-daftarpaket')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardAgentBuatPaket(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard-agent-buatpaket')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardAgentEditPaket(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard/_dashboard-base-agent-editpaket')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardAgentDaftarPemesan(){
        $this->page->setTitle('Dashboard Travel Agent');
        return view('dashboard-agent-daftarpemesan')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardUser(){
        $this->page->setTitle('Dashboard Calon Jamaah');
        return view('dashboard-user')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardUserInfoAkun(){
        $this->page->setTitle('Dashboard Calon Jamaah');
        return view('dashboard/_dashboard-base-user-infoakun')->with([
            'page' => $this->page
        ]);
    }

    public function dashboardUserBooking(){
        $this->page->setTitle('Dashboard Calon Jamaah');
        return view('dashboard/_dashboard-base-user-booking')->with([
            'page' => $this->page
        ]);
    }
    // end of tambahan luthfi dashboard


    public function listPakets(){
        $this->page->setTitle('List of all paket');
        return view('paket.index')->with([
            'page' => $this->page
        ]);
    }

    public function getListPaketRedirect(Requests\ListPaketQueryRequest $request){
        $date = Carbon::createFromFormat('d/m/Y',$request->query('tanggal_keberangkatan'));
        if($request->query('flexible_date')){
            return redirect('/list-paket#/1?jumlah_jamaah='
                . $request->query('jumlah_jamaah').'&embarkasi='.$request->query('embarkasi')
                .'&flexible_date='.$request->query('flexible_date').'&tanggal_keberangkatan=' . $date->toDateString());
        }
        return redirect('/list-paket#/1?jumlah_jamaah=' .
            $request->query('jumlah_jamaah').'&embarkasi='.$request->query('embarkasi')
            .'&tanggal_keberangkatan='.$date->toDateString()
            .(!is_null($request->query('hotel_mekah')) ? '&hotel_mekah=' . $request->query('hotel_mekah') : '')
            .'&flexible_date=0'
            .(!is_null($request->query('hotel_madinah')) ? '&hotel_madinah=' . $request->query('hotel_madinah') : ''));

    }
    
}
