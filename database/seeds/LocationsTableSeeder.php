<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        $new_location = new Location();
        $new_location->city = 'Cagliari';
        $new_location->hotel = 'T Hotel';
        $new_location->address = 'via dei Giudicati 66';
        $new_location->main_service = 'Parcheggio,WiFi,Colazione,Cena';
        $new_location->rooms_number = 200;
        $new_location->save();
    }
}
