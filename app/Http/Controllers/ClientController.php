<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Invoice;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show()
    {
        $clients = Client::with(['invoices' => function($query) {
            $query->select('client_id', 'payment_status', 'Deferred');
        }])->get();
            return view('customers',compact('clients'));
    }

    public function show_d()
    {
    $invoces=Invoice::where('payment_status' , 'غير مكتمل')->get();
    return view('customers_d',compact('invoces'));
    }
}
