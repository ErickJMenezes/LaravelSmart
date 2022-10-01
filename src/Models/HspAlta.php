<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HspAlta extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hsp_alt_pac', 'hsp_alt_hsp', 'hsp_alt_psv'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['hsp_alt_hsp', 'hsp_alt_hsp', 'hsp_alt_pac', 'hsp_alt_pac'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hsp_alt_psv'],
            ['psv_cod'],
        );
    }
}
