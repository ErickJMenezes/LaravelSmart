<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dlp_hsp_num', 'dlp_pac_reg', 'dlp_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['dlp_edl_cod'],
            ['edl_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['dlp_hsp_num', 'dlp_hsp_num', 'dlp_pac_reg', 'dlp_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlp_usr_login', 'dlp_usr_login_destino', 'dlp_usr_login_status'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
