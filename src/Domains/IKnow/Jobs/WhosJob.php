<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Domains\IKnow\Jobs;

use App\Foundation\Job;

class WhosJob extends Job
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function handle()
    {
        return $this->name;
    }
}
