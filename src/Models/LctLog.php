<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LctLog extends OracleEloquent
{
    use Compoships;

    protected $table = 'lct_log';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lct_log_mcc_serie', 'lct_log_gcc_cod', 'lct_log_usr_login', 'lct_log_dthr', 'lct_log_mcc_lote', 'lct_log_gr_ses_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
