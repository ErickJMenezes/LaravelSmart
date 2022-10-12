<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ltu extends OracleEloquent
{
    use Compoships;

    protected $table = 'ltu';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ltu_mma_serie', 'ltu_mma_num', 'ltu_lot_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mma(): BelongsTo
    {
        return $this->belongsTo(
            Mma::class,
            ['ltu_mma_num', 'ltu_mma_num', 'ltu_mma_serie', 'ltu_mma_serie'],
            ['mma_num', 'mma_serie', 'mma_num', 'mma_serie'],
        );
    }
}
