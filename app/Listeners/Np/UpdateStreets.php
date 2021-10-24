<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpCity;
use App\Models\NpStreet;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class UpdateStreets
{

    protected $cities;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        DB::table('np_streets')->update(['is_active' => 0]);

        $this->cities = NpCity::active()->get();
    }

    /**
     * Handle the event.
     *
     * @param  UpdateNpEvent  $event
     * @return void
     */
    public function handle(UpdateNpEvent $event)
    {
        foreach ($this->cities as $city) {
            $page = 1;
            do {
                $streets = data_get($event->npApi->getStreet($city->ref, '', $page), 'data');
                foreach ($streets as $street) {
                    NpStreet::updateOrCreate([
                        'ref' => $street['Ref']
                    ], [
                        'np_city_id' => $city->id,
                        'title_ua' => $street['StreetsType'] . ' ' . $street['Description'],
                        'title' => $street['StreetsType'] . ' ' . $street['Description'],
                        'title_en' => $street['StreetsType'] . ' ' . $street['Description'],
                        'is_active' => 1
                    ]);
                }
                $page++;
            } while (is_array($streets) && count($streets));
        }
    }
}
