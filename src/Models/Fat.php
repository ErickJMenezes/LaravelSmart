<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fat_num', 'fat_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['fat_cnv'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['fat_ctf_cod', 'fat_ctf_cod', 'fat_ctf_tipo', 'fat_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['fat_emp_cod'],
            ['emp_cod'],
        );
    }

    public function fpc(): BelongsTo
    {
        return $this->belongsTo(
            Fpc::class,
            ['fat_fpc_num', 'fat_fpc_num', 'fat_fpc_serie', 'fat_fpc_serie'],
            ['fpc_num', 'fpc_serie', 'fpc_num', 'fpc_serie'],
        );
    }

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['fat_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function lpf(): BelongsTo
    {
        return $this->belongsTo(
            Lpf::class,
            ['fat_lpf_num', 'fat_lpf_num', 'fat_lpf_serie', 'fat_lpf_serie'],
            ['lpf_num', 'lpf_serie', 'lpf_num', 'lpf_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['fat_hsp_pac'],
            ['pac_reg'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['fat_pln_cod', 'fat_pln_cod', 'fat_cnv', 'fat_cnv'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fat_psv_cod'],
            ['psv_cod'],
        );
    }

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['fat_sap_cod'],
            ['sap_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['fat_str_cod_exe', 'fat_str_cod_sol'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fat_usr_login', 'fat_usr_lib_conta'],
            ['usr_login', 'usr_login'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['fat_nfs_serie', 'fat_nfs_serie', 'fat_nfs_serie', 'fat_nfs_tipo', 'fat_nfs_tipo', 'fat_nfs_tipo', 'fat_nfs_numero', 'fat_nfs_numero', 'fat_nfs_numero'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
