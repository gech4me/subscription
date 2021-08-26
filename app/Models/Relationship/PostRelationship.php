<?php


namespace App\Models\Relationship;


use App\Models\Website;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait PostRelationship
{
    public function website(): BelongsTo
    {
        return $this->belongsTo(Website::class);
    }
}
