<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AudioInt extends OracleEloquent
{
    use Compoships;

    protected $table = 'audio_int';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['audio_int_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function audio(): BelongsTo
    {
        return $this->belongsTo(
            Audio::class,
            ['audio_int_audio_cod'],
            ['audio_cod'],
        );
    }
}
