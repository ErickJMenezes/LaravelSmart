<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ResEquipe extends OracleEloquent
{
    use Compoships;

    protected $table = 'res_equipe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['res_equipe_seq'];

    protected $connection = 'smart';

    protected $guarded = [];
}
