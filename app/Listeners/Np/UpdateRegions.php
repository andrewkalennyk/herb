<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpArea;
use Illuminate\Support\Facades\DB;

class UpdateRegions extends NpBase
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        DB::table('np_areas')->update(['is_active' => 0]);

        parent::__construct();
    }

    /**
     * Handle the event.
     *
     * @param  UpdateNpEvent  $event
     * @return void
     */
    public function handle(UpdateNpEvent $event)
    {
        foreach (data_get($event->npApi->getAreas(), 'data') as $region) {
            NpArea::updateOrCreate([
                'ref' => $region['Ref']
            ], [
                'title_ua' => $region['Description'],
                'title' => $region['DescriptionRu'],
                'title_en' => $region['Description'],
                'is_active' => 1
            ]);
        }
    }
}
