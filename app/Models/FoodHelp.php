<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodHelp extends Model
{
    use HasFactory;

    protected $fillable = [
        'donor_id',
        'children',
    ];

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }
}
