<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Depara extends OracleEloquent
{
    use Compoships;

    protected $table = 'depara';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['depara_gcc_cod', 'depara_cod', 'depara_valor_sist'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['depara_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
