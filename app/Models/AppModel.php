<?php

namespace App\Models;

use App\Models\Admin\CountryModel;
use App\Models\Admin\SitiesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function country(){
        return $this->belongsTo(CountryModel::class,'region');
    }
    public function cities(){
        return $this->belongsTo(SitiesModel::class,'city');
    }
}
