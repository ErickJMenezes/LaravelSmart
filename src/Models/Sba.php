<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sba extends OracleEloquent
{
    use Compoships;

    protected $table = 'sba';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['sba_ccr_estoque'],
            ['ccr_cod'],
        );
    }

    public function sbas(): HasMany
    {
        return $this->hasMany(
            Sba::class,
            ['sba_cod'],
            ['sba_sba_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sba_str_cod'],
            ['str_cod'],
        );
    }
}
