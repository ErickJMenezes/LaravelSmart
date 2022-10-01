<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Enc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['enc_rnc_num', 'enc_rnc_serie', 'enc_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rnc(): BelongsTo
    {
        return $this->belongsTo(
            Rnc::class,
            ['enc_rnc_num', 'enc_rnc_num', 'enc_rnc_serie', 'enc_rnc_serie'],
            ['rnc_num', 'rnc_serie', 'rnc_num', 'rnc_serie'],
        );
    }

    public function tev(): BelongsTo
    {
        return $this->belongsTo(
            Tev::class,
            ['enc_tev_cod'],
            ['tev_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['enc_usr_login'],
            ['usr_login'],
        );
    }
}
