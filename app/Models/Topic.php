<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'Topics';
    protected $fillable = ['topicname','created_at','updated_at'];
}
