<?php
include_once('common/config.php');
$_SESSION['SERVER_USER_SESSION_ID'] = $sessionId = md5(session_id());
$_SESSION['SERVER_USER_IP_ADDRESS'] = $ipAddress = getClientIp();
$_SESSION['SERVER_USER_CITYNAME'] = $cityName  = getTheIPLocation($ipAddress);
$_SESSION['SERVER_USER_SKILLS'] = $skills  = getTheSpecialSkills();
$_SESSION['SERVER_USER_TRAITS'] = $traits  = getTheTraits();
$_SESSION['SERVER_USER_STRENGTH'] = $strength  = getThePower();
$_SESSION['SERVER_USER_AGILITY'] = $agility  = getThePower();
$_SESSION['SERVER_USER_EDURANCE'] = $endurance  = getThePower();
$_SESSION['SERVER_USER_INTELLIGENCE'] = $intelligence  = getThePower();
$_SESSION['SERVER_USER_FOOTAGE'] = $footage  = getTheFootage();
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="assets/favicon-32x32.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;400;500;600;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="src-file/style.css?<?php echo time();?>" />
        <script type="text/javascript">
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_SESSION_ID", "<?php echo $sessionId;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IP_ADDRESS", "<?php echo $ipAddress;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME", "<?php echo $cityName;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_SKILLS", "<?php echo $skills;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_TRAITS", "<?php echo $traits;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_STRENGTH", "<?php echo $strength;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_AGILITY", "<?php echo $agility;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_EDURANCE", "<?php echo $endurance;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_INTELLIGENCE", "<?php echo $intelligence;?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_FOOTAGE", "<?php echo $footage;?>");
        </script>
        <title><?php echo SITE_NAME;?></title>

        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MBPL6XV');</script>
<!-- End Google Tag Manager -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1877805065913238');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1877805065913238&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

    </head>

    <body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBPL6XV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="desktop">
    <div class="bg">
    <img src="assets/desk-bg.png" />
    <div class="desk-cont">
        <h3>SCAN HERE TO <br>UNCOVER YOUR FANTASY</h3>
        <div class="scan-code"><img src="assets/qr-code.png" /></div>
</div>
    </div>
    </div>
</div>
    <div class="top-bar">
        <div class="h-icon">
            <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<circle fill="none" stroke="#fff" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
<line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
  <animateTransform 
       attributeName="transform" 
       dur="2s"
       type="rotate"
       from="0 50 50"
       to="360 50 50"
       repeatCount="indefinite" />
</line>
<line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
  <animateTransform 
       attributeName="transform" 
       dur="15s"
       type="rotate"
       from="0 50 50"
       to="360 50 50"
       repeatCount="indefinite" />
</line>
</svg>
</div>

<div class="h-icon">
<svg xmlns="http://www.w3.org/2000/svg" class="equilizer" viewBox="0 0 128 128">
  <g>
    <rect class="bar" transform="translate(0,0)" y="15"></rect>
    <rect class="bar" transform="translate(25,0)" y="15"></rect>
    <rect class="bar" transform="translate(50,0)" y="15"></rect>
    <rect class="bar" transform="translate(75,0)" y="15"></rect>
    <rect class="bar" transform="translate(100,0)" y="15"></rect>
  </g>
</svg>
</div>

<div class="progress"><span></span></div>

<div class="h-icon">
<div class="loader">
  <div class="square" ></div>
  <div class="square"></div>
  <div class="square last"></div>
  <div class="square clear"></div>
  <div class="square"></div>
  <div class="square last"></div>
  <div class="square clear"></div>
  <div class="square "></div>
  <div class="square last"></div>
</div>
</div>

