<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Smt extends OracleEloquent
{
    use Compoships;

    protected $table = 'smt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gmt(): BelongsTo
    {
        return $this->belongsTo(
            Gmt::class,
            ['smt_gmt_cod'],
            ['gmt_cod'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['smt_qst_cod'],
            ['qst_cod'],
        );
    }

    public function smts(): HasMany
    {
        return $this->hasMany(
            Smt::class,
            ['smt_cod'],
            ['smt_smt_cod_proximo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['smt_str_destino'],
            ['str_cod'],
        );
    }
}
