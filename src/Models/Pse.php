<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pse extends OracleEloquent
{
    use Compoships;

    protected $table = 'pse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pse_seq', 'pse_hsp_num', 'pse_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['pse_aha_cod', 'pse_aha_cod', 'pse_aha_tipo', 'pse_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['pse_bus_cod'],
            ['bus_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pse_pac_reg'],
            ['pac_reg'],
        );
    }

    public function pde(): BelongsTo
    {
        return $this->belongsTo(
            Pde::class,
            ['pse_pde_num'],
            ['pde_num'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pse_ini_usr_login', 'pse_fim_usr_login', 'pse_reg_usr_login'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
