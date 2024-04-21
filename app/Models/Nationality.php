<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;

    protected $primaryKey = 'nationality_id';
    
    protected $fillable = [
        'nationality_name',
        'nationality_code',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class, 'nationality_id', 'nationality_id');
    }
}
