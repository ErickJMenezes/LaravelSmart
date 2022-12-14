<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ses extends OracleEloquent
{
    use Compoships;

    protected $table = 'ses';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ses_proc_sus', 'ses_esp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['ses_esp_cod'],
            ['esp_cod'],
        );
    }
}
