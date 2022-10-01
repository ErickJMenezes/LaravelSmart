<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CttEmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'ctt_emp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ctt_emp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['ctt_emp_emp_cod'],
            ['emp_cod'],
        );
    }

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['ctt_emp_usi_login'],
            ['usi_login'],
        );
    }
}
