<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Agg extends OracleEloquent
{
    use Compoships;

    protected $table = 'agg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agg_loc_cod', 'agg_dthr_ini'];

    protected $connection = 'smart';

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
