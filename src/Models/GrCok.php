<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrCok extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_cok';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_cok_gr_web_server_name', 'gr_cok_gr_web_session_id', 'gr_cok_name'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function grWeb(): BelongsTo
    {
        return $this->belongsTo(
            GrWeb::class,
            ['gr_cok_gr_web_session_id', 'gr_cok_gr_web_session_id', 'gr_cok_gr_web_server_name', 'gr_cok_gr_web_server_name'],
            ['gr_web_session_id', 'gr_web_server_name', 'gr_web_session_id', 'gr_web_server_name'],
        );
    }
}
