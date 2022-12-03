<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'harga', 'stock'];
    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
