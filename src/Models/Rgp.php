<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rgp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rgp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rgp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rgp_usr_login'],
            ['usr_login'],
        );
    }
}
