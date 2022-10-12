<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCuboVariavel extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_cubo_variavel';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_cv_cod', 'dw_cv_coluna'];

    protected $connection = 'smart';

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
