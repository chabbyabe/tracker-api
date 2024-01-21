<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'description'];


    /**
     * Get all of the user_subcategories for the UserCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_subcategories(): HasMany
    {
        return $this->hasMany(UserSubcategory::class);
    }


}
