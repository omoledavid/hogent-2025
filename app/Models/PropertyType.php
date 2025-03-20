<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PropertyType extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($type) {
            $type->slug = Str::slug($type->name);
        });
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
