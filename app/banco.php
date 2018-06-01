<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Banco extends Eloquent
{

    protected $collection = 'bancos';

}