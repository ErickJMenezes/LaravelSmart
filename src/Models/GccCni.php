<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GccCni extends OracleEloquent
{
    use Compoships;

    protected $table = 'gcc_cni';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gcc_c_ccr_banco', 'gcc_c_gcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['gcc_c_ccr_banco'],
            ['ccr_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['gcc_c_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
