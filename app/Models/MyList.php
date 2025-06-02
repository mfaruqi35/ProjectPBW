<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    use HasFactory;

    protected $table = 'lists'; // Specify the table name

    protected $fillable = [
        'name',
        'project_id',
        'order',
    ];

    /**
     * Get the project that owns the list.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the tasks for the list.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('order');
    }
}