<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HspContatos extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hsp_c_dthr_reg', 'hsp_c_pac_reg', 'hsp_c_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['hsp_c_hsp_num', 'hsp_c_hsp_num', 'hsp_c_pac_reg', 'hsp_c_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['hsp_c_usr_login'],
            ['usr_login'],
        );
    }
}
