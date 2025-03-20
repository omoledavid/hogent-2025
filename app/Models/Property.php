<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Property extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'slug', 'description', 'price', 'location_id', 'property_type_id',
        'bedrooms', 'bathrooms', 'size', 'status', 'is_featured', 'user_id'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($property) {
            $property->slug = Str::slug($property->title);
        });
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(AmentyProperty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
    public function properties() {
        return $this->hasMany(Property::class);
    }
}
