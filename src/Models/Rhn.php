<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rhn extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhn_rep_serie', 'rhn_rep_num', 'rhn_tipo', 'rhn_ccr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['rhn_ccr_cod'],
            ['ccr_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['rhn_cpg_num', 'rhn_cpg_num', 'rhn_cpg_serie', 'rhn_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function rep(): BelongsTo
    {
        return $this->belongsTo(
            Rep::class,
            ['rhn_rep_num', 'rhn_rep_num', 'rhn_rep_serie', 'rhn_rep_serie'],
            ['rep_num', 'rep_serie', 'rep_num', 'rep_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rhn_usr_login'],
            ['usr_login'],
        );
    }
}
