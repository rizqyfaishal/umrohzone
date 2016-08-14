<?php

namespace App\Http\Controllers;

use App\Agen;
use App\Helper\PageDescription;
use App\Hotel;
use App\Jamaah;
use App\Pesawat;
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

    public function getJamaah()    {
        $this->page->setTitle('Dashboard Jamaah');
        $jamaahs = Jamaah::get();
        return view('admin.dashboard-jamaah')->with([
            'page' => $this->page,'jamaahs' => $jamaahs
        ]);
    }

    public function removeJamaah($id)   {
        $jamaah = Jamaah::find($id);
        $jamaah->delete();
        return redirect()->back();
    }

    public function getTA()    {
        $this->page->setTitle('Dashboard Travel Agent');
        $agens = Agen::get();
        return view('admin.dashboard-ta')->with([
            'page' => $this->page,'agens' => $agens
        ]);
    }

    public function removeTA($id)   {
        $agen = Agen::find($id);
        $agen->delete();
        return redirect()->back();
    }

    public function getHotels()    {
        $this->page->setTitle('Dashboard Hotel');
        $hotels = Hotel::get();
        return view('admin.dashboard-hotel')->with([
            'page' => $this->page,'hotels' => $hotels
        ]);
    }

    public function removeHotel($id)   {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->back();
    }

    public function getAirlines()    {
        $this->page->setTitle('Dashboard Maskapai');
        $pesawats = Pesawat::get();
        return view('admin.dashboard-maskapai')->with([
            'page' => $this->page,'pesawats' => $pesawats
        ]);
    }

    public function removeAirline($id)   {
        $pesawat = Pesawat::find($id);
        $pesawat->delete();
        return redirect()->back();
    }
}
