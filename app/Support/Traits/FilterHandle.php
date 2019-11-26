<?php

namespace App\Support\Traits;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;

trait FilterHandle {

    public function scopeAdvancedFilter($query)
    {

        return response()->json([
            'collection' => $this->process($query, request()->all())
                ->orderBy(
                request('sortBy')[0],
                filter_var(request('sortDesc')[0], FILTER_VALIDATE_BOOLEAN) ? 'desc' : 'asc'
            )
            ->paginate(request('itemsPerPage', 5)),
                // 'total' => $this->total(),
                // 'total_revenue' =>$this->totalRevenue(),
                // 'registration_data' =>$this->registrationData(),
                // 'location_data' =>$this->locationChartData()
            ]);

    }

    public function scopeExportExcel($query)
    {

        return response()->json([
            'collection' => $this->process($query, request()->all())
                ->orderBy(
                request('sortBy')[0],
                filter_var(request('sortDesc')[0], FILTER_VALIDATE_BOOLEAN) ? 'desc' : 'asc'
            )
            ->get()]);
    }

    public function process($query, $data)
    {
        return (new CustomQueryBuilder($query, $data))->apply();
    }

    public function total()
    {
        return User::count();
    }

    public function totalRevenue()
    {
        return User::sum('revenue');
    }

    public function registrationData()
    {

        return User::all()->sortBy('registered_on')->groupBy(function($date) {
            return \Carbon\Carbon::parse($date->registered_on)->format('m-d-y');
        });

    }

    public function locationChartData() {

        return User::all()->groupBy('country');

    }

}
