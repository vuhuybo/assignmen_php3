<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Controllers\MomoController;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    protected $momoService;

    public function __construct(MomoController $momoService)
    {
        $this->momoService = $momoService;
    }

    public function addInvoice(Request $request){
        $data = $request->all();
        if($data['payment_method']==2){
            $amount = $data['total'];
           return $this->momoService->MomoService($amount);
        }
    }


}
