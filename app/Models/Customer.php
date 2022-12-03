<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'no_telp', 'alamat'];

    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
