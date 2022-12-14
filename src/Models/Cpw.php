<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpw extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpw_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cpw_pac_cnv'],
            ['cnv_cod'],
        );
    }
}
