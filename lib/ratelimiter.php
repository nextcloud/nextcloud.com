<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2021 Lukas Reschke <lukas@statuscode.ch>
 *
 * @author Lukas Reschke <lukas@statuscode.ch>
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

function canPerformLimitedAction($ratelimitName, $maxRequestsPerHour) : bool {
    require_once realpath(dirname(__FILE__)) . '/../config.php';

    if(!defined("REDIS")) {
        return true;
    }

    $userIp = $_SERVER['REMOTE_ADDR'];

    $redis = new Predis\Client(REDIS);

    $rateId    = "requests_count_ratelimiter_{$ratelimitName}_{$userIp}";
    $rateLimit = (int) $redis->get($rateId);

    $globalRateId    = "requests_count_ratelimiter_{$userIp}";
    $globalRateLimit = (int) $redis->get($globalRateId);
    $redis->set($globalRateId, $globalRateLimit + 1);
    $redis->expire($globalRateId, 3600);
    $globalRateLimitMaximumPerHour = 20;
    if ($globalRateLimit + 1 > $globalRateLimitMaximumPerHour) {
        return false;
    }

    $redis->set($rateId, $rateLimit + 1);
    $redis->expire($rateId, 3600);

    if ($rateLimit + 1 > $maxRequestsPerHour) {
        return false;
    } else {
        return true;
    }
}
