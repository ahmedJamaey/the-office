<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'blade',
        'data'
    ];

   public function templates(): BelongsToMany
   {
      return $this->belongsToMany(Template::class);
   }
}
