<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020 Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

require_once realpath(dirname(__FILE__)) . '/../config.php';

function subscribe($email) {

    $data = array(
        'headers' => array(
            'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8'
        ),
        'body'    => 'login=' . NEWSLETTER_API_USER . '&password=' . NEWSLETTER_API_TOKEN,
        'timeout' => 5
    );

    // login
    wp_remote_post(NEWSLETTER_API_URL . '&cmd=login', $data);

    // subscribe
    $data['body'] .= '&email=' . $email . '&lists=' . NEWSLETTER_ID;
    $post = wp_remote_post(NEWSLETTER_API_URL . '&cmd=subscribe', $data);

    return $post;
}
