<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'team_user')->withPivot('role')->withTimestamps();
    }

    public function invitations()
    {
        return $this->hasMany(Invitaiton::class);
    }
}
