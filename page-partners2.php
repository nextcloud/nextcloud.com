<?php
/*
  Template Name: Partners New Template
 */
?>

<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/partners.css?v=2" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/partners.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/pages/partners.js"></script>
</head>

<section class="hero-section">
    <div class="background partners-background">
        <div class="container">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Nextcloud Partners'); ?></h1>
                <h2><?php echo $l->t('We team up with the best to provide you what you need.'); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud works with a variety of partners in our ecosystem, building on, providing services around and complementing our product.'); ?></p>
                <div class="text-center">
                    <a class="button button--blue" href="https://nextcloud.com/partnerprogram/">Became a Partner</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-navigation">
                    <ul class="custom-partner-tabs">
                        <li>
                            <button class="tab-link active" id="solution-tab">Solution providers</button>
                        </li>
                        <li>
                            <button class="tab-link" id="technology-tab">Technology Partners</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="desc-text">
                    <p>If you want to ensure your Nextcloud contributes to your business success, we recommend working locally with one of our partners which have the full backing of Nextcloud GmbH. These partners can help you do a proof of concept and purchase, deploy, optimize and maintain your Nextcloud.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="filters-holder">
                    <div class="input-outer">
                        <div class="input-holder selection">
                            <span class="label">Services</span>
                            <div class="inner">
                                <input id="services" type="text" value="All development" readonly="readonly" data-value="all-dev"/>
                            </div>
                        </div>
                        <ul class="select-list service-list">
                            <li data-service="all-dev">All development</li>
                            <li data-service="app">App development</li>
                            <li data-service="software">Software development</li>
                            <li data-service="system">System development</li>
                        </ul>
                    </div>
                    <div class="input-outer">
                        <div class="input-holder selection">
                            <span class="label">Certificate</span>
                            <div class="inner">
                                <input id="certificates" type="text" value="All Certificates" readonly="readonly" data-value="all-cert"/>
                            </div>
                        </div>
                        <ul class="select-list cert-list">
                            <li data-certificate="all-cert">All Certificates</li>
                            <li data-certificate="platinum">Platinum</li>
                            <li data-certificate="gold">Gold</li>
                            <li data-certificate="silver">Silver</li>
                            <li data-certificate="bronze">Bronze</li>
                        </ul>
                    </div>
                    <div class="input-outer">
                        <div class="input-holder selection">
                            <span class="label">Show</span>
                            <div class="inner">
                                <input id="country" type="text" value="All" readonly="readonly" data-value="all-comp" placeholder="All"/>
                            </div>
                        </div>
                        <ul class="select-list check-list">
                            <li>
                                <input type="checkbox" name="country" value="all-comp" id="chk01"/><label for="chk01">All</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="international" id="chk02"/><label for="chk02">Only international companies</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="us" id="chk03"/><label for="chk03">US</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="uk" id="chk04"/><label for="chk04">UK</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="germany" id="chk05"/><label for="chk05">Germany</label>
                            </li>
                        </ul>
                    </div>
                    <div class="input-outer">
                        <div class="search-holder">
                            <input type="text" placeholder="Search" id="filtersearch"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-partner-tab-content">
                    <div class="custom-tab-panel active" data-panel="solution-tab">
                        <div class="partners-holder">
                            <div class="partner-col" data-type="platinum system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/8soft.png" alt="8Soft logo" title="8Soft"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>8Soft</h4>
                                        <p>8Soft is a value added distributor focused on cybersecurity solutions. The portfolio consists of explicitly selected solutions that have passed the 8Soft tests. In this way, the distributor also secures the trust of its resellers (IT retailers and system integrators). 8Soft offers sales and technical support through fixed contact persons who are also available at any time for customer appointments. There is also a partner programme, marketing support and project promotion via MDF funds. The idea of a jointly successful and strong (partner) community "fighting" against cybercrime is also in the 8Soft slogan: "IT Security, that's us."</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.8soft.de/portfolio/nextcloud/nextcloud-enterprise" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/adfinis.png" alt="Adfinis SyGroup logo" title="Adfinis SyGroup"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Adfinis Sygroup</h4>
                                        <p>Adfinis SyGroup supports clients from the private and public sectors in the planning, testing and implementation of tailor-made software projects. The core competences of Adfinis SyGroup AG are open source engineering & devops, 24/7 services & support, managed services and open source development.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://adfinis-sygroup.ch/en" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arawa.png" alt="Arawa logo" title="Arawa"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arawa</h4>
                                        <p>8Soft is a value added distributor focused on cybersecurity solutions. The portfolio consists of explicitly selected solutions that have passed the 8Soft tests. In this way, the distributor also secures the trust of its resellers (IT retailers and system integrators). 8Soft offers sales and technical support through fixed contact persons who are also available at any time for customer appointments. There is also a partner programme, marketing support and project promotion via MDF funds. The idea of a jointly successful and strong (partner) community "fighting" against cybercrime is also in the 8Soft slogan: "IT Security, that's us."</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.arawa.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arulogic.png" alt="Arulogic Labs logo" title="Arulogic Labs"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arulogic Labs</h4>
                                        <p>
                                            Arulogic Labs is an IT managed services provider in Indonesia. Our specialty is the implementation of on-premises and cloud based systems.<br>
                                            We sell Nextcloud Enterprise with local support and can fully implement and operate a Nextcloud environment with all the infrastructure on which it will run.    
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://arulogic.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/b1-systems.png" alt="B1 Systems logo" title="B1 Systems"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>B1 Systems</h4>
                                        <p>B1 Systems provides consulting, managed service and support, as well as trainings, subscriptions and development for individual and professional Linux & OpenSource solutions.<br>
                                            Any solution is precisely tailored to our customers' requirements. Our areas of expertise include private and public cloud, containerization, monitoring, patch management, automation and video conferencing. It is entirely up to you to decide how our team of more than 140 certified Linux and Open Source specialists assist you.<br>
                                            Count on B1 Systems to provide support and managed service whenever and wherever you need.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.b1-systems.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold software" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bitbone.png" alt="Bitbone logo" title="Bitbone"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Bitbone</h4>
                                        <p>
                                            Bitbone was founded in 2001 in Germany, as on Open-Source (Linux) services provider, offering secure and powerful infrastructure & IT services. They have 20 years of experience with Linux, Kaspersky products and expertise that ranges from standards such as server technologies, operating systems, monitoring, firewalls, endpoint security to new technologies such as automation, containerization and cyber-security.<br> 
                                            Bitbone aims further development for their customers‘ strategic projects and business.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.bitbone.de/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bloosite.png" alt="Bloosite logo" title="Bloosite"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Bloosite</h4>
                                        <p>
                                            Bloosite helps SMEs keep up with rapidly changing markets by providing convenient IT solutions to suit their evolving business models. Companies benefit from a ready-to-use package with a usage-dependent pricing model as well as from a sound knowledge in IT-security. The innovative Swiss company’s comprehensive offering is available from local installation to highly secured Swiss data centers.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://bloosite.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bktech.png" alt="BK Tech logo" title="BK Tech"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>BK Tech</h4>
                                        <p>
                                            BK Tech is your Brazilian partner for implementing Nextcloud in simple or complex environments, in public or private companies, with qualified professionals and processes of excellence. We are a family owned and operated business and have several significant customers, including in the federal government. But all customers are important to us, no matter the size! Contact us to for information about licenses and specialized services.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://bktech.com.br" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver app" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/compaso.png" alt="Compaso logo" title="Compaso"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Compaso</h4>
                                        <p>
                                            Compaso has solved a wide variety of hosting, administration and development challenges for a variety of German customers. We can set up and maintain your digital collaboration infrastructure, guaranteeing secure and reliable service on-premises or in the cloud. Contact us to find out more!
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://compaso.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="uk">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/corewin.png" alt="CoreWin logo" title="CoreWin"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>CoreWin</h4>
                                        <p>
                                            CoreWin is a distributor of software with a focus on process optimization, information security, data analysis and consulting.<br> 
                                            CoreWin’s team speaks English fluently, that’s why company works directly with software vendors to provide a quick response to all inquiries.<br>
                                            CoreWin also provides the first level of technical support for all products. Being a distributor, CoreWin carries out pre-sales and technical consultations, as well as provide implementation services.<br>
                                            CoreWin – first Core, then Win.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://corewin.com.ua/nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/dassit.png" alt="dass IT GmbH logo" title="dass IT GmbH"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>dass IT GmbH</h4>
                                        <p>
                                            dass IT GmbH in Cologne, founded in 2004 by former senior consultants of Suse Linux, is primarily a system integrator, offering support and consulting around Linux and Open Source Software. dass IT can help you build and run a private cloud infrastructure or migrate an existing ownCloud to Nextcloud.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.dass-it.de/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/daseq.png" alt="DASEQ logo" title="DASEQ"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>DASEQ</h4>
                                        <p>
                                            DASEQ is delivering Nextcloud as integral part of their OpenSource solution framework which consists of open source technology, services and training as well as security solutions.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="http://www.daseq.de/produkte/nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/fgts.png" alt="Factor group logo" title="Factor group"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Factor group</h4>
                                        <p>
                                            Factor group specializes in supplying the telecommunications industry with the world's leading equipment and technological solutions, offering consulting services, pre-design and design works, pre-sale advice, equipment installation and commissioning support, employee training, as well as after-sales service, product versions updates, equipment repair and replacement. Factor group executives have expertise in networking and information technologies market in Russia and the CIS countries since 1991.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.fgts.ru/collection/nextcloud" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/goodcloud.png" alt="The Good Cloud logo" title="The Good Cloud"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>The Good Cloud</h4>
                                        <p>
                                            The Good Cloud (based in the Netherlands) is fully committed to ensuring the privacy of all its users. They offer user-friendly and flexible subscriptions that are easy to share with multiple users. The Good Cloud is an ideal partner for professionals, offering a variety of business subscriptions and personalized services.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://thegood.cloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze app" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hansson.png" alt="Hansson IT logo" title="Hansson IT"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Hansson IT</h4>
                                        <p>
                                            The Nextcloud professionals at Hansson IT based in Sweden, have been working with Nextcloud since day one. They specialize in Linux and Virtual Machine development and are helping thousands of customers to success together with the Nextcloud VM they develop. They offer a variety of support options and virtual machine images in <a href="https://shop.hanssonit.se/product-category/virtual-machine/nextcloud-vm/" target="_blank">their shop</a>, as well as Nextcloud Enterprise licenses. You can follow <a href="https://twitter.com/tmhanssonit">@tmhanssonit on Twitter</a>.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://hanssonit.se" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hbps.png" alt="HBPS logo" title="HBPS"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>HBPS</h4>
                                        <p>
                                            We pride ourselves in listening to our clients as we believe that every customer is different and unique. Our service offering is not a one-size-fits-all solution to everyone. By truly listening to our customers we can help to customise and tailor our solutions to be fit for purpose to solve the problem at hand. HBPS is focused on helping companies take back control of what is rightly yours: your data. We want to empower our customers by helping them understand how the magic of data works and how it can help them to be future fit.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://hbps.co.za" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze app" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hostingde.png" alt="hosting.de logo" title="hosting.de"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>hosting.de</h4>
                                        <p>
                                            With more than 22 years of experience in multiple areas of professional web hosting services, hosting.de has proven to be a reliable partner for business projects, from small to enterprise-sized.<br>
                                            As an official Nextcloud Gold partner, the company provides fully managed Nextcloud hosting in one of their three data centers in Germany and operates fully GPDR compliant. One of the key elements of the company's infrastructure is a public API, which allows customers to fully integrate and automate all services from hosting.de in their own workflow.<br>
                                            Professionally trained in-house support and an extensive developer team ensure that existing services run smoothly while new technologies are integrated progressively, helping customers to reach their professional goals.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.hosting.de/managed-nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hkn.png" alt="HKN logo" title="HKN"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>HKN</h4>
                                        <p>
                                            Started in 1996 and now a team of 10 strong, HKN has been betting on scaleable, open source clusters since its inception. HKN offers bigger organizations a scaleable, HA-capable, resilient platform with Nextcloud that is hosted in their own data centers in three German cities. HKN offers optional 'hybrid' cloud solutions, with an internally, on-premises hosted Nextcloud at the customer working seamlessly with a Nextcloud hosted by HKN.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.hkn.de/nextcloud-cloud-speicher" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-tab-panel" data-panel="technology-tab">
                        <div class="partners-holder">
                            <div class="partner-col" data-type="platinum system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/8soft.png" alt="8Soft logo" title="8Soft"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>8Soft</h4>
                                        <p>8Soft is a value added distributor focused on cybersecurity solutions. The portfolio consists of explicitly selected solutions that have passed the 8Soft tests. In this way, the distributor also secures the trust of its resellers (IT retailers and system integrators). 8Soft offers sales and technical support through fixed contact persons who are also available at any time for customer appointments. There is also a partner programme, marketing support and project promotion via MDF funds. The idea of a jointly successful and strong (partner) community "fighting" against cybercrime is also in the 8Soft slogan: "IT Security, that's us."</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.8soft.de/portfolio/nextcloud/nextcloud-enterprise" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/adfinis.png" alt="Adfinis SyGroup logo" title="Adfinis SyGroup"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Adfinis Sygroup</h4>
                                        <p>Adfinis SyGroup supports clients from the private and public sectors in the planning, testing and implementation of tailor-made software projects. The core competences of Adfinis SyGroup AG are open source engineering & devops, 24/7 services & support, managed services and open source development.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://adfinis-sygroup.ch/en" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arawa.png" alt="Arawa logo" title="Arawa"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arawa</h4>
                                        <p>8Soft is a value added distributor focused on cybersecurity solutions. The portfolio consists of explicitly selected solutions that have passed the 8Soft tests. In this way, the distributor also secures the trust of its resellers (IT retailers and system integrators). 8Soft offers sales and technical support through fixed contact persons who are also available at any time for customer appointments. There is also a partner programme, marketing support and project promotion via MDF funds. The idea of a jointly successful and strong (partner) community "fighting" against cybercrime is also in the 8Soft slogan: "IT Security, that's us."</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.arawa.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arulogic.png" alt="Arulogic Labs logo" title="Arulogic Labs"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arulogic Labs</h4>
                                        <p>
                                            Arulogic Labs is an IT managed services provider in Indonesia. Our specialty is the implementation of on-premises and cloud based systems.<br>
                                            We sell Nextcloud Enterprise with local support and can fully implement and operate a Nextcloud environment with all the infrastructure on which it will run.    
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://arulogic.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/b1-systems.png" alt="B1 Systems logo" title="B1 Systems"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>B1 Systems</h4>
                                        <p>B1 Systems provides consulting, managed service and support, as well as trainings, subscriptions and development for individual and professional Linux & OpenSource solutions.<br>
                                            Any solution is precisely tailored to our customers' requirements. Our areas of expertise include private and public cloud, containerization, monitoring, patch management, automation and video conferencing. It is entirely up to you to decide how our team of more than 140 certified Linux and Open Source specialists assist you.<br>
                                            Count on B1 Systems to provide support and managed service whenever and wherever you need.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.b1-systems.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold software" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bitbone.png" alt="Bitbone logo" title="Bitbone"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Bitbone</h4>
                                        <p>
                                            Bitbone was founded in 2001 in Germany, as on Open-Source (Linux) services provider, offering secure and powerful infrastructure & IT services. They have 20 years of experience with Linux, Kaspersky products and expertise that ranges from standards such as server technologies, operating systems, monitoring, firewalls, endpoint security to new technologies such as automation, containerization and cyber-security.<br> 
                                            Bitbone aims further development for their customers‘ strategic projects and business.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.bitbone.de/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bloosite.png" alt="Bloosite logo" title="Bloosite"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Bloosite</h4>
                                        <p>
                                            Bloosite helps SMEs keep up with rapidly changing markets by providing convenient IT solutions to suit their evolving business models. Companies benefit from a ready-to-use package with a usage-dependent pricing model as well as from a sound knowledge in IT-security. The innovative Swiss company’s comprehensive offering is available from local installation to highly secured Swiss data centers.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://bloosite.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bktech.png" alt="BK Tech logo" title="BK Tech"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>BK Tech</h4>
                                        <p>
                                            BK Tech is your Brazilian partner for implementing Nextcloud in simple or complex environments, in public or private companies, with qualified professionals and processes of excellence. We are a family owned and operated business and have several significant customers, including in the federal government. But all customers are important to us, no matter the size! Contact us to for information about licenses and specialized services.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://bktech.com.br" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver app" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/compaso.png" alt="Compaso logo" title="Compaso"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Compaso</h4>
                                        <p>
                                            Compaso has solved a wide variety of hosting, administration and development challenges for a variety of German customers. We can set up and maintain your digital collaboration infrastructure, guaranteeing secure and reliable service on-premises or in the cloud. Contact us to find out more!
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://compaso.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="uk">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/corewin.png" alt="CoreWin logo" title="CoreWin"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>CoreWin</h4>
                                        <p>
                                            CoreWin is a distributor of software with a focus on process optimization, information security, data analysis and consulting.<br> 
                                            CoreWin’s team speaks English fluently, that’s why company works directly with software vendors to provide a quick response to all inquiries.<br>
                                            CoreWin also provides the first level of technical support for all products. Being a distributor, CoreWin carries out pre-sales and technical consultations, as well as provide implementation services.<br>
                                            CoreWin – first Core, then Win.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://corewin.com.ua/nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver software" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/dassit.png" alt="dass IT GmbH logo" title="dass IT GmbH"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>dass IT GmbH</h4>
                                        <p>
                                            dass IT GmbH in Cologne, founded in 2004 by former senior consultants of Suse Linux, is primarily a system integrator, offering support and consulting around Linux and Open Source Software. dass IT can help you build and run a private cloud infrastructure or migrate an existing ownCloud to Nextcloud.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.dass-it.de/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/daseq.png" alt="DASEQ logo" title="DASEQ"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>DASEQ</h4>
                                        <p>
                                            DASEQ is delivering Nextcloud as integral part of their OpenSource solution framework which consists of open source technology, services and training as well as security solutions.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="http://www.daseq.de/produkte/nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/fgts.png" alt="Factor group logo" title="Factor group"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Factor group</h4>
                                        <p>
                                            Factor group specializes in supplying the telecommunications industry with the world's leading equipment and technological solutions, offering consulting services, pre-design and design works, pre-sale advice, equipment installation and commissioning support, employee training, as well as after-sales service, product versions updates, equipment repair and replacement. Factor group executives have expertise in networking and information technologies market in Russia and the CIS countries since 1991.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.fgts.ru/collection/nextcloud" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze software" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/goodcloud.png" alt="The Good Cloud logo" title="The Good Cloud"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>The Good Cloud</h4>
                                        <p>
                                            The Good Cloud (based in the Netherlands) is fully committed to ensuring the privacy of all its users. They offer user-friendly and flexible subscriptions that are easy to share with multiple users. The Good Cloud is an ideal partner for professionals, offering a variety of business subscriptions and personalized services.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://thegood.cloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze app" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hansson.png" alt="Hansson IT logo" title="Hansson IT"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Hansson IT</h4>
                                        <p>
                                            The Nextcloud professionals at Hansson IT based in Sweden, have been working with Nextcloud since day one. They specialize in Linux and Virtual Machine development and are helping thousands of customers to success together with the Nextcloud VM they develop. They offer a variety of support options and virtual machine images in <a href="https://shop.hanssonit.se/product-category/virtual-machine/nextcloud-vm/" target="_blank">their shop</a>, as well as Nextcloud Enterprise licenses. You can follow <a href="https://twitter.com/tmhanssonit">@tmhanssonit on Twitter</a>.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://hanssonit.se" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="international">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hbps.png" alt="HBPS logo" title="HBPS"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>HBPS</h4>
                                        <p>
                                            We pride ourselves in listening to our clients as we believe that every customer is different and unique. Our service offering is not a one-size-fits-all solution to everyone. By truly listening to our customers we can help to customise and tailor our solutions to be fit for purpose to solve the problem at hand. HBPS is focused on helping companies take back control of what is rightly yours: your data. We want to empower our customers by helping them understand how the magic of data works and how it can help them to be future fit.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://hbps.co.za" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze app" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hostingde.png" alt="hosting.de logo" title="hosting.de"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>hosting.de</h4>
                                        <p>
                                            With more than 22 years of experience in multiple areas of professional web hosting services, hosting.de has proven to be a reliable partner for business projects, from small to enterprise-sized.<br>
                                            As an official Nextcloud Gold partner, the company provides fully managed Nextcloud hosting in one of their three data centers in Germany and operates fully GPDR compliant. One of the key elements of the company's infrastructure is a public API, which allows customers to fully integrate and automate all services from hosting.de in their own workflow.<br>
                                            Professionally trained in-house support and an extensive developer team ensure that existing services run smoothly while new technologies are integrated progressively, helping customers to reach their professional goals.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.hosting.de/managed-nextcloud/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze system" data-country="germany">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hkn.png" alt="HKN logo" title="HKN"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>HKN</h4>
                                        <p>
                                            Started in 1996 and now a team of 10 strong, HKN has been betting on scaleable, open source clusters since its inception. HKN offers bigger organizations a scaleable, HA-capable, resilient platform with Nextcloud that is hosted in their own data centers in three German cities. HKN offers optional 'hybrid' cloud solutions, with an internally, on-premises hosted Nextcloud at the customer working seamlessly with a Nextcloud hosted by HKN.
                                        </p>        
                                    </div>
                                    <ul class="partner-info">
                                        <li>Industry name</li>
                                        <li><a href="https://www.hkn.de/nextcloud-cloud-speicher" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="join-partner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-block">
                    <h2>Join our partner program</h2>
                    <p>
                        You know your customer. We know our product.<br>
                        Let's work together for the best results!
                    </p>
                    <a class="c-btn" href="https://nextcloud.com/partnerprogram">Learn more about the partner program</a>
                </div>
            </div>
        </div>
    </div>
</section>
