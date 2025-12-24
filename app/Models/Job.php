<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = ['name', 'salary', 'employer_id'];

    use HasFactory;

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id')->withTimestamps();
    }
}