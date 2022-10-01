<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IdxCampo extends OracleEloquent
{
    use Compoships;

    protected $table = 'idx_campo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['idx_c_idx_n1', 'idx_c_idx_tipo', 'idx_c_idx_n2', 'idx_c_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function idx(): BelongsTo
    {
        return $this->belongsTo(
            Idx::class,
            ['idx_c_idx_n2', 'idx_c_idx_n2', 'idx_c_idx_n2', 'idx_c_idx_n1', 'idx_c_idx_n1', 'idx_c_idx_n1', 'idx_c_idx_tipo', 'idx_c_idx_tipo', 'idx_c_idx_tipo'],
            ['idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo'],
        );
    }
}
