<?php

namespace App\Http\Controllers;

use App\Paket;
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
            'data' => $paket->load('penerbanganBerangkat.bandaraBerangkat','penerbanganPulang.bandaraTujuan','manasik.address')
        ]);
    }

    public function getPaketAgenda($id){

    }

    public function getPeketFasilitas(){

    }
}
