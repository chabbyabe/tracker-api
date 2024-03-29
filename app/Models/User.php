<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    /**
     * Get all of the user_categories for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_categories(): HasMany
    {
        return $this->hasMany(UserCategory::class);
    }

    /**
     * Get all of the user_categories for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * The wallets that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wallets(): BelongsToMany
    {
        return $this->belongsToMany(Wallet::class, 'user_wallets', 'user_id', 'wallet_id');
    }

    /**
     * The currencies that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Curreny::class, 'currency_user', 'user_id', 'currency_id');
    }
}
