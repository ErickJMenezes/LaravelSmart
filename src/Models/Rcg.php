<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcg_mte_seq', 'rcg_hsp_num', 'rcg_mte_serie', 'rcg_pac_reg', 'rcg_cnv_cod', 'rcg_dthr_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gih(): BelongsTo
    {
        return $this->belongsTo(
            Gih::class,
            ['rcg_cnv_cod', 'rcg_cnv_cod', 'rcg_cnv_cod', 'rcg_cnv_cod', 'rcg_dthr_ini', 'rcg_dthr_ini', 'rcg_dthr_ini', 'rcg_dthr_ini', 'rcg_hsp_num', 'rcg_hsp_num', 'rcg_hsp_num', 'rcg_hsp_num', 'rcg_pac_reg', 'rcg_pac_reg', 'rcg_pac_reg', 'rcg_pac_reg'],
            ['gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['rcg_mte_seq', 'rcg_mte_seq', 'rcg_mte_serie', 'rcg_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
