<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/endtoend.css" rel="stylesheet">
<!--    <script>
    require(["require.config"], function() {
        require(["pages/endtoend"])
    });
    </script>-->
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<meta itemprop="image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png">
<meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png">
</head>

<div class=" background endtoend-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('End-to-end Encryption');?></h1>
            <h2><?php echo $l->t('Protecting data from source to destination');?></h2>
        </div>
    </div>
</div>

<!--<section class="claim">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 claim__container">
            <p class="claim__paragraph">
                <?php echo $l->t('Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11
                is built on these security principles to ultimately deliver a secure solution to their customers');?>
            </p>
            <div class="claim__brand">
                <div class="claim__brand__logo"></div>
                <p class="claim__brand__text">
                    <?php echo $l->t('NCC Group');?>
                </p>
            </div>
        </div>
    </div>
</section>-->
<section class="section--intro">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph">
                <?php echo $l->t('Nextcloud features an enterprise-grade, seamlessly integrated solution for end-to-end encryption. Currently in testing phase with Nextcloud 13 and planned to be stable in Nextcloud 14, it enables users to pick one or more folders on their desktop or mobile client for end-to-end encryption. Folders can be shared with other users and synced between devices but are not readable by the server.');?>
            </p>
        </div>
    </div>
</div>
</section>

<section class="section--ultimate">
<div class="container">
    <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Ultimate protection');?></h2>
    <div class="row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-server-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Nextcloud end-to-end encryption offers the ultimate protection for your data, making it suitable for your most private information. Use it to protect a copy of your passport, passwords, driver\'s license or bank account information.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Enterprises could require employees to keep a subset of the most confidential information client-side encrypted. Research, customer information or strategic documents can be guaranteed to be kept confidential.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Seamless integration and ease of use with key features like offline recovery keys, auditing and HSM support make Nextcloud End-to-end Encryption the perfect complement to other Nextcloud security features including Server-side Encryption and File Access Control.');?>
            </p>
        </div>
    </div>
</div>
</section>

<section class="section--differences">
<div class="container-fluid banner">
    <div class="container">
    <div class="col-md-6">
        <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Unique capabilities');?></p>
        <ul>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Any number of folders can be end to end encrypted.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Easily add a new device with a strong passcode consisting of 12 dictionary words.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Secure sharing with other users without the need to enter passwords.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Efficient sharing and revoking shares without the need to re-encrypt large files.');?></li>

        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Supports a Hardware Security Module for enterprise environments which enables securely issuing new keys to users.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Supports an offline administrator recovery key to be kept in a physically separated location. Users get warned when this key is enabled.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Supports a complete audit log without compromising end to end security.');?></li>
        <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Can be combined with our File Access Control to block specific file types or files by specific user groups from uploading unless they are end-to-end encrypted.');?></li>
        </ul>
    </div>
    <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/devices.jpg">
    <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/devices_small.jpg">
    </div>
</div>
</section>

<section class="section--identity">
<div class="container">
            <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Cryptographic Identity Protection');?></h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Every user gets a unique public/private key combination when they first enable end-to-end encryption. The public key is sent to the server and signed into a certificate. The certificate is checked by the users\' other clients and used by other users to share encrypted files with the first user, based on Trust On First Use.');?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-encryption_passphrase.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-android-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6 revealOnScroll">
            <p class="section--paragraph revealOnScroll">
                <ul>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Each device of the user can aid in recovering their private key. Only if a key is lost on all devices AND the 12 secure key words are lost, the user loses access to his/her data. The optional offline administrator recovery key can still be used to re-gain access.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('By default, keys can\'t change so as to protect the identity of users from hacking if the server is compromised. If the key could change, a hacker could issue a \'new\' certificate for the user and have clients respond by re-encrypting data with the new, compromised key.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('The process enables a complete audit log, crucial for enterprise use.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('The certificate can optionally be issued by a Hardware Security Module so it is possible to issue new certificates for existing users in a secure way.');?></li>
                </ul>
            </p>

        </div>
    </div>
</section>

<section class="section--whitepaper quote">
	<div class="container">
        <div class="row">
			<div class="col-lg-8">
                <h2 class="revealOnScroll"><?php echo $l->t('Get our whitepaper');?></h2>
                <form name="whitepaper" method="post" action="<?php echo get_template_directory_uri()."/mautic-submit.php" ?>">
                    <p class="revealOnScroll"><label for="email"><?php echo $l->t('Download our End-to-end Encryption white paper!');?><br>
                    <td colspan="2">
                    <div class="">
                        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
                    </div>
                    </td>
                    <input type="hidden" name="segmentId" value="12">
                    <input class="mail revealOnScroll" type="text" name="email" maxlength="80" placeholder="Enter your email"></label> <input class="button button--large revealOnScroll" type="submit" value=" Get the white paper "></p>
                </form>
                <small><?php echo $l->t('Find the technical design (RFC) of our solution on');?> <a class="hyperlink" href="https://github.com/nextcloud/end_to_end_encryption_rfc">GitHub</a>.</small>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/endtoend-thumbnail-banner.png"/>
	</div>
</section>


<section class="section--usecases">
<div class="container">
    <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Enterprise-grade Encryption Solution');?></h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Nextcloud offers a supremely easy to use, well integrated file sync and share solution with an uniquely layered approach to security. Our solution delivers deep infrastructure integration with support for nearly any storage technology and combines it with powerful server-side encryption and end-to-end encryption in the clients, both of which can be applied in a granular way.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Rather than making it an either-or choice, businesses can rely on utmost security where it is needed but keep collaborative online document editing and full-text search on the server over the rest of the stored data.');?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 image--floated revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/encryption-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Use cases');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Users can access data on a FTP drive shared with another company; while data stored on an external S3 compatible object storage could be encrypted using server-side encryption so the storage provider has no way to compromise their security.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('And with the');?> <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><?php echo $l->t('Nextcloud File Access Control feature,</a> files from the HR department can always be enforced to be end-to-end encrypted on their clients, protecting their data from even the worst case of a full server breach. Similarly, sensitive research, customer information or strategic documents can be guaranteed to be kept even from server administrators.');?>
            </p>
        </div>
    </div>
