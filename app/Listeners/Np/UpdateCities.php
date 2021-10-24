<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpArea;
use App\Models\NpCity;
use Illuminate\Support\Facades\DB;

class UpdateCities
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        DB::table('np_cities')->update(['is_active' => 0]);
    }

    /**
     * Handle the event.
     *
     * @param  UpdateNpEvent  $event
     * @return void
     */
    public function handle(UpdateNpEvent $event)
    {
        foreach (data_get($event->npApi->getCities(), 'data') as $city) {
            $region = NpArea::where('ref',$city['Area'])->first();
            NpCity::updateOrCreate([
                'ref' => $city['Ref']
            ], [
                'np_area_id' => $region->id,
                'title_ua' => $city['Description'],
                'title' => $city['DescriptionRu'],
                'title_en' => $city['Description'],
                'is_active' => 1
            ]);

        }
    }
}
