<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Provinsi;
use App\Booking;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function __construct(PageDescription $pageDescription){
        $this->page = $pageDescription;
        $this->middleware('guest',['only' => ['login','dashboard']]);
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
        $bookings = Booking::where('id_user','<>',0)->get();
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
    
}
