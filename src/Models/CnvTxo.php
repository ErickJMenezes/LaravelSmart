<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvTxo extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_txo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_t_cnv_cod', 'cnv_t_ctf_tipo', 'cnv_t_ctf_cod', 'cnv_t_ind_fornec'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_t_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['cnv_t_ctf_cod', 'cnv_t_ctf_cod', 'cnv_t_ctf_tipo', 'cnv_t_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cnv_t_smk_cod', 'cnv_t_smk_cod', 'cnv_t_smk_tipo', 'cnv_t_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