<div class="h-icon">
<div class="loader8"></div>
</div>
</div>
        <div class="container"></div>
        <div class="wrapper">
            <div class="section-one section">
                <div class="bg">
                    <img src="assets/frame-small.png" class="mobile" />
                </div>
                <div class="cont">
                    <div class="loading">
                    <span
    class="typer"
    data-words="Establishing a secure connection…"
    data-colors="#EC1C24"
    data-delay="50"
    data-loop="1">
  </span>
                    </div>
                </div>
            </div>
            <div class="section-two section btm">
                <div class="bg">
                    <img src="assets/frame-large.png" class="mobile" />
                </div>
                <div class="cont top-align">
                    <div class="frame1">
                        <div class="biscuit"><img src="assets/biscuit.png" /></div>
                        <div class="title">
                            Uncover<br />
                            Your Fantasy
                        </div>
                        <div class="desc">
                            Live your ultimate spy fantasy by retrieving your hidden past with<br />
                            <span
    class="typer"
    data-words="Agent Nadia."
    data-colors="#FECF73"
    data-delay="500"
    data-loop="1">
  </span>
                            
                        </div>
                        <div class="enter-txt">
                            <ul>
                                <li>Enter the</li>
                                <li><img src="assets/citadel-logo.png" /></li>
                                <li>world</li>
                            </ul>
                            <div class="start-mission btn"><img src="assets/b1.gif"/><span>START Mission</span></div>
                        </div>
                        <div class="tacbox">
                            <input id="checkbox" type="checkbox" />
                            <label for="checkbox">I hereby agree to mentioned <a href="#inline" data-lity>Terms of Use </a>.</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-three section">
                <div class="bg">
                    <img src="assets/frame-small.png" class="mobile" />
                </div>
                <div class="cont">
                    <div class="frame2">
                        <div class="biscuit">
                        <video autoplay loop muted playsinline class="video-background ">
                        <source src="assets/cookie-loader.mp4" type="video/mp4">
                        </video>    
                        </div>
                        <div class="loading">
                        L<span
    class="typer"
    data-words="OADING…"
    data-colors="#EC1C24"
    data-delay="100"
    data-loop="1000">
  </span>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-four section">
                <div class="bg">
                    <img src="assets/frame-small.png" class="mobile" />
                </div>
                <div class="cont">
                    <div class="form-cont">
                        <div class="head">
                            Welcome to <span><img src="assets/citadel-logo.png" /></span>
                        </div>
                        <div class="mid-head">Authenticate your identity.</div>
                        <div class="name-cont">
                            <ul>
                                <li><input type="text" placeholder="ENTER FULL NAME" name="name" id="name"  onkeydown="return /^[a-zA-Z ]*$/i.test(event.key)" /></li>
                                <li>
                                    <button class="begin btn" type="submit"><img src="assets/b1.gif"/><span>Submit</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-five section btm">
                <div class="bg">
                    <img src="assets/frame-large-no-circle.png" class="mobile" />
                </div>
                <div class="cont top-align">
                    <div class="image-capture">
                        <div class="heading">
                        I<span
    class="typer"
    data-words="nitiate face scan…"
    data-colors="#EC1C24"
    data-delay="100"
    data-loop="1000">
  </span>        
                        </div>
                        <div id="preview" data-hasImage="false" class="preview">
                            <div class="ocrloader">
  <p>Scanning</p>
  <em></em>
  <span></span>
