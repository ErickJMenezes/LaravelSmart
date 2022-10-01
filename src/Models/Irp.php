<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Irp extends OracleEloquent
{
    use Compoships;

    protected $table = 'irp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['irp_rep_serie', 'irp_nfs_numero', 'irp_nfs_tipo', 'irp_rep_num', 'irp_nfs_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['irp_nfs_numero', 'irp_nfs_numero', 'irp_nfs_numero', 'irp_nfs_serie', 'irp_nfs_serie', 'irp_nfs_serie', 'irp_nfs_tipo', 'irp_nfs_tipo', 'irp_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function rep(): BelongsTo
    {
        return $this->belongsTo(
            Rep::class,
            ['irp_rep_num', 'irp_rep_num', 'irp_rep_serie', 'irp_rep_serie'],
            ['rep_num', 'rep_serie', 'rep_num', 'rep_serie'],
        );
    }
}
