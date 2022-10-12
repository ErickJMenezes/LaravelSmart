<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RcrSusSh extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcr_sus_sh';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcr_s_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rcr_s_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
