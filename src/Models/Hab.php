<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hab extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hab_ctf', 'hab_med', 'hab_tpctf'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['hab_ctf', 'hab_ctf', 'hab_tpctf', 'hab_tpctf'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hab_med'],
            ['psv_cod'],
        );
    }
}
