<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Check extends Model
{
    /** @use HasFactory<\Database\Factories\CheckFactory> */
    use HasFactory;

    protected $fillable = ['name', 'path', 'method', 'body', 'headers', 'parameters', 'credential_id', 'service_id'];

    protected function casts(): array
    {
        return [
            'headers' => AsCollection::class,
            'parameters' => AsCollection::class,
            'body' => 'json'
        ];
    }

    public function credentials(): BelongsTo
    {
        return $this->belongsTo(
            related:Credentials::class,
            foreignKey: 'credential_id'
        );
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(
            related: Service::class,
            foreignKey: 'service_id'
        );
    }
}
