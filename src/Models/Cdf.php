<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cdf extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdf_cid_cod', 'cdf_cid_tip', 'cdf_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['cdf_cid_cod', 'cdf_cid_cod', 'cdf_cid_tip', 'cdf_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cdf_psv_cod'],
            ['psv_cod'],
        );
    }
}
