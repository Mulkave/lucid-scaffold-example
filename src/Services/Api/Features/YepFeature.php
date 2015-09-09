<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services\Api\Features;

use App\Domains\CowBoy\Jobs\OyJob;
use App\Domains\CowBoy\Jobs\ValidateCowBoyInputJob;
use App\Domains\IKnow\Jobs\WhosJob;
use App\Foundation\Feature;
use Illuminate\Http\Request;

class YepFeature extends Feature
{
    public function handle(Request $request)
    {
        $this->run(ValidateCowBoyInputJob::class);
        $name = $this->run(WhosJob::class, ['name' => $request->input('name', ':(')]);

        return $this->run(OyJob::class, compact('name'));
    }
}
