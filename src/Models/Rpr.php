<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpr extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['rpr_tab_cod'],
            ['tab_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rpr_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['rpr_ctf_cod', 'rpr_ctf_cod', 'rpr_ctf_tipo', 'rpr_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['rpr_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rpr_principal_smk_cod', 'rpr_principal_smk_cod', 'rpr_principal_smk_tipo', 'rpr_principal_smk_tipo', 'rpr_secundario_smk_cod', 'rpr_secundario_smk_cod', 'rpr_secundario_smk_tipo', 'rpr_secundario_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
