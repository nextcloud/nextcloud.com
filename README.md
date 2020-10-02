# Contributing to nextcloud.com website

Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.

## Setup of a local development environment

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
* Submit a pull request to master, on github once the feature/bugfix is complete (this is so we can test it on the staging server)
* After review (usually following one or two thumbs up), a developer will permit the merge into master
* Code will be pulled onto staging.nextcloud.com for testing (this has to be set up still but the goal is to have this work automatically)
* Once the test looks good, staging will be cloned over to nextcloud.com - this is handled by @jospoortvliet or the Nextcloud sysadmins including @LukasReschke

### Notes

* Please don't commit straight into the master or live branches, these branches should remain as stable as possible, and changes should be discussed within the community.
* If you are changing SCSS files during development, following command for automatic compilation is recommended:
  * `sass --watch [location to scss files]`
  
## Testing
The list below covers most pages on our site, copy it in a PR that needs site-wide testing, so one can just quickly click the links and check all pages:

- [ ] https://nextcloud.com/?staging=true
- [ ] https://nextcloud.com/files/?staging=true
- [ ] https://nextcloud.com/groupware/?staging=true
- [ ] https://nextcloud.com/talk/?staging=true
- [ ] https://nextcloud.com/athome/?staging=true
- [ ] https://nextcloud.com/install/?staging=true
- [ ] https://nextcloud.com/changelog/?staging=true
- [ ] https://nextcloud.com/secure/?staging=true
- [ ] https://nextcloud.com/globalscale/?staging=true
- [ ] https://nextcloud.com/file-drop/?staging=true
- [ ] https://nextcloud.com/sharing/?staging=true
- [ ] https://nextcloud.com/collaboraonline/?staging=true
- [ ] https://nextcloud.com/outlook/?staging=true
- [ ] https://nextcloud.com/workflow/?staging=true all
- [ ] https://nextcloud.com/clients/?staging=true all
- [ ] https://nextcloud.com/storage/?staging=true all
- [ ] https://nextcloud.com/monitoring/?staging=true all
- [ ] https://nextcloud.com/enterprise/?staging=true
- [ ] https://nextcloud.com/pricing/?staging=true
- [ ] https://nextcloud.com/enterprise/buy/?staging=true
- [ ] https://nextcloud.com/enterprise/order/?staging=true
- [ ] https://nextcloud.com/partners/?staging=true
- [ ] https://nextcloud.com/providers/?staging=true
- [ ] https://nextcloud.com/providers/apply/?staging=true
- [ ] https://nextcloud.com/compare/?staging=true
- [ ] https://nextcloud.com/about/?staging=true
- [ ] https://nextcloud.com/press/?staging=true
- [ ] https://nextcloud.com/contact/?staging=true
- [ ] https://nextcloud.com/support/?staging=true
- [ ] https://nextcloud.com/team/?staging=true
- [ ] https://nextcloud.com/healthcare/?staging=true
- [ ] https://nextcloud.com/education/?staging=true
- [ ] https://nextcloud.com/devices/?staging=true
- [ ] https://nextcloud.com/box/?staging=true
- [ ] https://nextcloud.com/events/?staging=true
- [ ] https://nextcloud.com/events/meetups/?staging=true
- [ ] https://nextcloud.com/events/conference-program/?staging=true
- [ ] https://nextcloud.com/events/conference-program/speaking/?staging=true
- [ ] https://nextcloud.com/contribute/?staging=true
- [ ] https://nextcloud.com/design/?staging=true
- [ ] https://nextcloud.com/contributors/?staging=true
- [ ] https://nextcloud.com/partners/?staging=true
- [ ] https://nextcloud.com/release-channels/?staging=true
- [ ] https://nextcloud.com/conf/?staging=true
- [ ] https://nextcloud.com/confinfo/?staging=true
- [ ] https://nextcloud.com/security/?staging=true
- [ ] https://nextcloud.com/security/advisories/?staging=true
- [ ] https://nextcloud.com/security/threat-model/?staging=true
- [ ] https://nextcloud.com/connect/?staging=true
- [ ] https://nextcloud.com/federation/?staging=true
- [ ] https://nextcloud.com/securesharing/?staging=true
- [ ] https://nextcloud.com/spreedbox/?staging=true
- [ ] https://nextcloud.com/code-of-conduct/?staging=true
- [ ] https://nextcloud.com/trademarks/?staging=true
- [ ] https://nextcloud.com/privacy/?staging=true
- [ ] https://nextcloud.com/impressum/?staging=true

