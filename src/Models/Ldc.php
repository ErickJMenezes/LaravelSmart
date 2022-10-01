<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ldc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ldc_cid_tip', 'ldc_ldn_id', 'ldc_cid_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['ldc_cid_tip', 'ldc_cid_tip', 'ldc_cid_cod', 'ldc_cid_cod'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function ldn(): BelongsTo
    {
        return $this->belongsTo(
            Ldn::class,
            ['ldc_ldn_id'],
            ['ldn_id'],
        );
    }
}
