<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dfi extends OracleEloquent
{
    use Compoships;

    protected $table = 'dfi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dfi_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gem(): BelongsTo
    {
        return $this->belongsTo(
            Gem::class,
            ['dfi_gem_cod'],
            ['gem_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['dfi_emp_cod'],
            ['emp_cod'],
        );
    }
}
