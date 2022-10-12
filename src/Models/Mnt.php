<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mnt extends OracleEloquent
{
    use Compoships;

    protected $table = 'mnt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mnt_serie', 'mnt_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lmt(): BelongsTo
    {
        return $this->belongsTo(
            Lmt::class,
            ['mnt_str_cod', 'mnt_str_cod', 'mnt_lmt_cod', 'mnt_lmt_cod'],
            ['lmt_str_cod', 'lmt_cod', 'lmt_str_cod', 'lmt_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mnt_imp_usr_login', 'mnt_usr_login_sol', 'mnt_usr_login_diag', 'mnt_usr_login_resp'],
            ['usr_login', 'usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['mnt_smt_apq_cod', 'mnt_smt_apq_cod', 'mnt_smt_qst_cod', 'mnt_smt_qst_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function emn(): BelongsTo
    {
        return $this->belongsTo(
            Emn::class,
            ['mnt_emn_cod'],
            ['emn_cod'],
        );
    }

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['mnt_eqp_num'],
            ['eqp_num'],
        );
    }

    public function smt(): BelongsTo
    {
        return $this->belongsTo(
            Smt::class,
            ['mnt_smt_cod'],
            ['smt_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mnt_str_solic', 'mnt_str_cod'],
            ['str_cod', 'str_cod'],
        );
    }
}
