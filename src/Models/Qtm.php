<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qtm extends OracleEloquent
{
    use Compoships;

    protected $table = 'qtm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lip(): BelongsTo
    {
        return $this->belongsTo(
            Lip::class,
            ['qtm_lip_id'],
            ['lip_id'],
        );
    }
}
