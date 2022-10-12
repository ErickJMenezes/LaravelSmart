<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ued extends OracleEloquent
{
    use Compoships;

    protected $table = 'ued';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ued_usr_login', 'ued_edl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['ued_edl_cod'],
            ['edl_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ued_usr_login'],
            ['usr_login'],
        );
    }
}
