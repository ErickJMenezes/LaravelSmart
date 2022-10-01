<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacLta extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pac_l_lta_cod', 'pac_l_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['pac_l_lta_cod'],
            ['lta_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pac_l_pac_reg'],
            ['pac_reg'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['pac_l_pro_cod'],
            ['pro_cod'],
        );
    }
}
