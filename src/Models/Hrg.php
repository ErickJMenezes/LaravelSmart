<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hrg extends OracleEloquent
{
    use Compoships;

    protected $table = 'hrg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hrg_hrini', 'hrg_loc_cod', 'hrg_dia'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['hrg_loc_cod'],
            ['loc_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['hrg_ctf_cod', 'hrg_ctf_cod', 'hrg_ctf_tipo', 'hrg_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hrg_psv'],
            ['psv_cod'],
        );
    }
}
