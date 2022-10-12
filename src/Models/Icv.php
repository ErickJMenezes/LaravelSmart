<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Icv extends OracleEloquent
{
    use Compoships;

    protected $table = 'icv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['icv_cvc_serie', 'icv_cvc_num', 'icv_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['icv_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function cvc(): BelongsTo
    {
        return $this->belongsTo(
            Cvc::class,
            ['icv_cvc_num', 'icv_cvc_num', 'icv_cvc_serie', 'icv_cvc_serie'],
            ['cvc_num', 'cvc_serie', 'cvc_num', 'cvc_serie'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['icv_lta_cod'],
            ['lta_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['icv_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['icv_str_atend'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['icv_usr_login_reg'],
            ['usr_login'],
        );
    }
}
