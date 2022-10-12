<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Crc extends OracleEloquent
{
    use Compoships;

    protected $table = 'crc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['crc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['crc_usr_login_reg'],
            ['usr_login'],
        );
    }
}
