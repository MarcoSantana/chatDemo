<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'message', 'user_id',
    ];
    //
    public function user()
    {
      # code...
      return $this->belongsTo(User::class);
    }
}
