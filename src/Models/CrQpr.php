<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrQpr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cr_qpr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function crCor(): BelongsTo
    {
        return $this->belongsTo(
            CrCor::class,
            ['cr_qpr_cor_cod'],
            ['cr_cor_cod'],
        );
    }
}
