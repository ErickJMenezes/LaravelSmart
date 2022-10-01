<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bas extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bas_smk_cod', 'bas_smk_tipo', 'bas_dsc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['bas_dsc_cod'],
            ['dsc_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['bas_smk_cod', 'bas_smk_cod', 'bas_smk_tipo', 'bas_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
