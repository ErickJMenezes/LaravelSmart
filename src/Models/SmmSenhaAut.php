<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmmSenhaAut extends OracleEloquent
{
    use Compoships;

    protected $table = 'smm_senha_aut';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smm_senha_aut_codigo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
