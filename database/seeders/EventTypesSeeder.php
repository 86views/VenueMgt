<?php

namespace Database\Seeders;
use App\Models\EventType;
use illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventTypes = [
           'conferences',
           'Award Ceremoines',
           'The unusual',
           'Private dining',
           'Meeting',
           'Parties' 
        ];

        foreach ($eventTypes as $eventType) {
            EventType::create([
                'name' => $eventType,
                'slug' => Str::slug($eventType)

            ]);

        }
    }
}
