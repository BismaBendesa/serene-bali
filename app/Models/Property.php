<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * A property belongs to a property type.
     */
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'fk_property_type_id');
    }
    /**
     * A property belongs to many facilities.
     */
    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_property', 'fk_property_id', 'fk_facility_id')->withPivot('amount', 'details')->withTimestamps();
    }
}
