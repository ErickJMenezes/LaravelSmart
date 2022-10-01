<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lif extends OracleEloquent
{
    use Compoships;

    protected $table = 'lif';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lif_dthr_imp', 'lif_fte_num', 'lif_fte_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lif_usr_login'],
            ['usr_login'],
        );
    }

    public function fte(): BelongsTo
    {
        return $this->belongsTo(
            Fte::class,
            ['lif_fte_num', 'lif_fte_num', 'lif_fte_serie', 'lif_fte_serie'],
            ['fte_num', 'fte_serie', 'fte_num', 'fte_serie'],
        );
    }
}
