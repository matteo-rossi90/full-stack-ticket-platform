<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketEditRequest;
use App\Http\Requests\TicketRequest;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'desc')->get();

        return view('admin.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operators = Operator::where('is_available', 1)->get();



        $categories = Category::all();

        $statuses = Status::all();

        return view('admin.tickets.create', compact('operators', 'categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Helper::generateSlug($data['title'], Ticket::class);

        $operator = Operator::findOrFail($request->operator_id);

        if (!$operator->is_available) {
            return redirect()->back()->withErrors(['operator_id' => 'L\'operatore selezionato non è disponibile.']);
        }

        $operator->update(['is_available' => 0]);

        $ticket = Ticket::create($data);

        session()->flash('success', 'Il ticket è stato creato con successo!');

        //dd($request->all());

        return redirect()->route('admin.tickets.index', $ticket);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);

        return view('admin.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::find($id);

        $statuses = Status::all();

        return view('admin.tickets.edit', compact('ticket', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketEditRequest $request, string $id)
    {
        $ticket = Ticket::find($id);

        $data = $request->all();

        // if ($data['title'] != $ticket->title) {
        // $data['slug'] = Helper::generateSlug($data['title'], Ticket::class);
        // }

        $isClosed = isset($data['status_id']) && $data['status_id'] == 3;

        $ticket->update($data);

        if ($isClosed && $ticket->operator) {
            $ticket->operator->update(['is_available' => 1]);
        }

        $ticket->update($data);

        return redirect()->route('admin.tickets.index', compact('ticket'))->with('success', 'Lo stato del ticket è stato modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {

        $ticket->delete();

        return redirect()->route('admin.tickets.index')->with('success', 'Il ticket è stato cancellato con successo.');
    }
}
