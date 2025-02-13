<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Car;
use App\Models\Client;

class newbillController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();

        return view('bills', ['invoices' => $invoices]);

    }

    public function get(Request $request)
    {

        $car= Car::where('code', $request->code)->first();
        return response()->json([

        'name'=>$car->name,
        'price'=>$car->price,]);



    }

    public function products()
    {
        $cars = Car::all();

        return view('car', ['cars' => $cars]);
    }

    public function store(Request $request)
    {
       
        $client=Client::firstOrCreate([
                'name'=>$request['client_name'],
                'phone'=>$request['phone'],

            ]);


        Invoice::create([
            'client_id' => $client->id,
            'car_code' => $request['car_code'],
            'price' => $request['car_price'],
            'invoice_date' => $request['invoice_date']?? now(),
            'amount_received' => $request['amount_received'],
            'payment_method' => $request['payment_method'],
            'payment_status' => $request['payment_status'],
            'payment_system' => $request['payment_system'],
            'Deferred'=>$request['Deferred'],
            'amount_returned' => $request['amount_returned'] ?? 0, 
        ]);

       $car = Car::where('code', $request['car_code'])->first();

if ($car) {
    $car->delete(); 
}


        return redirect()->route('sucss')->with('success', 'تم إضافة الفاتورة بنجاح');
    }

    public function add()
    {
        return view('add');
    }

    public function adden(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'code' => 'required|integer',
            'color' => 'required|string|max:50',
            'price' => 'required|integer',

        ]);

        $car = Car::where('name', $validated['name'])
            ->where('model', $validated['model'])
            ->first();

        
            Car::create([
                'name' => $validated['name'],
                'model' => $validated['model'],
                'code' => $validated['code'],
                'color' => $validated['color'],
                'price' => $validated['price'],

            ]);
        

        return redirect()->route('car')->with('success', 'تم إضافة السيارة بنجاح');
    }
}
