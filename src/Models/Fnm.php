<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fnm extends OracleEloquent
{
    use Compoships;

    protected $table = 'fnm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fnm_fne_cod', 'fnm_mat_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fnm_fne_cod'],
            ['fne_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['fnm_mat_cod'],
            ['mat_cod'],
        );
    }
}
