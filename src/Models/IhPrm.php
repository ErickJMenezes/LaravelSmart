<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IhPrm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ih_prm_dthr_reg', 'ih_prm_pac_reg', 'ih_prm_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['ih_prm_hsp_num', 'ih_prm_hsp_num', 'ih_prm_pac_reg', 'ih_prm_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ih_prm_usr_login_reg', 'ih_prm_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }
}
