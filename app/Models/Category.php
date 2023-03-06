<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
class Category extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}