<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MmtMat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mmt_m_itm_cod', 'mmt_m_tme_cod', 'mmt_m_mat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mmt_m_mat_cod'],
            ['mat_cod'],
        );
    }

    public function itm(): BelongsTo
    {
        return $this->belongsTo(
            Itm::class,
            ['mmt_m_itm_cod', 'mmt_m_itm_cod', 'mmt_m_tme_cod', 'mmt_m_tme_cod'],
            ['itm_cod', 'itm_tme_cod', 'itm_cod', 'itm_tme_cod'],
        );
    }
}
