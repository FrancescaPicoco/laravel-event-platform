<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Controller di base da importare
use App\Models\Event;

use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

     public function validation($data){  //metodo a parte per la validation
        $validated = Validator::make($data,[    //accetta 3 argomenti dato da validare, primo array con regole e secondo array con messaggi
            'name'=>'required|max:50',
            'location'=>'required|max:20',
            'city'=>'required|max:20',
            'address'=>'required|max:50',
            'artist'=>'required',
            'data'=>'required',
            'tickets'=>'required',
            'poster'=>'required',
            'price'=>'required',
        ],
        [
            'name.required'=>'Requisito Necessario',
            'name.max'=>'Numero caratteri consentiti superato',
            'location.required'=>'Requisito Necessario',
            'location.max'=>'Numero caratteri consentiti superato',
            'city.required'=>'Requisito Necessario',
            'city.min'=>'Numero caratteri minimi non raggiunto',
            'address.required'=>'Requisito Necessario',
            'address.min'=>'Numero caratteri minimi non raggiunto',
            'artist.required'=>'Requisito Necessario',
            'data.required'=>'Requisito Necessario',
            'tickets.required'=>'Requisito Necessario',
            'poster.required'=>'Requisito Necessario',
            'price.required'=>'Requisito Necessario',
            
        ])->validate();
        return $validated;
    }

    public function index()
    {
        $eventsIt = Event::all();
        return view ('admin.events.index' , compact("eventsIt"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.events.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $valid_data=$this->validation($data);
        $newEvent = new Event();
        $newEvent->fill($valid_data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        $newEvent->save();

        return redirect()->route('admin.event.show', $newEvent->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $eventItem = Event::find($id);
        return view('admin.events.show', compact("eventItem"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
