<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bnc_cod', 'bnc_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['bnc_psv_cod_resp'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['bnc_str_cod'],
            ['str_cod'],
        );
    }
}
