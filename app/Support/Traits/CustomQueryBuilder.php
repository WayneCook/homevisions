<?php

namespace App\Support\Traits;

class CustomQueryBuilder {

    private $query,
            $filter;

    public function __construct($query, $filter)
    {
        $this->query =$query;
        $this->filter =$filter;
    }

    public function apply()
    {

        if (isset($this->filter['search'])) {

            return $this->query
            ->where('name', 'like', "%" . $this->filter['search'] ."%")
            ->orWhere('email', 'like', "%" . $this->filter['search'] ."%")
            ->orWhere('phone', 'like', "%" . $this->filter['search'] ."%")
            ->orWhere('message', 'like', "%" . $this->filter['search'] ."%");

        }

        return $this->query;
    }

}
