<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lot extends OracleEloquent
{
    use Compoships;

    protected $table = 'lot';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lot_num', 'lot_data_entrada', 'lot_mat_cod', 'lot_sba_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ine(): BelongsTo
    {
        return $this->belongsTo(
            Ine::class,
            ['lot_ine_seq', 'lot_ine_seq', 'lot_ine_seq', 'lot_ine_seq', 'lot_ine_seq', 'lot_ine_nfe_num', 'lot_ine_nfe_num', 'lot_ine_nfe_num', 'lot_ine_nfe_num', 'lot_ine_nfe_num', 'lot_ine_nfe_serie', 'lot_ine_nfe_serie', 'lot_ine_nfe_serie', 'lot_ine_nfe_serie', 'lot_ine_nfe_serie', 'lot_ine_nfe_tipo', 'lot_ine_nfe_tipo', 'lot_ine_nfe_tipo', 'lot_ine_nfe_tipo', 'lot_ine_nfe_tipo', 'lot_ine_fne_cod', 'lot_ine_fne_cod', 'lot_ine_fne_cod', 'lot_ine_fne_cod', 'lot_ine_fne_cod'],
            ['ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['lot_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mma(): BelongsTo
    {
        return $this->belongsTo(
            Mma::class,
            ['lot_mma_num', 'lot_mma_num', 'lot_mma_serie', 'lot_mma_serie'],
            ['mma_num', 'mma_serie', 'mma_num', 'mma_serie'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['lot_sba_cod'],
            ['sba_cod'],
        );
    }
}
