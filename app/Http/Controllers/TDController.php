<?php

namespace App\Http\Controllers;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TDController extends Controller
{
    //
    public function index()
    {
        echo "index.ticket";
    }
    public function download(){

       $data=[
            'eventname'=>'Tipe Kemarin',
            'penyelenggara'=>'Penyelenggaras',
            'harga'=>number_format(50000),
            'qrcode'=>'9000.QR.0929',
            'trxid'=>'GXDFP002940',
            'trxname'=>'Ir. Joko Widodo',
            'trxmail'=>'xmod@gmail.com',
            'trxphone'=>'00929883883',
           'trxdate'=>'20 September 2022'];
        return view('download', $data);



    }
    public function dw(){
        // This should be your normal HTML page
//        $url = url('tiket/download');
//        $html = file_get_contents($url);

// First. Convert all relative image paths to file system paths.
// Test that the generated path is where your images files are located
//        $html = str_replace("/images", public_path()."/images", $html);

// Generate PDF file
//        $dompdf = new Dompdf();
       $data= [
            'eventname'=>'Tipe Kemarin',
            'penyelenggara'=>'Penyelenggaras',
            'harga'=>number_format(50000),
            'qrcode'=>'9000.QR.0929',
            'trxid'=>'GXDFP002940',
            'trxname'=>'Ir. Joko Widodo'];
              // retreive all records from db
      // share data to view
//      view()->share('employee',$data);
      return view('download', $data);
      // download PDF file with download metho
    }
}
