<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bilhete extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hora', 'data', 'ramal'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cth(): BelongsTo
    {
        return $this->belongsTo(
            Cth::class,
            ['bilhete_cth_num', 'bilhete_cth_num', 'bilhete_cth_num', 'bilhete_hsp_num', 'bilhete_hsp_num', 'bilhete_hsp_num', 'bilhete_pac_reg', 'bilhete_pac_reg', 'bilhete_pac_reg'],
            ['cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['bilhete_reg_usr_login'],
            ['usr_login'],
        );
    }
}