</div></div>
                        <div class="description">Turn on your camera or pick from your gallery.</div>
                        <div class="btn-holder">
                            <div class="flow-1 btns">
                                <ul>
                                    <li>
                                        <form class="fileUpload">
                                            <input type="file" name="upload_image" id="fileUpload" accept="image/*" class="upload" capture="camera" />
                                            <span class="btn"><img src="assets/b1.gif"/><span><div class="icon"><img src="assets/camera-line.png" alt=""></div> <div class="text">camera</div></span></span>
                                        </form>
                                    </li>
                                    <li>
                                        <form class="fileUpload">
                                            <input type="file" name="upload_image" id="fileUpload2" accept="image/*" class="upload" />
                                            <span class="btn"><img src="assets/b2.gif"/><span><div class="icon"><img src="assets/gallery-line.png" alt=""></div> <div class="text">gallery</div></span></span>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                            <div class="flow-2 btns">
                                <ul>
                                    <li class="proceed btn" id="upload-Image_submit"><img src="assets/b2.gif"/><span><div class="icon"><img src="assets/submit-icon.png" alt=""></div> <div class="text">submit</div></span></li>
                                    <li class="btn" style="display: none;" id="upload-Image_submit-loading"><img src="assets/b2.gif"/><span> <div class="text">Loading...</div></span></li>
                                    <li class="retake btn"><img src="assets/b1.gif"/><span><div class="icon"><img src="assets/retake-icon.png" alt=""></div> <div class="text">retake</div></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-six section btm">
                <div class="bg">
                    <img src="assets/frame-large-no-circle.png" class="mobile" />
                </div>
                <div class="cont">
                    <div class="incoming-call">
                        <div class="heading">
                        I<span
    class="typer"
    data-words="ncoming transmission…"
    data-colors="#EC1C24"
    data-delay="100"
    data-loop="1000">
  </span>  </div>
                        <div class="caller"><img src="assets/agent-nadia.png" /></div>
                        <div class="caller-id">Agent Nadia <span>Unknown Number</span></div>
                        
                        <div class="accept-call">
                        <div id="well">
			
			<h2><strong id="slider"></strong> <span>SLIDE TO ANSWER</span></h2>
			
		</div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-seven section btm" id="section-seven">
                <div class="bg">
                    <img src="assets/frame-large-no-circle.png" class="mobile" />
                </div>
                <div class="cont">
                <div class="caller-thumb"><img src="assets/agent-nadia.png" /><div class="overlay"><img src="assets/caller-thumb-overlay.png" /></div></div>
                <video src="assets/Incoming-Call-final.mp4" id="movie1" poster="assets/poster.jpg" controls playsinline autoplay muted  preload></video>
                </div>
            </div>

            <div class="section-eight section btm" id="final-screen">
                <div class="bg">
                    <img src="assets/final-screen.png" class="mobile" />
                </div>
                <div class="cont top-align">
                    <div class="final-screen-wrap">
                        <div class="top-row">
                            <div class="thumb">
                                <img src="assets/final-thumb.png" />
                                <div class="overlay"><img src="assets/final-thumb-overlay.png" /></div>
                        </div>
                            <div class="right-col">
                                <div class="location">
                                    <img src="assets/location-bg.png" />
                                    <div class="text final-text">
                                        <?php echo $cityName;?>
                                    </div>
                                </div>
                                <div class="name-card">
                                    <img src="assets/name-plate.png" />
                                    <div class="wrap">
                                        <div class="agent-name final-agent-name"></div>
                                        <div class="real-name final-real-name"></div>
                                        <div class="special-skills">
                                            <h3>SPECIAL SKILL:</h3>
                                            <p><?php echo $skills;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btm-row">
                            <div class="traits">
                                <img src="assets/traits.png" />
                                <div class="content"><?php echo $traits;?></div>
                            </div>
                        </div>
                        <div class="last-location">
                            <img src="assets/last-location.png" alt="" />
                            <div class="content">
                                <div class="left">
                                    <ul>
                                        <!-- <li>STRENGTH: <?php echo $strength;?>%</li>
                                        <li>AGILITY: <?php echo $agility;?>%</li>
                                        <li>ENDURANCE: <?php echo $endurance;?>%</li>
                                        <li>INTELLIGENCE: <?php echo $intelligence;?>%</li> -->
                                        <li style="background-image:url(<?php echo './cookie/'.$strength.".png";?>)">STRENGTH: <?php echo $strength;?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$agility.".png";?>)">AGILITY: <?php echo $agility;?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$endurance.".png";?>)">ENDURANCE: <?php echo $endurance;?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$intelligence.".png";?>)">INTELLIGENCE: <?php echo $intelligence;?>%</li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <img src="<?php echo SITE_URL.'/footage/'.$footage;?>" alt="" class="img1" />
                                    <img src="<?php echo SITE_URL.'/footage/'.$footage;?>" alt="" class="img2" />
                                </div>
                            </div>
                        </div>
                        <div class="btm-logo"><img src="assets/dark-fantasyxcitadel-logo.png" alt="" /></div>

                        <div class="btns">
                            <ul>
                                <li class="accept btn"><img src="assets/b1.gif"/><span><div class="icon"><img src="assets/submit-icon.png" alt=""></div> <div class="text">accept</div></span></li>
                                <li class="retake2 btn"><img src="assets/b1.gif"/><span><div class="icon"><img src="assets/retake-icon.png" alt=""></div> <div class="text">retake</div></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-nine section">
                <div class="bg"> 
                    <img src="assets/frame-small.png" class="mobile">
                </div>
                <div class="cont">
                    <div class="form-cont">
                        <div class="head">
                            Profile retrieved successfully
                        </div>
                        <div class="mid-head">Save your agent profile by entering your details.</div>
                        <div class="name-cont">
                            
                            <ul>
                                <li><input type="text" placeholder="PHONE REQUIRED" name="phone" id="phone" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ></li>
                                <li><input type="email" placeholder="EMAIL REQUIRED" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></li>
                                <li><button class="send-data btn" type="submit"><img src="assets/b1.gif"/><span>submit</span></button></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
             
        </div>

        <div id="inline" style="overflow:auto;background:#000; color:#fff; padding:20px;width:600px;max-width:100%;border-radius:6px" class="lity-hide">
        <div class="tnc">

        <h3>Terms and Conditions</h3>
