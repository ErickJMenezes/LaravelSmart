<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HCpm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_cpm_pac_reg', 'h_cpm_bul_med', 'h_cpm_cpe_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hCpe(): BelongsTo
    {
        return $this->belongsTo(
            HCpe::class,
            ['h_cpm_cpe_id', 'h_cpm_cpe_id', 'h_cpm_pac_reg', 'h_cpm_pac_reg'],
            ['h_cpe_id', 'h_cpe_pac_reg', 'h_cpe_id', 'h_cpe_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_cpm_reg_usr_login'],
            ['usr_login'],
        );
    }
}
