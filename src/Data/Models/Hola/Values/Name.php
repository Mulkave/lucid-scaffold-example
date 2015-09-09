<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Data\Models\Hola\Values;

use App\Foundation\Value;
use App\Foundation\InvalidInputException;

class Name extends Value
{
    public function setValue($name)
    {
        $validation = $this->validation(compact('name'), ['name' => 'required|max:5']);

        if ($validation->fails()) {
            throw new InvalidInputException($validation);
        }

        parent::setValue(ucfirst($name));
    }
}
