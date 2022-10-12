<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BulBun extends OracleEloquent
{
    use Compoships;

    protected $table = 'bul_bun';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bul_u_bul_med', 'bul_u_bun_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bul_u_bul_med'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['bul_u_bun_cod'],
            ['bun_cod'],
        );
    }
}
