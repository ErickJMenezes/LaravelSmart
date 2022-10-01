<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TissVersao extends OracleEloquent
{
    use Compoships;

    protected $table = 'tiss_versao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tiss_versao_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
