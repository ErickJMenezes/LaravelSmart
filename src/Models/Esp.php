<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Esp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['esp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esps(): HasMany
    {
        return $this->hasMany(
            Esp::class,
            ['esp_cod'],
            ['esp_esp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['esp_str_cod'],
            ['str_cod'],
        );
    }
}
