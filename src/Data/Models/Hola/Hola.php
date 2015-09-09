<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Data\Models\Hola;

use App\Foundation\Model;
use App\Data\Models\Hola\Values\Name;

class Hola extends Model
{
    protected $fillable = ['name'];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = new Name($name);
    }

    public function getNameAttribute($name)
    {
        return 'Hola! '. $name;
    }
}
