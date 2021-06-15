<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
    */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source'             => 'name',
                'separator'          => '-',
                'unique'             => true,
                'onUpdate'           => false,
                'includeTrashed'     => false,
            ]
        ];
    }

    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function saved_by()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
