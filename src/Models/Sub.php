<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sub extends OracleEloquent
{
    use Compoships;

    protected $table = 'sub';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sub_mat_cod1', 'sub_mat_cod2'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['sub_mat_cod1', 'sub_mat_cod2'],
            ['mat_cod', 'mat_cod'],
        );
    }
}
