<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'smk_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smk_s_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smk_s_smk_cod', 'smk_s_smk_cod', 'smk_s_smk_tipo', 'smk_s_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['smk_s_str_cod_exe'],
            ['str_cod'],
        );
    }
}
