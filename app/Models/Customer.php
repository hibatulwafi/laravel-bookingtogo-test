<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'cst_id';
    
    protected $fillable = [
        'nationality_id',
        'cst_name',
        'cst_dob',
        'cst_phoneNum',
        'cst_email',
    ];

    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function familyList()
    {
        return $this->hasMany(FamilyList::class, 'cst_id', 'cst_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($customer) {
            $customer->familyList()->delete();
        });
    }
}
