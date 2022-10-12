<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SApacMotEnc extends OracleEloquent
{
    use Compoships;

    protected $table = 's_apac_mot_enc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['s_apac_mot_enc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
