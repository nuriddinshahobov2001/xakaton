<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatesModel extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function country()
    {
        return $this->belongsTo(CountryModel::class, 'country_id');
    }
}
