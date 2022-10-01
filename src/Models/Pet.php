<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pet extends OracleEloquent
{
    use Compoships;

    protected $table = 'pet';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pet_num', 'pet_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pet_usr_login'],
            ['usr_login'],
        );
    }
}
