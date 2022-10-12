<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exs extends OracleEloquent
{
    use Compoships;

    protected $table = 'exs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exs_exm_cod', 'exs_pex_pac', 'exs_item_id', 'exs_pex_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exs_exm_cod'],
            ['exm_cod'],
        );
    }

    public function frm(): BelongsTo
    {
        return $this->belongsTo(
            Frm::class,
            ['exs_frm_id'],
            ['frm_id'],
        );
    }

    public function pex(): BelongsTo
    {
        return $this->belongsTo(
            Pex::class,
            ['exs_pex_dthr', 'exs_pex_dthr', 'exs_pex_pac', 'exs_pex_pac'],
            ['pex_dthr', 'pex_pac', 'pex_dthr', 'pex_pac'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['exs_str_exec'],
            ['str_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['exs_tap_cod'],
            ['tap_cod'],
        );
    }
}
