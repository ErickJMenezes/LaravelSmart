<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Inp extends OracleEloquent
{
    use Compoships;

    protected $table = 'inp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['inp_seq', 'inp_enp_serie', 'inp_enp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function enp(): BelongsTo
    {
        return $this->belongsTo(
            Enp::class,
            ['inp_enp_num', 'inp_enp_num', 'inp_enp_serie', 'inp_enp_serie'],
            ['enp_num', 'enp_serie', 'enp_num', 'enp_serie'],
        );
    }

    public function ism(): BelongsTo
    {
        return $this->belongsTo(
            Ism::class,
            ['inp_ism_seq', 'inp_ism_seq', 'inp_ism_seq', 'inp_sma_num', 'inp_sma_num', 'inp_sma_num', 'inp_sma_serie', 'inp_sma_serie', 'inp_sma_serie'],
            ['ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['inp_mat_cod'],
            ['mat_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['inp_usr_login', 'inp_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }
}
