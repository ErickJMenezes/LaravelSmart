<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pad extends OracleEloquent
{
    use Compoships;

    protected $table = 'pad';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pad_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pad_usr_login'],
            ['usr_login'],
        );
    }
}
