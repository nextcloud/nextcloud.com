<?php
// Strings used through nextcloud.com

/* VERSIONS */
$VERSIONS_SERVER_MAJOR_STABLE = '19';
$VERSIONS_SERVER_FULL_STABLE = '19.0.1';
$VERSIONS_SERVER_MAJOR_DEVELOPMENT = '20';
$VERSIONS_SERVER_MAJOR_DEV_DOCS = '19'; // Used in dev docs links
$VERSIONS_CLIENT_DESKTOP_STABLE_FULL = '3.0.1';
$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT = '3.0'; // For use in documentation link

/* DOCUMENTATION */
$DOCUMENTATION_BASE = 'https://docs.nextcloud.com';
$DOCUMENTATION_DEVELOPER = $DOCUMENTATION_BASE.'/server/latest/developer_manual/';
$DOCUMENTATION_ADMIN = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'/admin_manual/';
$DOCUMENTATION_USER = $DOCUMENTATION_BASE.'/server/latest/user_manual/';
$DOCUMENTATION_BUGTRACKER = $DOCUMENTATION_BASE.'/server/latest/developer_manual/prologue/bugtracker/';
$DOCUMENTATION_CLIENT_DESKTOP = $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT;
// $VERSIONS_VM = '9.0.2-1.1-201605101540';
// $VM_UBUNTU_RELEASE = '14.04';

/* DOWNLOADS */
$NEXTCLOUD_GPG = 'https://nextcloud.com/nextcloud.asc';

// Desktop client stable
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.nextcloud.com/desktop/releases/';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN = $DOWNLOAD_CLIENT_DESKTOP_BASE.'Windows/latest';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC = $DOWNLOAD_CLIENT_DESKTOP_BASE.'Mac/Installer/latest';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC_LEGACY = $DOWNLOAD_CLIENT_DESKTOP_BASE.'Mac/Installer/latest-legacy';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX = $DOWNLOAD_CLIENT_DESKTOP_BASE.'Linux/latest';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES = 'https://github.com/nextcloud/desktop';
// $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'.asc';

// Desktop client testing
$VERSIONS_CLIENT_DESKTOP_TESTING = '';
$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.nextcloud.com/desktop/prereleases/';
$DOWNLOAD_CLIENT_DESKTOP_TEST_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'Windows/Nextcloud-2.7.0.15641-rc1-20200729.exe';
$DOWNLOAD_CLIENT_DESKTOP_TEST_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'Mac/Nextcloud-qt5.12.9-2.7.0.20200729rc1.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'Linux/Nextcloud-2.7.0.20200729-rc1-x86_64.AppImage';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX = '';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES= $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'';
// $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES.'.asc';

// Server
$DOWNLOAD_SERVER_BASE = 'https://download.nextcloud.com/server/';

// stable
$DOWNLOAD_SERVER_STABLE_TAR = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2';
$DOWNLOAD_SERVER_STABLE_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.md5';
$DOWNLOAD_SERVER_STABLE_TAR_SHA256 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.sha256';
$DOWNLOAD_SERVER_STABLE_TAR_PGP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.asc';
$DOWNLOAD_SERVER_PACKAGES_STABLE = 'https://download.nextcloud.com/download/repositories/stable/nextcloud';
$DOWNLOAD_SERVER_STABLE_ZIP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip';
$DOWNLOAD_SERVER_STABLE_ZIP_MD5 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.md5';
$DOWNLOAD_SERVER_STABLE_ZIP_SHA256 = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.sha256';
$DOWNLOAD_SERVER_STABLE_ZIP_PGP = $DOWNLOAD_SERVER_BASE.'releases/nextcloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.asc';

// Daily
$DOWNLOAD_SERVER_DAILY_TAR = $DOWNLOAD_SERVER_BASE.'daily/latest.tar.bz2';
$DOWNLOAD_SERVER_DAILY_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/latest.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_DAILY = 'https://download.nextcloud.com/download/repositories/nightly/nextcloud';


// Testing
$DOWNLOAD_SERVER_PACKAGES_TESTING = 'https://download.nextcloud.com/server/prereleases/';
$SERVER_TESTING_VERSION =''; // nothing to test -> leave it empty
$DOWNLOAD_SERVER_TAR_TESTING ='https://download.nextcloud.com/server/prereleases/nextcloud-19.0.0RC2.tar.bz2';
$DOWNLOAD_SERVER_ZIP_TESTING ='https://download.nextcloud.com/server/prereleases/nextcloud-19.0.0RC2.zip';

// web installer
$DOWNLOAD_SERVER_WEB_INSTALLER = 'https://download.nextcloud.com/server/installer/setup-nextcloud.php';

// VM
$DOWNLOAD_VM_BASE = 'http://download.nextcloud.com/production/vm/';

$DOWNLOAD_VM_OVA   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.ova.zip';
$DOWNLOAD_VM_QCOW2 = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.qcow2.zip';
$DOWNLOAD_VM_RAW   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.raw.zip';
$DOWNLOAD_VM_VHDX  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vhdx.zip';
$DOWNLOAD_VM_VMDK  = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vmdk.zip';
$DOWNLOAD_VM_VMX   = $DOWNLOAD_VM_BASE.'Ubuntu_'.$VM_UBUNTU_RELEASE.'-nextcloud-'.$VERSIONS_VM.'.vmx.zip';

// Mobile clients
$DOWNLOAD_CLIENT_MOBILE_IOS = 'https://itunes.apple.com/us/app/nextcloud/id1125420102?mt=8';
$DOWNLOAD_CLIENT_MOBILE_ANDROID = 'https://play.google.com/store/apps/details?id=com.nextcloud.client';
$DOWNLOAD_CLIENT_MOBILE_ANDROID_TALK = 'https://play.google.com/store/apps/details?id=com.nextcloud.talk2';
$DOWNLOAD_CLIENT_MOBILE_IOS_TALK = 'https://itunes.apple.com/us/app/nextcloud-talk/id1296825574';
$DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA = 'https://play.google.com/apps/testing/com.nextcloud.client';
$DOWNLOAD_CLIENT_MOBILE_FDROID = 'https://f-droid.org/packages/com.nextcloud.client/';
$DOWNLOAD_CLIENT_MOBILE_FDROID_TALK = 'https://f-droid.org/en/packages/com.nextcloud.talk2';
$DOWNLOAD_CLIENT_MOBILE_FDROID_BETA = 'https://f-droid.org/packages/com.nextcloud.android.beta/';

// Outlook Add-in
$DOWNLOAD_OUTLOOK_ADDON_FREE = 'https://www.sendent.nl/sendent-free/?lang=en';

?>
