<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'done'];

    public function mark() {
        $this->done = $this->done ? false : true;
        $this->save();
    }
}