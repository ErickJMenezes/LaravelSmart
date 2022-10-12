<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MaqCart extends OracleEloquent
{
    use Compoships;

    protected $table = 'maq_cart';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['maq_cart_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function opeCart(): BelongsTo
    {
        return $this->belongsTo(
            OpeCart::class,
            ['maq_cart_ope_cart_cod'],
            ['ope_cart_cod'],
        );
    }
}
