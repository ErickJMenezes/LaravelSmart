<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ptg extends OracleEloquent
{
    use Compoships;

    protected $table = 'ptg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ptg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ptg_cct_cod_redutora'],
            ['cct_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ptg_cfo_cod_invest'],
            ['cfo_cod'],
        );
    }
}
