<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Glf extends OracleEloquent
{
    use Compoships;

    protected $table = 'glf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['glf_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['glf_nfs_tipo', 'glf_nfs_tipo', 'glf_nfs_tipo', 'glf_nfs_num', 'glf_nfs_num', 'glf_nfs_num', 'glf_nfs_serie', 'glf_nfs_serie', 'glf_nfs_serie'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['glf_nde_mns_num', 'glf_nde_mns_num', 'glf_nde_mns_serie', 'glf_nde_mns_serie', 'glf_mns_num', 'glf_mns_num', 'glf_mns_serie', 'glf_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie', 'mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function mog(): BelongsTo
    {
        return $this->belongsTo(
            Mog::class,
            ['glf_mog_cod', 'glf_mog_cod2', 'glf_mog_cod3'],
            ['mog_cod', 'mog_cod', 'mog_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['glf_osm_num', 'glf_osm_num', 'glf_osm_serie', 'glf_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['glf_str_resp'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['glf_usr_login_reg', 'glf_usr_login_sol', 'glf_usr_login_resp'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
