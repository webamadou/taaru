<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class CareType extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

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

    public function parent()
    {
        return $this->belongsTo( \App\Models\CareType::class, 'parent_id', 'id' );
    }

    public function children()
    {
        return $this->hasMany( \App\Models\CareType::class, 'parent_id', 'id' );
    }
}
