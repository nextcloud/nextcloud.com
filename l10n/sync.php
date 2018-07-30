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
 * This file syncs the translated json files into a folder per language,
 * for example all json pages (like about.json, buy.json etc) into l10n/de
 * for German.
 *
 * Usage: php sync.php <username> <password>
 *
 * As username you have to give 'api' and as password the token for Transifex
 * as it no longer lets you use username/password for the API.
 *
 */

if(count($argv) !== 3) {
        die('Not executed in the right format.');
}

$userName = $argv[1];
$password = $argv[2];

$languages = [
        'de','pt_BR','es','fr_FR','nl','es_MX','ru','it'
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
                                        'https://www.transifex.com/api/2/project/nextcloud-website/resource/%sjson/stats/%s',
                                        $pageName,
                                        $language
                                )
                        );
//             echo('resource is '.$pageName.' and language is '.$language."\n");
//             echo('so the curl URL is: https://www.transifex.com/api/2/project/nextcloud-website/resource/'.$pageName.'json/stats/'.$language."\n");

                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                        curl_setopt($ch, CURLOPT_USERPWD, $userName . ':' . $password);
                        $result = curl_exec($ch);
                        if (curl_errno($ch)) {
                                throw new \Exception('Syncing languages: ' . curl_error($ch));
                        }
                        curl_close($ch);
                        $jsonResponse = json_decode($result, true);

//                      echo('translation percentage completed and reviewed for page: '.$pageName.' and language: '.$language.' is: '.$jsonResponse['completed'].' completed'.' and '.$jsonResponse['reviewed_percentage'].' reviewed'."\n".'If both are 100%, we proceed to sync the page.'."\n\n");

                        if(isset($jsonResponse['completed']) && $jsonResponse['completed'] === '100%' && $jsonResponse['reviewed_percentage'] === '100%') {
//                              echo('syncing page: '.$pageName.' for language: '.$language."\n");
                                $ch = curl_init();
                                curl_setopt(
                                        $ch,
                                        CURLOPT_URL,
                                        sprintf(
                                                'https://www.transifex.com/api/2/project/nextcloud-website/resource/%sjson/translation/%s',
                                                $pageName,
                                                $language
                                        )
                                );
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                                curl_setopt($ch, CURLOPT_USERPWD, $userName . ':' . $password);
                                $result = curl_exec($ch);
//                              echo('We have configured curl now.'."\n");

                                if (curl_errno($ch)) {
                                        throw new \Exception('Syncing languages: ' . curl_error($ch));
                                }
                                curl_close($ch);
//                              echo('Dumping the result below.'."\n");
//                              echo(var_dump($result));
                                $result = json_decode($result, true);
//                              echo("\n".'Dumping the result after json_decode below.'."\n");
//                              echo(var_dump($result));
//                              echo("\n".'Content for page: '.$pageName.' and language: '.$language.' is: '.$result['content']."\n\n");
                                if(isset($result['content'])) {
                                        file_put_contents(__DIR__ . '/../l10n/' . $language . '/' . $pageName . '.json', $result['content']);
                                }
                        }
                }
        }
}