</div>
</section>

<section class="section--technology">
<div class="container">
    <p class="section--heading-1 section--text--center revealOnScroll"><?php echo $l->t('Technical background');?></h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Below we cover some of the basics of our design. Download our white paper for more details.');?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Requirements');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('We aimed to fulfill the following business and technical criteria.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <ul>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Security properties: Never leak directory structure, filenames or file content to the server. Encrypt folders so only legitimate recipients have access, data integrity is guaranteed and authenticity can be proven. Optional central data recovery key should be possible. Users should be warned if in use.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Use widely available and tested libraries for crypto primitives, available for iOS 9+, Android 6.0+, macOS 10.9+, Windows 7+, Linux and PHP 7.0+.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Sharing on folder-level granularity must be possible to individual users. No passwords should need to be exchanged for sharing. Key exchange should be auditable. Adding devices should be easy and new devices should have access to all previously encrypted data.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('The protocol needs to support versioning in case of future changes to metadata or crypto handling. Design should support a hardware security module, giving strong authentication, tamper-resistance and a complete audit trail.');?></li>
                </ul>
            </p>
        </div>
        <div class="col-md-6 revealOnScroll">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Accepted feature loss');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('We accept losing the following features:');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <ul>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Server-side trash bin');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Server-side versioning');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Server-side search');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Server-side previews');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('File access through web interface');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Sharing to groups');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Sharing at the level of individual files');?></li>
                </ul>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/security/E2E-CreateAndSyncIdentity.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/E2E-CreateAndSyncIdentity.png" alt="in action" /></a>
        </div>
        <div class="col-md-5">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Enabling encryption');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('The encryption is based upon an asymmetric cryptographic system. Every user has exactly one private and public key pair.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('The key generation process is designed to keep the contents of the private key from the server while storing it security so it can be synced to other devices the user owns. Some other properties of the process:');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <ul>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('The user creates an identity which is signed by the server (using a certificate) and associated with their public key. Users can only have one identity, other clients will refuse to accept a new certificate following the Trust on First Use (TOFU) model. This protects data from a malicious server which tries to generate a new identity for a target user and get clients to re-encrypt the data against it.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('In case a user loses their device they can easily recover by using the mnemonic passphrase. The mnemonic passphrase can also be shown in the client settings in case the user forgets their mnemonic. Displaying the mnemonic requires the user to enter their PIN/fingerprint again on mobile devices.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('Sharing on folder-level granularity must be possible to individual users. No passwords should need to be exchanged for sharing. Key exchange should be auditable. Adding devices should be easy and new devices should have access to all previously encrypted data.');?></li>
                    <li class="revealOnScroll"><i class="fa-check fa"></i> <?php echo $l->t('The protocol needs to support versioning in case of future changes to metadata or crypto handling. Design should support a hardware security module, giving strong authentication, tamper-resistance and a complete audit trail.');?></li>
                </ul>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 revealOnScroll">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/security/E2E-EncryptFoldersAndAddFiles.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/security/E2E-EncryptFoldersAndAddFiles.png" alt="in action" /></a>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph__tittle revealOnScroll"><?php echo $l->t('Encrypting files');?></p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Creating an end-to-end encrypted folder is done by flagging an empty folder as end-to-end encrypted, creating metadata, encrypting and uploading it. The process is protected by locking, with the client requesting a lock from the server and releasing it again after all changes are finished and uploaded.');?>
            </p>
            <p class="section--paragraph revealOnScroll">
                <?php echo $l->t('Files are each encrypted with their own, unique key, which is stored in the metadata file. All data in the metadata file is, in turn, securely encrypted and files names and directory structures are also hidden from the server using a unique UUID as name for each file.');?>
            </p>
        </div>
    </div>
</div>

</section>
