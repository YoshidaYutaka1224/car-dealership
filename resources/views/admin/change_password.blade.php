@include('admin/layouts/head')
@include('admin/layouts/dark_sidebar')
@include ('admin/layouts/light_topbar')
<!-- main header @e -->

@include ('admin/layouts/sidebar_nav')
<body class="nk-body npc-default has-apps-sidebar has-sidebar ">

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content"><h4 class="nk-block-title">Security Settings</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="nk-block-text"><h6>Save my Activity Logs</h6>
                                                    <p>You can save all your activity logs including unusual activity detected.</p></div>
                                                <div class="nk-block-actions">
                                                    <ul class="align-center gx-3">
                                                        <li class="order-md-last">
                                                            <div class="custom-control custom-switch mr-n2 checked">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       checked="" id="activity-log"><label
                                                                        class="custom-control-label"
                                                                        for="activity-log"></label></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap g-3">
                                                <div class="nk-block-text"><h6>Change Password</h6>
                                                    <p>Set a unique password to protect your account.</p></div>
                                                <div class="nk-block-actions flex-shrink-sm-0">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                        <li class="order-md-last"><a href="{{ route('admin.password.change') }}" class="btn btn-primary">Change Password</a></li>
                                                        <li><em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="nk-block-text"><h6>2 Factor Auth &nbsp; <span
                                                                class="badge badge-success ml-0">Enabled</span></h6>
                                                    <p>Secure your account with 2FA security. When it is activated you
                                                        will need to enter not only your password, but also a special
                                                        code using app. You can receive this code by in mobile app. </p>
                                                </div>
                                                <div class="nk-block-actions"><a href="#" class="btn btn-primary">Disable</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                             data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="card-inner-group" data-simplebar>
                                <div class="card-inner">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{ Auth::user()->name }}</span>
                                            <span class="sub-text">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="user-action">
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown"
                                                   href="#"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .user-card -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <ul class="link-list-menu">
                                        <li><a href="{{ route('admin.profile') }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                        <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                        <li><a href="{{ route('account.activity') }}"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                        <li><a class="active" href="{{ route('admin.change.password') }}"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- card-aside -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
<!-- content @e -->


@include('admin/layouts/footer_scripts')
