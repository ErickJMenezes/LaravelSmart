<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ikm extends OracleEloquent
{
    use Compoships;

    protected $table = 'ikm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ikm_kmt_cod', 'ikm_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function kmt(): BelongsTo
    {
        return $this->belongsTo(
            Kmt::class,
            ['ikm_kmt_cod'],
            ['kmt_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ikm_mat_cod'],
            ['mat_cod'],
        );
    }
}
