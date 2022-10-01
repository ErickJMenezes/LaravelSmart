<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lbl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lbl_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grw(): BelongsTo
    {
        return $this->belongsTo(
            Grw::class,
            ['lbl_grw_guid'],
            ['grw_guid'],
        );
    }
}
