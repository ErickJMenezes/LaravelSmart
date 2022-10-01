<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CoberturaEspecial extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cobertura_esp_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
