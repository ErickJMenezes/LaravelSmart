<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fmg extends OracleEloquent
{
    use Compoships;

    protected $table = 'fmg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fmg_grupo', 'fmg_trp_num', 'fmg_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fmg_usr_login', 'fmg_usr_login_marcacao'],
            ['usr_login', 'usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fmg_pac_reg'],
            ['pac_reg'],
        );
    }

    public function trp(): BelongsTo
    {
        return $this->belongsTo(
            Trp::class,
            ['fmg_trp_num', 'fmg_trp_num', 'fmg_pac_reg', 'fmg_pac_reg'],
            ['trp_num', 'trp_pac', 'trp_num', 'trp_pac'],
        );
    }
}
