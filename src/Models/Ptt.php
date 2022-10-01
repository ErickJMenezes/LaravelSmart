<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ptt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ptt_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pti(): BelongsTo
    {
        return $this->belongsTo(
            Pti::class,
            ['ptt_pti_cod'],
            ['pti_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ptt_str_origem', 'ptt_str_destino'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ptt_usr_login_reg'],
            ['usr_login'],
        );
    }
}
