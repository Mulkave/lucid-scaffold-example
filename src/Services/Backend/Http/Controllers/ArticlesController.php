<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services\Backend\Http\Controllers;

class ArticlesController
{
    /**
     * Get an article by id.
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
}
