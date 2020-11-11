<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers/reserve');
    } 

    // public function index()
    // {
    //     $customers = customer::all();
    //     return view('home', [
    //         'customers'=> $customers
    //     ]
    //     );
    // }



    public function store()
    {
            $customer = new customer;
            
            $customer-> name = request('cname');
            $customer-> email = request('cemail');
            $customer-> nic = request('cnic');
            $customer-> mobile = request('cmobile');
            $customer-> carno = request('carno');
            $customer-> carmodel = request('carbrand');

            $customer->save();

            return redirect('/confirmation');

    }

    public function show()
    {
        $datas = customer::latest()->first();
        return view('customers.confirmation')->with('datas',$datas);
    }

}
