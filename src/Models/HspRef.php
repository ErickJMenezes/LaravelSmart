<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HspRef extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hsp_r_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['hsp_r_hsp_num', 'hsp_r_hsp_num', 'hsp_r_pac_reg', 'hsp_r_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['hsp_r_usr_login_ini', 'hsp_r_usr_login_fim'],
            ['usr_login', 'usr_login'],
        );
    }
}
