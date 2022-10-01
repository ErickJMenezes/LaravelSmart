<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exe extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exe_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['exe_cdg_num', 'exe_cdg_num', 'exe_cdg_serie', 'exe_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['exe_hsp_num', 'exe_hsp_num', 'exe_pac_reg', 'exe_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['exe_just_mot_cod', 'exe_just_mot_cod', 'exe_just_mot_tipo', 'exe_just_mot_tipo', 'exe_peso_branco_mot_cod', 'exe_peso_branco_mot_cod', 'exe_peso_branco_mot_tipo', 'exe_peso_branco_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['exe_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['exe_usr_login_reg'],
            ['usr_login'],
        );
    }
}
