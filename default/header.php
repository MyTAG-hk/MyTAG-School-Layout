<html lang="zh-hk">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?= $seoPageString ?> <?= $sSchoolEnName ?> Timetable - <?= ucwords($sNikename) ?> Timetable - <?= $sSchoolName ?> Timetable - <?= $sSchoolName ?> 時間表課表 - MyTag Timetables</title>
        <meta name="keywords" content="<?= $seoPageString ? $seoPageString . ',' : '' ?><?= $sKeywords ?>">
        <meta name="description" content="<?= $seoPageString ?> <?= $sDescription ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:url"           content="<?= $sDomainName ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="<?= $sTitle ?> <?= $sSchoolName ?> Timetable - <?= $sSchoolName ?> 時間表課表 - MyTag Timetables" />
        <meta property="og:description"   content="<?= $sDescription ?>" />
        <meta property="og:image"         content="<?= $sHSchoolLogo ?>" />
        <link href="<?= siteUrl('staticUrl') ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="<?= siteUrl('staticUrl') ?>css/styles.css?t=<?=STATIC_VERSION?>" rel="stylesheet">
		<?= \SelfClass\Controller::loadSTemplate('header_css') ?>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: "530837146934569", // App ID
                    channelURL: "http://mytag.hk/", // Channel File
                    status: false, // check login status
                    cookie: true, // enable cookies to allow the server to access the session
                    oauth: true, // enable OAuth 2.0
                    xfbml: true  // parse XFBML
                });
            };

            // Load the SDK Asynchronously
            (function (d) {
                var js, id = "facebook-jssdk";
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement("script");
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/zh_HK/all.js";
                d.getElementsByTagName("head")[0].appendChild(js);
            }(document));
        </script>
    </head>
    <body>
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
						<li>
                            <a href="<?= siteUrl('mainUrl') ?>">返回MyTag</a>
                        </li>
                        <li <?= Contrasts(M, 'Code', 'class="active"') ?>>
                            <a href="/code">短碼提課表</a>
                        </li>
                        <li>
                            <a href="#"><?= $sSchoolName ?> 資料</a>
                        </li>
                        <li>
                            <a href="#">最新動態</a>
                        </li>
						<li>
                            <a href="/holiday">假期活動動態</a>
                        </li>
                        <li>
                            <a href="#">投遞資料</a>
                        </li>
						<li style="padding: 13px;">
							<div class="fb-like" data-href="http://www.facebook.com/HKTimeTable" data-send="true" data-layout="button_count" data-width="100" data-show-faces="false"></div>
						</li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="masthead">  
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
					<?php if($sHSchoolLogo):?>
						<img src="<?=$sHSchoolLogo?>" class="img-responsive">
					<?php else: ?>
                        <h1><a href="/" style="color: #fff"><?= $sSchoolName ?></a></h1>
						<h3 style="padding-left: 40%">Mytag 時間表</h3>
					<?php endif; ?>
                    </div>
                    <div class="col-md-5">
                        <div class="well well-lg"> 
                            <div class="row">
                                <div class="col-sm-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!-- /cont -->

        </div>
		<div class="container">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Mytag-Auto -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-4580389945017951"
				 data-ad-slot="4577265800"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>