<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mcm extends OracleEloquent
{
    use Compoships;

    protected $table = 'mcm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mcm_tcm_cod', 'mcm_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cmt(): BelongsTo
    {
        return $this->belongsTo(
            Cmt::class,
            ['mcm_cmt_cod', 'mcm_cmt_cod', 'mcm_tcm_cod', 'mcm_tcm_cod'],
            ['cmt_cod', 'cmt_tcm_cod', 'cmt_cod', 'cmt_tcm_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mcm_mat_cod'],
            ['mat_cod'],
        );
    }
}
