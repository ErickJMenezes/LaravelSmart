<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bhd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bhd_dthr', 'bhd_pac', 'bhd_hsp', 'bhd_liq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['bhd_hsp', 'bhd_hsp', 'bhd_pac', 'bhd_pac'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function liq(): BelongsTo
    {
        return $this->belongsTo(
            Liq::class,
            ['bhd_liq'],
            ['liq_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['bhd_pac'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['bhd_usr_login', 'bhd_del_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
