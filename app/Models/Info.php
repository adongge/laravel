<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'ad_info';
    
}
