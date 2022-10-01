<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rsp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rsp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rsp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rsp_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['rsp_ctf_cod', 'rsp_ctf_cod', 'rsp_ctf_tipo', 'rsp_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rsp_smk_cod_pacote', 'rsp_smk_cod_pacote', 'rsp_smk_tipo_pacote', 'rsp_smk_tipo_pacote', 'rsp_smk_cod', 'rsp_smk_cod', 'rsp_smk_tipo', 'rsp_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rsp_str_solic'],
            ['str_cod'],
        );
    }
}
