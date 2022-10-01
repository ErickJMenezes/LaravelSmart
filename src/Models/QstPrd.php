<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class QstPrd extends OracleEloquent
{
    use Compoships;

    protected $table = 'qst_prd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qst_p_qst_cod_predecessor', 'qst_p_qst_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['qst_p_qst_cod', 'qst_p_qst_cod_predecessor'],
            ['qst_cod', 'qst_cod'],
        );
    }
}
