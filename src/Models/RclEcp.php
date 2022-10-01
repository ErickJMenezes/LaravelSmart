<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclEcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl_ecp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_e_id', 'rcl_e_fec_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fec(): BelongsTo
    {
        return $this->belongsTo(
            Fec::class,
            ['rcl_e_fec_cod'],
            ['fec_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rcl_e_psv_cod'],
            ['psv_cod'],
        );
    }
}
