<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * A facility belongs to many properties.
     */
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'facility_property', 'fk_property_id', 'fk_facility_id')->withPivot('amount', 'detail')->withTimestamps();
    }
}