<ul>
<li>1) This Campaign is a limited period campaign sponsored and launched by ITC Limited (“ITC”). This campaign shall be organised and managed by Dentsu Webchutney Private Limited (“Dentsu”).</li>
<li>2) The Campaign is open only for Indian citizens who are currently residing in India. Participants below the age of 18 can participate only with the consent of their parent(s)/legal guardian (“Participant”). By participating in this campaign the Participant agrees that consent from parent/legal guardian has been taken. </li>
<li>3) By sharing their personal information such as name, location, mobile phone number, email ID and photo for the campaign launched by ITC, the Participant consents to collection, storage, processing and use of this personal information by Dentsu and its affiliates, associates, agents, contractors and other third parties (“Data Processor”) in accordance to directions given by ITC. </li>
<li>4) Personal information given by the Participants shall be used to create the SPY ID Card photo and video, and for promotional activities of ITC. The personal information is being collected by the Data Processor and shall be retained by the Data Processor.</li>
<li>5) The Participants also have an option to withdraw their consent in relation to usage of personal information. The Participants may reach out to <a href="mailto:support@uncoveryourfantasy.com">support@uncoveryourfantasy.com</a> for such withdrawals.</li>
<li>6) By consenting to the Terms and Conditions of this Campaign, the Participants acknowledge and consent to transfer and/or disclosure of their personal information by Data Processor/ITC to any third-party.</li>
<li>7) By participating in this Campaign, the Participants consent to their photo/image being appropriately modified/edited for the SPY ID Card photo and video.</li>
</ul>
</div>
    </div>
    <audio style="
    display: none;
" controls loop>
  <source src="assets/phone-ring.mp3">
</audio>
<audio class="bg-music" style="display: none;" controls loop>
  <source src="assets/bg-music.mp3">
</audio>
        <div class="btm-circle"><img src="assets/circle.png" /></div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js'></script>
        <script src="src-file/jquery.BlackAndWhite.min.js"></script>
        <script>


var audio = new Audio(
  "assets/phone-ring.mp3"
);
function play() {
  audio.play();
}

function pause() {
  audio.pause();
}

var bgaudio = new Audio(
  "assets/bg-music.mp3"
);
function play() {
    bgaudio.play();
}

