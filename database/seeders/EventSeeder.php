<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $eventArray = config("event");
        foreach($eventArray as $singleEvent)
        {
            $newEvent = new Event();
            $newEvent->name= $singleEvent['name'];
            $newEvent->location= $singleEvent['location'];
            $newEvent->city= $singleEvent['city'];
            $newEvent->address= $singleEvent['address'];
            $newEvent->artist= $singleEvent['artist'];
            $newEvent->date= $singleEvent['date'];
            $newEvent->tickets= $singleEvent['tickets'];
            $newEvent->poster= $singleEvent['poster'];
            $newEvent->price= $singleEvent['price'];
            $newEvent->fill($singleEvent);
            $newEvent->save();
        }
    }
}
