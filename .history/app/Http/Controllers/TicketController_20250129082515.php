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
    public function store(Request $request)
    {
        try {
            $request->validate([
                'account_id' => 'required',
                'fliht_id' => 'required',

            ]);

            $store = new Ticket();
            $store->account_id = auth()->id();
            $store->flight_id = $request->flight_id;
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
    public function edit($id)
    {

        //
        $edit =  Ticket::find($id);
        $course = Flight::all();
        return view('ticket.edit', compact('edit', 'course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'course_id' => 'required',
                'url' => 'required',

            ]);

            $update = Ticket::find($id);
            $update->title = $request->title;
            $update->course_id = $request->course_id;
            $update->url = $request->url;
            $update->save();
            return redirect('ticket/' . $request->course_id);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket, $id, $course_id)
    {
        Ticket::destroy($id);
        return redirect('ticket/' . $course_id);
    }
}
