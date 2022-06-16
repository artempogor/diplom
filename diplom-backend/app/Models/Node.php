<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    protected $table = 'node';
    protected $hidden = [
        'token',
    ];
    public static function ip($token)
    {
     $ip=Node::where('token',$token)->first();
     return $ip->ip;
    }
}
