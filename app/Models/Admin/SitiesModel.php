<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitiesModel extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'sites_models';
    public function states()
    {
        return $this->belongsTo(StatesModel::class, 'states_id');
    }
}
