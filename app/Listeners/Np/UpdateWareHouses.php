<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpCity;
use App\Models\NpWareHouse;
use App\Models\NpWareHouseType;
use Illuminate\Support\Facades\DB;

class UpdateWareHouses
{
    protected $cities;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        DB::table('np_warehouses')->update(['is_active' => 0]);
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
        if($this->cities->count()) {
            foreach ($this->cities as $city) {
                $wareHouses = data_get($event->npApi->getWarehouses($city->ref), 'data');
                if (count($wareHouses)) {
                    $warehouseType = NpWareHouseType::where('title', 'Почтовое отделение')->first();
                    foreach ($wareHouses as $wareHouse) {
                        if ($wareHouse['TypeOfWarehouse'] == $warehouseType->ref) {
                            NpWareHouse::updateOrCreate([
                                'ref' => $wareHouse['Ref']
                            ], [
                                'np_city_id' => $city ? $city->id : null,
                                'np_warehouse_type_id' => $warehouseType->id,
                                'title_ua' => $wareHouse['Description'],
                                'title' => $wareHouse['DescriptionRu'],
                                'title_en' => $wareHouse['Description'],
                                'is_active' => 1
                            ]);
                        }
                    }
                }
            }
        }
    }
}
