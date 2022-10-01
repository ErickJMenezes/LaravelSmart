<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rae extends OracleEloquent
{
    use Compoships;

    protected $table = 'rae';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rae_ftr_cod', 'rae_ftr_str_cod', 'rae_str_solic', 'rae_ftr_bnc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ftr(): BelongsTo
    {
        return $this->belongsTo(
            Ftr::class,
            ['rae_ftr_cod', 'rae_ftr_cod', 'rae_ftr_cod', 'rae_ftr_bnc_cod', 'rae_ftr_bnc_cod', 'rae_ftr_bnc_cod', 'rae_ftr_str_cod', 'rae_ftr_str_cod', 'rae_ftr_str_cod'],
            ['ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rae_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rae_str_solic'],
            ['str_cod'],
        );
    }
}
