<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    public $timestamps = false;

    
}
