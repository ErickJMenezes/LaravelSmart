<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exmlg extends OracleEloquent
{
    use Compoships;

    protected $table = 'exmlg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exmlg_exm_cod', 'exmlg_exg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exg(): BelongsTo
    {
        return $this->belongsTo(
            Exg::class,
            ['exmlg_exg_cod'],
            ['exg_cod'],
        );
    }

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exmlg_exm_cod'],
            ['exm_cod'],
        );
    }
}
