<?php

/*
 * This file is part of the lucid-scaffold-tryout package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services\Api\Mappers;

class ArticleMapper
{
    /**
     * @apiDefine Article
     *
     * @apiParam (Article Object) {String} id
     * @apiParam (Article Object) {String} title
     * @apiParam (Article Object) {String} slug
     * @apiParam (Article Object) {Object} cover
     * @apiParam (Article Object) {String} cover.url
     *
     * @apiExample Article
     * {
     *     id: "89y7uh",
     *     title: "hadsfkl",
     *     slug: "97yioulhkjad",
     *     url: "jlhbadsfkj",
     *     cover: {
     *         url: 'http://img.url'
     *     },
     *     embeds: {
     *         facebook: [Facebook Embed],
     *         instagram: [Instagram Embed],
     *         twitter: [Twitter Embed],
     *         youtube: [Youtube Embed]
     *     }
     * }
     *
     * @apiExample Facebook Embed
     * {
     *     line: 12,
     *     url: "http://facebook.com/posts/879654657868",
     *     html: "<div class=\"fb-embed\">...",
     *     post: {
     *         id: "879654657868",
     *         ... // see the object of Facebook's API v2.3
     *     }
     * }
     *
     * @return array
     */
    public function map()
    {

    }
}
