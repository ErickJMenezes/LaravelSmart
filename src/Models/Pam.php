<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pam extends OracleEloquent
{
    use Compoships;

    protected $table = 'pam';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pam_pat_cod', 'pam_amo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['pam_amo_cod'],
            ['amo_cod'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['pam_pat_cod'],
            ['pat_cod'],
        );
    }
}
