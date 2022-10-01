<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ppc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ppc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['ppc_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['ppc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ppc_str_cod'],
            ['str_cod'],
        );
    }
}
