<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TissTipoatendimento extends OracleEloquent
{
    use Compoships;

    protected $table = 'tiss_tipoatendimento';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tiss_tpatendimento_seq'];

    protected $connection = 'smart';

    protected $guarded = [];
}
