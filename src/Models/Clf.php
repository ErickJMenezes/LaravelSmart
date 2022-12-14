<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Clf extends OracleEloquent
{
    use Compoships;

    protected $table = 'clf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['clf_cnv_cod', 'clf_remessa'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['clf_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
