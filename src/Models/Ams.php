<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ams extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ams_amo_cod', 'ams_smk_tipo', 'ams_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['ams_amo_cod'],
            ['amo_cod'],
        );
    }

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['ams_eti_cod'],
            ['eti_cod'],
        );
    }

    public function exmHpardini(): BelongsTo
    {
        return $this->belongsTo(
            ExmHpardini::class,
            ['ams_hpardini_num_exm'],
            ['num_exm'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ams_smk_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
