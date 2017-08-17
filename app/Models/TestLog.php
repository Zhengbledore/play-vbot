<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestLog extends Model
{
    protected $table = 'test_log';

    protected $fillable = ['type', 'content'];

}
