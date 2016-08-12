<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use Illuminate\Http\Request;
use App\Booking;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin');
    }

    public function index(){
        $this->page->setTitle('Dashboard Home');
        $bookings = Booking::where('status_payment','<>',2)->get();
        return view('admin.dashboard-home')->with([
            'page' => $this->page,'bookings' => $bookings
        ]);
    }
}
