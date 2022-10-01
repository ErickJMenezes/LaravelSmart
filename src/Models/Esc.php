<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Esc extends OracleEloquent
{
    use Compoships;

    protected $table = 'esc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esc_esp_cod', 'esc_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['esc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['esc_esp_cod'],
            ['esp_cod'],
        );
    }
}
