<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HEhm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_ehm_bul_med', 'h_ehm_ehd_id', 'h_ehm_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hEhd(): BelongsTo
    {
        return $this->belongsTo(
            HEhd::class,
            ['h_ehm_ehd_id', 'h_ehm_ehd_id', 'h_ehm_pac_reg', 'h_ehm_pac_reg'],
            ['h_ehd_id', 'h_ehd_pac_reg', 'h_ehd_id', 'h_ehd_pac_reg'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['h_ehm_bul_med'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['h_ehm_bun_cod'],
            ['bun_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['h_ehm_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_ehm_reg_usr_login'],
            ['usr_login'],
        );
    }
}
