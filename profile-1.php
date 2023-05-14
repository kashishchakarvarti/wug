<?php
phpinfo();
die;
include_once('common/config.php');
if(isset($_SESSION['SERVER_USER_ID']) && isset($_SESSION['SERVER_USER_SESSION_ID']) && isset($_SESSION['SERVER_USER_IP_ADDRESS']) && isset($_SESSION['SERVER_USER_CITYNAME'])){

}else{
    header('location:index.php?login=required');
    exit;
}
$sqlData = "SELECT *
            FROM `".TBL_REGISTERED_USERS."` AS u
            WHERE u.status = 1
            AND u.id = '".$conn->real_escape_string($_SESSION['SERVER_USER_ID'])."'
            LIMIT 1";
$resultSqlData = $conn->query($sqlData);
$rowCount = mysqli_num_rows($resultSqlData);
if($rowCount){
    $rowData = mysqli_fetch_assoc($resultSqlData);
}else{
    header('location:index.php?invalid-profile');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="assets/favicon-32x32.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;400;500;600;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="src-file/style.css?<?php echo time();?>" />
        <script type="text/javascript">
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_ID", "<?php echo md5($_SESSION['SERVER_USER_ID']);?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_SESSION_ID", "<?php echo $_SESSION['SERVER_USER_SESSION_ID'];?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IP_ADDRESS", "<?php echo $_SESSION['SERVER_USER_IP_ADDRESS'];?>");
            sessionStorage.setItem("<?php echo SITE_NAME;?>_USER_IP_CITY_NAME", "<?php echo $_SESSION['SERVER_USER_CITYNAME'];?>");
        </script>
        <title><?php echo SITE_NAME;?> - <?php echo $rowData['full_name'];?></title>
        <meta property="og:title" content="<?php echo SITE_NAME;?> - <?php echo $rowData['full_name'];?> - <?php echo $rowData['finix_name'];?>" />
        <meta property="og:description" content="Help them uncover their spy fantasy." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo SITE_URL.'/share.php?token='.md5($rowData['id']);?>" />
        <meta property="og:image" content="<?php echo $rowData['image'];?>" />
        <meta property="og:video" content="<?php echo SITE_URL.'/assets/Incoming-Call.mp4';?>" />
        <meta property="og:site_name" content="<?php echo SITE_NAME;?>" />
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
    <body id="capture-area">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBPL6XV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

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
        

        <div id="share-screen-1"  class="wrapper">
            <div style="display:block;height: 650px;width: 378px;background: #000;/* position: relative; *//* padding: 22px; */display: flex;place-content: center;" class="section-ten section">
                <div style="width: 85%;place-self: center;/* margin: 0 38px; */text-align: center;">
                    <div class="bg">
                        <img src="assets/final-screen.png" class="mobile">
                    </div>
                    <div class="cont12 top-align">
                        <div class="final-screen-wrap">
                            <div>
                                <div class="top-row">
                                    <div class="thumb bwWrapper">
                                        <!-- <img src="https://wug-media.s3.ap-south-1.amazonaws.com/d41d8cd98f00b204e9800998ecf8427e.jpeg" id="eeveelutions"/> -->
                                        <div style="width: 100%;
                                            height: 210px;
                                            background-size: cover;
                                            background-position: center;background-image: url(https://wug-media.s3.ap-south-1.amazonaws.com/d41d8cd98f00b204e9800998ecf8427e.jpeg);">
                                        </div>
                                        <canvas id="canvasimg" width="100%" height="200" style="position: absolute;left: 0; top: 0; width: 100%; height: 200px;"></canvas>
                                        <div class="overlay"><img src="assets/final-thumb-overlay.png"></div>
                                </div>
                                    <div class="right-col">
                                        <div class="location">
                                            <img src="assets/location-bg.png">
                                            <div class="text final-text">
                                                ROME, ITALY                                            </div>
                                        </div>
                                        <div class="name-card">
                                            <img src="assets/name-plate.png">
                                            <div class="wrap">
                                                <div class="agent-name final-agent-name">DD_KNIGHT</div>
                                                <div class="real-name final-real-name">// DFGDFG DFG</div>
                                                <div class="special-skills">
                                                    <h3>SPECIAL SKILL:</h3>
                                                    <p>Intelligence Gathering</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btm-row">
                                    <div class="traits">
                                        <img src="assets/traits.png">
                                        <div class="content">Adaptable, Multilingual, Charismatic, Discrete, Strategic</div>
                                    </div>
                                </div>
                                <div class="last-location">
                                    <img src="assets/last-location.png" alt="">
                                    <div class="content">
                                        <div class="left">
                                            <ul>
                                                <li style="background-image:url(./cookie/55.png)">STRENGTH: 55%</li>
                                                <li style="background-image:url(./cookie/60.png)">AGILITY: 60%</li>
                                                <li style="background-image:url(./cookie/65.png)">ENDURANCE: 65%</li>
                                                <li style="background-image:url(./cookie/70.png)">INTELLIGENCE: 70%</li>
                                            </ul>
                                        </div>
                                        <div class="right"><img src="assets/last-location-thumb.png" alt="" class="img1"> <img src="assets/last-location-thumb.png" alt="" class="img2"></div>
                                    </div>
                                </div>
                                <div class="btm-logo"><img src="assets/dark-fantasyxcitadel-logo.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        <div class="wrapper">
            <div class="section-ten section" id="share-screen" style="display:block;">
                <div class="bg">
                    <img src="assets/final-screen.png" class="mobile" />
                </div>
                <div class="cont top-align">
                    <div class="final-screen-wrap">
                    <div id="capture-area">
                        <div class="top-row">
                            <div class="thumb bwWrapper">
                                <!-- <img src="<?php echo $rowData['image'];?>" id="eeveelutions"/> -->
                                <div style="width: 100%;
                                    height: 210px;
                                    background-size: cover;
                                    background-position: center;background-image: url(<?php echo $rowData['image'];?>);">
                                </div>
                                <canvas id="canvasimg" width="100%" height="200" style="position: absolute;left: 0; top: 0; width: 100%; height: 200px;"></canvas>
                                <div class="overlay"><img src="assets/final-thumb-overlay.png" /></div>
                        </div>
                            <div class="right-col">
                                <div class="location">
                                    <img src="assets/location-bg.png" />
                                    <div class="text final-text">
                                        <?php echo $rowData['city_name'];?>
                                    </div>
                                </div>
                                <div class="name-card">
                                    <img src="assets/name-plate.png" />
                                    <div class="wrap">
                                        <div class="agent-name final-agent-name"><?php echo $rowData['finix_name'];?></div>
                                        <div class="real-name final-real-name">// <?php echo $rowData['full_name'];?></div>
                                        <div class="special-skills">
                                            <h3>SPECIAL SKILL:</h3>
                                            <p><?php echo $rowData['skills'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btm-row">
                            <div class="traits">
                                <img src="assets/traits.png" />
                                <div class="content"><?php echo $rowData['traits'];?></div>
                            </div>
                        </div>
                        <div class="last-location">
                            <img src="assets/last-location.png" alt="" />
                            <div class="content">
                                <div class="left">
                                    <ul>
                                        <li style="background-image:url(<?php echo './cookie/'.$rowData['strength'].".png";?>)">STRENGTH: <?php echo $rowData['strength'];?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$rowData['agility'].".png";?>)">AGILITY: <?php echo $rowData['agility'];?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$rowData['endurance'].".png";?>)">ENDURANCE: <?php echo $rowData['endurance'];?>%</li>
                                        <li style="background-image:url(<?php echo './cookie/'.$rowData['intelligence'].".png";?>)">INTELLIGENCE: <?php echo $rowData['intelligence'];?>%</li>
                                    </ul>
                                </div>
                                <div class="right"><img src="assets/last-location-thumb.png" alt="" class="img1" /> <img src="assets/last-location-thumb.png" alt="" class="img2" /></div>
                            </div>
                        </div>
                        <div class="btm-logo"><img src="assets/dark-fantasyxcitadel-logo.png" alt="" /></div>
                        </div>
                        <div class="share-cont">
                            <h4>Share with friends</h4>
                            <h5>Help them uncover their spy fantasy.</h5>
                            <p>Tag  <a href="https://www.instagram.com/sunfeastdarkfantasy/?hl=en">@sunfeastdarkfantasy</a> on Instagram with #UncoverYourFantasy</p>
                        </div>
                        <div class="btns" id="control-area">
                            <ul>
                                <li class="share action-btn-no-loading" id="action-btn-no-loading-1">
                                    <!-- <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo (SITE_URL.'/share.php?token='.md5($rowData['id']));?>"><img src="assets/share.png" /></a> -->
                                    <a id="share-button-click"><img src="assets/share.png" /></a>
                                </li>
                                <li  id="action-btn-no-loading-2"><button class="btn action-btn-no-loading" onclick="downloadImage()"><img src="assets/download.png"/></button></li>
                                <li class="btn" style="display: none;" id="upload-Image_submit-loading"><img src="assets/b2.gif"/><span> <div class="text">Loading...</div></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>


        <div class="btm-circle"><img src="assets/circle.png" /></div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src='https://html2canvas.hertzen.com/dist/html2canvas.min.js'></script>
        <script>
            const shareButton = document.querySelector('#share-button-click');

            shareButton.addEventListener('click', event => {
                event.preventDefault()
                const urlShare = "<?php echo (SITE_URL.'/share.php?share=true&token='.md5($rowData['id']));?>";
            if (navigator.share) {
                navigator.share({
                    title: '<?php echo SITE_NAME; ?>',
                    url: urlShare
                }).then(() => {
                    console.log('Thanks for sharing!');
                })
                .catch((e) => {
                    // window.open(urlShare, "_blank")
                });
            } else {
                window.open(urlShare, "_blank")
            }
            });
        </script>
        <script>

        // const img = document.getElementById("eeveelutions");
        const canvas = document.getElementById("canvasimg");
        const ctx = canvas.getContext("2d");

        // img.onload = function () {
        //   img.crossOrigin = "anonymous";
        //   ctx.drawImage(img, 0, 0);
        //   const imgData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        //   for (i = 0; i < imgData.data.length; i += 4) {
        //     let count = imgData.data[i] + imgData.data[i + 1] + imgData.data[i + 2];
        //     let colour = 0;
        //     if (count > 383) colour = 255;

        //     imgData.data[i] = colour;
        //     imgData.data[i + 1] = colour;
        //     imgData.data[i + 2] = colour;
        //     imgData.data[i + 3] = 255;
        //   }
        //   ctx.putImageData(imgData, 0, 0);
        // };


        //    window.onload = function(){
        //       html2canvas(document.getElementById('share-screen'), {
        //         allowTaint: true,
        //         backgroundColor: 'transparent',
        //         useCORS: true,
        //         scale: window.devicePixelRatio,
        //       } ).then(
        //         function(canvas) {
        //           let downloadButton = document.getElementById('btn-download'),
        //               imgageData = canvas.toDataURL("image/png");
        //               var $data = {
        //                 'user_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_ID"),
        //                 'user_session_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_SESSION_ID"),
        //                 'type': 'share',
        //                 'file': imgageData
        //             };
        //             $.ajax({
        //                 type: 'POST',
        //                 url: 'process-form.php',
        //                 data: $data,
        //                 success: function(response) {
        //                     var res = JSON.parse(response);
        //                     if(res.result == "success"){
        //                     }else{
        //                     }
        //                 },
        //                 error: function(response) {
        //                 },
        //             });
        //               // Now browser starts downloading it instead of just showing it
        //               imgageData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        //           downloadButton.setAttribute('download', "<?php echo md5($_SESSION['SERVER_USER_ID']);?>"+'-share.png');
        //           downloadButton.setAttribute('href', imgageData);
        //         }
        //       );
        //     }

            function downloadImage(){
                const vide = sessionStorage.getItem("<?php echo SITE_NAME;?>_VIDEO");
                // if(vide) {
                //     fetchFile(vide)
                //     return;
                // }

                const actionButton1 = document.querySelector('#action-btn-no-loading-1');
                const actionButton2 = document.querySelector('#action-btn-no-loading-2');
                const loadingButton = document.querySelector('#upload-Image_submit-loading');

                loadingButton.style.display = "block"
                actionButton1.style.display = "none"
                actionButton2.style.display = "none"
                
              html2canvas(document.getElementById('share-screen-1'), {
                allowTaint: true,
                backgroundColor: 'transparent',
                useCORS: true,
                scale: window.devicePixelRatio,
              } ).then(
                function(canvas) {
                        let imgageData = canvas.toDataURL("image/png");

                    //     imgageData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");

                    //   const downloadLink = document.createElement('a');
                    //     document.body.appendChild(downloadLink);

                    //     downloadLink.href = imgageData;
                    //     downloadLink.target = '_self';
                    //     downloadLink.download = "<?php echo md5($_SESSION['SERVER_USER_ID']);?>"+'-share.png';
                    //     downloadLink.click(); 

                    // -----------------------------

                    // imgageData = canvas.toDataURL("image/png");
                    var $data = {
                        'user_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_ID"),
                        'user_session_id' : sessionStorage.getItem("<?php echo SITE_NAME;?>_USER_SESSION_ID"),
                        'type': 'video',
                        'file': imgageData
                    };
                    $.ajax({
                        type: 'POST',
                        url: 'process-form.php',
                        data: $data,
                        success: function(response) {
                            try {
                                var res = JSON.parse(response);
                                if(res.result == "success") {
                                    sessionStorage.setItem("<?php echo SITE_NAME;?>_VIDEO", res.file_url);
                                    fetchFile(res.file_url)
                                    // window.open(res.file_url, "_blank")
                                }else{
                                }
                            } catch (error) {
                                
                            }
                        },
                        error: function(response) {
                            loadingButton.style.display = "none"
                            actionButton1.style.display = "block"
                            actionButton2.style.display = "block"
                        },
                    });    

                }
              ).catch((e) => {
                            loadingButton.style.display = "none"
                            actionButton1.style.display = "block"
                            actionButton2.style.display = "block"
              })
            }


            function fetchFile(url) {
                const actionButton1 = document.querySelector('#action-btn-no-loading-1');
                const actionButton2 = document.querySelector('#action-btn-no-loading-2');
                const loadingButton = document.querySelector('#upload-Image_submit-loading');
                fetch(url).then(res => res.blob()).then(file => {
                    let tempUrl = URL.createObjectURL(file);
                    const aTag = document.createElement("a");
                    aTag.href = tempUrl;
                    aTag.download = url.replace(/^.*[\\\/]/, '');
                    document.body.appendChild(aTag);
                    aTag.click();
                    // downloadBtn.innerText = "Download File";
                    URL.revokeObjectURL(tempUrl);
                    aTag.remove();
                    
                    loadingButton.style.display = "none"
                            actionButton1.style.display = "block"
                            actionButton2.style.display = "block"
                }).catch(() => {
                    // alert("Failed to download file!");
                    // downloadBtn.innerText = "Download File";
                    
                    loadingButton.style.display = "none"
                            actionButton1.style.display = "block"
                            actionButton2.style.display = "block"
                });
            }
        </script>
    </body>
</html>