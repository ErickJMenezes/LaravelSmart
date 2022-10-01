<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Req extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['req_tpctf', 'req_ctf_cod', 'req_mes', 'req_psv_cod', 'req_ano'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['req_ctf_cod', 'req_ctf_cod', 'req_tpctf', 'req_tpctf'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['req_psv_cod'],
            ['psv_cod'],
        );
    }
}
