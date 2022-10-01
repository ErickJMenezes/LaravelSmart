<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EtiSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['eti_s_smk_tipo', 'eti_s_eti_cod', 'eti_s_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['eti_s_eti_cod'],
            ['eti_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['eti_s_smk_cod', 'eti_s_smk_cod', 'eti_s_smk_tipo', 'eti_s_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
