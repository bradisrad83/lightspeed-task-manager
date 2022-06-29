<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];    

    /**
     * Get the tasks for the project
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }  
    
    /**
     * The users that belong to the project.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    /**
     * Returns the total hours of estimated tasks
     */
    public function totalHours()
    {
        return $this->tasks->sum('estimated_hours');
    }
    
    /**
     * Returns a list of names of the users
     */
    public function getNames()
    {
        return implode(", ", $this->users->pluck('name')->toArray());
    }
}
