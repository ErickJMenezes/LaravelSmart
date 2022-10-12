<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vle extends OracleEloquent
{
    use Compoships;

    protected $table = 'vle';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vle_serie', 'vle_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['vle_ccr_caixa', 'vle_ccr_vale'],
            ['ccr_cod', 'ccr_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['vle_str_solic'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['vle_usr_login', 'vle_usr_login_fim'],
            ['usr_login', 'usr_login'],
        );
    }
}
