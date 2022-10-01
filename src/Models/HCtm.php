<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCtm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_ctm_pac_reg', 'h_ctm_cct_id', 'h_ctm_bul_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hCct(): BelongsTo
    {
        return $this->belongsTo(
            HCct::class,
            ['h_ctm_cct_id', 'h_ctm_cct_id', 'h_ctm_pac_reg', 'h_ctm_pac_reg'],
            ['h_cct_id', 'h_cct_pac_reg', 'h_cct_id', 'h_cct_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_ctm_reg_usr_login'],
            ['usr_login'],
        );
    }
}
