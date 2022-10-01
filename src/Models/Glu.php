<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Glu extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['glu_gmm_cod', 'glu_usr_login', 'glu_lma_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lma(): BelongsTo
    {
        return $this->belongsTo(
            Lma::class,
            ['glu_lma_cod', 'glu_lma_cod', 'glu_gmm_cod', 'glu_gmm_cod'],
            ['lma_cod', 'lma_gmm_cod', 'lma_cod', 'lma_gmm_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['glu_usr_login'],
            ['usr_login'],
        );
    }
}
