<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ipg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['ipg_bcp_num', 'ipg_bcp_num', 'ipg_bcp_serie', 'ipg_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ipg_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['ipg_cpg_num', 'ipg_cpg_num', 'ipg_cpg_serie', 'ipg_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['ipg_gcc_cod_colig'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ipg_usr_login'],
            ['usr_login'],
        );
    }
}
