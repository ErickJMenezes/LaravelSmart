<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HTdp extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_tdp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_tdp_pac_reg', 'h_tdp_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hTdpCont(): BelongsTo
    {
        return $this->belongsTo(
            HTdpCont::class,
            ['h_tdp_cont'],
            ['h_tdp_cont_id'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['h_tdp_responsavel'],
            ['psv_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_tdp_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_tdp_usr_login_reg', 'h_tdp_usr_login_instrutor'],
            ['usr_login', 'usr_login'],
        );
    }
}
