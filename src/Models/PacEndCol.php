<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacEndCol extends OracleEloquent
{
    use Compoships;

    protected $table = 'pac_end_col';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pac_end_col_agm_loc', 'pac_end_col_agm_hini', 'pac_end_col_agm_ext', 'pac_end_col_agm_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function agm(): BelongsTo
    {
        return $this->belongsTo(
            Agm::class,
            ['pac_end_col_agm_ext', 'pac_end_col_agm_ext', 'pac_end_col_agm_ext', 'pac_end_col_agm_ext', 'pac_end_col_agm_hini', 'pac_end_col_agm_hini', 'pac_end_col_agm_hini', 'pac_end_col_agm_hini', 'pac_end_col_agm_loc', 'pac_end_col_agm_loc', 'pac_end_col_agm_loc', 'pac_end_col_agm_loc', 'pac_end_col_agm_med', 'pac_end_col_agm_med', 'pac_end_col_agm_med', 'pac_end_col_agm_med'],
            ['agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pac_end_col_pac_reg'],
            ['pac_reg'],
        );
    }

    public function cepTit(): BelongsTo
    {
        return $this->belongsTo(
            CepTit::class,
            ['pac_end_col_cep_tit'],
            ['chave_tipo'],
        );
    }
}
