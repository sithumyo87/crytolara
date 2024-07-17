@extends('layouts.admin')

@section('content')

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="row align-items-center">
            <div class="col-xl-8 d-none d-md-block">
                <div class="card mb-0">
                    <div class="card-body ">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex">
                                <img src="assets/images/coins/06.png"
                                    class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                                <div class="dropdown mt-2 ms-2">
                                    <a href="#" class="text-white" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="mt-2">Litecoin</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu w-100"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/01.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img71"> 561,511 Btc</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/06.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img72"> 561,511 Ltc</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/03.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img73"> 561,511 Eth</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/08.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img74"> 561,511 Xmr</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown mt-2 ms-2">
                                    <a href="#" class="text-white" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="mt-2 ">BTC/USD</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu w-100"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/01.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img71"> 561,511 Btc</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/06.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img72"> 561,511 Ltc</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/03.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img73"> 561,511 Eth</a></li>
                                        <li><a href="#" class="dropdown-item"><img
                                                    src="assets/images/coins/08.png"
                                                    class="img-fluid avatar avatar-30 avatar-rounded"
                                                    alt="img74"> 561,511 Xmr</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-none d-lg-block w-50">
                                <div class="d-flex justify-content-evenly flex-1">
                                    <span class=" text-primary">
                                        37,390.00<br>
                                        <small>$37,390.00</small>
                                    </span>
                                    <span class=" text-primary">
                                        129.51+0.8%<br>
                                        <small>24th changes</small>
                                    </span>
                                    <span class="">
                                        37,440.01<br>
                                        <small>24th high</small>
                                    </span>
                                    <span class="">
                                        37,327.30<br>
                                        <small>24th low</small>
                                    </span>
                                    <span class="d-none">
                                        37,390.00<br>
                                        <small>24th volume(BTC)</small>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="">
                                    <svg width="32" height="32" viewBox="0 0 34 53"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" width="1" height="53" rx="0.5"
                                            fill="white" />
                                        <rect x="0.5" y="9.5" width="12" height="34"
                                            rx="1.5" fill="#202022" />
                                        <rect x="0.5" y="9.5" width="12" height="34"
                                            rx="1.5" stroke="white" />
                                        <rect x="27" width="1" height="53" rx="0.5"
                                            fill="white" />
                                        <rect x="21.5" y="13.5" width="12" height="25"
                                            rx="1.5" fill="#202022" />
                                        <rect x="21.5" y="13.5" width="12" height="25"
                                            rx="1.5" stroke="white" />
                                    </svg>
                                </span>
                                <a href="#" class="bg-secondary rounded-1 p-2 ms-2">
                                    <svg width="26" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M26.3875 14.1244L16.8484 23.7653L5.99906 16.9795C4.44458 16.0069 4.76794 13.6457 6.5262 13.1315L32.2854 5.58795C33.8954 5.11605 35.3876 6.62138 34.9093 8.23666L27.2885 33.9779C26.7664 35.7387 24.4187 36.0533 23.4553 34.4921L16.8433 23.767"
                                            stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="d-grid grid-3-auto gap-card">
                    <div class="dropdown">
                        <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton3"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Buy / Sell
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <li class="card buysell mb-0 bg-transparent">
                                <div class="card-body iq-extra">
                                    <div class="d-flex justify-content-between">
                                        <div class="header-title">
                                            <p class="fs-6 ">Buy</p>
                                        </div>
                                        <div class="header-title">
                                            <p class="fs-6">Sell</p>
                                        </div>
                                    </div>
                                    <select class="form-select mb-3"
                                        aria-label="Default select example">
                                        <option>561,511 Btc</option>
                                        <option>561,511 Btc</option>
                                        <option>561,511 Ltc</option>
                                    </select>
                                    <div class="d-flex justify-content-between">
                                        <h6>Amount(USD)</h6>
                                        <h6 class="mt-3 text-warning">USD</h6>
                                    </div>
                                    <p>$5.696.24</p>
                                    <div class="d-flex justify-content-between">
                                        <h6>Amount(BTC)</h6>
                                        <h6 class="mt-3 text-warning">BTC</h6>
                                    </div>
                                    <p>$5.696.24</p>
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="button">Buy BTC</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton4"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            + Add Crypto
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton4">
                            <li><a href="#" class="dropdown-item"><img
                                        src="assets/images/coins/01.png"
                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                        alt="img71"> 561,511 Btc</a></li>
                            <li><a href="#" class="dropdown-item"><img
                                        src="assets/images/coins/06.png"
                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                        alt="img72"> 561,511 Ltc</a></li>
                            <li><a href="#" class="dropdown-item"><img
                                        src="assets/images/coins/03.png"
                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                        alt="img73"> 561,511 Eth</a></li>
                            <li><a href="#" class="dropdown-item"><img
                                        src="assets/images/coins/08.png"
                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                        alt="img74"> 561,511 Xmr</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row pt-2">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/coins/01.png"
                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                            alt="img60">
                                        <span class="fs-5 me-2">Bitcoin</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                                stroke="#1aa053" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                                fill="#1aa053" stroke="#1aa053" />
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-gray" id="dropdownMenuButton36"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <svg width="22" height="5" viewBox="0 0 22 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                                    fill="#B3B3B7"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton36"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);"
                                            data-popper-placement="bottom-end">
                                            <li><a class="dropdown-item" href="#">This Week</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Month</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="pt-3">
                                    <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                                    <div class="pt-3">
                                        <small class="text-success">+ 0.8%</small>
                                        <small class="ms-2">(BTC/USDT)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/coins/06.png"
                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                            alt="img60">
                                        <span class="fs-5 me-2">Dash</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                                stroke="#1aa053" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                                fill="#1aa053" stroke="#1aa053" />
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-gray" id="dropdownMenuButton36"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <svg width="22" height="5" viewBox="0 0 22 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                                    fill="#B3B3B7"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton36"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);"
                                            data-popper-placement="bottom-end">
                                            <li><a class="dropdown-item" href="#">This Week</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Month</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="progress-detail pt-3">
                                    <h4 class="counter" style="visibility: visible;">$2,138.87</h4>
                                    <div class="pt-3">
                                        <small class="text-success">+ 0.8%</small>
                                        <small class="ms-2">(LTC/USDT)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shining-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/coins/03.png"
                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                            alt="img60">
                                        <span class="fs-5 me-2">Etherum</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534"
                                                stroke="#1aa053" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z"
                                                fill="#1aa053" stroke="#1aa053" />
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-gray" id="dropdownMenuButton36"
                                            data-bs-toggle="dropdown" aria-expanded="true">
                                            <svg width="22" height="5" viewBox="0 0 22 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                                    fill="#B3B3B7"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton36"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);"
                                            data-popper-placement="bottom-end">
                                            <li><a class="dropdown-item" href="#">This Week</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Month</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="progress-detail pt-3">
                                    <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                                    <div class="pt-3">
                                        <small class="text-success">+ 0.8%</small>
                                        <small class="ms-2">(ETH/USDT)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between flex-wrap gap-3">
                                <div class="header-title ">
                                    <h4 class="card-title">Quick Trade</h4>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown p-0">
                                        <button
                                            class="btn bg-secondary btn-sm dropdown-toggle border-0 text-white"
                                            type="button" id="dropdownMenuButton5"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="assets/images/coins/01.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img5">
                                            561,511 btc
                                        </button>
                                        <ul class="dropdown-menu w-100"
                                            aria-labelledby="dropdownMenuButton5">
                                            <li><a href="#" class="dropdown-item"><img
                                                        src="assets/images/coins/01.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img75"> 561,511 Btc</a></li>
                                            <li><a href="#" class="dropdown-item"><img
                                                        src="assets/images/coins/06.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img76"> 561,511 Ltc</a></li>
                                            <li><a href="#" class="dropdown-item"><img
                                                        src="assets/images/coins/03.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img77"> 561,511 Eth</a></li>
                                            <li><a href="#" class="dropdown-item"><img
                                                        src="assets/images/coins/08.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img78"> 561,511 Xmr</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <div class="input-group pt-1">
                                            <span class="input-group-text" id="basic-addon3">BTC</span>
                                            <input type="text" class="form-control col-lg-8"
                                                placeholder="0,000000" aria-label="Recipient's username"
                                                aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group pt-2">
                                            <span class="input-group-text" id="basic-addon4">BPL</span>
                                            <input type="text" class="form-control col-lg-8"
                                                placeholder="0,000000" aria-label="Recipient's username"
                                                aria-describedby="basic-addon3">
                                        </div>

                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group pt-2">
                                            <span class="input-group-text"
                                                id="basic-addon6">Total</span>
                                            <input type="text" class="form-control col-lg-8"
                                                placeholder="0,000000" aria-label="Recipient's username"
                                                aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-grid gap-card grid-cols-2">
                                            <button class="btn btn-success" type="button">
                                                <span>BUY</span>
                                                <svg class="rotate-45" width="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.75 11.7256L4.75 11.7256"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-danger" type="button">
                                                <span>SELL</span>
                                                <svg class="rotate-45" width="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.25 12.2744L19.25 12.2744"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title ">
                                    <h4 class="card-title">Account Summary</h4>
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="card bg-body align-items-start shadow-none mb-lg-0 pt-4 ps-4 pe-4">
                                            <div class="avatar bg-secondary p-2 mb-2">
                                                <svg width="64" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M33.4767 40.8511H12.997C12.5855 40.8511 12.3502 40.3818 12.5963 40.052L34.1225 11.207C34.4103 10.8214 35.0233 11.0249 35.0233 11.506V30.7766C35.0233 31.0527 35.2471 31.2766 35.5233 31.2766H55.9584C56.3779 31.2766 56.6109 31.762 56.3486 32.0893L34.8669 58.8895C34.5714 59.2581 33.9767 59.0492 33.9767 58.5768V41.3511C33.9767 41.0749 33.7529 40.8511 33.4767 40.8511Z"
                                                        stroke="white" />
                                                </svg>
                                            </div>
                                            <small class="pt-4 mb-0 pb-1">This Week </small>
                                            <div class="pt-2">
                                                <h3 class="counter" style="visibility: visible;">$3.45K
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="20" viewBox="0 0 20 20"
                                                            fill="green">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </h3>
                                                <div class="pb-3 pt-3">
                                                    <small>+ 64%</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div
                                            class="card bg-body align-items-start pt-4 shadow-none mb-0  ps-4 pe-4">
                                            <div class="avatar bg-secondary p-2 mb-2">
                                                <svg width="64" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 41V16C7 15.4477 7.44772 15 8 15H35"
                                                        stroke="white" stroke-linecap="round" />
                                                    <path
                                                        d="M63.3612 39.8457C63.5522 39.6462 63.5452 39.3297 63.3457 39.1388C63.1462 38.9478 62.8297 38.9548 62.6388 39.1543L63.3612 39.8457ZM49.804 53.2893L49.4427 52.9436L49.804 53.2893ZM48.4021 53.3317L48.7418 52.9649L48.4021 53.3317ZM62.6388 39.1543L49.4427 52.9436L50.1652 53.635L63.3612 39.8457L62.6388 39.1543ZM48.7418 52.9649L7.33969 14.6331L6.66031 15.3669L48.0624 53.6986L48.7418 52.9649ZM49.4427 52.9436C49.254 53.1408 48.9421 53.1503 48.7418 52.9649L48.0624 53.6986C48.6632 54.2549 49.5991 54.2266 50.1652 53.635L49.4427 52.9436Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                            <small class="pt-4 mb-0 pb-1">This Month </small>
                                            <div class="pt-2">
                                                <h3 class="counter" style="visibility: visible;">$3.45K
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="20" viewBox="0 0 20 20"
                                                            fill="red">
                                                            <path fill-rule="evenodd"
                                                                d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </h3>
                                                <div class="pt-3 pb-3">
                                                    <small>- 31%</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap gap-3">
                        <div class="header-title">
                            <h4 class="card-title mb-3">Market Overview</h4>
                            <div class="d-flex align-items-center  flex-wrap gap-3">
                                <div class="d-flex align-items-center">
                                    <div class="form-check active">
                                        <input class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">ETH
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">XMR
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">LTC
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">XMR
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle mt-2" href="#"
                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Weekly (2020)
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Weekly (2020)</a></li>
                                <li><a class="dropdown-item" href="#">Monthly (2020)</a></li>
                                <li><a class="dropdown-item" href="#">Today (2020)</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="card-body">
                        <div id="apex-candlestick-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-block card-stretch custom-scroll">
                    <div
                        class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Recent Trading Activities</h4>
                        </div>
                        <div class="btn-group" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-sm btn-primary active rounded-start"
                                for="btncheck1">Monthly</label>

                            <input type="checkbox" class="btn-check" id="btncheck2">
                            <label class="btn btn-sm btn-primary" for="btncheck2">Weekly</label>

                            <input type="checkbox" class="btn-check" id="btncheck3">
                            <label class="btn btn-sm btn-primary rounded-end"
                                for="btncheck3">Today</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">24h %</th>
                                        <th scope="col">7d %</th>
                                        <th scope="col">Market Cap</th>
                                        <th scope="col">Volume(24th)</th>
                                        <th scope="col">Circulating</th>
                                        <th scope="col">Last 7 Days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="assets/images/coins/02.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img23" />
                                            Bitcoin BTC<a href="#"
                                                class="badge text-bg-primary ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-danger"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z"
                                                    fill="#FF2E2E" />
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-success"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z"
                                                    fill="#00EC42" />
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-1"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        role="tablist" width="20"
                                                        id="dropdownMenuButton7"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton7">
                                                        <li><a class="dropdown-item" href="#">View
                                                                Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="assets/images/coins/02.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img23" />
                                            Ethereum ETH<a href="#"
                                                class="badge text-bg-primary ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$2,796.60</td>
                                        <td class="text-danger"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z"
                                                    fill="#FF2E2E" />
                                            </svg>
                                            3.33%
                                        </td>
                                        <td class="text-success"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z"
                                                    fill="#00EC42" />
                                            </svg>
                                            15.45%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-2"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" role="tablist"
                                                        id="dropdownMenuButton8"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton8">
                                                        <li><a class="dropdown-item" href="#">View
                                                                Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="assets/images/coins/02.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img23" />
                                            Monero XMR<a href="#"
                                                class="badge text-bg-primary ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$1.00</td>
                                        <td class="text-success"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z"
                                                    fill="#00EC42" />
                                            </svg>
                                            0.01%
                                        </td>
                                        <td class="text-danger"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z"
                                                    fill="#FF2E2E" />
                                            </svg>
                                            0.02%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-3"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" role="tablist"
                                                        id="dropdownMenuButton9"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton9">
                                                        <li><a class="dropdown-item" href="#">View
                                                                Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="assets/images/coins/02.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img23" />
                                            Litecoin LTC<a href="#"
                                                class="badge text-bg-primary ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-danger"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z"
                                                    fill="#FF2E2E" />
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-success">
                                            <svg width="10" height="8" viewBox="0 0 8 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z"
                                                    fill="#00EC42" />
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-4"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        role="tablist" width="20"
                                                        id="dropdownMenuButton10"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton10">
                                                        <li><a class="dropdown-item" href="#">View
                                                                Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="assets/images/coins/02.png"
                                                class="img-fluid avatar avatar-30 avatar-rounded"
                                                alt="img23" />
                                            Bitcoin BTC<a href="#"
                                                class="badge text-bg-primary ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-success"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z"
                                                    fill="#00EC42" />
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-danger"><svg width="10" height="8"
                                                viewBox="0 0 8 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z"
                                                    fill="#FF2E2E" />
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-5"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" id="dropdownMenuButton11"
                                                        role="tablist" data-bs-toggle="dropdown"
                                                        aria-expanded="false" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton11">
                                                        <li><a class="dropdown-item" href="#">View
                                                                Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View
                                                                Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="assets/images/coins/14.png" class="img-fluid p-0 img-right-banner-top"
                            alt="img60">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">History</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-inline m-0 p-0">
                            <li class="pt-3">
                                <div
                                    class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap">
                                    <div class="d-flex flex-wrap flex-md-nowrap gap-3">
                                        <img src="assets/images/coins/01.png"
                                            class="img-fluid avatar avatar-40 avatar-rounded"
                                            alt="img6">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-2 d-inline-block">Bitcoin</h5>
                                            <p class=" text-success mb-2 d-inline-block ms-1">+$10,00</p>
                                            <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied
                                                Customers From 107 Countries.</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p>11/02/21</p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3">
                                <div
                                    class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap">
                                    <div class="d-flex flex-wrap flex-md-nowrap gap-3">
                                        <img src="assets/images/coins/09.png"
                                            class="img-fluid avatar avatar-40 avatar-rounded"
                                            alt="img7">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-2 d-inline-block">Ethereum</h5>
                                            <p class=" text-danger mb-2 d-inline-block ms-1">-$50,00</p>
                                            <p class="fs-6">Ethereum is a decentralized, blockchain with
                                                smart contract functionality</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p>11/02/21</p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3">
                                <div
                                    class="d-flex justify-content-between rounded-pill gap-3 flex-wrap flex-md-nowrap">
                                    <div class="d-flex flex-wrap flex-md-nowrap gap-3">
                                        <img src="assets/images/coins/06.png"
                                            class="img-fluid avatar avatar-40 avatar-rounded"
                                            alt="img8">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-2 d-inline-block">Litecoin</h5>
                                            <p class=" text-danger mb-2 d-inline-block ms-1">-$50,00</p>
                                            <p class="fs-6">Litecoin is a peer-to-peer cryptocurrency
                                                and open-source software</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p>11/02/21</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                            <h4 class="card-title">Quick Transfer</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class= "d-grid grid-cols-5 gap-card mb-4">
                            <div class="">
                                <img src="assets/images/avatars/02.png"
                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img36">
                            </div>
                            <div class="">
                                <img src="assets/images/avatars/03.png"
                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img37">
                            </div>
                            <div class="">
                                <img src="assets/images/avatars/04.png"
                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img38">
                            </div>
                            <div class="">
                                <img src="assets/images/avatars/05.png"
                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img39">
                            </div>
                            <div class="">
                                <img src="assets/images/avatars/06.png"
                                    class="img-fluid avatar avatar-30px avatar-rounded" alt="img40">
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon7">Amount</span>
                            <input type="text" class="form-control col-lg-8" placeholder="126.5"
                                aria-label="Recipient's username" aria-describedby="basic-addon3">
                        </div>
                        <div class="d-grid grid-cols-1 gap-card justify-content-between">
                            <div>
                                <button type="button" class="btn btn-primary w-100">
                                    <svg width="17" height="17" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1"
                                            stroke="currentColor" />
                                    </svg>
                                    <span class="ms-2">Transfer Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div
                        class="card-header d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <div class="header-title">
                            <h4 class="card-title">Earnings</h4>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-primary dropdown-toggle "
                                id="dropdownMenuButton12" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                This Week
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="dropdownMenuButton12">
                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div id="multiple-radialbar-chart"
                                class="col-md-8 col-lg-8 multiple-radialbar-chart"></div>
                            <div class="d-grid gap col-md-4 col-lg-4">
                                <div class="d-flex align-items-start">
                                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg"
                                        width="14" viewBox="0 0 24 24" fill="#00EC42">
                                        <g>
                                            <circle cx="12" cy="12" r="8"
                                                fill="#00EC42"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-3">
                                        <span class="text-light">Bitcoin</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg"
                                        width="14" viewBox="0 0 24 24" fill="#FF2E2E">
                                        <g>
                                            <circle cx="12" cy="12" r="8"
                                                fill="#FF2E2E"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-3">
                                        <span class="text-light">Litecoin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection