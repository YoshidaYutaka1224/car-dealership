 @include('admin/layouts/head')
<?php
Session::put('role', 'admin');
?>

<body class="nk-body npc-default pg-auth">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                        </div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Reset Password</h5>
                                    <p>Please enter your your new password in the fields below then confirm it.</p>
                                </div>
                            </div><!-- .nk-block-head -->
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <span class ="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="Password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        <span class ="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Confirm Password</label>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password_confirmation">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class ="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
                                </div>
                            </form>
                            <!-- form -->

                        </div><!-- .nk-block -->
                        <div class="nk-block nk-auth-footer">
                            <div class="nk-block-between">
                                <ul class="nav nav-sm">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                </ul><!-- nav -->
                            </div>
                            <div class="mt-3">
                                <p>&copy; 2021 xFusion. All Rights Reserved.</p>
                            </div>
                        </div><!-- nk-block -->
                    </div><!-- nk-split-content -->
                    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="{{ asset('./admin/images/slides/reset-password.png') }}" srcset="{{ asset('./admin/images/slides/reset-passworda2x.png 2x') }}" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>1 Step Away!</h4>
                                            <p>You are super close to getting you password Reset, just enter identical passwords in the respective fields and you will be set!</p>
                                        </div>
                                    </div>
                            <div class="slider-dots"></div>
                            <div class="slider-arrows"></div>
                        </div><!-- .slider-wrap -->
                    </div><!-- .nk-split -->
                </div><!-- nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->

@include('admin/layouts/footer_scripts')


<script>
    $('.ufemail').keyup(function() {
        var caps = jQuery('.ufemail').val();
        caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('.ufemail').val(caps);
    });
</script>