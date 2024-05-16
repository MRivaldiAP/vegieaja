<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'kota',
        'hp',
        'kelurahan',
        'rw',
        'agen_id'
    ];

    /**
     * Get all of the orders for the Konsumen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,'konsumen_id', 'id');
    }

    /**
     * Get the agen that owns the Konsumen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agen(): BelongsTo
    {
        return $this->belongsTo(User::class, 'agen_id', 'id');
    }
}
