<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CreHist extends OracleEloquent
{
    use Compoships;

    protected $table = 'cre_hist';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cre_hist_cod', 'cre_hist_dt_ini', 'cre_hist_cre_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['cre_hist_cre_cod'],
            ['cre_cod'],
        );
    }
}
