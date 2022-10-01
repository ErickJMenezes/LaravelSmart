<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ctf extends OracleEloquent
{
    use Compoships;

    protected $table = 'ctf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ctf_cod', 'ctf_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ctf_cct_cod1', 'ctf_cct_cod2'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ctf_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function ctfs(): HasMany
    {
        return $this->hasMany(
            Ctf::class,
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
            ['ctf_ctf_cod', 'ctf_ctf_cod', 'ctf_ctf_tipo', 'ctf_ctf_tipo'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['ctf_esp_cod'],
            ['esp_cod'],
        );
    }
}
