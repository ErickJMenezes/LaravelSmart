<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exm extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['exm_smk_cod', 'exm_smk_cod', 'exm_smk_tipo', 'exm_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['exm_amo_cod'],
            ['amo_cod'],
        );
    }

    public function exg(): BelongsTo
    {
        return $this->belongsTo(
            Exg::class,
            ['exm_exg_cod'],
            ['exg_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['exm_psv_cod_fila'],
            ['psv_cod'],
        );
    }
}
