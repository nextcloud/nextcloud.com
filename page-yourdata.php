<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/yourdata.css" rel="stylesheet">
<meta itemprop="image" content="https://nextcloud.com/media/animation.png">
<meta name="twitter:image" content="https://nextcloud.com/media/animation.png">
<meta name="twitter:image:src" content="https://nextcloud.com/media/animation.png">
<meta property="og:image" content="https://nextcloud.com/media/animation.png">

</head>
<div class="yourdata-background">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1> </h1>
				<h2> </p>
			</div>
		</div>
	</div>
</div>

<section class="section--text">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph"><?php echo $l->t('Where is your data? Where are the pictures from your last vacation on the beach, where is your contact list, where are the last chats you had with your loved ones? Who has access to that data, who can see it, who can download it, who can modify or delete it? Do you trust the services you use to take care of your data?');?></p>

            <p class="section--paragraph"><?php echo $l->t('We at Nextcloud believe that you have a right to decide what happens with your data. We believe that you should be able to have as much control as possible on what belongs to no one else but you.');?></p>

            <p class="section--paragraph"><?php echo $l->t('In the era of Google Drive, Dropbox & co, storing your data online has never been easier. However, the simplicity of those tools comes at great cost: your privacy. Right now, nearly all the data there is about the average Internet user is stored at half a dozen companies. While media is constantly reporting on data breaches, corporate and state surveillance and other privacy violations, many people still rely on these services.');?></p>

            <p class="section--paragraph"><?php echo $l->t('Not because they are happy with the price they pay for it, but because it has been incredibly hard for people to find easy and free services that respect their users.');?></p>

            <p class="section--paragraph"><?php echo $l->t('Your data represents who you are and can easily be abused. We want this to change.');?></p>

            <p class="section--paragraph"><?php echo $l->t('This is why, at Nextcloud, we want you to have as many options as possible, to help you decide who you will trust with your data. We help you choose a place for your documents, calendars, photos and chat logs!');?></p>

            <p class="section--paragraph"><?php echo $l->t('How does that work? First, Nextcloud is an Open Source private cloud software, which means that anyone can read the code, and make sure it keeps your data safe. And second, at Nextcloud, we don\'t force you to pick our own infrastructure or servers like the big famous public clouds do. You can run Nextcloud yourself, at home or in a data center on rented space. You can buy ready-to-go devices with Nextcloud or pick a provider who rents out space to you!');?></p>

            <p class="section--paragraph"><?php echo $l->t('Here\'s three ways you can use Nextcloud to get regain control over your own data, and share it with only people you\'ve chosen.');?></p>
            <img class="" style="float:right; width: 300px;height:auto;margin:30px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/yourdata.gif" alt="in action" />

            <p class="section--paragraph__tittle"><?php echo $l->t('1/ Simple Signup');?></p>

            <p class="section--paragraph"><?php echo $l->t('This is by far the easiest solution. We have selected a range of providers who run a Nextcloud for you. Of course, it is still up to you to trust the server of your choice, as there\'s many. The best part: You won\'t be alone on your own server! You can share from one Nextcloud server to users on another, just like you can email from Hotmail to GMail (but in this case, Google and Microsoft won\'t see your files).');?></p>

            <p class="section--paragraph"><a href="<?php echo home_url('signup') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Find a provider here!');?></a></p>

            <p class="section--paragraph__tittle"><?php echo $l->t('2/ Self-hosted Nextcloud');?></p>

            <p class="section--paragraph"><?php echo $l->t('If you want to be even more in control of your data and have some more time and experience, you can run your own Nextcloud instance on the server of your choice. We try to make this as simple as possible, and we have <a href="https://help.nextcloud.com" class="hyperlink">a nice community</a> where some of our contributors will be happy to help you.');?></p>

            <p class="section--paragraph"><a href="<?php echo home_url('install') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Host your own server with Nextcloud!');?></a></p>

            <p class="section--paragraph__tittle"><?php echo $l->t('3/ Run Nextcloud on the hardware of your choice');?></p>

            <p class="section--paragraph"><?php echo $l->t('Of course, you don\'t need to have your data on some server far away from you. Want to run your Nextcloud at home? You can do that too. For example, you can do that on a Raspberry Pi. Or you could go for a nice router with an integrated Nextcloud. Keep your data at home!');?></p>

            <p class="section--paragraph"><a href="<?php echo home_url('devices') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Run Nextcloud at home!');?></a></p>

            <p class="section--paragraph__tittle"><?php echo $l->t('What is Nextcloud?');?></p>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud is a private cloud software you can use to access your documents on your laptop or phone, and share with others. Have video calls and nobody will be recording who you talked to or what you said! Share holiday pictures with your family and know only they have access! Your data is no longer sold, analyzed for ads or held hostage.');?></p>

            <p class="section--paragraph__tittle"><?php echo $l->t('Who makes Nextcloud?');?></p>

            <p class="section--paragraph"><?php echo $l->t('We\'re Nextcloud, a community of volunteers and entrepreneurs who care about where your files are. With Nextcloud, everyone from home users to large enterprises, hospitals and government agencies can host their own, secure and private Dropbox or Office 365 alternative. Nextcloud offers easy to use web, desktop and mobile interfaces to sync files, share them with others and edit them on-the-go. Nextcloud offers the most popular self-hosted alternative, with hundreds of thousands of servers forming a decentralized, federated network hosting data from an estimated over 25 million users.');?></p>
		</div>
	</div>
</div>
</section>
