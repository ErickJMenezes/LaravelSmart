<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CepFxa extends OracleEloquent
{
    use Compoships;

    protected $table = 'cep_fxa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['chave_fxa'];

    protected $connection = 'smart';

    protected $guarded = [];
}
