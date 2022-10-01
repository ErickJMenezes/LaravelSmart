<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrWeb extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_web';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_web_server_name', 'gr_web_session_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gr_web_usr_login'],
            ['usr_login'],
        );
    }
}
