<?php

namespace App\Models;

use App\Models\Relationship\WebsiteRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    use WebsiteRelationship;

    protected $fillable = [
        'name',
        'domain'
    ];
}
