<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    protected $table = 'comment';
    protected $fillable = [
        // 'id',
        'title',
        'contents'
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}