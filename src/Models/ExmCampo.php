<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmCampo extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_campo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exm_c_exm_cod', 'exm_c_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exm_c_exm_cod'],
            ['exm_cod'],
        );
    }
}
