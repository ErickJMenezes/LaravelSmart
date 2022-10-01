<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCuboVariavel extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_cv_cod', 'dw_cv_coluna'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dwCubo(): BelongsTo
    {
        return $this->belongsTo(
            DwCubo::class,
            ['dw_cv_cod'],
            ['dw_cubo_cod'],
        );
    }
}
