<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gic extends OracleEloquent
{
    use Compoships;

    protected $table = 'gic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gic_gih_cnv_cod', 'gic_smk_cod', 'gic_gih_dthr_ini', 'gic_gih_pac_reg', 'gic_gih_hsp_num', 'gic_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gih(): BelongsTo
    {
        return $this->belongsTo(
            Gih::class,
            ['gic_gih_cnv_cod', 'gic_gih_cnv_cod', 'gic_gih_cnv_cod', 'gic_gih_cnv_cod', 'gic_gih_dthr_ini', 'gic_gih_dthr_ini', 'gic_gih_dthr_ini', 'gic_gih_dthr_ini', 'gic_gih_hsp_num', 'gic_gih_hsp_num', 'gic_gih_hsp_num', 'gic_gih_hsp_num', 'gic_gih_pac_reg', 'gic_gih_pac_reg', 'gic_gih_pac_reg', 'gic_gih_pac_reg'],
            ['gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg', 'gih_cnv_cod', 'gih_dthr_ini', 'gih_hsp_num', 'gih_pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['gic_smk_cod', 'gic_smk_cod', 'gic_smk_tipo', 'gic_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
