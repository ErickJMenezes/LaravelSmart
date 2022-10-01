<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ise extends OracleEloquent
{
    use Compoships;

    protected $table = 'ise';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ise_rse_serie', 'ise_rse_num', 'ise_sma_num', 'ise_sma_serie', 'ise_ism_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ism(): BelongsTo
    {
        return $this->belongsTo(
            Ism::class,
            ['ise_ism_seq', 'ise_ism_seq', 'ise_ism_seq', 'ise_sma_num', 'ise_sma_num', 'ise_sma_num', 'ise_sma_serie', 'ise_sma_serie', 'ise_sma_serie'],
            ['ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ise_usr_login_receb'],
            ['usr_login'],
        );
    }

    public function rse(): BelongsTo
    {
        return $this->belongsTo(
            Rse::class,
            ['ise_rse_num', 'ise_rse_num', 'ise_rse_serie', 'ise_rse_serie'],
            ['rse_num', 'rse_serie', 'rse_num', 'rse_serie'],
        );
    }
}
