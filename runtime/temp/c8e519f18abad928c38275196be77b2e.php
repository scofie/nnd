<?php /*a:2:{s:64:"/www/wwwroot/sl.g8ym.com/application/admin/view/market/sell.html";i:1581830132;s:65:"/www/wwwroot/sl.g8ym.com/application/admin/view/common/world.html";i:1581830132;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
    <title>卖出订单</title>
    <style>
    .toast {
        text-align: center;
    }
    .toast-mask {
        position: fixed; z-index: 2456;
        left: 0;top: 0;right: 0;bottom: 0;
        background: rgba(0, 0, 0, 0.6);
    }
    .toast-body {
        position: fixed;
        z-index: 5000;
        width: 80%;
        max-width: 300px;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background-color: #FFFFFF;
        text-align: center;
        border-radius: 3px;
        overflow: hidden;
    }
    .toast-icon {
        padding: 1rem;
        min-height: 40px;
        line-height: 1.3;
    }
    .toast-icon i {
        font-size: 5rem;
    }
    .toast-message {
        word-wrap: break-word;
        word-break: break-all;
        font-size: 1.1rem;
    }
    .dropdown-menu {
        z-index: 2200;
    }
    </style>
    
</head>

<body>
<!-- content -->
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="/admin.html"><img src="/static/image/logo.png" class="header-brand-img" alt="tabler logo"></a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item">
                            <a href="/admin/staff/logout.html" class="btn btn-sm btn-outline-primary">退出登录</a>
                        </div>
                        <div class="nav-item">
                            <a href="/admin/account/addadmin.html?id=<?php echo htmlentities(app('request')->session('admin.id')); ?>&type=2" class="btn btn-sm btn-outline-primary">修改密码</a>
                        </div>
                        <div class="dropdown">
                            <a class="nav-link pr-0 leading-none">
                                <span class="avatar me-avatar" style="background-image: url(/static/image/icon.png);"><span class="avatar-status bg-green"></span></span>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default"><?php echo htmlentities($rolename); ?></span>
                                    <small class="text-muted d-block mt-1"><?php echo app('request')->ip(); ?></small>
                                </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto header-search-div">
                        <form class="input-icon my-3 my-lg-0" method="get" action="/admin/account/edit.html">
                            <input type="search" class="form-control header-search" placeholder="用户账号&hellip;" tabindex="1" name="username" />
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <?php if($role_status == 1): ?>
                            <li class="nav-item">
                                <a href="/admin.html" class="nav-link"><i class="fe fe-home"></i>后台</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown"><i class="fe fe-list"></i>网站</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <!-- <a href="/admin/index/carousel.html" class="dropdown-item">首页轮播图</a> -->
                                    <a href="/admin/news/index.html" class="dropdown-item">新闻公告</a>
                                    <a href="/admin/index/help.html" class="dropdown-item">帮助内容</a>
                                    <a href="/admin/index/contact.html" class="dropdown-item">用户留言</a>
                                    <a href="/admin/index/popup.html" class="dropdown-item">弹窗公告</a>
                                    <a href="/admin/index/group.html" class="dropdown-item">官方交流群</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/account.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-users"></i>账户</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/account/admin.html" class="dropdown-item">管理员列表</a>
                                    <a href="/admin/account/addadmin.html?type=1" class="dropdown-item">添加管理员</a>
                                    <a href="/admin/account.html" class="dropdown-item">用户列表</a>
                                    <a href="/admin/account/create.html" class="dropdown-item">添加用户</a>
                                    <a href="/admin/account/profile.html" class="dropdown-item">用户档案</a>
                                    <a href="/admin/account/audit.html" class="dropdown-item">实名认证</a>
                                    <a href="/admin/account/dashboard.html" class="dropdown-item">仪表盘</a>
                                    <a href="/admin/account/promotion.html" class="dropdown-item">推广数据</a>
                                    <?php if(!(empty(app('config')->get('hello.register_audit')) || ((app('config')->get('hello.register_audit') instanceof \think\Collection || app('config')->get('hello.register_audit') instanceof \think\Paginator ) && app('config')->get('hello.register_audit')->isEmpty()))): ?>
                                        <a href="/admin/account/reg_audit.html" class="dropdown-item">注册审核</a>
                                    <?php endif; ?>
                                    <a href="/admin/account/role.html" class="dropdown-item">角色列表</a>
                                    <a href="/admin/account/addrole.html" class="dropdown-item">添加角色</a>
                                    <a href="/admin/account/juris.html" class="dropdown-item" style="display:none;">权限列表</a>
                                    <a href="/admin/account/addjuris.html" class="dropdown-item" style="display:none;">添加权限</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/market.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-globe"></i>市场</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/market/index.html" class="dropdown-item">每日行情</a>
                                    <a href="/admin/market/buy.html" class="dropdown-item">买入订单</a>
                                    <a href="/admin/market/sell.html" class="dropdown-item">卖出订单</a>
                                    <a href="/admin/market/report.html" class="dropdown-item">投诉订单</a>
                                    <a href="/admin/market/bonus.html" class="dropdown-item">发放全球分红</a>
                                    <a href="/admin/market/bonus_log.html" class="dropdown-item">全球分红记录</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/store.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-shopping-cart"></i>商城</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/store.html" class="dropdown-item">实物商城</a>
                                    <a href="/admin/store/machine.html" class="dropdown-item">矿机商城</a>
                                    <a href="/admin/store/prop.html" class="dropdown-item">道具商城</a>
                                    <a href="/admin/store/create.html" class="dropdown-item">添加商品</a>
                                    <a href="/admin/store/order.html" class="dropdown-item">订单列表</a>
                                    <a href="/admin/store/adjust_price.html" class="dropdown-item">批量调整价格</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/machine.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-cpu"></i>矿机</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/machine/index.html" class="dropdown-item">用户矿机</a>
                                    <a href="/admin/machine/give.html" class="dropdown-item">批量赠送</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/wallet/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-slack"></i>资金</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/wallet/index.html" class="dropdown-item">钱包概览</a>
                                    <a href="/admin/wallet/record.html" class="dropdown-item">流水列表</a>
                                    <a href="/admin/wallet/transfer.html" class="dropdown-item">转账记录</a>
                                    <a href="/admin/wallet/give.html" class="dropdown-item">批量赠送</a>
                                    <a href="/admin/wallet/imtoken.html" class="dropdown-item">imToken</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/event/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-grid"></i>插件</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/event/scratch.html" class="dropdown-item">刮刮卡</a>
                                    <a href="/admin/event/pool.html" class="dropdown-item">共享矿池</a>
                                    <a href="/admin/event/contract.html" class="dropdown-item">链上合约</a>
                                    <a href="/admin/event/funding.html" class="dropdown-item">创业众筹</a>
                                    <a href="/admin/event/ticket.html" class="dropdown-item">票券</a>
                                </div>
                            </li>
                            <?php else: if(in_array(('admin/index/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                            <li class="nav-item">
                                <?php if(in_array(('admin/index/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                <a href="/admin.html" class="nav-link"><i class="fe fe-home"></i>后台</a>
                                <?php endif; ?>
                            </li>
                            <?php endif;                                 if(in_array('admin/news/index',$juriscontent) || in_array('admin/index/help',$juriscontent) || in_array('admin/index/contact',$juriscontent) || in_array('admin/index/popup',$juriscontent) || in_array('admin/index/group',$juriscontent)){
                               ?>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown"><i class="fe fe-list"></i>网站</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <!-- <a href="/admin/index/carousel.html" class="dropdown-item">首页轮播图</a> -->
                                    <?php if(in_array(('admin/news/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/news/index.html" class="dropdown-item">新闻公告</a>
                                    <?php endif; if(in_array(('admin/index/help'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/index/help.html" class="dropdown-item">帮助内容</a>
                                    <?php endif; if(in_array(('admin/index/contact'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/index/contact.html" class="dropdown-item">用户留言</a>
                                    <?php endif; if(in_array(('admin/index/contact'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/index/popup.html" class="dropdown-item">弹窗公告</a>
                                    <?php endif; if(in_array(('admin/index/group'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/index/group.html" class="dropdown-item">官方交流群</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/account/admin',$juriscontent) || in_array('admin/account/addadmin',$juriscontent) || in_array('admin/account/index',$juriscontent) || in_array('admin/account/create',$juriscontent) || in_array('admin/account/profile',$juriscontent) || in_array('admin/account/audit',$juriscontent) || in_array('admin/account/dashboard',$juriscontent) || in_array('admin/account/promotion',$juriscontent) || in_array('admin/account/reg_audit',$juriscontent) || in_array('admin/account/role',$juriscontent) || in_array('admin/account/addrole',$juriscontent) || in_array('admin/account/juris',$juriscontent) || in_array('admin/account/addjuris',$juriscontent) ){
                               ?>
                            <li class="nav-item">
                                <a href="/admin/account.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-users"></i>账户</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/account/admin'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/admin.html" class="dropdown-item">管理员列表</a>
                                    <?php endif; if(in_array(('admin/account/addadmin'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/addadmin.html" class="dropdown-item">添加管理员</a>
                                    <?php endif; if(in_array(('admin/account/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account.html" class="dropdown-item">用户列表</a>
                                    <?php endif; if(in_array(('admin/account/create'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/create.html" class="dropdown-item">添加用户</a>
                                    <?php endif; if(in_array(('admin/account/profile'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/profile.html" class="dropdown-item">用户档案</a>
                                    <?php endif; if(in_array(('admin/account/audit'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/audit.html" class="dropdown-item">实名认证</a>
                                    <?php endif; if(in_array(('admin/account/dashboard'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/dashboard.html" class="dropdown-item">仪表盘</a>
                                    <?php endif; if(in_array(('admin/account/promotion'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/promotion.html" class="dropdown-item">推广数据</a>
                                    <?php endif; if(!(empty(app('config')->get('hello.register_audit')) || ((app('config')->get('hello.register_audit') instanceof \think\Collection || app('config')->get('hello.register_audit') instanceof \think\Paginator ) && app('config')->get('hello.register_audit')->isEmpty()))): if(in_array(('admin/account/reg_audit'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/reg_audit.html" class="dropdown-item">注册审核</a>
                                    <?php endif; endif; if(in_array(('admin/account/role'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/role.html" class="dropdown-item">角色列表</a>
                                    <?php endif; if(in_array(('admin/account/addrole'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/addrole.html" class="dropdown-item">添加角色</a>
                                    <?php endif; if(in_array(('admin/account/juris'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/juris.html" class="dropdown-item" style="display:none;">权限列表</a>
                                    <?php endif; if(in_array(('admin/account/addjuris'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/account/addjuris.html" class="dropdown-item" style="display:none;">添加权限</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/market/index',$juriscontent) || in_array('admin/market/buy',$juriscontent) || in_array('admin/market/sell',$juriscontent) || in_array('admin/market/report',$juriscontent) || in_array('admin/market/bonus',$juriscontent) || in_array('admin/market/bonus_log',$juriscontent) ){
                               ?>
                            <li class="nav-item">
                                <a href="/market.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-globe"></i>市场</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/market/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/index.html" class="dropdown-item">每日行情</a>
                                    <?php endif; if(in_array(('admin/market/buy'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/buy.html" class="dropdown-item">买入订单</a>
                                    <?php endif; if(in_array(('admin/market/sell'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/sell.html" class="dropdown-item">卖出订单</a>
                                    <?php endif; if(in_array(('admin/market/report'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/report.html" class="dropdown-item">投诉订单</a>
                                    <?php endif; if(in_array(('admin/market/bonus'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/bonus.html" class="dropdown-item">发放全球分红</a>
                                    <?php endif; if(in_array(('admin/market/bonus_log'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/market/bonus_log.html" class="dropdown-item">全球分红记录</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/store/index',$juriscontent) || in_array('admin/store/machine',$juriscontent) || in_array('admin/store/prop',$juriscontent) || in_array('admin/store/create',$juriscontent) || in_array('admin/store/order',$juriscontent) || in_array('admin/store/adjust_price',$juriscontent) ){
                               ?>
                            <li class="nav-item">
                                <a href="/admin/store.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-shopping-cart"></i>商城</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/store/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store.html" class="dropdown-item">实物商城</a>
                                    <?php endif; if(in_array(('admin/store/machine'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store/machine.html" class="dropdown-item">矿机商城</a>
                                    <?php endif; if(in_array(('admin/store/prop'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store/prop.html" class="dropdown-item">道具商城</a>
                                    <?php endif; if(in_array(('admin/store/create'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store/create.html" class="dropdown-item">添加商品</a>
                                    <?php endif; if(in_array(('admin/store/order'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store/order.html" class="dropdown-item">订单列表</a>
                                    <?php endif; if(in_array(('admin/store/adjust_price'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/store/adjust_price.html" class="dropdown-item">批量调整价格</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/machine/index',$juriscontent) || in_array('admin/machine/give',$juriscontent) ){
                               ?>
                            <li class="nav-item">
                                <a href="/admin/machine.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-cpu"></i>矿机</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/machine/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/machine/index.html" class="dropdown-item">用户矿机</a>
                                    <?php endif; if(in_array(('admin/machine/give'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/machine/give.html" class="dropdown-item">批量赠送</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/wallet/index',$juriscontent) || in_array('admin/wallet/record',$juriscontent) || in_array('admin/wallet/transfer',$juriscontent) || in_array('admin/wallet/give',$juriscontent) || in_array('admin/wallet/imtoken',$juriscontent)){
                               ?>
                            <li class="nav-item">
                                <a href="/admin/wallet/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-slack"></i>资金</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/wallet/index'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/wallet/index.html" class="dropdown-item">钱包概览</a>
                                    <?php endif; if(in_array(('admin/wallet/record'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/wallet/record.html" class="dropdown-item">流水列表</a>
                                    <?php endif; if(in_array(('admin/wallet/transfer'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/wallet/transfer.html" class="dropdown-item">转账记录</a>
                                    <?php endif; if(in_array(('admin/wallet/give'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/wallet/give.html" class="dropdown-item">批量赠送</a>
                                    <?php endif; if(in_array(('admin/wallet/imtoken'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/wallet/imtoken.html" class="dropdown-item">imToken</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                                                            if(in_array('admin/event/scratch',$juriscontent) || in_array('admin/event/pool',$juriscontent) || in_array('admin/event/contract',$juriscontent) || in_array('admin/event/funding',$juriscontent) || in_array('admin/event/ticket',$juriscontent)){
                               ?>
                            <li class="nav-item">
                                <a href="/admin/event/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-grid"></i>插件</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <?php if(in_array(('admin/event/scratch'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/event/scratch.html" class="dropdown-item">刮刮卡</a>
                                    <?php endif; if(in_array(('admin/event/pool'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/event/pool.html" class="dropdown-item">共享矿池</a>
                                    <?php endif; if(in_array(('admin/event/contract'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/event/contract.html" class="dropdown-item">链上合约</a>
                                    <?php endif; if(in_array(('admin/event/funding'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/event/funding.html" class="dropdown-item">创业众筹</a>
                                    <?php endif; if(in_array(('admin/event/ticket'), is_array($juriscontent)?$juriscontent:explode(',',$juriscontent))): ?>
                                    <a href="/admin/event/ticket.html" class="dropdown-item">票券</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php
                                }
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container container-padding">
                
<form method="get" class="">
	<div class="row">
		<div class="col-md-6 col-lg-4 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">买方</span>
				</div>
				<input type="text" class="form-control" name="owner" value="<?php echo htmlentities(app('request')->get('owner')); ?>" />
			</div>
		</div>
		<div class="col-md-6 col-lg-4 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">卖方</span>
				</div>
				<input type="text" class="form-control" name="target" value="<?php echo htmlentities(app('request')->get('target')); ?>" />
			</div>
		</div>
		<div class="col-md-6 col-lg-4 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">订单状态</span>
				</div>
				<select class="custom-select" name="status">
					<option value="-1">全部状态</option>
					<?php if(is_array($statuses) || $statuses instanceof \think\Collection || $statuses instanceof \think\Paginator): $i = 0; $__LIST__ = $statuses;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if(is_null(app('request')->get('status'))): ?>
							<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($item); ?></option>
						<?php else: if(app('request')->get('status') == $key): ?>
								<option value="<?php echo htmlentities($key); ?>" selected="true"><?php echo htmlentities($item); ?></option>
							<?php else: ?>
								<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($item); ?></option>
							<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
	    <div class="col-md-12 col-lg-6 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<select class="custom-select input-group-text" name="numberField">
						<?php if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;if(app('request')->get('numberField') == $key): ?>
								<option selected="true" value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($field); ?></option>
							<?php else: ?>
								<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($field); ?></option>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				    </select>
				</div>
				<select class="custom-select input-group-text" name="numberOperator">
					<?php switch(app('request')->get('numberOperator')): case "2": ?>
							<option value="1">大于</option>
							<option value="2" selected="true">等于</option>
							<option value="3">小于</option>
						<?php break; case "3": ?>
							<option value="1">大于</option>
							<option value="2">等于</option>
							<option value="3" selected="true">小于</option>
						<?php break; default: ?>
							<option value="1">大于</option>
							<option value="2">等于</option>
							<option value="3">小于</option>
					<?php endswitch; ?>
			    </select>
				<input type="text" class="form-control" aria-label="Text input with dropdown button" name="numberValue" value="<?php echo htmlentities(app('request')->get('numberValue')); ?>" placeholder="时间格式：2018-08-08 12:30:00" />
			</div>
		</div>
		<div class="col-md-12 col-lg-4 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">排列顺序</span>
				</div>
				<select class="custom-select input-group-text" name="sortField">
					<?php if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;if(app('request')->get('sortField') == $key): ?>
							<option selected="true" value="<?php echo htmlentities($key); ?>">按<?php echo htmlentities($field); ?></option>
						<?php else: ?>
							<option value="<?php echo htmlentities($key); ?>">按<?php echo htmlentities($field); ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			    </select>
			    <select class="custom-select input-group-text" name="sortType">
			    	<?php if(app('request')->get('sortType') == 'asc'): ?>
			    		<option value="desc">降序</option>
			    		<option value="asc" selected="true">升序</option>
			    	<?php else: ?>
			    		<option value="desc">降序</option>
			    		<option value="asc">升序</option>
			    	<?php endif; ?>
			    </select>
			</div>
		</div>
		<div class="col-lg-2 mb-3">
			<button class="btn btn-primary w-100" type="submit">立即查询</button>
		</div>
	</div>
</form>
<div class="card">
	<div class="table-responsive">
	    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>状态</th>
	                <th>买方</th>
	                <th>卖方</th>
	                <th>数量</th>
	                <th>单价</th>
	                <th>总价</th>
	                <th>服务费</th>
	                <th>时间</th>
	                <th>操作</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($trades) || $trades instanceof \think\Collection || $trades instanceof \think\Paginator): $i = 0; $__LIST__ = $trades;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$trade): $mod = ($i % 2 );++$i;?>
	            <tr>
	                <td><?php echo htmlentities($trade['tid']); ?></td>
	                <td><?php echo htmlentities(app('config')->get('hello.trade.status')[$trade['status']]['name']); ?></td>
	                <td><?php echo htmlentities($trade['owner']); ?></td>
	                <td><?php echo htmlentities($trade['target']); ?></td>
	                <td><?php echo htmlentities(money($trade['number'])); ?></td>
	                <td><?php echo htmlentities(money($trade['price'])); ?></td>
	                <td><?php echo htmlentities(money($trade['number']*$trade['price'])); ?></td>
	                <td><?php echo htmlentities(money($trade['charge'])); ?></td>
	                <td><?php echo htmlentities($trade['update_at']); ?></td>
	                <td>
	                	<a href="/admin/market/cancel.html?id=<?php echo htmlentities($trade['tid']); ?>" class="btn btn-secondary btn-sm" onclick="return confirm('您确定要执行该操作吗？');">强制关闭</a>
	                	<a href="/admin/market/transaction.html?id=<?php echo htmlentities($trade['tid']); ?>" class="btn btn-secondary btn-sm">查看</a>
	                </td>
	            </tr>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
	        </tbody>
	    </table>
	</div>
	<div class="card-footer"><?php echo $trades; ?></div>
</div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center"><?php echo htmlentities(date('Y-m-d g:i a',time())); ?></div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2020 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>
 
</body>
</html>