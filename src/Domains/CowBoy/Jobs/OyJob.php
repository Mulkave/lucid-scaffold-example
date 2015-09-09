<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domains\CowBoy\Jobs;

use App\Foundation\Job;
use App\Data\Models\Hola\Hola;

class OyJob extends Job
{
    public function __construct($name = ':(')
    {
        $this->name = $name;
    }

    public function handle()
    {
        return (new Hola(['name' => $this->name]))->name;
    }
}
