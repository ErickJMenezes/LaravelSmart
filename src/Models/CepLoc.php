<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CepLoc extends OracleEloquent
{
    use Compoships;

    protected $table = 'cep_loc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['chave_local'];

    protected $connection = 'smart';

    protected $guarded = [];
}
