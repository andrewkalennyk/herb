<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpWareHouseType;
use Illuminate\Support\Facades\DB;

class UpdateWareHousesTypes
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        DB::table('np_warehouse_types')->update(['is_active' => 0]);
    }

    /**
     * Handle the event.
     *
     * @param  UpdateNpEvent  $event
     * @return void
     */
    public function handle(UpdateNpEvent $event)
    {
        foreach (data_get($event->npApi->getWareHouseTypes(), 'data') as $houseType) {
            NpWareHouseType::updateOrCreate([
                'ref' => $houseType['Ref']
            ], [
                'title_ua' => $houseType['Description'],
                'title' => $houseType['DescriptionRu'],
                'title_en' => $houseType['Description'],
                'is_active' => 1
            ]);
        }
    }
}
