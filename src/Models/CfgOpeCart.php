<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CfgOpeCart extends OracleEloquent
{
    use Compoships;

    protected $table = 'cfg_ope_cart';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cfg_ope_cart_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function opeCart(): BelongsTo
    {
        return $this->belongsTo(
            OpeCart::class,
            ['cfg_ope_cart_ope_cart_cod'],
            ['ope_cart_cod'],
        );
    }
}
