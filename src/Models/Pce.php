<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pce extends OracleEloquent
{
    use Compoships;

    protected $table = 'pce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pce_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ende(): BelongsTo
    {
        return $this->belongsTo(
            Ende::class,
            ['pce_end_laudo'],
            ['ende_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pce_pac_reg'],
            ['pac_reg'],
        );
    }

    public function pces(): HasMany
    {
        return $this->hasMany(
            Pce::class,
            ['pce_id'],
            ['pce_pce_id'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['pce_str_cod'],
            ['str_cod'],
        );
    }

    public function vll(): BelongsTo
    {
        return $this->belongsTo(
            Vll::class,
            ['pce_vll_cod'],
            ['vll_cod'],
        );
    }
}
