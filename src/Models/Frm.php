<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Frm extends OracleEloquent
{
    use Compoships;

    protected $table = 'frm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['frm_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['frm_exm_cod'],
            ['exm_cod'],
        );
    }
}
