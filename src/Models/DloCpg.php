<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloCpg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dlo_c_dlo_id', 'dlo_c_cpg_num', 'dlo_c_cpg_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['dlo_c_cpg_num', 'dlo_c_cpg_num', 'dlo_c_cpg_serie', 'dlo_c_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_c_dlo_id'],
            ['dlo_id'],
        );
    }
}
