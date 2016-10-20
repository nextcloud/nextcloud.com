<?php

class L10N {
	private function getCurrentLanguage() {
		// We detect the current language on the hl parameter
		if(isset($_GET['hl'])) {
			$hl = strtolower((string)$_GET['hl']);
			if(ctype_alnum($hl) && strlen($hl) === 2) {
				return $hl;
			}
		}

		return 'en';
	}

	public function t($string) {
		$baseTranslationFile = __DIR__ . '/l10n/base/' . get_post()->post_name . '.json';
		if(!file_exists($baseTranslationFile)) {
			file_put_contents($baseTranslationFile, json_encode([]));
		}

		// If the string doesn't yet exist to translate: Create it
		$baseTranslations = json_decode(file_get_contents($baseTranslationFile), true);
		if(!isset($baseTranslationFile[$string])) {
			$baseTranslations[$string] = $string;
			file_put_contents($baseTranslationFile, json_encode($baseTranslations, JSON_PRETTY_PRINT));
		}

		// Read the translated string
		$translationFile = __DIR__ . '/l10n/'.$this->getCurrentLanguage().'/' .  get_post()->post_name . '.json';
		if(file_exists($translationFile)) {
			$translations = json_decode(file_get_contents($translationFile), true);
			if(isset($translations[$string])) {
				return $translations[$string];
			}
		}

		return $string;
	}
}

$l = new L10N();