<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lma extends OracleEloquent
{
    use Compoships;

    protected $table = 'lma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lma_gmm_cod', 'lma_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gmm(): BelongsTo
    {
        return $this->belongsTo(
            Gmm::class,
            ['lma_gmm_cod'],
            ['gmm_cod'],
        );
    }
}
