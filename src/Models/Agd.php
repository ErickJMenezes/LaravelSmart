<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Agd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['agd_dt', 'agd_tpctf', 'agd_ctf', 'agd_med', 'agd_loc'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['agd_ctf', 'agd_ctf', 'agd_tpctf', 'agd_tpctf'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['agd_loc'],
            ['loc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['agd_med', 'agd_aux'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['agd_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['agd_usr_gera'],
            ['usr_login'],
        );
    }
}
