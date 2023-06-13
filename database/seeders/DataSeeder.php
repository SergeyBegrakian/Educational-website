<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        // DB::table('courses')->insert([

        //     'title' => Str::random(10),
        //     'description' => Str::random(10),
        //     'topics' => Str::random(10),
        //     'description' => Str::random(10),
        //     'content' => Str::random(10),
        //     'start' => Carbon::parse('2000-01-01'),
        //     'duration' => Str::random(10),
        //     'level' => Str::random(10),
        //     'price' => Str::random(10),
        //     'slug' => Str::slug(Str::random(10)),
        // ]);
        $this->call([
            ChatRoomSeeder::class
        ]);
    }
}
