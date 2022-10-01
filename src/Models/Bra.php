<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bra extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bra_bul_med', 'bra_tra_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bra_bul_med'],
            ['bul_med'],
        );
    }

    public function tra(): BelongsTo
    {
        return $this->belongsTo(
            Tra::class,
            ['bra_tra_id'],
            ['tra_id'],
        );
    }
}
