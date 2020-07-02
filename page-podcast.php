<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/podcast.css?v=1" rel="stylesheet">
<script>
require(["require.config"], function() {
	require(["pages/sharing", "modules/youtubePlayer"])
});
</script>

<!--  podcast player scripts - see https://docs.podlove.org/podlove-web-player/embedding.html -->
<script src="https://cdn.podlove.org/web-player/5.x/embed.js"></script>
<script>
const RSS_URL = "<?php echo get_template_directory_uri(); ?>/podcast-feed.rss";
const config_URL = "<?php echo get_template_directory_uri(); ?>/assets/podcast/config.json";
const version = 5;
const show = {
            title: "Nextcloud Podcast",
            subtitle: "Nextcloud's own podcast",
            summary: "Every week we will talk about a subject concerning the community, data privacy and digital sovereignty",
            poster: "https://nextcloud.com/media/nextcloud-podcast-logo.png",
            link: "https://nextcloud.com/podcast"
        };

Promise.all([
    fetch(RSS_URL)
    .then(rss_response => rss_response.text()),
    fetch(config_URL)
    .then(config_response => config_response.json())
]).then((response) => {
    const rss_data = new window.DOMParser().parseFromString(response[0], "text/xml");
    const episodes_nodes = rss_data.querySelectorAll("item");
    let config_data = response[1];

    let episodes_list = [];
    let playlist = [];
    episodes_nodes.forEach(episode => {
        let audio_object = {
            url: episode.querySelector("enclosure").getAttribute("url"),
            size: episode.querySelector("enclosure").getAttribute("length"),
            title: episode.querySelector("title").textContent,
            mimeType: episode.querySelector("enclosure").getAttribute("type")
        };

        /**
        * Episode related Information
        */
        let episode_config = {
                version: version,
                show: show,
                title: episode.querySelector("title").textContent,
                subtitle: episode.getElementsByTagName("itunes:subtitle")[0].textContent,
                summary: episode.getElementsByTagName("itunes:summary")[0].textContent,
                publicationDate: episode.querySelector("pubDate").textContent,
                poster: "https://nextcloud.com/media/nextcloud-podcast-logo.png",
                duration: episode.getElementsByTagName("itunes:duration")[0].textContent,
                link: episode.querySelector("link").textContent,
                audio: [ audio_object ],
                playlist: [],
                contributors: [
                    {
                        id: "",
                        name: "",
                        avatar: "",
                        group: { "id": "", "slug": "", "title": "" }
                    }
                ]
        };
        episodes_list.push(episode_config);

        let episode_object = {
            title: episode_config.title,
            duration: episode_config.duration,
            href: episode_config.link,
            image: "author.jpg",
            config: {}
        };
        playlist.push(episode_object);
    });

    // add config for each episode in playlist
    let episode_number = 0;
    playlist.forEach(episode => {
        episode.config = episodes_list[episode_number];
        episode_number++;
    });

    // add playlist to episodes
    episodes_list.forEach(episode => {
        episode.playlist = playlist;
    });

    config_data.playlist = playlist;
    window.podlovePlayer("#podcast-player", episodes_list[0], config_data)
    .then(store => {
        store.subscribe(() => {
        console.log(store.getState());
        });
    });

});
</script>
<!--  podcast player scripts -->

<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/logo/nextcloud-podcast-logo.png">

<link type="application/rss+xml" rel="alternate"
      title="Title_Value" href="https://nextcloud.com/podcast-feed.rss"/>
</head>

<div class="background permissions-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topheader">
                <h1><?php echo $l->t('Stay in contact');?></h1>
                <h2><?php echo $l->t('Follow the Nextcloud podcast!');?></h2>
            </div>
        </div>
    </div>
</div>


<section class="section--intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Listen to the latest episode now!');?></p>
            </div>
        <div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center">
                    <!--         podcast player will be displayed here             -->
                    <div id="podcast-player"></div>
                    <!--         podcast player will be displayed here             -->
                </div>
            </div>
        </div>
        <div class="row">
        <div class="text-center"><p>Subscribe now!</p>
        <a href="https://nextcloud.com/podcast-feed.rss"><i class="fa fa-rss" aria-hidden="true"></i> mp3</a><br/><a href="https://nextcloud.com/podcast-feed-opus.rss"><i class="fa fa-rss" aria-hidden="true"></i> OPUS</a><br/><a href="https://nextcloud.com/podcast-feed-m4a.rss"><i class="fa fa-rss" aria-hidden="true"></i> aac/m4a</a><br/><a href="https://open.spotify.com/show/622xNEOPDzAltHbCh5MF9x"><i class="fa fa-rss" aria-hidden="true"></i> on spotify</a><br/><a href="https://podcasts.apple.com/de/podcast/the-nextcloud-podcast/id1517381474"><i class="fa fa-rss" aria-hidden="true"></i> on apple podcast/itunes</a></p>
    </div>
</section>

<section class="section--previous">
    <div class="container">
    <h2 class="text-center"><?php echo $l->t('Previous episodes');?></h2>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <ul>
                    <?php $podcast_posts = get_posts( array( 'numberposts' => 5, 'category' => get_cat_ID('podcast') ) );
                    foreach ($podcast_posts as $ppost) { ?>
                        <li><a href="<?php echo wp_get_canonical_url($ppost->ID);?>"><?php echo $ppost->post_title;?></a></li>
                    <?php } ; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
