<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rep extends OracleEloquent
{
    use Compoships;

    protected $table = 'rep';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rep_serie', 'rep_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rep_usr_login'],
            ['usr_login'],
        );
    }
}
