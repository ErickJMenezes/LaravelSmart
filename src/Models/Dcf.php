<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dcf extends OracleEloquent
{
    use Compoships;

    protected $table = 'dcf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dcf_osm_serie', 'dcf_smm_num', 'dcf_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['dcf_nfs_numero', 'dcf_nfs_numero', 'dcf_nfs_numero', 'dcf_nfs_serie', 'dcf_nfs_serie', 'dcf_nfs_serie', 'dcf_nfs_tipo', 'dcf_nfs_tipo', 'dcf_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
