<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDFGenerator;

class PDFController extends Controller
{
    public function index(){
        $data = User::all();
        $info = ['info' => $data];
        return view('pdf.welcome', $info);
    }

    public function viewtempalte(){
        $data = User::all();
        $info = ['info' => $data];
        return view('generator.template', $info);
    }

    public function crearPDF($data, $viewUrl){
        $pdf = PDFGenerator::loadView($viewUrl, $data);
        return $pdf->download('inform.pdf');
    }

    public function crearInforme(){
        $data = User::all();
        
        $info = ['info' => $data];

        $url = 'generator.template';
        
        return $this->crearPDF($info,$url);
    }
}
