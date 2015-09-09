<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services\Backend\Mappers;

class ArticleMapper
{
    /**
     * @apiDefine Article
     * @apiParam (Article) {String} id
     * @apiParam (Article) {String} title
     * @apiParam (Article) {String} slug
     * @apiParam (Article) {Object} cover
     * @apiParam (Article) {String} cover.url
     * @apiParam (Article) {Object} author
     * @apiParam (Article) {String} author.name
     * @apiParam (Article) {String} status Possible values: `Draft`, `Ready`, `Published`
     *
     * @apiExample Article
     * {
     *     id: "89y7uh",
     *     title: "hadsfkl",
     *     slug: "97yioulhkjad",
     *     url: "jlhbadsfkj",
     *     cover: {
     *         url: 'http://img.url'
     *     }
     * }
     *
     * @return array
     */
    public function map()
    {

    }
}
