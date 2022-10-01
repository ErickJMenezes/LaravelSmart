<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NapParm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['nap_p_nap_id', 'nap_p_parm'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nap(): BelongsTo
    {
        return $this->belongsTo(
            Nap::class,
            ['nap_p_nap_id'],
            ['nap_id'],
        );
    }
}
