<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nfs extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfs_numero', 'nfs_tipo', 'nfs_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function intBko(): BelongsTo
    {
        return $this->belongsTo(
            IntBko::class,
            ['nfs_int_bko_codigo'],
            ['int_bko_codigo'],
        );
    }

    public function nfs(): HasMany
    {
        return $this->hasMany(
            Nfs::class,
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
            ['nfs_nde_num', 'nfs_nde_num', 'nfs_nde_num', 'nfs_nde_tipo', 'nfs_nde_tipo', 'nfs_nde_tipo', 'nfs_nde_serie', 'nfs_nde_serie', 'nfs_nde_serie', 'nfs_ns_numero', 'nfs_ns_numero', 'nfs_ns_numero', 'nfs_ns_serie', 'nfs_ns_serie', 'nfs_ns_serie', 'nfs_ns_tipo', 'nfs_ns_tipo', 'nfs_ns_tipo'],
        );
    }

    public function bxa(): BelongsTo
    {
        return $this->belongsTo(
            Bxa::class,
            ['nfs_reneg_bxa_num', 'nfs_reneg_bxa_num', 'nfs_reneg_bxa_serie', 'nfs_reneg_bxa_serie'],
            ['bxa_num', 'bxa_serie', 'bxa_num', 'bxa_serie'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['nfs_emp_codigo'],
            ['cnv_cod'],
        );
    }

    public function cpi(): BelongsTo
    {
        return $this->belongsTo(
            Cpi::class,
            ['nfs_cpi_cod'],
            ['cpi_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['nfs_emp_cod', 'nfs_emp_cod_orpag'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['nfs_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['nfs_usr_login'],
            ['usr_login'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['nfs_nfl_num', 'nfs_nfl_num', 'nfs_nfl_serie', 'nfs_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
