<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HDpc extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_dpc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_dpc_id', 'h_dpc_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hcDpf(): BelongsTo
    {
        return $this->belongsTo(
            HcDpf::class,
            ['h_dpc_dpf_cod'],
            ['hc_dpf_cod'],
        );
    }

    public function hcDps(): BelongsTo
    {
        return $this->belongsTo(
            HcDps::class,
            ['h_dpc_dps_cod'],
            ['hc_dps_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_dpc_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_dpc_reg_usr_login', 'h_dpc_alter_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
