<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dic extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dic_tpsmk', 'dic_smk', 'dic_n2', 'dic_n3', 'dic_dsc', 'dic_n1'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['dic_dsc'],
            ['dsc_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dic_smk', 'dic_smk', 'dic_tpsmk', 'dic_tpsmk'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
