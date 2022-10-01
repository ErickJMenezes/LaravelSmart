<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NfsLote extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfs_lote';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfs_l_tp_guia', 'nfs_l_lote', 'nfs_l_nfs_tipo', 'nfs_l_guia'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['nfs_l_nfs_numero', 'nfs_l_nfs_numero', 'nfs_l_nfs_numero', 'nfs_l_nfs_serie', 'nfs_l_nfs_serie', 'nfs_l_nfs_serie', 'nfs_l_nfs_tipo', 'nfs_l_nfs_tipo', 'nfs_l_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['nfs_l_usr_login'],
            ['usr_login'],
        );
    }
}
