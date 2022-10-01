<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ols extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ols_str_cod_2', 'ols_str_cod_1'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ols_str_cod_1', 'ols_str_cod_2'],
            ['str_cod', 'str_cod'],
        );
    }
}
