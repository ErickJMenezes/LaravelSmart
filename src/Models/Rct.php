<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rct extends OracleEloquent
{
    use Compoships;

    protected $table = 'rct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rct_compet', 'rct_cct_cod_origem', 'rct_str_destino'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['rct_cct_cod_origem'],
            ['cct_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rct_str_destino'],
            ['str_cod'],
        );
    }
}
