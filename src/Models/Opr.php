<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Opr extends OracleEloquent
{
    use Compoships;

    protected $table = 'opr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['opr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['opr_if_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['opr_if_emp_cod'],
            ['emp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['opr_if_str_cod'],
            ['str_cod'],
        );
    }
}
