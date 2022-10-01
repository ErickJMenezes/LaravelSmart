<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MaqCartCfg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['maq_cart_cfg_cfg_ope_cart_cod', 'maq_cart_cfg_maq_cart_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function maqCart(): BelongsTo
    {
        return $this->belongsTo(
            MaqCart::class,
            ['maq_cart_cfg_maq_cart_cod'],
            ['maq_cart_cod'],
        );
    }

    public function cfgOpeCart(): BelongsTo
    {
        return $this->belongsTo(
            CfgOpeCart::class,
            ['maq_cart_cfg_cfg_ope_cart_cod'],
            ['cfg_ope_cart_cod'],
        );
    }
}
