<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nfx extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfx_nfl_num', 'nfx_nfl_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['nfx_nfl_num', 'nfx_nfl_num', 'nfx_nfl_serie', 'nfx_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
