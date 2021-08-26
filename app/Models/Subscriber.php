<?php

namespace App\Models;

use App\Models\Relationship\SubscriberRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    use SubscriberRelationship;

    protected $fillable = [
        'email',
    ];
}
