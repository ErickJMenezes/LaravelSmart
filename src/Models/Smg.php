<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Smg extends OracleEloquent
{
    use Compoships;

    protected $table = 'smg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smg_smt_cod', 'smg_gep_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gep(): BelongsTo
    {
        return $this->belongsTo(
            Gep::class,
            ['smg_gep_cod'],
            ['gep_cod'],
        );
    }

    public function smt(): BelongsTo
    {
        return $this->belongsTo(
            Smt::class,
            ['smg_smt_cod'],
            ['smt_cod'],
        );
    }
}
