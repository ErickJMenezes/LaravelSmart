<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCuboColuna extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_cc_coluna', 'dw_cc_tabela', 'dw_cc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dwCubo(): BelongsTo
    {
        return $this->belongsTo(
            DwCubo::class,
            ['dw_cc_cod'],
            ['dw_cubo_cod'],
        );
    }
}
