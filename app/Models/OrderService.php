<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'order_service';

    public $timestamps = false;
    public $incrementing = false;
}
