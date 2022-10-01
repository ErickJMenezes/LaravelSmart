<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fls extends OracleEloquent
{
    use Compoships;

    protected $table = 'fls';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fls_dce_id', 'fls_psv_cod', 'fls_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dce(): BelongsTo
    {
        return $this->belongsTo(
            Dce::class,
            ['fls_dce_id'],
            ['dce_id'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fls_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fls_str_cod'],
            ['str_cod'],
        );
    }
}
