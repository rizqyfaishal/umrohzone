<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Provinsi;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

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


}
