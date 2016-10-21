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
	 *
	 * @return string
	 */
	private function getCurrentLanguage() {
		if(isset($_GET['hl'])) {
			$hl = strtolower((string)$_GET['hl']);
			if(ctype_alnum($hl) && strlen($hl) === 2) {
				return $hl;
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

		// Read the translated string
		$translationFile = __DIR__ . '/l10n/'.$this->getCurrentLanguage().'/' .  $this->pageName . '.json';
		if(file_exists($translationFile)) {
			$translations = json_decode(file_get_contents($translationFile), true);
			if(isset($translations[$stringHash])) {
				return $translations[$stringHash];
			}
		}

		return $string;
	}
}
