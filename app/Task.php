<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Task extends Model
{
    public function taskType() { //knyga priklauso autoriui
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    use Sortable;

    protected $table="tasks";

    protected $fillable =["title", "description", "start_date", "end_date", "logo"];

    public $sortable =["id", "title", "description", "start_date", "end_date", "logo"];
}
