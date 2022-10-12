<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HfcAmb extends OracleEloquent
{
    use Compoships;

    protected $table = 'hfc_amb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hfc_amb_hfc_pac_reg', 'hfc_amb_hfc_dthr_ini', 'hfc_amb_hfc_cnv_cod', 'hfc_amb_esoc_amb_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hfc(): BelongsTo
    {
        return $this->belongsTo(
            Hfc::class,
            ['hfc_amb_hfc_dthr_ini', 'hfc_amb_hfc_dthr_ini', 'hfc_amb_hfc_dthr_ini', 'hfc_amb_hfc_cnv_cod', 'hfc_amb_hfc_cnv_cod', 'hfc_amb_hfc_cnv_cod', 'hfc_amb_hfc_pac_reg', 'hfc_amb_hfc_pac_reg', 'hfc_amb_hfc_pac_reg'],
            ['hfc_dthr_ini', 'hfc_cnv_cod', 'hfc_pac_reg', 'hfc_dthr_ini', 'hfc_cnv_cod', 'hfc_pac_reg', 'hfc_dthr_ini', 'hfc_cnv_cod', 'hfc_pac_reg'],
        );
    }

    public function esocAmb(): BelongsTo
    {
        return $this->belongsTo(
            EsocAmb::class,
            ['hfc_amb_esoc_amb_cod'],
            ['esoc_amb_cod'],
        );
    }
}
