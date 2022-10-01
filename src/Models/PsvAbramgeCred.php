<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvAbramgeCred extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_abramge_cred';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_abramge_cred_cnv_cod', 'psv_abramge_cred_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['psv_abramge_cred_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_abramge_cred_psv_cod'],
            ['psv_cod'],
        );
    }
}
