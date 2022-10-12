<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cra extends OracleEloquent
{
    use Compoships;

    protected $table = 'cra';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cra_validade', 'cra_ccr_origem', 'cra_ccr_destino'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['cra_ccr_origem', 'cra_ccr_destino'],
            ['ccr_cod', 'ccr_cod'],
        );
    }
}
