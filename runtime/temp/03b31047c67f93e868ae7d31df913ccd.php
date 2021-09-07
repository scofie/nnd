<?php /*a:1:{s:64:"/www/wwwroot/sl.g8ym.com/application/index/view/index/index.html";i:1629696352;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no, email=no"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, shrink-to-fit=no" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#4188c9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/favicon.ico?2" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?2" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard.css?3" />
    <link rel="stylesheet" href="/static/css/global.css?3" />
    <title><?php echo htmlentities(app('config')->get('hello.title')); ?></title>
    <style>
    .site-wrapper {
        position: relative;
        padding: 2em;
        max-width: 64em;
        margin: 0px auto;
    }
    .site-header {
        background-color: #FBFBFB;
        background-image: url(/static/image/site/header_bg.png);
        background-size: cover;
        background-position: center;
        border-bottom: solid 1px #DEDEDE;
    }
    .site-navigation {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    .site-navigation .left {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .site-navigation .right {
        color: #fff;
        font-size: .9rem;
    }
    .site-navigation .right a {
        margin: 0 6px;
        cursor: pointer;
        color: #fff;
        text-decoration: none;
    }
    .site-logo {
        height: 40px;
        margin-top: 7px;
        margin-right: 30px;
    }
    .site-header-title {
        font-size: 2.5em;
        margin-bottom: 0.75rem;
        position: relative;
        line-height: 1.2em;
        color: #fff;
        margin-top: 80px;
    }
    .site-header-subtitle {
        font-size: 1.3em;
        margin-bottom: 4rem;
        color: #fff;
    }
    .site-header-download {
        height: 100px;
    }
    .site-header-download a {
        display: inline-block;
        padding: 8px 25px;
        margin: 10px 0;
        border: 1px solid rgba(255,255,255,0.8);
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        
    }
    .site-header-download a.ios {
        margin-right: 20px;
    }
    .site-header-banner {
        position: absolute;
        right: 12%;
        top: 94px;
        width: 21%;
    }
    .site-section-even {
        background-color: #ffffff;
        border-bottom: solid 1px #DEDEDE;
        border-top: solid 1px #DEDEDE;
    }
    .site-flex {
        padding: 4rem 2rem;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .site-section-image {
        display: inline;
        width: 56%;
    }
    @media (max-width: 768px) {
        .site-flex {
            padding: 1rem 2rem;
        }
        .site-section-image {
            display: block;
            width: 100%;
            margin: 0 auto;
        }
    }
    .site-section-image-left {
        width: 48%;
        position: absolute;
        left: 2rem;
        bottom: -68%;
    }
    .site-section-text {
        padding-left: 2em;
        padding-right: 1em;
    }
    .site-section-text ul {
        list-style: none;
        margin-left: -1em;
        margin-top: 2em;
    }
    .site-section-text ul li {
        margin-bottom: 1em;
    }
    .site-section-text ul li:before {
        content: "• ";
        color: #336FB2;
        padding-right: .5em;
    }
    .site-section-title {
        font-size: 2em;
        margin-bottom: 1rem;
        font-weight: normal;
        color: #222;
        line-height: 1.2;
    }
    .site-section-subtitle {
        margin: 2rem auto;
    }
    </style>
</head>

<body>
<!-- content -->
<div class="site">
    <div class="site-header">
        <div class="site-wrapper">
            <div class="site-navigation">
                <div class="left">
                    <img src="/static/image/logo_w.png" alt="" class="site-logo" />
                </div>
                <div class="right">
                    <a href="/signin.html">Log In</a>
                    /
                    <a href="/signup.html">Sign Up</a>
                </div>
            </div>
            <div class="site-header-title">Digital money for a digital age</div>
            <div class="site-header-subtitle">Global, fast, and secure</div>
            <div class="site-header-download" style="display:none;">
                <?php if(!(empty(app('config')->get('hello.appurl')) || ((app('config')->get('hello.appurl') instanceof \think\Collection || app('config')->get('hello.appurl') instanceof \think\Paginator ) && app('config')->get('hello.appurl')->isEmpty()))): ?>
                    <a href="http://isstoken.com/ISS.pdf" target="_blank" class="ios">白皮书 </a>
                    <!--<a href="<?php echo htmlentities(app('config')->get('hello.appurl')); ?>" target="_blank" class="android">app下载</a>-->
                <?php else: ?>
                    <a href="http://isstoken.com/ISS.pdf" data-toggle="tooltip" data-original-title="敬请期待" class="ios">白皮书</a>
                   <!-- <a href="javascript:;" data-toggle="tooltip" data-original-title="敬请期待" class="android">app下载</a>-->
                <?php endif; ?>
            </div>
            <img src="/static/image/site/p1.png" class="site-header-banner d-none d-md-block" />
        </div>
    </div>
    <div class="site-section">
        <div class="site-wrapper d-block d-md-none">
            <div class="site-section-title">Spot/Contract</div>
            <div class="site-section-subtitle mb-0">Daily real-time price curve, one click fast order submission, human friendly transaction process</div>
        </div>
        <div class="site-wrapper site-flex">
            <img class="site-section-image" src="/static/image/site/p2.png" />
            <div class="site-section-text d-none d-md-block">
                <div class="site-section-title">Spot/Contract</div>
                <ul>
                    <li>Daily real-time price curve is clear at a glance</li>
                    <li>One click quick order submission, convenient and fast</li>
                    <li>Human friendly transaction process, worry free to sell and buy</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-section site-section-even">
        <div class="site-wrapper" style="text-align: center;">
            <div class="site-section-title">Managed engine</div>
            <div class="site-section-subtitle">One click purchase of hosting engine, transaction is mining, real-time attention to engine dynamics, and start the steady profit mode.</div>
            <img class="site-section-image" src="/static/image/site/p3.png" />
        </div>
    </div>
    <div class="site-section d-block d-md-none">
        <div class="site-wrapper">
            <div class="site-section-title">Customer alliance</div>
            <div class="site-section-subtitle">Set up their own customer alliance, share the alliance income, calculate power bonus, and earn "after sleep" income</div>
            <img class="site-section-image" src="/static/image/site/p4.png" />
        </div>
    </div>
    <div class="site-section d-none d-md-block">
        <div class="site-wrapper site-flex o-hidden" style="padding: 6rem 2rem;">
            <img class="site-section-image site-section-image-left" src="/static/image/site/p4.png" />
            <div class="site-section-text d-none d-md-block" style="margin-left: 50%;">
                <div class="site-section-title">Customer alliance</div>
                <ul>
                    <li>Engine Revenue: team members receive mining dividends</li>
                    <li>Transaction income: team members' transaction dividends</li>
                    <li>Global revenue: dividends from global partner transactions</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-section site-section-even">
        <div class="site-wrapper" style="text-align: center;">
            <div class="site-section-title">About us</div>
            <div class="site-section-subtitle">
                <p>We are the first leaders engaged in blockchain</p>
                <p>Focus on the exploration and R & D of the future digital world and drive the technological development of the industry</p>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="site-wrapper">
            <div class="site-navigation">
                <div class="left d-none d-md-block">
                    <img src="/static/image/logo.png" alt="" class="site-logo" />
                </div>
                <div class="right" style="color: #333;">Copyright © 2020 <a href="#" style="color: #333;"><?php echo htmlentities(app('config')->get('hello.title')); ?></a>. All rights reserved.</div>
            </div>
        </div>
    </div>
</div>
<!-- script -->
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>
<script>
if (typeof(isApp) != 'undefined' && isApp) {
    window.location.href = api.account.home;
}
</script>
</body>
</html>