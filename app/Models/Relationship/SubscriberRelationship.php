<?php


namespace App\Models\Relationship;


use App\Models\Website;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait SubscriberRelationship
{
    public function websites(): BelongsToMany
    {
        return $this->belongsToMany(Website::class, 'subscriber_website', 'website_id', 'subscriber_id');
    }
}
