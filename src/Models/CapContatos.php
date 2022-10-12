<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CapContatos extends OracleEloquent
{
    use Compoships;

    protected $table = 'cap_contatos';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cap_c_pac_reg', 'cap_c_num', 'cap_c_dthr_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['cap_c_num', 'cap_c_num', 'cap_c_pac_reg', 'cap_c_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cap_c_usr_login'],
            ['usr_login'],
        );
    }
}
