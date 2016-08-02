<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Provinsi;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function __construct(PageDescription $pageDescription){
        $this->page = $pageDescription;
    }

    public function index(){
        $this->page->setTitle('Home');
        return view('index')->with([
            'page' => $this->page
        ]);
    }

    public function bookingStatus(){
        $this->page->setTitle('Booking Status');
        return view('booking-status')->with([
            'page' => $this->page
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

    public function dashboard(){
        $this->page->setTitle('Dashboard');
        return view('dashboard')->with([
            'page' => $this->page
        ]);
    }
}
