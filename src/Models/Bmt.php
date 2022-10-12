<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'bmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bmt_mat_cod', 'bmt_bul_med'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bmt_bul_med'],
            ['bul_med'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['bmt_mat_cod'],
            ['mat_cod'],
        );
    }
}
