<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Care extends Model
{
    use HasFactory,Sluggable, SoftDeletes;

    protected $guarded = [];
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

    public function care_type()
    {
        return $this->belongsTo(\App\Models\CareTypes::class);
    }

    public function institute()
    {
        return $this->belongsTo(\App\Models\Institute::class);
    }

    public function saved_by()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
