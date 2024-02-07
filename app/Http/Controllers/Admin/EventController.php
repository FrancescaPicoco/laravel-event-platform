<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Controller di base da importare
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Tag;
use App\Models\User;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

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
            'location'=>'required|max:50',
            'city'=>'required|max:20',
            'address'=>'required|max:100',
            'artist'=>'required',
            'date'=>'required',
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
            'city.max'=>'Numero caratteri consentiti superato',
            'address.required'=>'Requisito Necessario',
            'address.max'=>'Numero caratteri consentiti superato',
            'artist.required'=>'Requisito Necessario',
            'date.required'=>'Requisito Necessario',
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
        $tags = Tag::all();
        return view("admin.events.create" , compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $data = $request->all();
        $valid_data=$this->validation($data);
        $newEvent = new Event();
        $newEvent->fill($valid_data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        $newEvent->save();

        return redirect()->route('admin.events.index'); //agg id per non ripetere l'agg dell'ogg
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
        $users = User::all();
        return view('admin.events.show', compact("eventItem" , "users"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        $eventItem = Event::find($id);
        return view('admin.events.edit', compact("eventItem"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request , Event $event)
    {
        $data = $request->all();
        $valid_data=$this->validation($data); 
        $event->update($valid_data);  
        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route("admin.events.index");
    }
}
