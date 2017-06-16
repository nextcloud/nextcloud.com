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
6. In `Settings > Reading` assign a static front page of 'homepage'
7. In `Settings > Permalink` assign the `Post name` setting

## Development Process

* Fork the repository
* Setup your local development environment using the instructions above, changing the remote origin url
* Submit a pull request to master, on github once the feature/bugfix is complete (this is so we can test it on the staging server)
* After review (usually following one or two thumbs up), a developer will permit the merge into master
* Code will be pulled onto staging.nextcloud.com for testing (this has to be set up still but the goal is to have this work automatically) 
* Once the test looks good, staging will be cloned over to nextcloud.com - this is handled by @jospoortvliet or the Nextcloud sysadmins including @LukasReschke 

### Notes

* Please don't commit straight into the master or live branches, these branches should remain as stable as possible, and changes should be discussed amongst the community.
* If you are chaning SCSS files during development, following command for automatic compilation is recommended:
  * `sass --watch [location to scss files]`
