<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Icr extends OracleEloquent
{
    use Compoships;

    protected $table = 'icr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['icr_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['icr_cct_cod_deb', 'icr_cct_cod_cre'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['icr_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
