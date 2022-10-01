<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wmgr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['wmgr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function wmgrs(): HasMany
    {
        return $this->hasMany(
            Wmgr::class,
            ['wmgr_id'],
            ['wmgr_wmgr_id'],
        );
    }
}