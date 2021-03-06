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
    /**
     * Find an article by id (can also be the slug).
     *
     * @api {get} /articles/{id} Article Details
     * @apiGroup Articles
     * @apiName GetArticleById
     * @apiVersion 1.0.0
     *
     * @apiExample Response
     * HTTP/1.1 200 OK
     * {
     *     status: 200,
     *     data: Article
     * }
     *
     * @apiUse Article
     *
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function show($id)
    {

    }

    public function index()
    {
        return $this->serve(YepFeature::class);
    }
}
