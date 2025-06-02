<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'priority',
        'completed',
        'list_id',
        'user_id', // Assignee
        'order',
    ];

    protected $casts = [
        'completed' => 'boolean',
        'due_date' => 'date',
    ];

    /**
     * Get the list that owns the task.
     */
    public function mylist() // Use mylist() to avoid conflict
    {
        return $this->belongsTo(MyList::class, 'list_id');
    }

    /**
     * Get the user that is assigned to the task.
     */
    public function assignee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}