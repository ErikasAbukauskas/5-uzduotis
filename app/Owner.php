<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function ownerTask() { //knyga priklauso autoriui
        return $this->belongsTo(Task::class, 'task_title', 'title');
    }

}
