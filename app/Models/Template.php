<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Template extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function sections(): BelongsToMany
    {
       return $this->belongsToMany(Section::class, 'section_template');
    }
}
