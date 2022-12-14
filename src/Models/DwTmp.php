<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwTmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_tmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_tmp_motivo', 'dw_tmp_cnv_cod', 'dw_tmp_mmyy', 'dw_tmp_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_tmp_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_tmp_str_cod'],
            ['str_cod'],
        );
    }
}
