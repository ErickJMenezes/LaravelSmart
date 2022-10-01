<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvBai extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_bai';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_bai_psv_cod', 'psv_bai_bai_cod', 'psv_bai_bai_cde_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bai(): BelongsTo
    {
        return $this->belongsTo(
            Bai::class,
            ['psv_bai_bai_cde_cod', 'psv_bai_bai_cde_cod', 'psv_bai_bai_cod', 'psv_bai_bai_cod'],
            ['bai_cde_cod', 'bai_cod', 'bai_cde_cod', 'bai_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_bai_psv_cod'],
            ['psv_cod'],
        );
    }
}
