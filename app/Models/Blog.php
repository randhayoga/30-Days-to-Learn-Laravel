<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
