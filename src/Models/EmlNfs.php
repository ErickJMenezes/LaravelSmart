<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmlNfs extends OracleEloquent
{
    use Compoships;

    protected $table = 'eml_nfs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['e_nfs_nfs_numero', 'e_nfs_nfs_serie', 'e_nfs_eml_cod', 'e_nfs_nfs_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
