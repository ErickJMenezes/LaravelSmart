<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ftm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ftm_smk_cod', 'ftm_mat_cod', 'ftm_smk_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ftm_mat_cod'],
            ['mat_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ftm_smk_cod', 'ftm_smk_cod', 'ftm_smk_tipo', 'ftm_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
