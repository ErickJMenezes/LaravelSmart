<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcSaldoIni extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_saldo_ini';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_s_exc_id', 'exc_s_cct_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['exc_s_cct_cod'],
            ['cct_cod'],
        );
    }

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_s_exc_id'],
            ['exc_id'],
        );
    }
}
