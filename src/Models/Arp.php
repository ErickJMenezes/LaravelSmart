<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Arp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['arp_pac_reg', 'arp_dthr_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['arp_esp_cod'],
            ['esp_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['arp_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['arp_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['arp_usr_login'],
            ['usr_login'],
        );
    }
}
