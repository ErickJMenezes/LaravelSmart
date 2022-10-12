<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgNfs extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_nfs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_nfs_nfs_numero', 'img_nfs_nfs_tipo', 'img_nfs_nfs_serie', 'img_nfs_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['img_nfs_nfs_numero', 'img_nfs_nfs_numero', 'img_nfs_nfs_numero', 'img_nfs_nfs_serie', 'img_nfs_nfs_serie', 'img_nfs_nfs_serie', 'img_nfs_nfs_tipo', 'img_nfs_nfs_tipo', 'img_nfs_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_nfs_img_cod'],
            ['img_cod'],
        );
    }
}
