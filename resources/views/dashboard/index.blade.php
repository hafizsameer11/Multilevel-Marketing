@extends('dashboard.layouts.main')
@section('main-section')
    <div class="col-xl-10 col-lg-10 bg-white maiin">
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
                        <a href="#" class="text-decoration-none text-dark fw-bold">{{$user->name}}</a>
                    </div>

                    <h3 class="text-dark fw-bold ">{{$user->username}}</h3>
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

                                        <div class="d-flex align-items-center justify-content-center ">
                                            <span class="count">{{$user->userMeta->user_balance}} </span>&nbsp; $
                                        </div>
                                    </div>
                                </div>
                                <div class="bnr-txt text-white ms-2">
                                    <h3 class="fs-5 fw-bold">Current Balance</h3>
                                    <div class="fs-6 fw-semibold">For adding balance contact  admin</div>
                                </div>
                            </div>
                            <div class="rigt-bnr">
                                <a href="#"
                                    class="b-btn bn-reso bg-grn fw-semibold text-decoration-none text-dark">Contact Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="funds-boxes mt-4">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12">

                        <div class="fund-card fund-sp">
                            <div class="row p-0">
                                <div class="col-lg-7 col-12">
                                    <div class="fs-6 text-secondary fw-semibold">Current Plain</div>
                                    <div class="fs-4 fw-bold"  style="text-transform:capitalize">{{$user->userMeta->plan->name}}</div>
                                </div>
                                <div
                                    class="col-lg-5 bn-wrap order-1 order-lg-0 col-12 d-flex align-items-center justify-content-end">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('plans')}}"
                                            class="b-btn bg-dark fw-semibold text-decoration-none txt-lght" style="font-size: 14px">Upgrade Plan</a>
                                    </div>
                                </div>
                                <div class="col col-12 mt-3 pt-2">
                                    <div class="fud-crd d-flex justify-content-between align-items-center">
                                        <div class="text-light fw-semibold">Invested Amount</div>
                                        <div class="fw-bold">${{$user->userMeta->plan->amount}}</div>
                                    </div>
                                    <hr>
                                    <div class="fud-crd d-flex justify-content-between align-items-center">
                                        <div class="text-dark fw-normal">Starting Date</div>
                                        <div class="fw-bold">{{$user->userMeta->plan_activated}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="fund-card mt-2 pt-3">
                            <div class="row p-0">
                                <div class="col-md-7">
                                    <div class="fs-6 text-secondary fw-semibold">Suggestion Code</div>
                                    <div class="fs-4 fw-bold">{{$user->reffernce_code}}</div>
                                </div>

                                <div class="col col-12 mt-3 pt-2">

                                    <hr>
                                    <div class="fud-crd d-flex justify-content-between align-items-center">
                                        <div class="text-dark fw-normal">Refferal Link : </div>
                                        <div class="fw-bold" style="font-size: 12px"> {{route('register.show',['id'=>$user->username])}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-12 mt-3 mt-lg-0">
                        <div class="fund-card h-100 d-flex flex-column">
                            <div class="text-dark">Information</div>
                           <br>
                           <br>
                            <div class="d-flex flex-column gap-2 mt-3 mt-lg-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="v-dot bg-grn d-block"></span>
                                        </div>
                                        <div class="ms-2">Total Team</div>
                                        <div class="ms-2">
                                            <svg data-v-40a157b9=""
                                                data-src="https://cdn.nectaro.eu/assets/icons/iconsax/help-circle.svg"
                                                data-cache="2592000" data-loading="lazy" height="16" width="16"
                                                class="text-secondary d-block" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_39">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.25 12C1.25 6.08579 6.08579 1.25 12 1.25C17.9142 1.25 22.75 6.08579 22.75 12C22.75 17.9142 17.9142 22.75 12 22.75C6.08579 22.75 1.25 17.9142 1.25 12Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.9941 18C10.9941 17.4477 11.4419 17 11.9941 17H12.0031C12.5554 17 13.0031 17.4477 13.0031 18C13.0031 18.5523 12.5554 19 12.0031 19H11.9941C11.4419 19 10.9941 18.5523 10.9941 18Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.36296 9.14464L9.36229 9.14858L9.36263 9.14661L9.36296 9.14464ZM7.63841 8.84732L7.64079 8.83405C7.64267 8.82376 7.64516 8.81058 7.64834 8.79471C7.65468 8.76298 7.66377 8.72037 7.67614 8.66843C7.70082 8.56475 7.73889 8.42257 7.7949 8.25455C7.90599 7.92129 8.09271 7.471 8.39695 7.01464C9.02162 6.07764 10.1456 5.125 12 5.125C13.3771 5.125 14.4982 5.6035 15.2689 6.44438C16.0283 7.27289 16.375 8.37342 16.375 9.5C16.375 11.4464 15.179 12.4275 14.2906 13.1255C13.3293 13.8808 12.875 14.2481 12.875 15C12.875 15.4832 12.4832 15.875 12 15.875C11.5167 15.875 11.125 15.4832 11.125 15C11.125 13.3655 12.2578 12.4875 13.0497 11.8738C13.1048 11.8311 13.1582 11.7897 13.2094 11.7495C14.071 11.0725 14.625 10.5536 14.625 9.5C14.625 8.7215 14.3869 8.07203 13.9788 7.62681C13.5821 7.19396 12.9532 6.875 12 6.875C10.8544 6.875 10.2284 7.42236 9.85304 7.98536C9.65729 8.279 9.53151 8.57871 9.4551 8.80795C9.41735 8.92118 9.39292 9.01338 9.37855 9.07376C9.37138 9.10384 9.3668 9.12569 9.36435 9.13791L9.36229 9.14858C9.28066 9.62265 8.83124 9.94228 8.35615 9.86309C7.88086 9.78388 7.55737 9.32027 7.63841 8.84732Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fw-bold">{{$user->userMeta->total_team}}</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="v-dot bg-danger d-block"></span>
                                        </div>
                                        <div class="ms-2">Total Earning</div>
                                        <div class="ms-2">
                                            <svg data-v-40a157b9=""
                                                data-src="https://cdn.nectaro.eu/assets/icons/iconsax/help-circle.svg"
                                                data-cache="2592000" data-loading="lazy" height="16" width="16"
                                                class="text-secondary d-block" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_39">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.25 12C1.25 6.08579 6.08579 1.25 12 1.25C17.9142 1.25 22.75 6.08579 22.75 12C22.75 17.9142 17.9142 22.75 12 22.75C6.08579 22.75 1.25 17.9142 1.25 12Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.9941 18C10.9941 17.4477 11.4419 17 11.9941 17H12.0031C12.5554 17 13.0031 17.4477 13.0031 18C13.0031 18.5523 12.5554 19 12.0031 19H11.9941C11.4419 19 10.9941 18.5523 10.9941 18Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.36296 9.14464L9.36229 9.14858L9.36263 9.14661L9.36296 9.14464ZM7.63841 8.84732L7.64079 8.83405C7.64267 8.82376 7.64516 8.81058 7.64834 8.79471C7.65468 8.76298 7.66377 8.72037 7.67614 8.66843C7.70082 8.56475 7.73889 8.42257 7.7949 8.25455C7.90599 7.92129 8.09271 7.471 8.39695 7.01464C9.02162 6.07764 10.1456 5.125 12 5.125C13.3771 5.125 14.4982 5.6035 15.2689 6.44438C16.0283 7.27289 16.375 8.37342 16.375 9.5C16.375 11.4464 15.179 12.4275 14.2906 13.1255C13.3293 13.8808 12.875 14.2481 12.875 15C12.875 15.4832 12.4832 15.875 12 15.875C11.5167 15.875 11.125 15.4832 11.125 15C11.125 13.3655 12.2578 12.4875 13.0497 11.8738C13.1048 11.8311 13.1582 11.7897 13.2094 11.7495C14.071 11.0725 14.625 10.5536 14.625 9.5C14.625 8.7215 14.3869 8.07203 13.9788 7.62681C13.5821 7.19396 12.9532 6.875 12 6.875C10.8544 6.875 10.2284 7.42236 9.85304 7.98536C9.65729 8.279 9.53151 8.57871 9.4551 8.80795C9.41735 8.92118 9.39292 9.01338 9.37855 9.07376C9.37138 9.10384 9.3668 9.12569 9.36435 9.13791L9.36229 9.14858C9.28066 9.62265 8.83124 9.94228 8.35615 9.86309C7.88086 9.78388 7.55737 9.32027 7.63841 8.84732Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fw-bold">{{$user->userMeta->refferal_earning+$user->userMeta->work_earning}} $</div>
                                </div>
                                  <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="v-dot bg-secondary d-block"></span>
                                        </div>
                                        <div class="ms-2">Team Earning</div>
                                        <div class="ms-2">
                                            <svg data-v-40a157b9=""
                                                data-src="https://cdn.nectaro.eu/assets/icons/iconsax/help-circle.svg"
                                                data-cache="2592000" data-loading="lazy" height="16" width="16"
                                                class="text-secondary d-block" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_39">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.25 12C1.25 6.08579 6.08579 1.25 12 1.25C17.9142 1.25 22.75 6.08579 22.75 12C22.75 17.9142 17.9142 22.75 12 22.75C6.08579 22.75 1.25 17.9142 1.25 12Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.9941 18C10.9941 17.4477 11.4419 17 11.9941 17H12.0031C12.5554 17 13.0031 17.4477 13.0031 18C13.0031 18.5523 12.5554 19 12.0031 19H11.9941C11.4419 19 10.9941 18.5523 10.9941 18Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.36296 9.14464L9.36229 9.14858L9.36263 9.14661L9.36296 9.14464ZM7.63841 8.84732L7.64079 8.83405C7.64267 8.82376 7.64516 8.81058 7.64834 8.79471C7.65468 8.76298 7.66377 8.72037 7.67614 8.66843C7.70082 8.56475 7.73889 8.42257 7.7949 8.25455C7.90599 7.92129 8.09271 7.471 8.39695 7.01464C9.02162 6.07764 10.1456 5.125 12 5.125C13.3771 5.125 14.4982 5.6035 15.2689 6.44438C16.0283 7.27289 16.375 8.37342 16.375 9.5C16.375 11.4464 15.179 12.4275 14.2906 13.1255C13.3293 13.8808 12.875 14.2481 12.875 15C12.875 15.4832 12.4832 15.875 12 15.875C11.5167 15.875 11.125 15.4832 11.125 15C11.125 13.3655 12.2578 12.4875 13.0497 11.8738C13.1048 11.8311 13.1582 11.7897 13.2094 11.7495C14.071 11.0725 14.625 10.5536 14.625 9.5C14.625 8.7215 14.3869 8.07203 13.9788 7.62681C13.5821 7.19396 12.9532 6.875 12 6.875C10.8544 6.875 10.2284 7.42236 9.85304 7.98536C9.65729 8.279 9.53151 8.57871 9.4551 8.80795C9.41735 8.92118 9.39292 9.01338 9.37855 9.07376C9.37138 9.10384 9.3668 9.12569 9.36435 9.13791L9.36229 9.14858C9.28066 9.62265 8.83124 9.94228 8.35615 9.86309C7.88086 9.78388 7.55737 9.32027 7.63841 8.84732Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fw-bold">{{$user->userMeta->refferal_earning}} $</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="d-flex align-items-center justify-content-center m-0">
                                            <span class="v-dot bg-info d-block"></span>
                                        </div>
                                        <div class="ms-2">Work Earning</div>
                                        <div class="ms-2">
                                            <svg data-v-40a157b9=""
                                                data-src="https://cdn.nectaro.eu/assets/icons/iconsax/help-circle.svg"
                                                data-cache="2592000" data-loading="lazy" height="16" width="16"
                                                class="text-secondary d-block" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" data-id="svg-loader_39">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.25 12C1.25 6.08579 6.08579 1.25 12 1.25C17.9142 1.25 22.75 6.08579 22.75 12C22.75 17.9142 17.9142 22.75 12 22.75C6.08579 22.75 1.25 17.9142 1.25 12Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.9941 18C10.9941 17.4477 11.4419 17 11.9941 17H12.0031C12.5554 17 13.0031 17.4477 13.0031 18C13.0031 18.5523 12.5554 19 12.0031 19H11.9941C11.4419 19 10.9941 18.5523 10.9941 18Z"
                                                    fill="currentColor"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.36296 9.14464L9.36229 9.14858L9.36263 9.14661L9.36296 9.14464ZM7.63841 8.84732L7.64079 8.83405C7.64267 8.82376 7.64516 8.81058 7.64834 8.79471C7.65468 8.76298 7.66377 8.72037 7.67614 8.66843C7.70082 8.56475 7.73889 8.42257 7.7949 8.25455C7.90599 7.92129 8.09271 7.471 8.39695 7.01464C9.02162 6.07764 10.1456 5.125 12 5.125C13.3771 5.125 14.4982 5.6035 15.2689 6.44438C16.0283 7.27289 16.375 8.37342 16.375 9.5C16.375 11.4464 15.179 12.4275 14.2906 13.1255C13.3293 13.8808 12.875 14.2481 12.875 15C12.875 15.4832 12.4832 15.875 12 15.875C11.5167 15.875 11.125 15.4832 11.125 15C11.125 13.3655 12.2578 12.4875 13.0497 11.8738C13.1048 11.8311 13.1582 11.7897 13.2094 11.7495C14.071 11.0725 14.625 10.5536 14.625 9.5C14.625 8.7215 14.3869 8.07203 13.9788 7.62681C13.5821 7.19396 12.9532 6.875 12 6.875C10.8544 6.875 10.2284 7.42236 9.85304 7.98536C9.65729 8.279 9.53151 8.57871 9.4551 8.80795C9.41735 8.92118 9.39292 9.01338 9.37855 9.07376C9.37138 9.10384 9.3668 9.12569 9.36435 9.13791L9.36229 9.14858C9.28066 9.62265 8.83124 9.94228 8.35615 9.86309C7.88086 9.78388 7.55737 9.32027 7.63841 8.84732Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fw-bold">{{$user->userMeta->work_earning}} $ </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('additonal-script')
<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
@endsection
