<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmInc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exm_i_qt', 'exm_i_exm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exm_i_exm_cod'],
            ['exm_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['exm_i_smk_cod', 'exm_i_smk_cod', 'exm_i_smk_tipo', 'exm_i_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
