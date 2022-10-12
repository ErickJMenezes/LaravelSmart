<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fma extends OracleEloquent
{
    use Compoships;

    protected $table = 'fma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fma_pac_reg_destino', 'fma_pac_reg_origem'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fma_pac_reg_origem', 'fma_pac_reg_destino'],
            ['pac_reg', 'pac_reg'],
        );
    }
}
