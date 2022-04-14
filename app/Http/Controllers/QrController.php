<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index($id)
    {
       $remain =  \App\Models\Body::findOrFail($id);
      return view('qrcode', compact(['id', 'remain']));
    }
}
