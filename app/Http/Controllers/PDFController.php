<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{

    public function invoice(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.invoice');
        return $pdf->stream();
    }
}
