<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Per extends OracleEloquent
{
    use Compoships;

    protected $table = 'per';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['per_smk_cod', 'per_str_exec', 'per_cnv_cod', 'per_psv_solic', 'per_str_solic', 'per_smk_tipo', 'per_ind_urg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['per_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['per_smk_cod', 'per_smk_cod', 'per_smk_tipo', 'per_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['per_str_exec', 'per_str_solic'],
            ['str_cod', 'str_cod'],
        );
    }
}
