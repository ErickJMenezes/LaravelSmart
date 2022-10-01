<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkLac extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smk_l_cnv_cod', 'smk_l_smk_tipo', 'smk_l_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['smk_l_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smk_l_smk_cod', 'smk_l_smk_cod', 'smk_l_smk_tipo', 'smk_l_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
