<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iss extends OracleEloquent
{
    use Compoships;

    protected $table = 'iss';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iss_smk_tipo', 'iss_smk_cod', 'iss_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['iss_smk_cod', 'iss_smk_cod', 'iss_smk_tipo', 'iss_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['iss_str_cod'],
            ['str_cod'],
        );
    }
}
