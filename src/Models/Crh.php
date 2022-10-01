<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Crh extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['crh_psv_cod', 'crh_rep_num', 'crh_rep_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['crh_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['crh_psv_cod'],
            ['psv_cod'],
        );
    }

    public function rep(): BelongsTo
    {
        return $this->belongsTo(
            Rep::class,
            ['crh_rep_num', 'crh_rep_num', 'crh_rep_serie', 'crh_rep_serie'],
            ['rep_num', 'rep_serie', 'rep_num', 'rep_serie'],
        );
    }
}
