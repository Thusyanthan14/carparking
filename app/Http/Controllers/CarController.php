<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    // public function car()
    // {
    // }

    // public function edit(Request $request,$id)
    // {
    //     $car = Car::find($id);
    //     $car->update(['selected'=>true]);

    //     return redirect()->back();
    // }

    public function show()
    {
        $cardetails = Car::all();
        

        return view('car',['cardetails' => $cardetails] );

    }

    public function select(Request $request, $id)
    {
        $carselect = Car::find($id);

        $carselect->update(['selected'=>true]);
        $carselect = $request->session()->get('carname');

        return redirect()->back()->with('message','Slot Selected');
    }

    public function deselect(Request $request, $id)
    {
        $carselect = Car::find($id);

        $carselect->update(['selected'=>false]);

        return redirect()->back();
    }

    // public function showslot()
    // {
    //     $carslots = Car::latest()->get();
        
    //     return view('car',['carslots'=>$carslots]);
    // }
}
