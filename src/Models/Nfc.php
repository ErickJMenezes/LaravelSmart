<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nfc extends OracleEloquent
{
    use Compoships;

    protected $table = 'nfc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nfc_osm_serie', 'nfc_nfs_serie', 'nfc_smm_num', 'nfc_nfs_num', 'nfc_osm_num', 'nfc_nfs_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
