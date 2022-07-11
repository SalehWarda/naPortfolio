<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['start_date', 'expire_date'];

    public function status()
    {
        return $this->status ? trans('coupons.Active') : trans('coupons.InActive');
    }
}
