<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'blocks';
    protected $fillable = array('title', 'topicid', 'content', 'imagesPath', 'created_at', 'updated_at');
}
