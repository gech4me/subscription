<?php

namespace App\Models;

use App\Models\Relationship\PostRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use PostRelationship;

    protected $fillable = [
        'title',
        'description',
        'website_id'
    ];
}
