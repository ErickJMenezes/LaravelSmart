<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dev extends OracleEloquent
{
    use Compoships;

    protected $table = 'dev';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dev_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['dev_cpg_num', 'dev_cpg_num', 'dev_cpg_serie', 'dev_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function ctr(): BelongsTo
    {
        return $this->belongsTo(
            Ctr::class,
            ['dev_ctr_id'],
            ['ctr_id'],
        );
    }

    public function pce(): BelongsTo
    {
        return $this->belongsTo(
            Pce::class,
            ['dev_pce_id'],
            ['pce_id'],
        );
    }

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['dev_usi_login'],
            ['usi_login'],
        );
    }

    public function vll(): BelongsTo
    {
        return $this->belongsTo(
            Vll::class,
            ['dev_vll_cod'],
            ['vll_cod'],
        );
    }
}