function pause() {
    bgaudio.pause();
}







            $(".section-one").delay(3000).fadeOut("slow");
           // $(".btm-circle").delay(3000).fadeOut("slow");
            $(".section-two").delay(3100).fadeIn("slow");
            $(".progress span").addClass("act1");
            
            $(".start-mission").click(function () {
                let startMissionChecked = $('#checkbox')[0].checked;
                if(startMissionChecked == true){
                    sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_START_MISSION", true);
                    $(".section-two").stop().fadeOut("slow");
                    $(".section-three").stop().fadeIn("slow");
                    $(".section-three").delay(3000).fadeOut("slow");
                    $(".section-four").delay(3100).fadeIn("slow");
                    $(".progress span").addClass("act2");
                    bgaudio.play();
                }
                else{
                    $(".tacbox").addClass("error");
                    
                }
            });
            $(".name-cont button.begin").click(function () {
                let missionUserFullName = $('#name').val();
                if(missionUserFullName){
                    missionUserFullName = missionUserFullName.toUpperCase();
                    sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_FULL_NAME", missionUserFullName);
                    let acronym = missionUserFullName.split(/\s/).reduce((response,word)=> response+=word.slice(0,1),'');
                    let finixName = acronym+'_'+"<?php echo $spyNameArray[rand(0,10)];?>";
                    sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_FINIX_NAME", finixName);
                    sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);
                    $(".section-four").fadeOut("slow");
                    $(".section-five").fadeIn("slow");
                    $('#name').removeClass("error");
                }
                else{
                    $('#name').addClass("error");

                }
            });
            $(".fileUpload").click(function () {
                $(".flow-1").delay(800).fadeOut("slow");
                $(".flow-2").delay(810).fadeIn("slow");
            });
            $(".proceed").click(function () {
                //if(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE") == true){
                    $(".section-five").fadeOut("slow");
                    $(".section-six").fadeIn("slow");
                    audio.play();
                    $(".progress span").addClass("act4");

                //}else{
                    //alert(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE"));
                //}
            });
            $(".retake").click(function () {
                sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);
                $(".flow-2").fadeOut("fast");
                $(".flow-1").fadeIn("slow");
                $(".preview img").attr("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==");
            });
            $(function() {

                $("#slider").draggable({
                    axis: 'x',
                    containment: 'parent',
                    drag: function(event, ui) {
                        if (ui.position.left > 550) {
                            $("#well").fadeOut();
                        } else {
                            // Apparently Safari isn't allowing partial opacity on text with background clip? Not sure.
                            // $("h2 span").css("opacity", 100 - (ui.position.left / 5))
                        }
                    },
                    stop: function(event, ui) {
                        if (ui.position.left < 551) {
                            $(this).animate({
                                left: 0
                            })
                        }
                    }
                });

                // The following credit: http://www.evanblack.com/blog/touch-slide-to-unlock/

                $('#slider')[0].addEventListener('touchmove', function(event) {
                    event.preventDefault();
                    var el = event.target;
                    var touch = event.touches[0];
                    curX = touch.pageX - this.offsetLeft - 73;
                    if(curX <= 0) return;
                    if(curX > 250){
                        //if(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE") == true){
                            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_ACCEPT_CALL", true);
                                    $(".section-six").fadeOut("slow");
                                    $(".section-seven").fadeIn("slow");
                                     $('#movie1')[0].play();
                                     $("#movie1").prop('muted', false);
                                     audio.pause();
                                     $("#movie1").bind("ended", function() {
                                        $(".section-seven").fadeOut("slow");
                                    $(".section-eight").fadeIn("slow");
});
                                   
                                     
                    }
                       el.style.webkitTransform = 'translateX(' + curX + 'px)'; 
                }, false);

                $('#slider')[0].addEventListener('touchend', function(event) {	
                    this.style.webkitTransition = '-webkit-transform 0.3s ease-in';
                    this.addEventListener( 'webkitTransitionEnd', function( event ) { this.style.webkitTransition = 'none'; }, false );
                    this.style.webkitTransform = 'translateX(0px)';
                }, false);

                });
           
            $(".accept").click (function(){
                ////////////////////////////////////////
                sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_ACCEPT_MISSION", true);
                $('.section-eight').fadeOut('slow');
                $('.section-nine').fadeIn('slow');
                $(".progress span").addClass("act5");
            });
            $(".retake2").click (function(){
                ////////////////////////////////////////
                $('.section-eight').fadeOut('slow');
                $('.section-five').fadeIn('slow');
                $(".progress span").removeClass("act5");
                $(".progress span").removeClass("act4");
            });
            $(".name-cont button.send-data").click(function () {
                let phone = $('#phone').val();
                let email = $('#email').val();
                if(phone && email){

                    ////////////////////////////////////////
                    var $data = {
                        'user_session_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_SESSION_ID"),
                        'user_ip_address' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_ADDRESS"),
                        'user_ip_city_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME"),
                        'user_start_mission' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_START_MISSION"),
                        'user_full_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FULL_NAME"),
                        'user_finix_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FINIX_NAME"),
                        'user_accept_call' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_ACCEPT_CALL"),
                        'type': 'process',
                        'user_accept_mission' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_ACCEPT_MISSION"),
                        'file_name': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IMAGE"),
                        'skills': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_SKILLS"),
                        'traits': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_TRAITS"),
                        'strength': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_STRENGTH"),
                        'agility': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_AGILITY"),
                        'endurance': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_EDURANCE"),
                        'intelligence': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_INTELLIGENCE"),
                        'footage': sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FOOTAGE"),
                        'phone': phone,
                        'email': email,
                    };
                    $.ajax({
                        type: 'POST',
                        url: 'process-form.php',
                        data: $data,
                        success: function(response) {
                            var res = JSON.parse(response);
                            if(res.result == "success"){
                                $(".section-nine").fadeOut("slow");
                                $(".btm-circle").fadeOut("slow");

                                
                                 window.location = 'profile.php';
                                //sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", true);
                                //sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IMAGE", res.file_name);
                                //$(".final-text").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME"));
                                //$(".final-agent-name").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FINIX_NAME"));
                                //$(".final-real-name").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FULL_NAME"));
                                //$(".final-screen-wrap .thumb img").attr("src", res.file_url);
                            }else{
                                //sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);

                            }
                        },
                        error: function(response) {
                            //sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);
                        },
                    });
                    ////////////////////////////////////////

                    $('#phone').removeClass("error");
                    $('#email').removeClass("error");
                }
                else{
                    $('#phone').addClass("error");
                    $('#email').addClass("error");

                }
            });
           
            //image uploader code
            const fileInput = document.getElementById("fileUpload");
            const fileInputG = document.getElementById("fileUpload2");
            const preview = document.getElementById("preview");
            const el = document.createElement("img");
            el.setAttribute("alt", "");
            preview.append(el);
            fileInput.addEventListener("change", handleChange);
            fileInputG.addEventListener("change", handleChange);
            preview.addEventListener("dragenter", drag, false);
            preview.addEventListener("dragover", drag, false);
            preview.addEventListener("drop", drop, false);
            function handleChange(event) {
                $("#upload-Image_submit").css("display","none");
                $(".retake").css("display","none");
                $("#upload-Image_submit-loading").css("display","block");
                const file = event.target?.files[0] || event;
                const reader = new FileReader();
                reader.onload = function(){
                    el.src = reader.result;
                    var $data = {
                        'user_session_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_SESSION_ID"),
                        'user_ip_address' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_ADDRESS"),
                        'user_ip_city_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME"),
                        'user_start_mission' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_START_MISSION"),
                        'user_full_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FULL_NAME"),
                        'user_finix_name' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FINIX_NAME"),
                        'type': 'image',
                        'file': el.src
                    };
                    $.ajax({
                        type: 'POST',
                        url: 'process-form.php',
                        data: $data,
                        success: function(response) {
                            var res = JSON.parse(response);
                            if(res.result == "success"){
                                sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", true);
                                sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IMAGE", res.file_url);
                                $(".final-text").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME"));
                                $(".final-agent-name").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FINIX_NAME"));
                                $(".final-real-name").html(sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_FULL_NAME"));
                                $(".final-screen-wrap .thumb > img").attr("src", res.file_url);
                                $(".caller-thumb > img").attr("src", res.file_url);
                            }else{
                                sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);
                            }
                $("#upload-Image_submit").css("display","block");
                $(".retake").css("display","block");
                $("#upload-Image_submit-loading").css("display","none");
                        },
                        error: function(response) {
                            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_UPLOAD_IMAGE", false);
                $("#upload-Image_submit").css("display","block");
                $(".retake").css("display","block");
                $("#upload-Image_submit-loading").css("display","none");
                        },
                    });
                };
                reader.readAsDataURL(file);
                preview.setAttribute("data-hasImage", "true");
            }
            function drag(event) {
                event.stopPropagation();
                event.preventDefault();
            }
            function drop(e) {
                e.stopPropagation();
                e.preventDefault();
                const dt = e.dataTransfer;
                const fileList = dt.files;
                if (!fileList[0].type.startsWith("image/")) return;
                fileInput.files = fileList;
                fileInputG.files = fileList;
                handleChange(fileList[0]);
            }



           




        </script>

        
    </body>
</html>
