<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvDesvioFila extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_desvio_fila';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_d_psv_cod', 'psv_d_cnv_cod', 'psv_d_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['psv_d_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_d_psv_cod', 'psv_d_psv_fila'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['psv_d_str_solic'],
            ['str_cod'],
        );
    }
}
