<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\student_rate;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $tickets = [];
        if ($user != null) {
            if ($user->is_employee != 0)
                $tickets = Ticket::with('Flight')->get();
            if ($user->is_employee == 0)
                $tickets = Ticket::with('Flight')->where('account_id', $user->id)->get();
            return view('ticket.tickets', compact('tickets'));
        } else return  view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticket.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$flight_id,$name,$card_code)
    {
        try {

            $store = new Ticket();
            $store->account_id = auth()->id();
            $store->flight_id = $flight_id;
            $store->name =$request->name;
            $store->name =$request->card_code;
            $store->save();
            return redirect('tickets');
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
    public function edit($flight_id)
    {

        //
        return view('ticket.add', compact('flight_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Ticket $ticket, $id)
    // {
    //     try {
            

    //         $update = Ticket::find($id);
    //         $update->is_buy = 1;
    //         $update->save();
    //         return redirect('tickets');
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket, $id)
    {
        Ticket::destroy($id);
        return redirect('tickets');
    }
}
