<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'comment',
        'alert_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function alert(){
        return $this->belongsTo(Alert::class);
    }

}
