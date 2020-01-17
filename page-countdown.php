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
<meta http-equiv="refresh" content="60">

<script>

$(document).ready(function(){
	//
  (function(e){
		e.fn.countdown = function (t, n){
			function i(){
				eventDate = Date.parse(r.date) / 1e3;
				currentDate = Math.floor(e.now() / 1e3);
				//
				if(eventDate <= currentDate){
					n.call(this);
					clearInterval(interval)
				}
				//
				seconds = eventDate - currentDate;
				days = Math.floor(seconds / 86400);
				seconds -= days * 60 * 60 * 24;
				hours = Math.floor(seconds / 3600);
				seconds -= hours * 60 * 60;
				minutes = Math.floor(seconds / 60);
				seconds -= minutes * 60;
				//
				days == 1 ? thisEl.find(".timeRefDays").text("Days") : thisEl.find(".timeRefDays").text("Days");
				hours == 1 ? thisEl.find(".timeRefHours").text("Hours") : thisEl.find(".timeRefHours").text("Hours");
				minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minutes") : thisEl.find(".timeRefMinutes").text("Minutes");
				seconds == 1 ? thisEl.find(".timeRefSeconds").text("Seconds") : thisEl.find(".timeRefSeconds").text("Seconds");
				//
				if(r["format"] == "on"){
					days = String(days).length >= 2 ? days : "0" + days;
					hours = String(hours).length >= 2 ? hours : "0" + hours;
					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
				}
				//
				if(!isNaN(eventDate)){
					thisEl.find(".days").text(days);
					thisEl.find(".hours").text(hours);
					thisEl.find(".minutes").text(minutes);
					thisEl.find(".seconds").text(seconds)
				}
        else{
          errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
					alert(errorMessage);
					console.log(errorMessage);
					clearInterval(interval)
				}
			}
			//
			var thisEl = e(this);
			var r = {
				date: null,
				format: null
			};
			//
			t && e.extend(r, t);
			i();
			interval = setInterval(i, 1e3)
		}
	})(jQuery);
	//
	$(document).ready(function(){
		function e(){
			var e = new Date;
			e.setDate(e.getDate() + 60);
			dd = e.getDate();
			mm = e.getMonth() + 1;
			y = e.getFullYear();
			futureFormattedDate = mm + "/" + dd + "/" + y;
			return futureFormattedDate
		}
		//
		$("#countdown").countdown({
			date: "17 January 2020 13:59:59", // change date/time here - do not change the format!
			format: "on"
		});
	});
});


</script>

</head>

<div class=" background security-background">
    <div class="container">
        <div class="col-md-6 topheader">
            <h1>Coming soon!</h1>
            <h2>Stay tuned for our announcement on January 17 2020</h2>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row text-center">
            <iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/9Sx8_9ZSWzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>


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
            <p class="section--paragraph"><?php echo $l->t('Join us at our Berlin office we share with Wikimedia at Tempelhofer Ufer 23-24 on January 17, 13:00.');?></p>
		</div>
	</div>
	<div class="row program">
        <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr>
                    <th scope="row">13:00</th>
                    <td><span class="break">Welcome<br>
                    <small>with drinks and conversation.</small></span></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">14:00</th>
                    <td>Our big reveal!
                    </td>
                    <td><span class="break">Frank Karlitschek <br><small>Nextcloud CEO & founder</small></span></td>
                    </tr>
                    <tr>
                    <th scope="row">15:30</th>
                    <td>A second announcement.
                    <br>
                    <span class="break"><small></small></span></td>
                    <td><span class="break">Nextcloud and ...</td>
                    </tr>
                    <tr>
                    <th scope="row">17:00</th>
                    <td>Drinks<br>
                    <span class="break"><small> and snacks on us!</small><span class="break">
                    </td>
                    <td><span class="break">Everybody</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>Can't make it? No worries, we'll have a <strong>live video stream</strong> right here!</p>
        </div>
    </div>
</div>
</section>

