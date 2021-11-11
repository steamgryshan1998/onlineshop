<?php

namespace App\Services;

use App\Models\Manufacturer;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Class ManufacturerService
 * @package App\Services
 */
class ManufacturerService
{
    protected $manufacturer;

    public function __construct(Manufacturer $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function getAllManufacturers()
    {
        return Manufacturer::withCount(['products' => function ($query) {
            $query->withFilters(
                request()->input('prices', []),
                request()->input('categories', []),
                request()->input('manufacturers', [])
            );
        }])
            ->get();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function addNewManufacturer(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        return Manufacturer::create($data);
    }

    public function getManufacturerById($id)
    {
        $result = ['status' => 200];
        try {
            $result['data'] = Manufacturer::find($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return $result;
    }

    public function editManufacturer($data, $id)
    {
        $validator = Validator::make($data, [
            'name' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updated_category = $this->manufacturer->where('id', $id)->update($data);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to update post data');
        }

        DB::commit();

        return $updated_category;
    }
}
