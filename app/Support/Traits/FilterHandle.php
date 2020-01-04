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
            ->paginate(request('itemsPerPage', 5))
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

}
