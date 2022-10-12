<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CpgInssDet extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpg_inss_det';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpg_inss_det_cpg_num', 'cpg_inss_det_cpg_serie'];

    protected $connection = 'smart';

    protected $guarded = [];
}
