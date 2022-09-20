<?php

namespace Database\Seeders;
use App\Models\Location;
use illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $locations = [
           'London',
           'Manchester',
           'Liverpool',
           'Birmingham',
          
         
           

        ];

        foreach($locations as $location) {
            $slug  =  Str::slug($location);
           $locationObject  =  Location::create([
                'name' => $location,
                'slug' => $slug,

            ]);
    
        
        $locationObject->addMedia(public_path('images/locations/' . $slug . '.jpg'))->toMediaCollection('photo');
        }
    }
}
