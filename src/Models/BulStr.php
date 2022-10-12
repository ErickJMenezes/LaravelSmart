<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BulStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'bul_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bul_s_str_cod', 'bul_s_bul_med'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bul_s_bul_med'],
            ['bul_med'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['bul_s_str_cod'],
            ['str_cod'],
        );
    }
}
