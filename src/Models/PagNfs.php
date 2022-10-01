<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PagNfs extends OracleEloquent
{
    use Compoships;

    protected $table = 'pag_nfs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pag_nfs_nfs_tipo', 'pag_nfs_pag_serie', 'pag_nfs_pag_lote', 'pag_nfs_nfs_numero', 'pag_nfs_nfs_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
