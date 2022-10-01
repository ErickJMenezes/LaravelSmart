<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cum extends OracleEloquent
{
    use Compoships;

    protected $table = 'cum';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cum_bun_cod_para', 'cum_bun_cod_de'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['cum_bun_cod_de', 'cum_bun_cod_para'],
            ['bun_cod', 'bun_cod'],
        );
    }
}
