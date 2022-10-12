<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mdt extends OracleEloquent
{
    use Compoships;

    protected $table = 'mdt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mdt_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mdt_usr_login'],
            ['usr_login'],
        );
    }
}
