<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IepPacote extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['iep_p_smk_tipo', 'iep_p_smk_cod', 'iep_p_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function iep(): BelongsTo
    {
        return $this->belongsTo(
            Iep::class,
            ['iep_p_seq'],
            ['iep_seq'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['iep_p_smk_cod', 'iep_p_smk_cod', 'iep_p_smk_tipo', 'iep_p_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
