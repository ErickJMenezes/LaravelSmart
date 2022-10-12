<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rfe extends OracleEloquent
{
    use Compoships;

    protected $table = 'rfe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rfe_psv_cod', 'rfe_psv_fila_anterior', 'rfe_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rfe_psv_cod', 'rfe_psv_fila_anterior'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rfe_str_cod'],
            ['str_cod'],
        );
    }
}
