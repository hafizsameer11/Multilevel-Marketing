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
                        <a href="#" class="text-decoration-none text-light">DashBoard</a> /
                    </div>
                    <h3 class="text-dark fw-bold">Transactions</h3>
                </div>

            </div>
            <div class="funds-boxes mt-4">
                <div class="row no-gutters">
                    <div class="col-lg-10 m-auto col-12">
                        <div class="fund-card fund-sp">
                            <div class="row p-0">
                                <div class="col-lg-12 col-12">
                                    <div class="fs-6 text-secondary fw-semibold">Available Funds
                                        : {{ $user->userMeta->user_balance }}
                                    </div>
                                    <div class="fs-4 fw-bold">Transfer Funds</div>
                                </div>

                                <div class="col col-12 mt-3 pt-2">
                                    <form method="POST" action="{{route('transfer.funds')}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Enter UserName</label>
                                            <input type="text" name="username" class="form-control" id="username"
                                                aria-describedby="emailHelp">
                                            <div id="doesnotexist" class="form-text alert alert-danger" style="font-size:12px">Username does not exist</div>
                                            <div id="exist" class="form-text alert alert-success" style="font-size:12px" >Username Exist</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Enter Amount</label>
                                            <input type="number" name="amount" class="form-control"
                                                id="amount">
                                                <div id="enteremount" class="form-text alert alert-danger" style="font-size:12px">Amount Can't be greater than the balance</div>
                                        </div>
                                        <div class="mb-3 form-check">

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>

                </div>
            </div>
            <div>
         
            </div>
        </div>
    </div>
@endsection
@section('additonal-script')
@if(session('success'))
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
    <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#enteremount").hide();
            $('#exist').hide();
            $('#doesnotexist').hide();
            $('#username').on('input', function() {
                var username = $(this).val();
                $.ajax({
                    url: '/check-username',
                    method: 'POST',
                    data: {
                        username: username
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#exist').show();
                            $('#doesnotexist').hide();
                        } else {
                            $('#doesnotexist').show();
                            $('#exist').hide();
                        }
                    },
                    error: function() {
                        console.log('Error occurred while checking username');
                    }
                });
            });
            $('#amount').on('input', function() {
                var amount = $(this).val();
                $.ajax({
                    url: '/check-amount',
                    method: 'POST',
                    data: {
                        amount: amount
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.error) {

                            $("#enteremount").show();

                        } else {
                           $("#enteremount").hide();
                        }
                    },
                    error: function() {
                        console.log('Error occurred while checking username');
                    }
                });
            });

        });
    </script>
@endsection
