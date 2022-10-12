<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tmm extends OracleEloquent
{
    use Compoships;

    protected $table = 'tmm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tmm_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['tmm_cct_cod_contrap'],
            ['cct_cod'],
        );
    }
}
