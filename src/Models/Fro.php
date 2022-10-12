<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fro extends OracleEloquent
{
    use Compoships;

    protected $table = 'fro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fro_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['fro_cid_cod', 'fro_cid_cod', 'fro_cid_tip', 'fro_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fro_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fro_psv_cod_referidor', 'fro_psv_cod_assistente'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function sco(): BelongsTo
    {
        return $this->belongsTo(
            Sco::class,
            ['fro_sco_id'],
            ['sco_id'],
        );
    }
}
