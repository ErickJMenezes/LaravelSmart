<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fts extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fts_ctf_tipo', 'fts_ftr_cod', 'fts_bnc_cod', 'fts_str_cod', 'fts_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ftr(): BelongsTo
    {
        return $this->belongsTo(
            Ftr::class,
            ['fts_ftr_cod', 'fts_ftr_cod', 'fts_ftr_cod', 'fts_bnc_cod', 'fts_bnc_cod', 'fts_bnc_cod', 'fts_str_cod', 'fts_str_cod', 'fts_str_cod'],
            ['ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_cod', 'ftr_bnc_cod', 'ftr_str_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['fts_smk_cod', 'fts_smk_cod', 'fts_ctf_tipo', 'fts_ctf_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
