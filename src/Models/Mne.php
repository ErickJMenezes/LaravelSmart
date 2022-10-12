<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mne extends OracleEloquent
{
    use Compoships;

    protected $table = 'mne';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mne_mnt_num', 'mne_dthr', 'mne_mnt_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emn(): BelongsTo
    {
        return $this->belongsTo(
            Emn::class,
            ['mne_emn_cod'],
            ['emn_cod'],
        );
    }

    public function mnt(): BelongsTo
    {
        return $this->belongsTo(
            Mnt::class,
            ['mne_mnt_num', 'mne_mnt_num', 'mne_mnt_serie', 'mne_mnt_serie'],
            ['mnt_num', 'mnt_serie', 'mnt_num', 'mnt_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mne_usr_login'],
            ['usr_login'],
        );
    }
}
