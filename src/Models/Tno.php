<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tno extends OracleEloquent
{
    use Compoships;

    protected $table = 'tno';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tno_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tno_usr_login'],
            ['usr_login'],
        );
    }
}
