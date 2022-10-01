<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MccOld extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mcc_lote', 'mcc_serie', 'mcc_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['mcc_nfs_serie', 'mcc_nfs_serie', 'mcc_nfs_serie', 'mcc_nfs_tipo', 'mcc_nfs_tipo', 'mcc_nfs_tipo', 'mcc_nfs_num', 'mcc_nfs_num', 'mcc_nfs_num'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}