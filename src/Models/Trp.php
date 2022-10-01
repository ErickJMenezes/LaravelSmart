<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Trp extends OracleEloquent
{
    use Compoships;

    protected $table = 'trp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trp_pac', 'trp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['trp_pac'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['trp_smk_cod', 'trp_smk_cod', 'trp_smk_tipo', 'trp_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['trp_usr_login', 'trp_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['trp_str'],
            ['str_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['trp_cnv'],
            ['cnv_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['trp_pln', 'trp_pln', 'trp_cnv', 'trp_cnv'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['trp_psv_solic'],
            ['psv_cod'],
        );
    }
}
