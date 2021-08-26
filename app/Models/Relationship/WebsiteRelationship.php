<?php


namespace App\Models\Relationship;


use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait WebsiteRelationship
{
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function subscribers(): BelongsToMany
    {
        return $this->belongsToMany(Subscriber::class, 'subscriber_website', 'website_id', 'subscriber_id');
    }
}
