<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hfc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hfc_pac_reg', 'hfc_dthr_ini', 'hfc_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['hfc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['hfc_lta_cod'],
            ['lta_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['hfc_pac_reg'],
            ['pac_reg'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['hfc_pro_cod_func'],
            ['pro_cod'],
        );
    }
}
