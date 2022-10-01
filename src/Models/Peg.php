<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Peg extends OracleEloquent
{
    use Compoships;

    protected $table = 'peg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['peg_sma_serie', 'peg_dthr', 'peg_sma_num', 'peg_ism_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ism(): BelongsTo
    {
        return $this->belongsTo(
            Ism::class,
            ['peg_ism_seq', 'peg_ism_seq', 'peg_ism_seq', 'peg_sma_num', 'peg_sma_num', 'peg_sma_num', 'peg_sma_serie', 'peg_sma_serie', 'peg_sma_serie'],
            ['ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie'],
        );
    }

    public function ine(): BelongsTo
    {
        return $this->belongsTo(
            Ine::class,
            ['peg_ine_seq', 'peg_ine_seq', 'peg_ine_seq', 'peg_ine_seq', 'peg_ine_seq', 'peg_ine_nfe_num', 'peg_ine_nfe_num', 'peg_ine_nfe_num', 'peg_ine_nfe_num', 'peg_ine_nfe_num', 'peg_ine_nfe_serie', 'peg_ine_nfe_serie', 'peg_ine_nfe_serie', 'peg_ine_nfe_serie', 'peg_ine_nfe_serie', 'peg_ine_nfe_tipo', 'peg_ine_nfe_tipo', 'peg_ine_nfe_tipo', 'peg_ine_nfe_tipo', 'peg_ine_nfe_tipo', 'peg_ine_fne_cod', 'peg_ine_fne_cod', 'peg_ine_fne_cod', 'peg_ine_fne_cod', 'peg_ine_fne_cod'],
            ['ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num'],
        );
    }
}
