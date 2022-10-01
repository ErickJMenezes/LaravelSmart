<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exr_exm_cod', 'exr_rotina'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exr_exm_cod'],
            ['exm_cod'],
        );
    }
}
