<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fcx extends OracleEloquent
{
    use Compoships;

    protected $table = 'fcx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fcx_dthr_atual', 'fcx_ccr_caixa'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['fcx_ccr_caixa'],
            ['ccr_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fcx_usr_login'],
            ['usr_login'],
        );
    }
}
