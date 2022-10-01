<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ilp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ilp_seq', 'ilp_lpd_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ilp_cct_cod'],
            ['cct_cod'],
        );
    }

    public function lpd(): BelongsTo
    {
        return $this->belongsTo(
            Lpd::class,
            ['ilp_lpd_id'],
            ['lpd_id'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ilp_str_cod'],
            ['str_cod'],
        );
    }
}
