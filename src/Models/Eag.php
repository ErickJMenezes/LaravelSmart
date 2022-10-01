<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eag extends OracleEloquent
{
    use Compoships;

    protected $table = 'eag';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eag_psv_cod', 'eag_ctf_cod', 'eag_ctf_tipo', 'eag_mes_ano'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['eag_ctf_cod', 'eag_ctf_cod', 'eag_ctf_tipo', 'eag_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['eag_psv_cod'],
            ['psv_cod'],
        );
    }
}
