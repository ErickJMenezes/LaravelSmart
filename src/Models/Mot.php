<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mot extends OracleEloquent
{
    use Compoships;

    protected $table = 'mot';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mot_cod', 'mot_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['mot_auto_edl_cod'],
            ['edl_cod'],
        );
    }
}
