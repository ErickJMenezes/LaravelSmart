<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qcr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['qcr_rwg_id', 'qcr_qcm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qcm(): BelongsTo
    {
        return $this->belongsTo(
            Qcm::class,
            ['qcr_qcm_id'],
            ['qcm_id'],
        );
    }

    public function rwg(): BelongsTo
    {
        return $this->belongsTo(
            Rwg::class,
            ['qcr_rwg_id'],
            ['rwg_id'],
        );
    }
}
