<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fte extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fte_num', 'fte_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['fte_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ftr(): BelongsTo
    {
        return $this->belongsTo(
            Ftr::class,
            ['fte_ftr_cod', 'fte_ftr_cod', 'fte_ftr_cod', 'fte_bnc_cod', 'fte_bnc_cod', 'fte_bnc_cod', 'fte_str_cod', 'fte_str_cod', 'fte_str_cod'],
            ['ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fte_str_req'],
            ['str_cod'],
        );
    }
}
