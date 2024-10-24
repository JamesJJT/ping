<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Credentials extends Model
{
    /** @use HasFactory<\Database\Factories\CredentialsFactory> */
    use HasFactory;

    protected $fillable = ['name', 'type', 'value', 'user_id'];

    protected $casts = [
        'type' => 'array',
        'value' => 'encrypted'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function checks(): HasMany
    {
        return $this->hasMany(Check::class, 'credential_id');
    }
}
