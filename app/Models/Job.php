<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = ['name', 'salary'];

    use HasFactory;

    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}