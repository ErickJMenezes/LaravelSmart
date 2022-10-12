<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Agx extends OracleEloquent
{
    use Compoships;

    protected $table = 'agx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agx_psv_cod', 'agx_ctf_cod', 'agx_ctf_tipo', 'agx_dt', 'agx_loc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['agx_ctf_cod', 'agx_ctf_cod', 'agx_ctf_tipo', 'agx_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['agx_loc_cod'],
            ['loc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['agx_psv_cod', 'agx_aux'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['agx_str_cod'],
            ['str_cod'],
        );
    }
}
