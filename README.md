# Contributing to nextcloud.com website

Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.

## Setup of a local development environment

### [Quick docker setup](https://github.com/ma12-co/docker-nc-web)

### Manual setup

1. Install Wordpress >= 3.8.1
  * Must be in the document root of the webserver (otherwise images won't load :( )
  * Enter what you like for site title, admin user and password, none of this is stored in git
2. Setup the repository
  1. Clone the repository in a folder of your choice
    * `git clone git@github.com:nextcloud/nextcloud.com next`
  2. In the wordpress installation in the `wp-content/themes` folder, create a link to the folder you just cloned the repository in under the name 'next'
3. Activate the theme in `Appearance > Themes`
4. Import the website `content.xml` file
  * First install the Wordpress Import Plugin (via `Tools > Import > Wordpress Import` > `Install Plugin`)
  * Select the `content.xml` file from the repository and click upload
  * Select Import
5. Copy over `config.php.sample` to `config.php` and adjust settings as necessary (defaults will work just fine for local environments)

## Development Process

* Fork the repository
* Setup your local development environment using the instructions above, changing the remote origin url
* Submit a pull request to master, on github once the feature/bugfix is complete
* After review (usually following one or two thumbs up), somebody from Nc marketing merges (typically @jospoortvliet )
* Deployment on nextcloud.com is handled manually by @jospoortvliet or the Nextcloud sysadmins including @LukasReschke

### Notes

* If you are changing SCSS files during development, following command for automatic compilation is recommended:
  * `sass --watch [location to scss files]`
* Only Nc marketing merges things

## Testing
The list below covers most pages on our site, copy it in a PR that needs site-wide testing, so one can just quickly click the links and check all pages. This is assuming you have a local setup on 127.0.0.1 for testing - we sadly have no working staging server.

- [ ] http://127.0.0.1/wordpress/
- [ ] http://127.0.0.1/wordpress/files/
- [ ] http://127.0.0.1/wordpress/groupware/
- [ ] http://127.0.0.1/wordpress/talk/
- [ ] http://127.0.0.1/wordpress/athome/
- [ ] http://127.0.0.1/wordpress/install/
- [ ] http://127.0.0.1/wordpress/changelog/
- [ ] http://127.0.0.1/wordpress/secure/
- [ ] http://127.0.0.1/wordpress/encryption/
- [ ] http://127.0.0.1/wordpress/endtoend/
- [ ] http://127.0.0.1/wordpress/unified-search/
- [ ] http://127.0.0.1/wordpress/file-drop/
- [ ] http://127.0.0.1/wordpress/sharing/
- [ ] http://127.0.0.1/wordpress/collaboraonline/
- [ ] http://127.0.0.1/wordpress/outlook/
- [ ] http://127.0.0.1/wordpress/workflow/
- [ ] http://127.0.0.1/wordpress/industries/
- [ ] http://127.0.0.1/wordpress/industries/healthcare
- [ ] http://127.0.0.1/wordpress/industries/government
- [ ] http://127.0.0.1/wordpress/industries/education
- [ ] http://127.0.0.1/wordpress/industries/finance
- [ ] http://127.0.0.1/wordpress/industries/globalscale
- [ ] http://127.0.0.1/wordpress/industries/agencies
- [ ] http://127.0.0.1/wordpress/industries/legal
- [ ] http://127.0.0.1/wordpress/industries/engineering
- [ ] http://127.0.0.1/wordpress/dashboard/
- [ ] http://127.0.0.1/wordpress/search/
- [ ] http://127.0.0.1/wordpress/clients/
- [ ] http://127.0.0.1/wordpress/storage/
- [ ] http://127.0.0.1/wordpress/monitoring/
- [ ] http://127.0.0.1/wordpress/enterprise/
- [ ] http://127.0.0.1/wordpress/pricing/
- [ ] http://127.0.0.1/wordpress/enterprise/buy/
- [ ] http://127.0.0.1/wordpress/enterprise/order/
- [ ] http://127.0.0.1/wordpress/partners/
- [ ] http://127.0.0.1/wordpress/providers/
- [ ] http://127.0.0.1/wordpress/providers/apply/
- [ ] http://127.0.0.1/wordpress/compare/
- [ ] http://127.0.0.1/wordpress/about/
- [ ] http://127.0.0.1/wordpress/press/
- [ ] http://127.0.0.1/wordpress/contact/
- [ ] http://127.0.0.1/wordpress/support/
- [ ] http://127.0.0.1/wordpress/team/
- [ ] http://127.0.0.1/wordpress/healthcare/
- [ ] http://127.0.0.1/wordpress/education/
- [ ] http://127.0.0.1/wordpress/devices/
- [ ] http://127.0.0.1/wordpress/box/
- [ ] http://127.0.0.1/wordpress/events/
- [ ] http://127.0.0.1/wordpress/events/meetups/
- [ ] http://127.0.0.1/wordpress/events/conference-program/
- [ ] http://127.0.0.1/wordpress/events/conference-program/speaking/
- [ ] http://127.0.0.1/wordpress/contribute/
- [ ] http://127.0.0.1/wordpress/design/
- [ ] http://127.0.0.1/wordpress/contributors/
- [ ] http://127.0.0.1/wordpress/partners/
- [ ] http://127.0.0.1/wordpress/release-channels/
- [ ] http://127.0.0.1/wordpress/conf/
- [ ] http://127.0.0.1/wordpress/confinfo/
- [ ] http://127.0.0.1/wordpress/security/
- [ ] http://127.0.0.1/wordpress/security/advisories/
- [ ] http://127.0.0.1/wordpress/security/threat-model/
- [ ] http://127.0.0.1/wordpress/connect/
- [ ] http://127.0.0.1/wordpress/federation/
- [ ] http://127.0.0.1/wordpress/securesharing/
- [ ] http://127.0.0.1/wordpress/spreedbox/
- [ ] http://127.0.0.1/wordpress/code-of-conduct/
- [ ] http://127.0.0.1/wordpress/trademarks/
- [ ] http://127.0.0.1/wordpress/privacy/
- [ ] http://127.0.0.1/wordpress/impressum/

