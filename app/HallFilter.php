<?php


namespace App;


class HallFilter
{
    private $builder;
    private $request;

    public function __construct($builder, $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    public function apply()
    {
//        dd($this->filters());

//        var_dump($this->filters());

        foreach($this->filters() as $filter => $value)
        {
            if(method_exists($this, $filter))
            {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function filters()
    {
        return $this->request->all();
    }

//    Реализация фильтров

    public function search($value)
    {
        $this->builder->where('title', 'like', "%$value%");
    }

    public function pricefrom($value)
    {
//        var_dump($value);
    }

    public function priceto($value)
    {
//        var_dump($value);
    }

    public function state($value)
    {
        if(is_array($value))
        {
            $states = implode('|', $value);
            $this->builder->whereRaw("state REGEXP '{$states}'");
        }
    }

    public function halltype($value)
    {
        if(is_array($value)) {
            $this->builder->whereIn('type_id', $value);
        }
    }

    public function addition($value)
    {
        $this->builder->whereHas('additions', function($query) use ($value) {
            $query->whereIn('addition_id', $value);
        });
    }

    public function person_minprice($value)
    {

    }



}