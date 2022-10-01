<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sld extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sld_serie', 'sld_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['sld_smm_mreq'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sld_reg_usr_login'],
            ['usr_login'],
        );
    }
}
