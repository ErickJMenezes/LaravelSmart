<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HPpd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_ppd_h_htx_pac_reg', 'h_ppd_h_htx_id', 'h_ppd_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hHtx(): BelongsTo
    {
        return $this->belongsTo(
            HHtx::class,
            ['h_ppd_h_htx_id', 'h_ppd_h_htx_id', 'h_ppd_h_htx_pac_reg', 'h_ppd_h_htx_pac_reg'],
            ['h_htx_id', 'h_htx_pac_reg', 'h_htx_id', 'h_htx_pac_reg'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_ppd_pac_reg'],
            ['pac_reg'],
        );
    }
}
