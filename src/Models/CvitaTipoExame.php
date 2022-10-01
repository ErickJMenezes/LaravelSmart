<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CvitaTipoExame extends OracleEloquent
{
    use Compoships;

    protected $table = 'cvita_tipo_exame';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cvita_tipo_exame_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
