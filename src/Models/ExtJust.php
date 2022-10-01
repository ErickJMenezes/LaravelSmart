<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExtJust extends OracleEloquent
{
    use Compoships;

    protected $table = 'ext_just';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ext_j_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['ext_j_nfs_numero', 'ext_j_nfs_numero', 'ext_j_nfs_numero', 'ext_j_nfs_serie', 'ext_j_nfs_serie', 'ext_j_nfs_serie', 'ext_j_nfs_tipo', 'ext_j_nfs_tipo', 'ext_j_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ext_j_smk_cod', 'ext_j_smk_cod', 'ext_j_smk_tipo', 'ext_j_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ext_j_usr_login'],
            ['usr_login'],
        );
    }

    public function cth(): BelongsTo
    {
        return $this->belongsTo(
            Cth::class,
            ['ext_j_cth_num', 'ext_j_cth_num', 'ext_j_cth_num', 'ext_j_hsp_num', 'ext_j_hsp_num', 'ext_j_hsp_num', 'ext_j_pac_reg', 'ext_j_pac_reg', 'ext_j_pac_reg'],
            ['cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ext_j_pac_reg'],
            ['pac_reg'],
        );
    }
}
