<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
    protected $table = 'roles';
    protected $guarded = [];

      public function users()
    {
        return $this->belongsToMany(User::class, 'roles');
    }
}
