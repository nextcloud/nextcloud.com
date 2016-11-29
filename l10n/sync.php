<?php
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
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

if(count($argv) !== 3) {
	die('Not executed in the right format.');
}

$userName = $argv[1];
$password = $argv[2];

$languages = [
	'de',
];

$pages = scandir(__DIR__ . '/../');
$pages[] = 'page-header-navbar.php';
$pages[] = 'page-footer.php';

foreach($languages as $language) {
	foreach ($pages as $page) {
		if (substr($page, 0, 5) === 'page-') {
			$pageName = substr($page, 5, -4);

			$ch = curl_init();
			curl_setopt(
				$ch,
				CURLOPT_URL,
				sprintf(
					'http://www.transifex.com/api/2/project/nextcloud-website/resource/%sjson/stats/%s',
					$pageName,
					$language
				)
			);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
			curl_setopt($ch, CURLOPT_USERPWD, $userName . ':' . $password);
			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				throw new \Exception('Syncing languages: ' . curl_error($ch));
			}
			curl_close($ch);

			$jsonResponse = json_decode($result, true);
			if(isset($jsonResponse['completed']) && $jsonResponse['completed'] === '100%') {
				$ch = curl_init();
				curl_setopt(
					$ch,
					CURLOPT_URL,
					sprintf(
						'http://www.transifex.com/api/2/project/nextcloud-website/resource/%sjson/translation/%s',
						$pageName,
						$language
					)
				);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
				curl_setopt($ch, CURLOPT_USERPWD, $userName . ':' . $password);
				$result = curl_exec($ch);
				if (curl_errno($ch)) {
					throw new \Exception('Syncing languages: ' . curl_error($ch));
				}
				curl_close($ch);
				$result = json_decode($result, true);
				if(isset($result['content'])) {
					file_put_contents(__DIR__ . '/../l10n/' . $language . '/' . $pageName . '.json', $result['content']);
				}
			}
		}
	}
}