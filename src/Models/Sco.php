<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sco extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sco_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['sco_cid_tip', 'sco_cid_tip', 'sco_cid_cod', 'sco_cid_cod'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }
}
