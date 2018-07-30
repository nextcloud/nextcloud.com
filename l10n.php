<?php

class L10N {
	/** @var string */
	private $pageName;
	/** @var array */
	private $baseTranslations = null;
	/** @var bool */
	private $changed = false;
	/** @var array */
	private $requestedStrings = [];
	/** @var int */
	private $countBefore = 0;

	/**
	 * @param string $pageName
	 */
	public function __construct($pageName) {
		$this->pageName = $pageName;
	}

	/**
	 * Clean-up unused strings in the JSON file
	 */
	public function __destruct() {
		if($this->changed === true || $this->countBefore !== count($this->requestedStrings)) {
			file_put_contents($this->getBaseTranslationFilePath(), json_encode($this->requestedStrings, JSON_PRETTY_PRINT));
		}
	}

	/**
	 * @return string
	 */
	private function getBaseTranslationFilePath() {
		return $baseTranslationFile = __DIR__ . '/l10n/base/' . $this->pageName . '.json';
	}

	/**
	 * Gets the currently used language either from the hl parameter or the current domain
	 * Checks if the length is either 2 or 5 and if it is either alphanumeric or matches the xx_XX format
	 *
	 * @return string
	 */
	private function getCurrentLanguage() {
		$path = parse_url(site_url())['path'];
		$language = explode('/', substr($_SERVER['REQUEST_URI'], strlen($path)));
		if(isset($language[1])) {
            if(strlen($language[1]) === 2 || strlen($language[1]) === 5) {
                if(ctype_alnum($language[1]) || preg_match("/^[a-z]{2}_[A-Z]{2}/",$language[1])) {
                    return $language[1];
                }
			}
		}

		return 'en';
	}

	public function t($string) {
		$baseTranslationFile = $this->getBaseTranslationFilePath();
		if(!file_exists($baseTranslationFile)) {
			file_put_contents($baseTranslationFile, json_encode([]));
		}

		$stringHash = md5($string);

		// If the string doesn't yet exist to translate: Create it
		if($this->baseTranslations === null) {
			$this->baseTranslations= json_decode(file_get_contents($baseTranslationFile), true);
			$this->countBefore = count($this->baseTranslations);
			if (!isset($this->baseTranslations[$stringHash])) {
				$this->baseTranslations[$stringHash] = $string;
				$this->changed = true;
			}
		}
		$this->requestedStrings[$stringHash] = $string;

		// Read the translated string if 100% translated
		$translationFile = __DIR__ . '/l10n/'.$this->getCurrentLanguage().'/' .  $this->pageName . '.json';
		if(file_exists($translationFile)) {
			$originalFile = json_decode(file_get_contents(__DIR__ . '/l10n/base/' . $this->pageName . '.json'), true);
			$translationFile = json_decode(file_get_contents($translationFile), true);

			if(!is_array($translationFile) || !is_array($originalFile)) {
				return $string;
			}

			if(count(array_diff_key($translationFile, $originalFile)) > 0) {
				return $string;
			}

			if(isset($translationFile[$stringHash])) {
				return $translationFile[$stringHash];
			}
		}

		return $string;
	}
}
