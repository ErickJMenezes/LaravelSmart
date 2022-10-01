<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cab extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cab_nome', 'cab_banda', 'cab_tipo', 'cab_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ppl(): BelongsTo
    {
        return $this->belongsTo(
            Ppl::class,
            ['cab_ppl_id'],
            ['ppl_id'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cab_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cab_usr_login'],
            ['usr_login'],
        );
    }
}
