<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services\Api\Http\Controllers;

use App\Foundation\Http\Controller;
use App\Services\Api\Features\YepFeature;

class TheController extends Controller
{
    public function index()
    {
        return $this->serve(YepFeature::class);
    }
}
