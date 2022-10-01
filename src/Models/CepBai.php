<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CepBai extends OracleEloquent
{
    use Compoships;

    protected $table = 'cep_bai';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['chave_bai', 'chvloc_bai'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
