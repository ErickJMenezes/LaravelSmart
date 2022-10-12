<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tlo extends OracleEloquent
{
    use Compoships;

    protected $table = 'tlo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tlo_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['tlo_nfs_numero', 'tlo_nfs_numero', 'tlo_nfs_numero', 'tlo_nfs_serie', 'tlo_nfs_serie', 'tlo_nfs_serie', 'tlo_nfs_tipo', 'tlo_nfs_tipo', 'tlo_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }
}
