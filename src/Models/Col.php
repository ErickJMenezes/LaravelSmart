<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Col extends OracleEloquent
{
    use Compoships;

    protected $table = 'col';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['col_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['col_usr_login'],
            ['usr_login'],
        );
    }
}
