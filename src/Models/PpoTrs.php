<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PpoTrs extends OracleEloquent
{
    use Compoships;

    protected $table = 'ppo_trs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ppo_trs_cod', 'ppo_trs_ppo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ppo(): BelongsTo
    {
        return $this->belongsTo(
            Ppo::class,
            ['ppo_trs_ppo_cod'],
            ['ppo_cod'],
        );
    }

    public function maqCart(): BelongsTo
    {
        return $this->belongsTo(
            MaqCart::class,
            ['ppo_trs_maq_cart_cod'],
            ['maq_cart_cod'],
        );
    }
}
