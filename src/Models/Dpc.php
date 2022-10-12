<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dpc extends OracleEloquent
{
    use Compoships;

    protected $table = 'dpc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dpc_cnv_cod', 'dpc_smk_tipo_diaria', 'dpc_gsv_cod', 'dpc_smk_cod_diaria'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dpc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['dpc_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dpc_smk_cod_diaria', 'dpc_smk_cod_diaria', 'dpc_smk_tipo_diaria', 'dpc_smk_tipo_diaria'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
