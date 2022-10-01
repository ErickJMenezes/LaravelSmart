<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pag extends OracleEloquent
{
    use Compoships;

    protected $table = 'pag';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pag_lote', 'pag_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['pag_psv_cc', 'pag_ccr_banco', 'pag_cpg_ccr_banco'],
            ['ccr_cod', 'ccr_cod', 'ccr_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['pag_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['pag_cpg_num', 'pag_cpg_num', 'pag_cpg_serie', 'pag_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }
}
