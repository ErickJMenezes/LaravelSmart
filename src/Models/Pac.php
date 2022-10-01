<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pac extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['pac_pln_cod', 'pac_pln_cod', 'pac_cnv_cod', 'pac_cnv_cod', 'pac_pln2_cod', 'pac_pln2_cod', 'pac_cnv2_cod', 'pac_cnv2_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['pac_diag_tpcid', 'pac_diag_tpcid', 'pac_diag_cid', 'pac_diag_cid'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['pac_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['pac_cnv', 'pac_so_cnv_cod', 'pac_cnv2'],
            ['cnv_cod', 'cnv_cod', 'cnv_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['pac_pront_loc'],
            ['loc_cod'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['pac_lta_cod', 'pac_lta_cod2'],
            ['lta_cod', 'lta_cod'],
        );
    }

    public function pacs(): HasMany
    {
        return $this->hasMany(
            Pac::class,
            ['pac_reg'],
            ['pac_pac_reg'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['pac_pro_cod', 'pac_pro_cod_ocup'],
            ['pro_cod', 'pro_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['pac_medico'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['pac_reg_str_cod'],
            ['str_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['pac_img_cod_foto'],
            ['img_cod'],
        );
    }
}
