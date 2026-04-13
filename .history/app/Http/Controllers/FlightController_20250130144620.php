<?php

namespace App\Http\Controllers;

use App\Models\Flight;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $flights =  Flight::all();
      return view('flight.flights',compact('flights'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;
        try {
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'date'=>'required',
                'number'=>'required',
                'price'=>'required',
                'desination'=>'required',
                'all_rider_numbers'=>'required',
            ]);

            $store=new Flight();
            $store->name=$request->name;
            $store->description=$request->description;
            $store->date=$request->date;
            $store->number=$request->number;
            $store->price=$request->price;
            $store->desination=$request->desination;
            $store->all_rider_numbers=$request->all_rider_numbers;
            $store->save();
            return redirect('flights');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight,$id)
    {
        $edit=Flight::find($id);
        return view('flight.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight,$id)
    {
        try {
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'date'=>'required',
                'price'=>'required',
                'desination'=>'required',
                'number'=>'required',
                'all_rider_numbers'=>'required',
            ]);

            $update=Flight::find($id);
            $update->name=$request->name;
            $update->description=$request->description;
            $update->date=$request->date;
            $update->number=$request->number;
            $update->price=$request->price;
            $update->desination= $request->desination;
            $update->all_rider_numbers= $request->all_rider_numbers;
            $update->save();
            return redirect('flights');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight,$id)
    {
        try{
        Flight::destroy($id);
        return redirect('flights');
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
