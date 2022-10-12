<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SaudeOcupacional extends OracleEloquent
{
    use Compoships;

    protected $table = 'saude_ocupacional';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['saude_ocup_seq'];

    protected $connection = 'smart';

    protected $guarded = [];
}
