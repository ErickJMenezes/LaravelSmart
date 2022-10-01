<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CpgImp extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpg_imp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpg_imp_cpg_num', 'cpg_imp_cpg_serie', 'cpg_imp_nfl_serie', 'cpg_imp_nfl_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
