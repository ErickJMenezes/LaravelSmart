<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcSaldoIniTri extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_saldo_ini_tri';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_s_cct_cod', 'exc_s_exc_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
