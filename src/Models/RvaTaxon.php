<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RvaTaxon extends OracleEloquent
{
    use Compoships;

    protected $table = 'rva_taxon';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rva_t_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
