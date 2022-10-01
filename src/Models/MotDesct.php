<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MotDesct extends OracleEloquent
{
    use Compoships;

    protected $table = 'mot_desct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mot_desct_mot_cod', 'mot_desct_mot_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['mot_desct_mot_cod', 'mot_desct_mot_cod', 'mot_desct_mot_tipo', 'mot_desct_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }
}
