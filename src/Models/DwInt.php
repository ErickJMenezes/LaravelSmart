<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwInt extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_int';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_int_cnv_cod', 'dw_int_mmyy'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_int_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
