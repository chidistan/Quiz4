<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    public $timestamps='false';
}
