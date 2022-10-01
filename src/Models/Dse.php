<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dse extends OracleEloquent
{
    use Compoships;

    protected $table = 'dse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dse_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['dse_cid_cod', 'dse_cid_cod', 'dse_cid_tip', 'dse_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dse_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dse_psv_exe', 'dse_psv_solic'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dse_smk_cod', 'dse_smk_cod', 'dse_smk_tipo', 'dse_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dse_str_exe', 'dse_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }
}
