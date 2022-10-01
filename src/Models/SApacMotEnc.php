<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SApacMotEnc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['s_apac_mot_enc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}