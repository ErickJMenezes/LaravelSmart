<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LihSup extends OracleEloquent
{
    use Compoships;

    protected $table = 'lih_sup';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lih_s_num', 'lih_s_prob_cod', 'lih_s_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
