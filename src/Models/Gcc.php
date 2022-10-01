<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gcc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['gcc_ccr_banco', 'gcc_ccr_colig_matriz', 'gcc_ccr_colig'],
            ['ccr_cod', 'ccr_cod', 'ccr_cod'],
        );
    }

    public function natJur(): BelongsTo
    {
        return $this->belongsTo(
            NatJur::class,
            ['gcc_nat_j_id'],
            ['nat_j_id'],
        );
    }

    public function pca(): BelongsTo
    {
        return $this->belongsTo(
            Pca::class,
            ['gcc_pca_cod'],
            ['pca_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['gcc_str_cod'],
            ['str_cod'],
        );
    }
}
