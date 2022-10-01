<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Edf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['edf_osm_serie', 'edf_nfs_numero', 'edf_nfs_tipo', 'edf_nfs_serie', 'edf_osm_num', 'edf_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['edf_nfs_numero', 'edf_nfs_numero', 'edf_nfs_numero', 'edf_nfs_serie', 'edf_nfs_serie', 'edf_nfs_serie', 'edf_nfs_tipo', 'edf_nfs_tipo', 'edf_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
