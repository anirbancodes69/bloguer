<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefreshToken extends Model
{
    protected $fillable = [
        'user_id',
        'token_hash',
        'ip_address',
        'user_agent',
        'is_revoked',
        'expires_at'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
