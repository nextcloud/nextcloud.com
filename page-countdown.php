<head>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/clock.css?v=1" rel="stylesheet">
    <script>
    require(["require.config"], function() {
        require(["jquery"])
    });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/gears.jpg">
<meta name=”Description” content="Nextcloud is the most secure private cloud solution - learn how it keeps your data safe!">
<!-- <meta http-equiv="refresh" content="60"> -->

<script>

/**
 * Event date in UTC, modify the string!!
 */
const eventDateUTC =  new Date('06 July 2021 10:59:59');

// Start the counter
$(document).ready(function(){
	setInterval(updateCounter, 1000)
})

// Clear the interval
$(window).unload(function() {
	clearInterval(updateCounter, 1000)
})


const updateCounter = function() {
	// Get time left
	timeLeft = getTimeLeft(eventDateUTC)

	// Update the template
	$('.hours').text(timeLeft.hours)
	$('.minutes').text(timeLeft.minutes)
	$('.seconds').text(timeLeft.seconds)
	$('.days').text(timeLeft.days)
}

/**
 * Gets the time left from the event date to
 */
const getTimeLeft = function(eventDateUTC) {

	const now = new Date

	// Time left in milliseconds (UTC)
	const timeLeftUTC = eventDateUTC - now

	// Offset to local timezone in milliseconds
	let offset = now.getTimezoneOffset() * 60000

	// Time left in milliseconds
	const timeLeft = timeLeftUTC - offset

	// Get days left
	const daysLeft = format(Math.floor(timeLeft / 86400000))

	// Get hours left
	let millisecondsLeft = timeLeft % 86400000
	const hoursLeft = format(Math.floor(millisecondsLeft / 3600000))

	// Get minutes left
	millisecondsLeft = millisecondsLeft % 3600000
	const minutesLeft = format(Math.floor(millisecondsLeft / 60000))

	// get seconds left
	millisecondsLeft = millisecondsLeft % 60000
	const secondsLeft = format(Math.floor(millisecondsLeft / 1000))

	return {
		days: daysLeft,
		hours: hoursLeft,
		minutes: minutesLeft,
		seconds: secondsLeft,
	}
}

/**
 * Add zeros if needed and stringifies everything
 */
const format = (number) => {
	if (number < 10) {
		return `0${number}`
	} else return number.toString()
}
</script>

</head>

<div class=" background security-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Coming soon!</h1>
            <h2>Stay tuned for our announcement on July 6<br>at 1PM CET</h2>
<!--             <h1>Nextcloud 21 is here!</h2> -->
<!--             <h2>Re-watch our announcement below.</h2> -->
        </div>
    </div>
</div>
<section class="section--clock">
    <div class="container">
        <div class="clock">
            <div class="text-center" id="countdown">
                <div class="cd-box">
                    <p class="numbers days">00</p><br>
                    <p class="strings timeRefDays">Days</p>
                </div>
                <div class="cd-box">
                    <p class="numbers hours">00</p><br>
                    <p class="strings timeRefHours">Hours</p>
                </div>
                <div class="cd-box">
                    <p class="numbers minutes">00</p><br>
                    <p class="strings timeRefMinutes">Minutes</p>
                </div>
                <div class="cd-box">
                    <p class="numbers seconds">00</p><br>
                    <p class="strings timeRefSeconds">Seconds</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!--<section>
    <div class="container">
        <div class="row text-center">
            <iframe width="100%" height="550" src="https://www.youtube-nocookie.com/embed/bjivOowRao4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Announcement video:</p>
            <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556069230?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud 21 introduction video"></iframe></div>
            <p>Live Q&A recording:</p>
            <iframe width="100%" height="550" src="https://www.youtube-nocookie.com/embed/iMCza-AX3hg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>-->



<!--<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Be there!');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Join us at our Berlin office, Tempelhofer Ufer 23-24 on January 17, 14:00.');?></p>
		</div>
	</div>
</div>
</section>-->

<section class="section--join">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph__tittle"><?php echo $l->t('Be a part of it!');?></p>
            <p class="section--paragraph"><a class="hyperlink" href="https://youtu.be/Y0VZ7t8JGZE"><?php echo $l->t('Join us at the live stream on our YouTube channel.');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('The virtual event starts on July 6th at 1PM CET.');?></p>
		</div>
	</div>
	<div class="row program">
        <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr>
                    <th scope="row">13:00</th>
                    <td><span class="break">Start of presentation<br>
                    <small>On our YouTube channel.</small></span></td>
                    <td>Frank, Greta, Jan, Jos and others</td>
                    </tr>
                    <tr>
                    <th scope="row">13:45-14:30</th>
                    <td>Live Q&A ask questions in the chat!
                    </td>
                    <td><span class="break">Frank Karlitschek<br>Jos Poortvliet</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>Can't make it? No worries, we'll publish the video and live stream later!</p>
        </div>
    </div>
</div>
</section>

