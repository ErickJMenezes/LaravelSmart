<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HShm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_shm_bul_med', 'h_shm_shd_id', 'h_shm_pac_reg', 'h_shm_reg_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_shm_adm_usr_login', 'h_shm_reg_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['h_shm_bul_med'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['h_shm_bun_cod'],
            ['bun_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['h_shm_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function hShd(): BelongsTo
    {
        return $this->belongsTo(
            HShd::class,
            ['h_shm_shd_id', 'h_shm_shd_id', 'h_shm_pac_reg', 'h_shm_pac_reg'],
            ['h_shd_id', 'h_shd_pac_reg', 'h_shd_id', 'h_shd_pac_reg'],
        );
    }
}
