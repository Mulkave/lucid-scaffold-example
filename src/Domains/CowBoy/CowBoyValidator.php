<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domains\CowBoy;

use App\Foundation\Validator;

class CowBoyValidator extends Validator
{
    protected $rules = ['name' => 'required'];
}
