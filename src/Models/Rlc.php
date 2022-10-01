<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rlc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rlc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pca(): BelongsTo
    {
        return $this->belongsTo(
            Pca::class,
            ['rlc_pca_cod'],
            ['pca_cod'],
        );
    }
}
