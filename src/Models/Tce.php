<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tce extends OracleEloquent
{
    use Compoships;

    protected $table = 'tce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tce_smk_tipo', 'tce_psv_cod', 'tce_str_unid', 'tce_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['tce_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['tce_smk_cod', 'tce_smk_cod', 'tce_smk_tipo', 'tce_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['tce_str_unid'],
            ['str_cod'],
        );
    }
}
