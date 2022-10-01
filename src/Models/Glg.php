<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Glg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['glg_grp_cod', 'glg_lma_cod', 'glg_gmm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['glg_grp_cod'],
            ['grp_cod'],
        );
    }

    public function lma(): BelongsTo
    {
        return $this->belongsTo(
            Lma::class,
            ['glg_lma_cod', 'glg_lma_cod', 'glg_gmm_cod', 'glg_gmm_cod'],
            ['lma_cod', 'lma_gmm_cod', 'lma_cod', 'lma_gmm_cod'],
        );
    }
}
