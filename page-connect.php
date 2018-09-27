<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/generic.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>

<div class="background generic-background">
    <img class="pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/empty1x1.png" alt="">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1><?php echo $l->t('Connect your Nextcloud!');?></h1>
        </div>
    </div>
</div>

<section class="content">
<div class="container">

    <div class="row col-md-12">
        <p><?php echo $l->t('Create your own private, secure “Dropbox” with an old laptop and an internet connection with <em>Nextcloud Proxy</em>.');?></p>
            <p><?php echo $l->t('Access your files from any device, anywhere at any time, and collaborate with anyone – all in software completely within your control.');?></p>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5 no-underline">
                    <!--<iframe width="100%" height="360" src="https://www.youtube.com/embed/TBD?rel=0" frameborder="0" allowfullscreen></iframe>-->
            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/misc/oC-proxy.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/misc/oC-proxy_wee.png" class="img-responsive" alt="Nextcloud Proxy" /></a>
        </div>
        <div class="col-lg-8 col-md-7">
            <h2><?php echo $l->t('What is it?');?></h2>
                    <p><?php echo $l->t('<strong>Nextcloud</strong>: Nextcloud is open source software that you install on your computer to provide anytime, anywhere access to your files via mobile devices, desktop sync clients and web browsers. Nextcloud is managed by you, entirely within your control, allowing you access to files on your storage, no strings attached. Provided in an easy to install virtual appliance (or as bits to be installed and configured), Nextcloud can be up and running on your computer in 3 easy steps: ');?><a href="<?php echo home_url('install') ?>"><?php echo $l->t('download the virtual appliance</a>, import it into your preferred hypervisor, and boot.');?></p>
                    <p><?php echo $l->t('<strong>Nextcloud Proxy</strong>: Simply put, Nextcloud Proxy enables you to take a laptop and an Internet connection, connect to your privately hosted Nextcloud from anywhere, without requiring you to make any changes to your local network settings – no router configuration, no DNS entries, no domain name registration. The Nextcloud Proxy service relies on a partner who provides the service for a fee. Right now, there is one partner, <a href="https://pagekite.net/" target="_blank">pageKite</a>. More are coming!');?></p>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $l->t('How does it work?');?></h2>
            <p><?php echo $l->t('Nextcloud Proxy is both an app inside Nextcloud and a service. The Nextcloud Proxy app is installed in Nextcloud and configured in the Nextcloud admin panel. From the Nextcloud Proxy app, an admin can sign up for an Nextcloud Proxy account with one of the supported providers. Once the account is confirmed, the Nextcloud app initiates and maintains a secure connection to the Nextcloud Proxy service. The service in turn provides a recognizable URL on the web that, when accessed via Nextcloud clients, connects users back to their Nextcloud server residing behind their router on a network at home or at work. Once the server is connected, simply download the desktop sync client from Nextcloud.org, or get the Nextcloud apps from the Apple App Store or Google Play, and get started.');?></p>
        </div>
    </div>
    <!--<div class="row">
            <div class="col-md-12">
                    Learn more in the Nextcloud <a href="<?php echo $DOCUMENTATION_ADMIN; ?>TBD">administrator documentation</a> and in the questions and answers section below.
            </div>
    </div>-->


    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $l->t('Questions and answers');?></h2>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('How about security?');?></h3>
            <p><?php echo $l->t('All of the security associated with Nextcloud is at work when you use the Nextcloud Proxy service. Nextcloud is still run by you, on your computer. You can monitor what is happening, manage accounts, check the logs, use your own SSL certificates, enable automatic updates and more. The appliance pre-configures much of Nextcloud for you. All you have to do is start the appliance, complete the setup and log into the web URL it provides. The Nextcloud browser wizard at the provided URL will step you through logging in for the first time. Of course, as you configure accounts for others to share on your Nextcloud, we recommend you use secure and complex passwords for all accounts.');?></p>
            <p><?php echo $l->t('However, we want to be completely transparent about the nature of Nextcloud Proxy. The Nextcloud Proxy app is distributed and the source code is in the Nextcloud repository for review in GitHub. The Nextcloud Proxy service is provided by PageKite. All files transferred through the Nextcloud Proxy service do pass through its data centers, and for a brief time are readable as the Nextcloud Proxy service transfers incoming requests from SSL to <a href="https://pagekite.net/wiki/Floss/PageKiteProtocol/">a pageKite protocol</a> on the way to the private Nextcloud Server. In theory, if someone wanted to, all files transferred to and from devices using the Nextcloud Proxy service could – for that brief instant of time that they are being moved from the SSL terminated connection to the tunnel in memory – be read by someone with Nextcloud Proxy service server access. While the risk is small, and our terms and conditions cover this situation, it is something we wanted to be clear about. However, there is no way for the Nextcloud Proxy service to access your data on your private server, it can only broker a connection with your private server.');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('How are Nextcloud Proxy and the Nextcloud Server Appliance different than Nextcloud?');?></h3>
            <p><?php echo $l->t('The Nextcloud Server appliance contains the Nextcloud server, an OS and a database, provided in a pre-configured, easy to download, fast to set up package. Nextcloud Proxy is an app inside the Nextcloud appliance that enables an admin to sign up for and manage use of the Nextcloud Proxy Service. This service is simply a connection broker that connects users outside of a network firewall to an Nextcloud instance behind the firewall, with no special configuration required.');?></p>
            <p><?php echo $l->t('Of course, if you already have Nextcloud 8.1 up and running, the Nextcloud Proxy app is available in <a href="https://apps.nextcloud.com/content/show.php?content=173903">the Nextcloud app store</a> and can be installed easily in an existing Nextcloud instance to achieve the same overall result.');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('What if I Want to Disconnect my Nextcloud Proxy Account?');?></h3>
            <p><?php echo $l->t('If, at any time, you want to stop using Nextcloud Proxy, simply use the stop button in the GUI and then disable the app in the Nextcloud admin interface and it will stop working permanently.');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('Does Nextcloud Proxy work with Nextcloud Standard or Enterprise Subscriptions?');?></h3>
            <p><?php echo $l->t('No, the Nextcloud Proxy app and service are not designed to work with Nextcloud subscriptions. The service architecture and bandwidth is intended for smaller Nextcloud instances and sized accordingly.');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('What if I want to dig a little deeper?');?></h3>
            <p><?php echo $l->t('While we provide Nextcloud Proxy and the Nextcloud appliance to get you up and running fast, it is in no way limited. If you want to start configuring the components in the appliance for your use case, feel free. If you want to tune the database, or set up your own static IP address and domain name, and disable Nextcloud connect? Go for it! And, for a real challenge, why not try an app from apps.nextcloud.com, or write your own? Nextcloud chat, Nextcloud maps, Nextcloud video streaming, Nextcloud audio streaming – these are all apps built by the community. With Nextcloud, the possibilities to explore are endless.');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('');?></h3>
            <p><?php echo $l->t('');?></p>
            </div>
            <div class="col-md-12">
            <h3><?php echo $l->t('');?></h3>
            <p><?php echo $l->t('');?></p>
            </div>
    </div>
</div>
</section>
