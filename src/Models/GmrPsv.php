<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GmrPsv extends OracleEloquent
{
    use Compoships;

    protected $table = 'gmr_psv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gmr_p_gmr_cod', 'gmr_p_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['gmr_p_gmr_cod'],
            ['gmr_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['gmr_p_psv_cod'],
            ['psv_cod'],
        );
    }
}
