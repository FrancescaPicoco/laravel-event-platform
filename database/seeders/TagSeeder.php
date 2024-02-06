<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = config("tag");
        foreach($tags as $singleTag)
        {
            $newtag=new Tag();
            $newtag->name=$singleTag['name'];
            $newtag->fill($singleTag);
            $newtag->save();
        }
    }
}
