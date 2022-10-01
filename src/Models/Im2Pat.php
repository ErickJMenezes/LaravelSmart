<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Im2Pat extends OracleEloquent
{
    use Compoships;

    protected $table = 'im2_pat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['im2_p_im2_id', 'im2_p_pat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function im2(): BelongsTo
    {
        return $this->belongsTo(
            Im2::class,
            ['im2_p_im2_id'],
            ['im2_id'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['im2_p_pat_cod'],
            ['pat_cod'],
        );
    }
}
