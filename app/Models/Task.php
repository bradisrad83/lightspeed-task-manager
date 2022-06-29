<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user that owns the task
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }   

    /**
     * Get the project that owns the task
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }     
}
