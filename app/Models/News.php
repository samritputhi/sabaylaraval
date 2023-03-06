<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class News extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}