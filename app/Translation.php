<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Translation extends Eloquent
{
    protected $connection = 'mongodb';


    protected $collection = 'translations';
}
