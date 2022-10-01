<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sin extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sin_smk_tipo', 'sin_num', 'sin_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['sin_smk_cod', 'sin_smk_cod', 'sin_smk_tipo', 'sin_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
