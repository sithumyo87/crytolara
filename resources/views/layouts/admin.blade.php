<!doctype html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from templates.iqonic.design/coinex-dist/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 20:35:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COINEX | Cryptocurrency Exchange Admin Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/coinex.css?v=1.0.0') }}">  
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default navs-rounded ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="index-2.html" class="navbar-brand dis-none align-items-center">
                <img src="{{asset('assets/images/logo.svg')}}" class="img-fluid " alt="logo">
                <h4 class="logo-title m-0">OINEX</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body p-0 data-scrollbar">
            <div class="navbar-collapse pe-3" id="sidebar">
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'dashboard') active @endif" aria-current="page" href="{{ route('admin.dashboard') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'admins') active @endif" aria-current="page" href="{{ route('admin.admin.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Admins</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'users') active @endif" aria-current="page" href="{{ route('admin.user.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'withdraw') active @endif" aria-current="page" href="{{ route('admin.withdraw.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.016 7.38948V6.45648C15.016 4.42148 13.366 2.77148 11.331 2.77148H6.45597C4.42197 2.77148 2.77197 4.42148 2.77197 6.45648V17.5865C2.77197 19.6215 4.42197 21.2715 6.45597 21.2715H11.341C13.37 21.2715 15.016 19.6265 15.016 17.5975V16.6545" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M21.8096 12.0215H9.76855" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M18.8813 9.1062L21.8093 12.0212L18.8813 14.9372" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>                                                        
                            </i>
                            <span class="item-name">Withdraws</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'awardSetting') active @endif" aria-current="page" href="{{ route('admin.awardSetting.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.739 6.15368C19.739 3.40281 17.8583 2.30005 15.1506 2.30005H8.79167C6.16711 2.30005 4.2002 3.32762 4.2002 5.97022V20.694C4.2002 21.4198 4.98115 21.877 5.61373 21.5221L11.9957 17.9422L18.3225 21.5161C18.9561 21.873 19.739 21.4158 19.739 20.689V6.15368Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M8.27148 9.02811H15.5898" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                                                                                  
                            </i>
                            <span class="item-name">Award Settings</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'helperSetting') active @endif" aria-current="page" href="{{ route('admin.helperSetting.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M12.0001 8.32739V15.6537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.6668 11.9904H8.3335" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                              
                            </i>
                            <span class="item-name">Helper Setting</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if($active == 'setting') active @endif" aria-current="page" href="{{ route('admin.setting.create') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>                                
                                </svg>                                                     
                            </i>
                            <span class="item-name">Setting</span>
                        </a>
                    </li>
                    
                    
                    <li>
                        <hr class="hr-horizontal">
                    </li>
                    
                </ul>
            </div>
            <div id="sidebar-footer" class="position-relative sidebar-footer">
                <div class="card mx-4">
                    <div class="card-body">
                        <div class="sidebarbottom-content">
                            <div class="image">
                                <img src="{{asset('assets/images/coins/13.png')}}" alt="User-Profile" class="img-fluid">
                            </div>
                            <p class="mb-0">Be more secure with Pro Feature</p>
                            {{-- <button type="button" class="btn btn-primary mt-3">Upgrade Now</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
                <div class="container-fluid navbar-inner">
                    <a href="index-2.html" class="navbar-brand">
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <h4 class="title">
                        {{ $title }}
                    </h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                            fill="currentColor"></rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                    aria-labelledby="search-drop">
                                    <li class="">
                                        <div
                                            class="p-3 card-header justify-content-between border-bottom rounded-top">
                                            <div class="header-title">
                                                <div class="iq-search-bar device-search  position-relative">
                                                    <form action="#" class="searchbox">
                                                        <input type="text" class="text search-input form-control"
                                                            placeholder="Search here...">
                                                        <a class="d-lg-none d-flex" href="javascript:void(0);">
                                                            <span class="material-symbols-outlined">search</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body all-notification">
                                            <div
                                                class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/avatars/01.png')}}"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill"
                                                        alt="#">
                                                </div>
                                                <div class="d-flex flex-column ms-3 w-100">
                                                    <a href="javascript:void(0);" class="h6 mb-1">Paige Turner</a>
                                                    <small>Paige001</small>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/avatars/02.png')}}"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill"
                                                        alt="#">
                                                </div>
                                                <div class="d-flex flex-column ms-3 w-100">
                                                    <a href="javascript:void(0);" class="h6 mb-1">Monty Carlo</a>
                                                    <small>Carlo.m</small>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/avatars/03.png')}}"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill"
                                                        alt="#">
                                                </div>
                                                <div class="d-flex flex-column ms-3 w-100">
                                                    <a href="javascript:void(0);" class="h6 mb-1">Paul Molive</a>
                                                    <small>Paul.45</small>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('assets/images/avatars/04.png')}}"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill"
                                                        alt="#">
                                                </div>
                                                <div class="d-flex flex-column ms-3 w-100">
                                                    <a href="javascript:void(0);" class="h6 mb-1">Monty Carlo</a>
                                                    <small>Carlo.m</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="notification-drop"
                                    data-bs-toggle="dropdown">
                                    <svg width="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M14.3889 20.8572C13.0247 22.3719 10.8967 22.3899 9.51953 20.8572"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                </a>
                                <div class="sub-drop dropdown-menu iq-noti dropdown-menu-end p-0"
                                    aria-labelledby="notification-drop">
                                    <div class="card shadow-none m-0 bg-transparent">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <p class="fs-6 ">New notifications.</p>
                                            </div>
                                            <div class="header-title">
                                                <p class="fs-6">Mark all</p>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/images/utilities/05.png')}}"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img51">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Successfull transaction og 0.01 BTC</h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">15 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img src="{{asset('assets/images/utilities/03.png')}}"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img52">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">4 of Pending Transactions!</h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">30 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('assets/images/utilities/04.png')}}"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img53">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Cancelled order of 2000 ICO</h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">55 mins ago</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('assets/images/utilities/05.png')}}"
                                                        class="img-fluid avatar avatar-30 avatar-rounded"
                                                        alt="img54">
                                                    <div class="w-100 ms-3">
                                                        <h6 class="mb-0 ">Great speed notify of 1.34 LTC</h6>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">14 Mar</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg width="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="bg-primary count-mail"></span>
                                </a>
                                <div class="sub-drop dropdown-menu dropdown-menu-end p-0"
                                    aria-labelledby="mail-drop">
                                    <div class="card shadow-none m-0 bg-transparent">
                                        <div class="card-header d-flex justify-content-between py-3">
                                            <div class="header-title">
                                                <p class="mb-0 text-white">Our Latest News</p>
                                            </div>
                                        </div>
                                        <div class="card-body p-0 ">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex ">
                                                    <div class="">
                                                        <img src="{{asset('assets/images/coins/02.png')}}"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img55">
                                                    </div>
                                                    <div class=" w-100 ms-3">
                                                        <h6 class="mb-0 ">Bitcoin</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the printing and typesetting industry.
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <img src="{{asset('assets/images/coins/03.png')}}"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img56">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Ethereum</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the printing and typesetting industry.
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <img src="{{asset('assets/images/coins/06.png')}}"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img57">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Litecoin</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the printing and typesetting industry.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link py-0 d-flex align-items-center" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{asset('assets/images/avatars/01.png')}}" alt="User-Profile"
                                        class="img-fluid avatar avatar-50 avatar-rounded">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li class="border-0"><a class="dropdown-item"
                                            href="{{ route('admin.profile.edit')}}">Edit Profile</a></li>
                                    <li class="border-0"><a class="dropdown-item"
                                            href="{{ route('admin.password.edit')}}">Change Password</a></li>
                                    <li class="border-0">
                                        <hr class="m-0 dropdown-divider">
                                    </li>
                                    <li class="border-0">

                                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!--Nav End-->
        </div>
        <div class="container-fluid content-inner pb-0">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="footer-body gap-2">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item me-2"><a href="extra/privacy-policy.html"
                            class="text-white">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="extra/terms-of-service.html" class="text-white">Terms of
                            Use</a></li>
                </ul>
                <div class="right-panel text-center">
                    ©
                    <script type="4d535e4bccae2abd4051eba6-text/javascript">document.write(new Date().getFullYear())</script> COINEX, Made with
                    <span class="text-gray">
                        <svg width="15" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                fill="currentColor"></path>
                        </svg>
                    </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                </div>
            </div>
        </footer>
    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/libs.min.js')}}"></script>
    <!-- widgetchart JavaScript -->
    <script src="{{ asset('assets/js/charts/widgetcharts.js')}}"></script>
    <!-- fslightbox JavaScript -->
    <script src="{{ asset('assets/js/fslightbox.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <!-- apexchart JavaScript -->
    <script src="{{ asset('assets/js/charts/apexcharts.js')}}"></script>
    <script src="{{ asset('assets/js/prism.mini.js')}}"></script>

    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/q6nf9jbmbdkxf8pufv8oz647y54gt4vywqoeyygxwdppga5w/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        skin: 'oxide-dark',
        content_css: 'dark'
    });
    </script>
    <!-- custom JavaScript -->
    <script src="{{ asset('assets/js/admin.js')}}"></script>
</html>
