<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnaQtd extends OracleEloquent
{
    use Compoships;

    protected $table = 'cna_qtd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cna_q_cna_id', 'cna_q_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cna(): BelongsTo
    {
        return $this->belongsTo(
            Cna::class,
            ['cna_q_cna_id'],
            ['cna_id'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['cna_q_ctf_cod', 'cna_q_ctf_cod', 'cna_q_ctf_tipo', 'cna_q_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cna_q_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cna_q_smk_cod', 'cna_q_smk_cod', 'cna_q_smk_tipo', 'cna_q_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cna_q_str_cod'],
            ['str_cod'],
        );
    }
}
