<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Agg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['agg_loc_cod', 'agg_dthr_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['agg_loc_cod'],
            ['loc_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['agg_ctf_cod', 'agg_ctf_cod', 'agg_ctf_tipo', 'agg_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['agg_psv'],
            ['psv_cod'],
        );
    }
}
