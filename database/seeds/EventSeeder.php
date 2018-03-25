<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['title'=>'Finacial forum', 'start_date'=>'2018-03-12', 'finish_date'=>'2018-03-23'],
            ['title'=>'PHP Event', 'start_date'=>'2018-03-13', 'finish_date'=>'201-03-25'],
            ['title'=>'Laravel Event', 'start_date'=>'2018-03-23', 'finish_date'=>'201-03-26'],
            ['title'=>'SQL event', 'start_date'=>'2018-03-19', 'finish_date'=>'2018-03-27'],
        ];
        \DB::table('events')->insert($data);

    }
}
