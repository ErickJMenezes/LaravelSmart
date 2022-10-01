<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wmnu extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['wmnu_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function wmgr(): BelongsTo
    {
        return $this->belongsTo(
            Wmgr::class,
            ['wmnu_wmgr_id'],
            ['wmgr_id'],
        );
    }
}
