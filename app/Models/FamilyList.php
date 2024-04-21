<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyList extends Model
{
    use HasFactory;

    protected $primaryKey = 'fl_id';
    
    protected $fillable = [
        'cst_id',
        'fl_name',
        'fl_dob',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cst_id', 'cst_id');
    }
}
