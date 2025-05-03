<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'phone',
        'is_admin',
        'verify_token', 
        'verify_email',
        'activate',
        'title',
        'first_name',
        'last_name',
        'gender',
        'address',
        'photo',
        'user_type',
        'wallet_bp_balance',
        'wallet_token',
        'referredby_user_id',
        'referral_link',
        'referral_bp_balance',
        'email_verified_at'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function personal_access_tokens()
    {
        return $this->hasMany(AccessToken::class);
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }

    public function password_reset_tokens(){
        return $this->hasMany(PasswordResetToken::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}