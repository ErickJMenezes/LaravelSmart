<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Emc extends OracleEloquent
{
    use Compoships;

    protected $table = 'emc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emc_mmyy'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['emc_usr_login'],
            ['usr_login'],
        );
    }
}
