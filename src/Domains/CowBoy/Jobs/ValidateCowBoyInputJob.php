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

use App\Domains\CowBoy\CowBoyValidator;
use App\Foundation\Job;
use Illuminate\Http\Request;

class ValidateCowBoyInputJob extends Job
{
    public function handle(Request $request, CowBoyValidator $validator)
    {
        return $validator->validate($request->input());
    }
}
