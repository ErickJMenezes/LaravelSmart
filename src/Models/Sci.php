<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sci extends OracleEloquent
{
    use Compoships;

    protected $table = 'sci';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sci_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['sci_cid_cod', 'sci_cid_cod', 'sci_cid_tip', 'sci_cid_tip', 'sci_cid_cod_2', 'sci_cid_cod_2', 'sci_cid_tip_2', 'sci_cid_tip_2'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['sci_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['sci_psv_solic'],
            ['psv_cod'],
        );
    }
}
