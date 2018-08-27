<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    protected $fillable = ['name', 'description'];
    //protected $hidden = ['id'];     // para no mostrar un campo cuando se utilize ->toArray()

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
