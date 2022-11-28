<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Device;

class DeviceRepository extends ModuleRepository implements Contracts\DeviceRepository
{


    public function __construct(Device $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields): void
    {
        if(isset($fields['fabricator_id']) || isset($fields['category_id'])) {
            /** @var array<int, int>|null $field */
            $fabricator = $fields['fabricator_id'];
            $category = $fields['category_id'];

            $object->update(['fabricator_id' => $fabricator, 'category_id' => $category]);
        }
    }

    public function getDevicesByCategory($categoryID){
        return $this->model->newQuery()
            ->where('category_id', $categoryID)->get();
    }

}
