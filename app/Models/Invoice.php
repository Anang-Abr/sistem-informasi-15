<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Supply;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function Supply()
    {
        return $this->belongsTo(Supply::class, 'supply_id');
    }
}
