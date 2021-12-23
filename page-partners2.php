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
                    <a class="button button--blue" href="https://nextcloud.com/partnerprogram/">Become a Partner</a>
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
                <div class="text-center">
                    <p>Look for one of these logo's to make sure you deal with a certified partner!</p>
                </div>
                <div class="text-center" style="margin-bottom: 50px;">
                    <img style="width: 80px;" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Nextcloud_Bronze_Partner.svg" alt="partner logo" title="partner logo"/>
                    <img style="width: 80px;" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Nextcloud_Silver_Partner.svg" alt="partner logo" title="partner logo"/>
                    <img style="width: 80px;" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Nextcloud_Gold_Partner.svg" alt="partner logo" title="partner logo"/>
                    <img style="width: 80px;" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Nextcloud_Platinum_Partner.svg" alt="partner logo" title="partner logo"/>
                    <img style="width: 80px;" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Nextcloud_Hosting_Partner.svg" alt="partner logo" title="partner logo"/>
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
                                <input id="services" type="text" value="Services" readonly="readonly" data-value="all-dev"/>
                            </div>
                        </div>
                        <ul class="select-list service-list">
                            <li data-service="host-own">Hosting in own data center</li>
                            <li data-service="host-rend">Hosting in third party data center</li>
                            <li data-service="archi">Architecture consulting</li>
                            <li data-service="hardware">Hardware development</li>
                            <li data-service="app">App development</li>
                            <li data-service="custom">Custom integrations</li>
                            <li data-service="train">Training</li>
                            <li data-service="on-site">On-site management</li>
                            <li data-service="resell">Nextcloud Enterprise licenses</li>
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
                                <input type="checkbox" name="country" value="eu" id="chk02"/><label for="chk02">EU</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="us" id="chk03"/><label for="chk03">USA</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="latin" id="chk04"/><label for="chk04">Latin America</label>
                            </li>
                               <li>
                                <input type="checkbox" name="country" value="usac" id="chk05"/><label for="chk05">USA & Canada</label>
                            </li>
                               <li>
                                <input type="checkbox" name="country" value="russ" id="chk06"/><label for="chk06">Russia & GUS</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="asia" id="chk07"/><label for="chk07">Asia & Pacific</label>
                            </li>
                             <li>
                                <input type="checkbox" name="country" value="usasia" id="chk08"/><label for="chk08">USA, Canada, Asia & Pacific</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="euasia" id="chk9"/><label for="chk9">EU, Middle East, North Africa, Asia & Pacific</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="eulatin" id="chk10"/><label for="chk10">EU, Middle East, North Africa, USA, Canada & Latin America</label>
                            </li>
                              <li>
                                <input type="checkbox" name="country" value="middle" id="chk11"/><label for="chk11">Middle East & North Africa</label>
                            </li>
                            <li>
                                <input type="checkbox" name="country" value="dach" id="chk12"/><label for="chk12">DACH</label>
                            </li>
                             <li>
                                <input type="checkbox" name="country" value="other" id="chk12"/><label for="chk12">Other</label>
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
                        <div class="partner-col" data-type="platinum host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/ionos.png" alt="ionos logo" title="ionos"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>1&1 IONOS SE</h4>
                                        <p>With more than eight million customer contracts, IONOS is the leading European provider of cloud infrastructure, cloud services and hosting services. The product portfolio offers everything that companies need to be successful in the cloud: from domains, classic websites and do-it-yourself solutions, online marketing tools to full-fledged servers and an IaaS solution. The portfolio is aimed at freelancers, business people and consumers as well as corporate customers with complex IT requirements. The 1&1 IONOS brand family includes STRATO, Arsys, Fasthosts, home.pl, InterNetX, SEDO, United Domains and World4You.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Service Provider</li>
                                        <li><a href="http://www.ionos.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum system" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/b1-systems.png" alt="B1 Systems logo" title="B1 Systems"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>B1 Systems GmbH</h4>
                                        <p>B1 Systems provides consulting, managed service and support, as well as trainings, subscriptions and development for individual and professional Linux & OpenSource solutions.<br>
                                            Any solution is precisely tailored to our customers' requirements. Our areas of expertise include private and public cloud, containerization, monitoring, patch management, automation and video conferencing. It is entirely up to you to decide how our team of more than 140 certified Linux and Open Source specialists assist you.<br>
                                            Count on B1 Systems to provide support and managed service whenever and wherever you need.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.b1-systems.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum host-rend app on-site" data-country="euasia">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/oivan.png" alt="Oivan logo" title="Oivan"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Oivan / NXme</h4>
                                        <p>NXme is an agile partner to turn your business challenges and opportunities into secure web services and mobile apps.<br>
                                            Our range of software development services start from helping you to clarify your idea and technology strategy to practical implementation, development and operations. We are also our customers trustworthy partner in designing, implementing, securing, and operating your critical information systems and infrastructure.<br>
                                            We also provide other professional services like SIEM, application firewall, IPAM, application delivery controller (ADC), AAA and single sign-on or network security expertise. We serve our clients in Finland, Saudi Arabia, Dubai & Abu Dhabi and elsewhere in the Middle East.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://oivan.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="platinum system" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line plat">
                                        Platinum Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/atea.png" alt="Atea logo" title="Atea
                                    </div>
                                    <div class="partner-text">
                                        <h4>Atea Sverige AB</h4>
                                        <p>
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.atea.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold hardware" data-country="dach">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/21unity.png" alt="21unity logo" title="21unity"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>21unity GmbH</h4>
                                        <p>Since 2014, 21unity has presented itself as solution finder, developer and treasure hunter. As a Nextcloud Technology Partner, we develop and host Nextcloud HUB in our own DataCenter. Our portfolio includes services and infrastructure solutions such as computing units (HPC Cluster / Super Hyperscaler), storage, databases, OpenStack, container solutions based on Kubernetes, as well as new technologies in the area of Machine Learning, Artificial Intelligence, Big Data and Internet of Things. Essential components are the 21unity HPC systems, which are manufactured in Europe and are equipped with a customized Linux OS. We are pleased hearing from you.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://21unity.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/ags-it.png" alt="ags logo" title="ags"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Advanced Global Solution AGS S.p.a.</h4>
                                        <p></p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.ags-it.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-rend app custom on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arawa.png" alt="Arawa logo" title="Arawa"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arawa (VAR)</h4>
                                        <p>Arawa is a French IT company specialized in open source office and collaborative software.<br>
                                         Arawa helps organizations to develop document collaboration while keeping control of their data. Arawa's large range of services, including setup, development, support and change management, is used to tailor projects to the specific needs of each organization. Visit arawa.fr or follow @Arawa_fr on Twitter.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.arawa.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold archi resell" data-country="latin">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
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
                                        <li>Partner</li>
                                        <li><a href="https://bktech.com.br" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own on-site archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bloosite.png" alt="bloosite AG logo" title="bloosite AG"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>bloosite AG</h4>
                                        <p>bloosite helps SMEs keep up with rapidly changing markets by providing convenient IT solutions to suit their evolving business models. Companies benefit from a ready-to-use package with a usage-dependent pricing model as well as from a sound knowledge in IT-security. The innovative Swiss company’s comprehensive offering is available from local installation to highly secured Swiss data centers.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="www.bloosite.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold app custom on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/compaso.png" alt="compaso GmbH logo" title="compaso GmbH"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>compaso GmbH</h4>
                                        <p>Compaso has solved a wide variety of hosting, administration and development challenges for a variety of German customers. We can set up and maintain your digital collaboration infrastructure, guaranteeing secure and reliable service on-premises or in the cloud. Contact us to find out more!</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://compaso.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="other">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/dialead.png" alt="Dialead logo" title="Dialead"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Dialead AS</h4>
                                        <p>Dialead Cloud is built on Norwegian values where security, unity and freedom are central. Our technology ensures that data is only stored locally, and offer storage in Hardanger; close to the Norwegian fjords. We provide hosting, support and the rest of the services that are normally part of the technological everyday work.<br>For us, our customers' quality of life and freedom of action come first. We are concerned that people and organizations should have control over both their data and their lives. Thus, we focused on privacy from the first second and GDPR is well taken care of in our tools.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://dialead.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/robhost.png" alt="dogado.pro GmbH logo" title="dogado.pro GmbH"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>dogado.pro GmbH</h4>
                                        <p>dogado.pro is specialised in managed hosting "made in Germany" and offers server solutions for various requirements. Individual support is one of our strengths. We would be happy to advise you on which products are best suited for your project.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.robhost.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/econocom.png" alt="Econocom logo" title="Econocom"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Econocom PSF Luxembourg (SP)</h4>
                                        <p>
                                            Enter text here.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.econocom.be/fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-rend" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/evolix.png" alt="Evolix logo" title="Evolix"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Evolix (SP)</h4>
                                        <p>
                                            Evolix is a french Managed Hosting Provider.
                                            We offer hosting solutions based on our high availability infrastructure in France (Marseille and Paris).<br>
                                            We are experts on web application stack with FLOSS : we help your developers to deploy source code, optimize databases, make software and servers hosting choices,  use Cloud Computing, etc.<br>
                                            Our "NextCloud as a Service" is a managed and supervised NextCloud instance hosted on our high availability Cloud in France based on Open Source technologies (Linux, KVM, HAProxy, Nginx, CEPH).
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://evolix.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="usasia">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/flowz.png" alt="Flowz logo" title="Flowz"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Flowz Digital, LLP</h4>
                                        <p>
                                           Enter text here.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.flowz.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/future404.png" alt="Future404 logo" title="Future404"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Future404</h4>
                                        <p>
                                           Future404 ehf. and 1984 ehf. joined forces to be able to provide our customers with a unique product that combines excellent support, stable infrastructure and nextcloud into one product. !984 ehf. is a hosting company that has been safeguarding privacy and civil rights since 2006. Future404 is a privacy consulting think tank that provides risk and security consulting globally.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://future404.is" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hkn.png" alt="HKN logo" title="HKN"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>HKN GmbH</h4>
                                        <p>
                                            Started in 1996 and now a team of 10 strong, HKN has been betting on scaleable, open source clusters since its inception. HKN offers bigger organizations a scaleable, HA-capable, resilient platform with Nextcloud that is hosted in their own data centers in three German cities. HKN offers optional 'hybrid' cloud solutions, with an internally, on-premises hosted Nextcloud at the customer working seamlessly with a Nextcloud hosted by HKN.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li></li>
                                        <li><a href="https://www.hkn.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hostingde.png" alt="hosting.de GmbH logo" title="hosting.de GmbH"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>hosting.de GmbH</h4>
                                        <p>
                                            With more than 22 years of experience in multiple areas of professional web hosting services, hosting.de has proven to be a reliable partner for business projects, from small to enterprise-sized. As an official Nextcloud Gold partner, the company provides fully managed Nextcloud hosting in one of their three data centers in Germany and operates fully GPDR compliant. One of the key elements of the company's infrastructure is a public API, which allows customers to fully integrate and automate all services from hosting.de in their own workflow.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.hosting.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                                <div class="partner-col" data-type="gold host-own host-rend train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/itservicenet.png" alt="ITSERVICENET logo" title="ITSERVICENET"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>ITSERVICENET & Enterprise OSS - IT & Comunication</h4>
                                        <p>
                                           An Italian Company, ITServicenet has over 2 decades experience managing open source servers and developing software. They handle virtualization, high availability, monitoring and storage, helping customers set up and manage a powerful, reliable infrastructure. ITServicenet offers support in Italian language for Nextcloud.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.enterpriseoss.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/lansol.png" alt="Lansol logo" title="Lansol"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Lansol GmbH</h4>
                                        <p>
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.lansol.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/librebit.png" alt="Librebit logo" title="Librebit"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Librebit</h4>
                                        <p>
                                           Librebit is a Nextcloud partner based in Spain. Specialized in rapid deployments with Puppet IT automation technologies, they have managed thousands of computers and servers with more than 80,000 systems! Librebit helps customers turn projects into reality by managing their servers and IT challenges while minimizing costs compared to the public cloud.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.librebit.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/linuxfabrik.png" alt="Linuxfabrik logo" title="Linuxfabrik"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Linuxfabrik GmbH</h4>
                                        <p>
                                           Founded in 2016 in Zurich/Switzerland, Linuxfabrik supports companies from consulting to operation and troubleshooting Linux hosts and selected Open Source Software – with technical support up to 7x24. Providing hosting with IaaS, PaaS and SaaS models in anything from virtual data centers to virtual machines in a CIS and GDPR compliant, fully self-managed, ISO 27001 certified datacenter, Linuxfabrik offers the consulting, operational excellence and expertise required for enterprises small and large.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.linuxfabrik.ch" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-rend" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/mise-sur.png" alt="Mise Sur logo" title="Mise Sur"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Mise Sur Orbite</h4>
                                        <p>
                                           Mise Sur Orbite is a French company specialised in hosting websites, applications, emails and open-source solutions. We are very attached to data sovereignty and GPDR, that's why we only use dedicated servers or cloud servers from OVHcloud or other French companies.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.misesurorbite.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/netcloud.png" alt="Netcloud logo" title="Netcloud"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Netcloud</h4>
                                        <p>
                                           Netcloud AG is a Winterthur (Zurich)-based company with 130 employees. Core competencies include consulting, designing, implementing and operating IT infrastructure solutions around Cisco technology, borderless networks, data-center and unified communications solutions.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.netcloud.ch" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/nobugs.png" alt="NOBUGS logo" title="NOBUGS"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>NOBUGS IT GmbH</h4>
                                        <p>
                                           NOBUGS IT GmbH provides IT cloud msp/bsp solutions for small and big businesses in Austria. We are currently located in Terfens, Austria, serving customers all over Tyrol and bordering states. As service providers we believe that managed services are the future. As such, we try to improve a customer’s workflow through approved hard- and software solutions and to preemptively act on system failures to facilitate scalability.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.nobugs.gmbh" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/redpill.png" alt="Redpill logo" title="Redpill"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Redpill Linpro</h4>
                                        <p>
                                           The Open Source specialist and digital societies builder Redpill Linpro contributes to the sustainable development of societies by helping companies increase their competitiveness and making digital citizen-centric services even better for more people. With open source, its deep technical knowledge and extensive experience across the private and public sectors, Redpill Linpro helps its customers digitalise and make the most out of their data. The company delivers all aspects of digital innovation, from analysis, design and development to integration, user experience and operation. With more than 200 employees the company has offices in Stockholm, Gothenburg, Karlstad, Linköping as well as in Copenhagen and Oslo. For more information, please visit https://www.redpill-linpro.com/.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://https://www.redpill-linpro.com/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/safespring.png" alt="safespring logo" title="safespring"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>safespring</h4>
                                        <p>
                                           Safesprings is a Nordic provider of cloud infrastructure services. Based on Open Source technology, our compute and storage services is highly scalable and support API driven workflows. We support federated login to enable single sign-on. Safespring is trusted by more than 60 universities, institutions and research platforms and we’re hoping to be part of your digital future as well. Welcome to make a first contact!
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="www.safespring.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                             <div class="partner-col" data-type="gold host-rend" data-country="middle">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/securetech.png" alt="SecureTech logo" title="SecureTech"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>SecureTech (VAR)</h4>
                                        <p>
                                           SecureTech, a UAE based company Founded by Dr. Abdulla Al Nuaimi in 2000. SecureTech is a leading Integrator based out of Abu Dhabi and Operates across the emirates with more than 600 qualified staff from various regions. As a leading solutions provider focusing on:
                                           IT Infrastructure Artificial Intelligence based solutions, big data analysis solutions, cyber Security solutions, IOT & integrated Security solutions. SecureTech provides innovative and cost-effective solutions to your complex problems. Since 2000, SecureTech has been and continues to be a partner of choice for our key customers.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.securetech.ae" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/sola.png" alt="Sola logo" title="Sola"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Sola K.K.</h4>
                                        <p>
                                           Type text here.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.sola-air.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-rend on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/sorint.png" alt="Sorint.lab logo" title="Sorint.lab"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Sorint.lab Poland, Italy & Spain</h4>
                                        <p>
                                           Sorint.lab is the Next Generation System Integrator, leader in the Digital Transformation with a flexible and vendor independent approach. We provide consultancy in Agile, DevOps, CI/CD, Cloud Adoption, Modern Application Development, Application Modernization, Next Generation IT Operations and Site Reliability Engineering. With offices in Italy, Spain, UK, Germany, France and USA, we are able to deliver a wide range of professional services from architecture design, development, implementation to training, providing 24x7 support to on prem, cloud and hybrid infrastructures and Application support & maintenan.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.sorint.it" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own host-rend archi" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/stylez.png" alt="Stylez logo" title="Stylez"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Stylez Corporation</h4>
                                        <p>
                                           Since 2013, Stylez has grown by focusing on integration and Business Process Outsourcing. Today Stylez expands its scope into cloud and open source services, keeping up their focus on customers and quality.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://nextcloud.stylez.co.jp" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/tab.png" alt="TAB.DIGITAL logo" title="TAB.DIGITAL"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>TAB.DIGITAL / SIA Network Operations Center</h4>
                                        <p>TAB Digital is a private company based in the EU, helping customers build private collaboration systems and clouds in EU and Russia. The newest technology and high staff competence will help you to build you success. Want to build a Nextcloud solution and have a provider take care of it? Contact us.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.tab.digital" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/tasgroup.png" alt="TAS France logo" title="TAS France"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>TAS France (SP & VAR)</h4>
                                        <p>TAS France is a company based in VALBONNE | SOPHIA-ANTIPOLIS. It is a subsidiary of the European IT group TAS Group. TAS France offers hosting, cloud computing and outsourcing solutions mainly for SMEs and ETIs from its Datacenters in France and Italy. TAS France's main datacenter is in Sophia Antipolis. This IT hosting site is at the latest technological level in terms of data protection. It allows companies to securely outsource their IT, servers, network equipment, and access to secure and local cloud services.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="www.tasgroup.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-rend" data-country="euasia">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/thegoodcloud.png" alt="The Good logo" title="The Good"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>The Good Cloud (SP & VAR)</h4>
                                        <p>The Good Cloud (based in the Netherlands) is fully committed to ensuring the privacy of all its users. They offer user-friendly and flexible subscriptions that are easy to share with multiple users. The Good Cloud is an ideal partner for professionals, offering a variety of business subscriptions and personalized services.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://thegood.cloud" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own" data-country="latin">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/unodata.png" alt="Unodata logo" title="Unodata"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Unodata</h4>
                                        <p>
                                           UNODATA is a multi cultural company located in Brazil expert in Cloud solutions. We offer professional services and hosted solutions such as e-mail, e-mail security, backup and disaster recover to SMB, Enterprise, Universities and Government institutions to a large number of locations in South America. We connect companies to the Cloud and Cloud to the People.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.unodata.com.br" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="gold host-own host-rend archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line gold">
                                        Gold Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/yansatech.png" alt="YansaTech logo" title="YansaTech"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>YansaTech ApS</h4>
                                        <p>
                                           Denmark-based YansaTech specializes in solutions for planning and collaborating effectively and securely. It helps private and public organizations implement real-time meeting/document collaboration solutions and keep control of their data. The company experts provide a wide range of services, including consulting, project management and implementation, bringing data privacy and sovereignty into everything they do. Contact YansaTech for help with identifying secure and innovative alternatives to big tech cloud providers.
                                        </p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.yansatech.dk" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver host-rend archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/adfinis.png" alt="Adfinis logo" title="Adfinis"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Adfinis AG</h4>
                                        <p>Adfinis SyGroup supports clients from the private and public sectors in the planning, testing and implementation of tailor-made software projects. The core competences of Adfinis SyGroup AG are open source engineering & devops, 24/7 services & support, managed services and open source development.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.adfinis.ch" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                               <div class="partner-col" data-type="silver archi" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/arulogic.png" alt="Arulogic logo" title="Arulogic"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Arulogic Labs Indonesia (VAR)</h4>
                                        <p>Arulogic Labs is an IT managed services provider in Indonesia. Our specialty is the implementation of on-premises and cloud based systems. We sell Nextcloud Enterprise with local support and can fully implement and operate a Nextcloud environment with all the infrastructure on which it will run.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://arulogic.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver train archi resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/bitbone.png" alt="bitbone logo" title="bitbone"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>bitbone AG</h4>
                                        <p>Bitbone was founded in 2001 in Germany, as on Open-Source (Linux) services provider, offering secure and powerful infrastructure & IT services. They have 20 years of experience with Linux, Kaspersky products and expertise that ranges from standards such as server technologies, operating systems, monitoring, firewalls, endpoint security to new technologies such as automation, containerization and cyber-security. Bitbone aims further development for their customers‘ strategic projects and business.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.bitbone.de/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/danysoft.png" alt="Danysoft logo" title="Danysoft"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Danysoft Internacional</h4>
                                        <p>Danysoft is a value-added reseller focused on professional software solutions and services, working in the Spanish and Portuguese market since 1990. Our area of experience includes private cloud, monitoring, BI, automation, IA, programming, and document management. Danysoft´s range of services include setup, development, training, support and change management. Tailing projects to the specific needs of our customers. We offer Netxcloud Enterprise and related solutions with local support. We invite you to visit www.danysoft.com to know everything that Danysoft can do so your Project can be a Success.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.danysoft.com/" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver app on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/dassit.png" alt="dass IT logo" title="dass IT"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>dass IT GmbH</h4>
                                        <p>dass IT GmbH in Cologne, founded in 2004 by former senior consultants of Suse Linux, is primarily a system integrator, offering support and consulting around Linux and Open Source Software. dass IT can help you build and run a private cloud infrastructure or migrate an existing ownCloud to Nextcloud.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.dass-IT.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver archi resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/glsb.png" alt="Gemas Lestari logo" title="Gemas Lestari"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Gemas Lestari Sdn Bhd</h4>
                                        <p>Add Text Here.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Reseller</li>
                                        <li><a href="https://glsb.my" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver resell" data-country="russ">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/is-systems.png" alt="IS-Systems logo" title="IS-Systems"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>IS-Systems</h4>
                                        <p>Add Text Here.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.is-systems.org" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver train archi resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/netways.png" alt="Netways logo" title="Netways"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Netways GmbH</h4>
                                        <p>NETWAYS' expertise is in the data center space, taking care of monitoring and metrics, automatisation as well as training and support. With the NETWAYS Web Services they run managed services, hosting customer infrastructure, and are expanding in the areas of Open Stack and Kubernetes. With 70 employees and headquartered in Nuremberg, NETWAYS can offer in-depth consulting and advice to customers.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.netways.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver host-rend archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/networkers.png" alt="networkers.pl logo" title="networkers.pl"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>networkers.pl Sp. z o.o.</h4>
                                        <p>Networkers delivers solutions for IT systems, data centers and DevOps environments. We sell NextCloud Enterprise in Poland with Polish support and can fully implement and operate a NextCloud environment with all the infrastructure on which it will run. All needed hard- and software can be delivered and installed and Networkers has partnerships with a number of other large organizations to deliver a wide range of solutions.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://networkers.edu.pl" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver app on-site train archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/opendsi.png" alt="OPEN-DSI logo" title="OPEN-DSI"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>OPEN-DSI (VAR)</h4>
                                        <p>Open-DSI is a French company which supports organizations and companies with their computing projects. Our specialty is the implementation of open source cloud computing solutions and outsourcing. Our solutions are based on three main building blocks: Nextcloud, ERP+CRM Dolibarr and WooCommerce.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.open-dsi.fr" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver archi resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/peopleware.png" alt="Peopleware logo" title="Peopleware"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Peopleware Systems Limited</h4>
                                        <p>Type Text Here</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.peoplewarehk.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/primasys.png" alt="Primasys logo" title="Primasys"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Primasys</h4>
                                        <p>Founded in 2010, Primasys has been offering a range of IT consulting services in the on-premises and cloud infrastructure area as well as more specialized Risk-Based Security Assessment services. The team has already build up extensive experience with Nextcloud, setting up multiple high scalability, high availability installations at customers. Primasys offers their services in Indonesian and English and services government and state owned enterprises, FMCG, transportation, NGO and financial institutions such as the Indonesian stock exchange and Financial Services Authority.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.primasys.co.id" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver archi resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/sndk-corp.png" alt="SNDK logo" title="SNDK"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>SNDK Corp.</h4>
                                        <p>SNDK Corp founded in 2007 is an IT company Offering 360 degree Integrated Solutions taking Business to next level. Our Services and deep industry experiences includes Cloud, Virtualization, Open Source Linux & Network Solutions, Security, Software-Mobile APP & IoT.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://www.sndkcorp.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="silver host-rend archi" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line silver">
                                        Silver Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/telekom.png" alt="T-Systems logo" title="T-Systems"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>T-Systems Multimedia Solutions GmbH</h4>
                                        <p>Deutsche Telekom is one of the world's leading integrated telecommunications companies, with some 235.8 million mobile customers, 27,3 million fixed-network lines, and 21.3 million broadband lines. We provide fixed-network/broadband, mobile communications, Internet, and IPTV products and services for consumers, and information and communication technology (ICT) solutions for business and corporate customers.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.t-systems.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/conceiva.png" alt="Conceiva logo" title="Conceiva"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Conceiva Pty. Ltd.</h4>
                                        <p>Type text here.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.conceiva.com" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze host-own resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/exacon.png" alt="EXACON logo" title="EXACON"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>EXACON-IT Informationstechnologie Beratungsges.m.b.H.</h4>
                                        <p>AEXACON-IT was founded in 1994 with a focus on the design and implementation of secure IT infrastructure solutions. With the new millennium, protection of digital privacy has been added as a third pillar: SECURITY, SAFETY & PRIVACY for the data and data processing of our customers - the reason we exist. Our software development department implements web applications and customer-specific Nextcloud solutions. With three data center locations in Austria, we can provide any desired configuration with individual personalized technical support of all levels.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.exacon.at" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze train archi resell" data-country="asia">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/informology.png" alt="Informology logo" title="Informology"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Informology Asia</h4>
                                        <p>Informology is a Malaysian IT solution provider founded in 2010. Our team comprising of multi-talented professionals who specialize in offering consultation, training, software/application development, IT hardware, data center, recovery center, cloud solutions, and services. We also specialized in open source office and collaborative software. With many years of experience in consulting, implementing ICT projects in the Government/Public Sector and Private Sector, we believed that our associates will smoothen your ICT project deliverable.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.informology.asia" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/it25.png" alt="IT 25 logo" title="IT 25"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>IT 25 GmbH</h4>
                                        <p>Founded in 2006 IT25 GmbH provides solutions for collaboration and exchange of information with a strong focus on supporting customers to install, integrate and safely operate on-premises and cloud based systems.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Reseller</li>
                                        <li><a href="http://it25.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/link22.png" alt="link22 logo" title="link22"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>link22 AB</h4>
                                        <p>Storage, communication, physical meetings, virtual desktops, video meetings, off the grid-solutions, import, export, cross domain-solutions, access control, network security... Whatever it is, we do not compromise with security. We help public and private actors with highly secure IT-solutions. Our deliveries range from standalone products to full scale systems. Some are military, some are government, some are large private corporations, they all prioritize security. We meet military level requirements, strict laws and custom wishes from niche customers.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="https://link22.se" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze archi resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/procilon.png" alt="procilon logo" title="procilon"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>procilon IT-Logistics GmbH</h4>
                                        <p>The procilon GROUP specializes in the development of cryptographic security-software 'Made in Germany'. Using Cloud based security components, procilon can provide various options of electronic signatures and services. That includes eIDAS-compliant qualified remote signatures, end-to-end data encryption and secure Identity- & Access-Management. Thus, procilon cloud services complement industry-specific applications and customer portals with cryptographic elements for a security-driven user experience.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.procilon.de" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze host-own" data-country="middle">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/tamkeen.png" alt="Tamkeen logo" title="Tamkeen"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Tamkeen Technologies (VAR)</h4>
                                        <p>Tamkeen Technologies is a Saudi company established in 2013 with a clear and ambitious vision to be the first choice for the government sector in IT. Our innovative solutions are designed to digitally transform the businesses of the public sector by adopting leading technologies, and leveraging on our strategic partnerships. Our services are formed to fit various modules and to ensure self-sustainability, improve performance and efficiency for our partners.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.tamkeentech.sa" target="_blank">Go to website</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="partner-col" data-type="bronze host-rend archi resell" data-country="eu">
                                <div class="partner-box">
                                    <div class="certificate-line bronze">
                                        Bronze Partner
                                    </div>
                                    <div class="partner-logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/viakom.png" alt="Viakom logo" title="Viakom"/>
                                    </div>
                                    <div class="partner-text">
                                        <h4>Viakom GmbH</h4>
                                        <p>Viakom GmbH is a managed service provider and software development company specializing in ICT solutions for the B2B market. The Viakom experts and specialists from the sister company Nextrag Solutions GmbH combine know-how in the areas of managed service consulting, software development and sales and support. In-house software developments in the area of (Vo)IP technology and monitoring have been in use by well-known telecommunications network operators since 2009.</p>
                                    </div>
                                    <ul class="partner-info">
                                        <li>Partner</li>
                                        <li><a href="http://www.viakom.de" target="_blank">Go to website</a></li>
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
