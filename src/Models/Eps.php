<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eps extends OracleEloquent
{
    use Compoships;

    protected $table = 'eps';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eps_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['eps_amo_cod'],
            ['amo_cod'],
        );
    }

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['eps_eti_cod'],
            ['eti_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['eps_smk_cod', 'eps_smk_cod', 'eps_smk_tipo', 'eps_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['eps_str_solic'],
            ['str_cod'],
        );
    }
}
