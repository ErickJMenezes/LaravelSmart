<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hor extends OracleEloquent
{
    use Compoships;

    protected $table = 'hor';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hor_loc', 'hor_num', 'hor_tpctf', 'hor_med', 'hor_ctf', 'hor_dia'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hor_aux'],
            ['psv_cod'],
        );
    }

    public function hab(): BelongsTo
    {
        return $this->belongsTo(
            Hab::class,
            ['hor_ctf', 'hor_ctf', 'hor_ctf', 'hor_tpctf', 'hor_tpctf', 'hor_tpctf', 'hor_med', 'hor_med', 'hor_med'],
            ['hab_ctf', 'hab_tpctf', 'hab_med', 'hab_ctf', 'hab_tpctf', 'hab_med', 'hab_ctf', 'hab_tpctf', 'hab_med'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['hor_loc'],
            ['loc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['hor_str_cod'],
            ['str_cod'],
        );
    }
}
