<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubcategory extends Model
{
    use HasFactory;

    
    protected $fillable = ['name', 'description'];

    /**
     * Get the user_category that owns the UserSubcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_category(): BelongsTo
    {
        return $this->belongsTo(UserCategory::class);
    }
}
