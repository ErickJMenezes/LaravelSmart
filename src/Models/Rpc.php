<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rpc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['rpc_emb_mat_cod', 'rpc_kit_mat_cod'],
            ['mat_cod', 'mat_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rpc_psv_cod'],
            ['psv_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['rpc_sba_cod'],
            ['sba_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rpc_smk_tipo', 'rpc_smk_tipo', 'rpc_smk_cod', 'rpc_smk_cod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rpc_str_cod'],
            ['str_cod'],
        );
    }
}
