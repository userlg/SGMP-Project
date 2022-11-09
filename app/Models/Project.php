<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Task;

use App\Models\Participant;

class Project extends Model
{
    use HasFactory;


    //********Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
