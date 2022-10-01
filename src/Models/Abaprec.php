<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Abaprec extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pre_labo', 'pre_medi', 'pre_apre'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['pre_smk_cod', 'pre_smk_cod', 'pre_smk_tipo', 'pre_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function apr(): BelongsTo
    {
        return $this->belongsTo(
            Apr::class,
            ['pre_apre'],
            ['apr_codi'],
        );
    }

    public function lab(): BelongsTo
    {
        return $this->belongsTo(
            Lab::class,
            ['pre_labo'],
            ['lab_codi'],
        );
    }

    public function med(): BelongsTo
    {
        return $this->belongsTo(
            Med::class,
            ['pre_medi'],
            ['med_codi'],
        );
    }
}
