@extends('dashboard.layouts.main')
@section('main-section')
    <div class="col-xl-10 col-lg-10 bg-white ">
        <div class="m-content mx-2 mx-lg-3 px-2 px-lg-0 pb-4">
            <header class="d-xl-none">
                <div class="container-fluid container-lg g-0">
                    <nav class="d-flex justify-content-between align-items-center" style="height: 84px;">
                        <a href="#">
                            <svg data-v-40a157b9="" data-v-159dae62="" data-src="https://cdn.nectaro.eu/assets/logo.svg"
                                data-cache="2592000" data-loading="lazy" width="96" height="24" class="d-block"
                                viewBox="0 0 112 28" fill="none" xmlns="http://www.w3.org/2000/svg"
                                data-id="svg-loader_250">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.20596 9.07543V6.93256H0V22.1012H3.20596V13.3127C3.22162 11.2023 4.938 9.49626 7.053 9.49626C9.17772 9.49626 10.9001 11.218 10.9002 13.3418H10.9011V22.1012H14.1071V12.4873L14.1067 12.4873C14.1067 9.18351 11.4274 6.50528 8.12224 6.50528C6.08579 6.50528 4.2869 7.52205 3.20596 9.07543Z"
                                    fill="currentColor"></path>
                                <g class="small" style="display: none;">
                                    <path
                                        d="M16.7 18.2556H18.8382C20.0181 18.2556 20.9746 19.2121 20.9746 20.392V20.392C20.9746 21.572 20.0177 22.5285 18.8378 22.5285V22.5285C17.6574 22.5285 16.7 21.5716 16.7 20.3912V18.2556Z"
                                        fill="#8DEB00"></path>
                                </g>
                                <g class="large">
                                    <path
                                        d="M106.651 18.2556H108.789C109.969 18.2556 110.926 19.2121 110.926 20.392V20.392C110.926 21.572 109.969 22.5285 108.789 22.5285V22.5285C107.609 22.5285 106.651 21.5716 106.651 20.3912V18.2556Z"
                                        fill="#8DEB00"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M97.7818 22.5285C102.208 22.5285 105.797 18.9416 105.797 14.5169C105.797 10.0922 102.208 6.50528 97.7818 6.50528C93.3553 6.50528 89.7669 10.0922 89.7669 14.5169C89.7669 18.9416 93.3553 22.5285 97.7818 22.5285ZM97.7819 19.5375C100.556 19.5375 102.805 17.2897 102.805 14.5169C102.805 11.7441 100.556 9.49626 97.7819 9.49626C95.0079 9.49626 92.7592 11.7441 92.7592 14.5169C92.7592 17.2897 95.0079 19.5375 97.7819 19.5375Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M86.2402 6.50528C87.3129 6.50528 88.3103 6.8277 89.1406 7.38089L88.3055 10.2564C87.6968 9.90864 86.9919 9.70992 86.2406 9.70992C83.9388 9.70992 82.0728 11.5751 82.0728 13.8759H82.072V22.1012H78.866V6.93256H82.072V8.57086C83.0285 7.31552 84.5397 6.50528 86.2402 6.50528Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M72.4549 20.4883C71.0936 21.757 69.2959 22.5285 67.3252 22.5285C63.0757 22.5285 59.6309 18.9416 59.6309 14.5169C59.6309 10.0922 63.0757 6.50528 67.3252 6.50528C69.2959 6.50528 71.0936 7.27673 72.4549 8.54544V6.93256H75.6608V22.1012H72.4549V20.4883ZM72.4547 14.5169C72.4547 17.2897 70.2538 19.5375 67.5389 19.5375C64.8239 19.5375 62.6231 17.2897 62.6231 14.5169C62.6231 11.7441 64.8239 9.49626 67.5389 9.49626C70.2538 9.49626 72.4547 11.7441 72.4547 14.5169Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M55.9975 1.16418H52.7916V6.93255H49.7996V9.7099H52.7916V22.1012H55.9975V9.7099H58.99V6.93255H55.9975V1.16418Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M48.3486 19.9142C46.8828 21.5205 44.7719 22.5285 42.4254 22.5285C37.9989 22.5285 34.4105 18.9416 34.4105 14.5169C34.4105 10.0922 37.9989 6.50528 42.4254 6.50528C44.7778 6.50528 46.8935 7.5183 48.3597 9.13174L46.2402 11.2504C45.319 10.1766 43.9519 9.49626 42.4259 9.49626C39.6519 9.49626 37.4032 11.7441 37.4032 14.5169C37.4032 17.2897 39.6519 19.5375 42.4259 19.5375C43.946 19.5375 45.3084 18.8624 46.2294 17.7959L48.3486 19.9142Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.3671 15.9055C32.4459 15.4545 32.487 14.9905 32.487 14.5169C32.487 10.0922 28.8987 6.50528 24.4721 6.50528C20.0456 6.50528 16.4572 10.0922 16.4572 14.5169C16.4572 18.9416 20.0456 22.5285 24.4721 22.5285C27.4222 22.5285 30 20.9353 31.3915 18.5627L28.7051 17.2201C27.8126 18.6137 26.2501 19.5375 24.4719 19.5375C22.1799 19.5375 20.2464 18.0029 19.6438 15.9055H29.2999L32.3671 15.9055ZM24.4719 9.49626C22.1799 9.49626 20.2464 11.0308 19.6438 13.1282H29.2999C28.6973 11.0308 26.7639 9.49626 24.4719 9.49626Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                        </a>
                        <button class="ham-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                <rect width="22" height="2" x="1" y="11" fill="currentColor" rx="1" />
                                <rect width="22" height="2" x="1" y="3" fill="currentColor" rx="1" />
                                <rect width="22" height="2" x="1" y="19" fill="currentColor" rx="1" />
                            </svg>
                        </button>
                    </nav>
                </div>
            </header>
            <div class="top-contnt row mt-3 justify-content-between mb-3">
                <div class="col-md-auto col-12">
                    <div class="text-light">
                        <a href="#" class="text-decoration-none text-light">DashBoard</a> /
                    </div>
                    <h3 class="text-dark fw-bold">Profile</h3>
                </div>
                <div class="col col-12 mt-4">
                    <div class="banner-top bg-info text-white">
                        <div class="banner-contnt d-flex flex-column flex-lg-row align-items-center">
                            <div
                                class="left-banr d-flex flex-column flex-lg-row align-items-center justify-content-start me-auto">
                                <div class="progss-br me-2">
                                    <div class="v-progs position-relative d-flex align-items-center justify-content-center">
                                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64"
                                            height="64" viewBox="0 0 1080 1080" xml:space="preserve">

                                            <defs>
                                            </defs>
                                            <g transform="matrix(1 0 0 1 540 540)"
                                                id="a3a920a7-f843-445a-b42e-a732fba4d5f4">
                                            </g>
                                            <g transform="matrix(1 0 0 1 540 540)"
                                                id="6f0ff759-ebe6-487d-9bd7-013d0d4171b8">
                                                <rect
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;"
                                                    vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0"
                                                    ry="0" width="1080" height="1080" />
                                            </g>
                                            <g transform="matrix(45 0 0 45 540 540)">
                                                <path
                                                    style="stroke: rgb(0,0,0); stroke-opacity: 0; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(158,158,158); fill-rule: nonzero; opacity: 0.8;"
                                                    transform=" translate(-12, -12)"
                                                    d="M 12 24 C 5.373 24 0 18.627 0 12 C 0 5.373000000000001 5.373 0 12 0 C 18.627 0 24 5.373 24 12 C 23.992 18.624 18.624 23.992 12.001 24 z M 12 2.3999999999999986 C 6.698 2.3999999999999986 2.4000000000000004 6.697999999999999 2.4000000000000004 11.999999999999998 C 2.4000000000000004 17.302 6.698 21.599999999999998 12 21.599999999999998 C 17.302 21.599999999999998 21.6 17.302 21.6 11.999999999999998 C 21.594 6.700999999999998 17.299 2.405999999999999 12.001000000000001 2.3999999999999986 L 12 2.3999999999999986 z"
                                                    stroke-linecap="round" />
                                            </g>
                                            <g transform="matrix(0 0 0 0 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                            <g transform="matrix(0 0 0 0 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                            <g transform="matrix(0 0 0 0 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                            <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                            <g transform="matrix(45 0 0 45 540 540)">
                                                <path
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(158,158,158); fill-rule: nonzero; opacity: 1;"
                                                    transform=" translate(-12, -12)"
                                                    d="M 12 24 C 5.373 24 0 18.627 0 12 C 0 5.373000000000001 5.373 0 12 0 C 18.627 0 24 5.373 24 12 C 23.992 18.624 18.624 23.992 12.001 24 z M 12 2.3999999999999986 C 6.698 2.3999999999999986 2.4000000000000004 6.697999999999999 2.4000000000000004 11.999999999999998 C 2.4000000000000004 17.302 6.698 21.599999999999998 12 21.599999999999998 C 17.302 21.599999999999998 21.6 17.302 21.6 11.999999999999998 C 21.594 6.700999999999998 17.299 2.405999999999999 12.001000000000001 2.3999999999999986 L 12 2.3999999999999986 z"
                                                    stroke-linecap="round" />
                                            </g>
                                            <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                            <g transform="matrix(NaN NaN NaN NaN 0 0)">
                                                <g>
                                                </g>
                                            </g>
                                        </svg>

                                        <div class="d-flex align-items-center justify-content-center">
                                            @if ($count > 0)
                                                1/1
                                            @else
                                                0/1
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="bnr-txt text-white ms-2">
                                    <h3 class="fs-5 fw-bold">Account Status</h3>
                                    <div class="fs-6 fw-semibold">Complete your account information to start
                                        investing</div>
                                </div>
                            </div>
                            @if ($count > 0)
                                <div class="rigt-bnr">
                                    <a href="{{ route('bankdetails.user.edit', ['id' => Auth::id()]) }}"
                                        class="b-btn bn-reso bg-grn fw-semibold text-decoration-none text-dark">
                                        Update Bank Details</a>
                                </div>
                            @else
                                <div class="rigt-bnr">
                                    <a href="{{ route('bankdetail.form') }}"
                                        class="b-btn bn-reso bg-grn fw-semibold text-decoration-none text-dark">
                                        Add Bank Details</a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-sec d-flex mt-3 align-items-start">

                <div class="prof-content ms-0 ms-lg-2 mt-3 mb-3">
                    <div class="invest-info tabcontent" id="tab1">
                        <div class="fs-5 fw-semibold">User info</div>
                        <hr>
                        <div class="row my-0 py-2">
                            <div class="d-flex align-items-center col-4 fw-semibold">Username</div>
                            <div class="d-flex align-items-center col-8 neutral-text">{{ $user->username }}</div>
                        </div>
                        <div class="row my-0 py-2">
                            <div class="d-flex align-items-center col-4 fw-semibold">Investor ID</div>
                            <div class="d-flex align-items-center col-8 neutral-text">f39c372e-8fa0-43bd-9ea0-c6237ff7700a
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="invest-info tabcontent" id="tab2">
                        <h3>Security section</h3>
                        <br>
                        <div class=" fw-semibold">Change password</div>
                        <hr>
                        <div class="chang-pass">
                            <form action="{{ route('user.changepass') }}" method="POST">
                                @csrf
                                <div class="d-flex flex-column gap-3">
                                    <div class="pass-inp d-flex align-items-center justify-content-center">
                                        <div class="vp-inpt">
                                            <input type="text" name="pass" class="w-100" id="password"
                                                placeholder="New Password">
                                        </div>
                                        <div class="vp-icon">
                                            <a href="#" id="toggle-password"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg data-v-40a157b9="" data-v-3a872198=""
                                                    data-src="https://cdn.nectaro.eu/assets/icons/iconsax/eye.svg"
                                                    data-cache="2592000" data-loading="lazy" class="neutral-text"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_33">
                                                    <path opacity="0.3"
                                                        d="M21.25 9.14969C18.94 5.51969 15.56 3.42969 12 3.42969C10.22 3.42969 8.49 3.94969 6.91 4.91969C5.33 5.89969 3.91 7.32969 2.75 9.14969C1.75 10.7197 1.75 13.2697 2.75 14.8397C5.06 18.4797 8.44 20.5597 12 20.5597C13.78 20.5597 15.51 20.0397 17.09 19.0697C18.67 18.0897 20.09 16.6597 21.25 14.8397C22.25 13.2797 22.25 10.7197 21.25 9.14969ZM12 16.0397C9.76 16.0397 7.96 14.2297 7.96 11.9997C7.96 9.76969 9.76 7.95969 12 7.95969C14.24 7.95969 16.04 9.76969 16.04 11.9997C16.04 14.2297 14.24 16.0397 12 16.0397Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.0004 9.13965C10.4304 9.13965 9.15039 10.4196 9.15039 11.9996C9.15039 13.5696 10.4304 14.8496 12.0004 14.8496C13.5704 14.8496 14.8604 13.5696 14.8604 11.9996C14.8604 10.4296 13.5704 9.13965 12.0004 9.13965Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pass-inp d-flex align-items-center justify-content-center">
                                        <div class="vp-inpt">
                                            <input type="text" class="w-100" id="cpass"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class="vp-icon">
                                            <a href="#" id="ctoggle-password"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg data-v-40a157b9="" data-v-3a872198=""
                                                    data-src="https://cdn.nectaro.eu/assets/icons/iconsax/eye.svg"
                                                    data-cache="2592000" data-loading="lazy" class="neutral-text"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_33">
                                                    <path opacity="0.3"
                                                        d="M21.25 9.14969C18.94 5.51969 15.56 3.42969 12 3.42969C10.22 3.42969 8.49 3.94969 6.91 4.91969C5.33 5.89969 3.91 7.32969 2.75 9.14969C1.75 10.7197 1.75 13.2697 2.75 14.8397C5.06 18.4797 8.44 20.5597 12 20.5597C13.78 20.5597 15.51 20.0397 17.09 19.0697C18.67 18.0897 20.09 16.6597 21.25 14.8397C22.25 13.2797 22.25 10.7197 21.25 9.14969ZM12 16.0397C9.76 16.0397 7.96 14.2297 7.96 11.9997C7.96 9.76969 9.76 7.95969 12 7.95969C14.24 7.95969 16.04 9.76969 16.04 11.9997C16.04 14.2297 14.24 16.0397 12 16.0397Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.0004 9.13965C10.4304 9.13965 9.15039 10.4196 9.15039 11.9996C9.15039 13.5696 10.4304 14.8496 12.0004 14.8496C13.5704 14.8496 14.8604 13.5696 14.8604 11.9996C14.8604 10.4296 13.5704 9.13965 12.0004 9.13965Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="with-btn mt-3  d-flex align-items-center justify-content-end">
                                        <button type="submit" class=" b-btn">Save Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('additonal-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('error') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            // Function to toggle password visibility
            $('#toggle-password').click(function() {
                var input = $('#password');
                input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type',
                    'password');
                $(this).find('svg').toggleClass('fa-eye fa-eye-slash');
            });

            $('#ctoggle-password').click(function() {
                var input = $('#cpass');
                input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type',
                    'password');
                $(this).find('svg').toggleClass('fa-eye fa-eye-slash');
            });

            // Function to validate password match
            $('form').submit(function(event) {
                var password = $('#password').val();
                var confirmPassword = $('#cpass').val();

                // Check if passwords match
                if (password !== confirmPassword) {
                    alert("Passwords do not match!");
                    event.preventDefault(); // Prevent form submission
                    return;
                }

                // Check if password length is at least four characters
                if (password.length < 4) {
                    alert("Password must be at least four characters long.");
                    event.preventDefault(); // Prevent form submission
                    return;
                }
            });
        });
    </script>
@endsection
