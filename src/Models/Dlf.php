<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlf extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlf_nfs_serie', 'dlf_nfs_tipo', 'dlf_dthr', 'dlf_nfs_numero'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['dlf_nfs_numero', 'dlf_nfs_numero', 'dlf_nfs_numero', 'dlf_nfs_serie', 'dlf_nfs_serie', 'dlf_nfs_serie', 'dlf_nfs_tipo', 'dlf_nfs_tipo', 'dlf_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['dlf_edl_cod'],
            ['edl_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlf_usr_login'],
            ['usr_login'],
        );
    }
}
