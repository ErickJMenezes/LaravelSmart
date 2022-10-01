<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fnl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fnl_lma_cod', 'fnl_fne_cod', 'fnl_gmm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fnl_fne_cod'],
            ['fne_cod'],
        );
    }

    public function lma(): BelongsTo
    {
        return $this->belongsTo(
            Lma::class,
            ['fnl_lma_cod', 'fnl_lma_cod', 'fnl_gmm_cod', 'fnl_gmm_cod'],
            ['lma_cod', 'lma_gmm_cod', 'lma_cod', 'lma_gmm_cod'],
        );
    }
}
