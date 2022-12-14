<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtCubo extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_cubo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_cubo_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dwCubo(): BelongsTo
    {
        return $this->belongsTo(
            DwCubo::class,
            ['dw_ext_cubo_cod'],
            ['dw_cubo_cod'],
        );
    }
}
