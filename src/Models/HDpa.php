<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HDpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_dpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_dpa_pac_reg', 'h_dpa_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hcMdp(): BelongsTo
    {
        return $this->belongsTo(
            HcMdp::class,
            ['h_dpa_mdp_cod'],
            ['hc_mdp_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_dpa_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_dpa_reg_usr_login', 'h_dpa_alter_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
