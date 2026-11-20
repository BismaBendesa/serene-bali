<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * A property type can have many properties.
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
