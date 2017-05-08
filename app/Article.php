<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
  public function user() {
    // return $this->belongsTo(User::class, 'user_id');
    // foreign key isn't necessary if we are usingthe
    // laravel's naming conventions
    return $this->belongsTo(User::class);
  }

  public function websites() {
    // many to many relationships
    return $this->belongsToMany(Website::class);
  }
}
