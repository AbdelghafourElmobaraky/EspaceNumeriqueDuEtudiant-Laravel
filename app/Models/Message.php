<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'content',
        'from_id',
        'to_id',
        'create_at',
        'read_at'
        
        
    ];

    public $timestamps = false;

    protected $dates = ['create_at' , 'read_at'];

    public function from(){

        return $this->belongsTo(User::class , 'from_id');
    }
}
