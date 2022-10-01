<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Usr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['usr_cde_cod'],
            ['cde_cod'],
        );
    }

    public function cmt(): BelongsTo
    {
        return $this->belongsTo(
            Cmt::class,
            ['usr_fila_cmt_cod', 'usr_fila_cmt_cod', 'usr_fila_tcm_cod', 'usr_fila_tcm_cod'],
            ['cmt_cod', 'cmt_tcm_cod', 'cmt_cod', 'cmt_tcm_cod'],
        );
    }

    public function gmg(): BelongsTo
    {
        return $this->belongsTo(
            Gmg::class,
            ['usr_gmg_cod'],
            ['gmg_cod'],
        );
    }

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['usr_grp'],
            ['grp_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['usr_img_cod_foto'],
            ['img_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['usr_psv'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['usr_str_cod'],
            ['str_cod'],
        );
    }
}
