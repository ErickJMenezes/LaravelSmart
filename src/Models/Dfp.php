<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dfp extends OracleEloquent
{
    use Compoships;

    protected $table = 'dfp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dfp_pac_reg', 'dfp_dfs_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dfs(): BelongsTo
    {
        return $this->belongsTo(
            Dfs::class,
            ['dfp_dfs_cod'],
            ['dfs_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['dfp_pac_reg'],
            ['pac_reg'],
        );
    }
}
