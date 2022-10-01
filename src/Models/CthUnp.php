<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CthUnp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cth_u_cth_pac_reg', 'cth_u_cth_hsp_num', 'cth_u_cth_num', 'cth_u_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cth(): BelongsTo
    {
        return $this->belongsTo(
            Cth::class,
            ['cth_u_cth_num', 'cth_u_cth_num', 'cth_u_cth_num', 'cth_u_cth_hsp_num', 'cth_u_cth_hsp_num', 'cth_u_cth_hsp_num', 'cth_u_cth_pac_reg', 'cth_u_cth_pac_reg', 'cth_u_cth_pac_reg'],
            ['cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg'],
        );
    }

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['cth_u_epe_cod'],
            ['epe_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cth_u_str_cod'],
            ['str_cod'],
        );
    }
}
