<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ftc extends OracleEloquent
{
    use Compoships;

    protected $table = 'ftc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ftc_str_cod', 'ftc_smk_cod', 'ftc_str_unid', 'ftc_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ftc_smk_cod', 'ftc_smk_cod', 'ftc_smk_tipo', 'ftc_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ftc_str_cod', 'ftc_str_unid'],
            ['str_cod', 'str_cod'],
        );
    }
}
