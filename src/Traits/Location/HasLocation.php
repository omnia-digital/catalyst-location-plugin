<?php

namespace OmniaDigital\CatalystLocation\Traits\Location;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use OmniaDigital\CatalystLocation\Models\Location;

trait HasLocation
{
    public function getLocationShortAttribute()
    {
        return $this->location()?->first()?->name;
    }

    public function location(): MorphOne
    {
        return $this->morphOne(Location::class, 'model');
    }

    public function getLocationAttribute()
    {
        return $this->location()?->first()?->full;
    }
}
