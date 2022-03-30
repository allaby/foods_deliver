<!doctype html>
<html lang="en">

<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/05_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 08:06:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">
    <title><?= $page_title ?></title>
    <link href="/assets/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/auth/css/common.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="/assets/auth/css/theme-05.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="forny-container">
        <div class="forny-inner">
            <div class="forny-two-pane">
                <div>
                    <div class="forny-form">
                        <div>
                            <h4>Login into account</h4>
                            <div>
                                <p class="text-success" id="success"></p>
                                <p class="text-danger" id="danger"></p>
                                <p class="text-warning" id="warning"></p>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
                                                <g transform="translate(0)">
                                                    <path d="M23.983,101.792a1.3,1.3,0,0,0-1.229-1.347h0l-21.525.032a1.169,1.169,0,0,0-.869.4,1.41,1.41,0,0,0-.359.954L.017,115.1a1.408,1.408,0,0,0,.361.953,1.169,1.169,0,0,0,.868.394h0l21.525-.032A1.3,1.3,0,0,0,24,115.062Zm-2.58,0L12,108.967,2.58,101.824Zm-5.427,8.525,5.577,4.745-19.124.029,5.611-4.774a.719.719,0,0,0,.109-.946.579.579,0,0,0-.862-.12L1.245,114.4,1.23,102.44l10.422,7.9a.57.57,0,0,0,.7,0l10.4-7.934.016,11.986-6.04-5.139a.579.579,0,0,0-.862.12A.719.719,0,0,0,15.977,110.321Z" transform="translate(0 -100.445)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required class="form-control" id="email" name="email" type="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group password-field">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24">
                                                <g transform="translate(0)">
                                                    <g transform="translate(5.457 12.224)">
                                                        <path d="M207.734,276.673a2.543,2.543,0,0,0-1.749,4.389v2.3a1.749,1.749,0,1,0,3.5,0v-2.3a2.543,2.543,0,0,0-1.749-4.389Zm.9,3.5a1.212,1.212,0,0,0-.382.877v2.31a.518.518,0,1,1-1.035,0v-2.31a1.212,1.212,0,0,0-.382-.877,1.3,1.3,0,0,1-.412-.955,1.311,1.311,0,1,1,2.622,0A1.3,1.3,0,0,1,208.633,280.17Z" transform="translate(-205.191 -276.673)" />
                                                    </g>
                                                    <path d="M84.521,9.838H82.933V5.253a4.841,4.841,0,1,0-9.646,0V9.838H71.7a1.666,1.666,0,0,0-1.589,1.73v10.7A1.666,1.666,0,0,0,71.7,24H84.521a1.666,1.666,0,0,0,1.589-1.73v-10.7A1.666,1.666,0,0,0,84.521,9.838ZM74.346,5.253a3.778,3.778,0,1,1,7.528,0V9.838H74.346ZM85.051,22.27h0a.555.555,0,0,1-.53.577H71.7a.555.555,0,0,1-.53-.577v-10.7a.555.555,0,0,1,.53-.577H84.521a.555.555,0,0,1,.53.577Z" transform="translate(-70.11)" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required class="form-control" id="password" name="password" type="password" placeholder="Password">
                                    <div class="input-group-append cursor-pointer">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
                                                <g transform="translate(0 0)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M23.609,117.568a15.656,15.656,0,0,0-5.045-4.859,12.823,12.823,0,0,0-6.38-1.811c-.062,0-.309,0-.371,0a12.823,12.823,0,0,0-6.38,1.811,15.656,15.656,0,0,0-5.045,4.859,2.464,2.464,0,0,0,0,2.658,15.656,15.656,0,0,0,5.045,4.859,12.822,12.822,0,0,0,6.38,1.811c.062,0,.309,0,.371,0a12.823,12.823,0,0,0,6.38-1.811,15.656,15.656,0,0,0,5.045-4.859A2.464,2.464,0,0,0,23.609,117.568Zm-17.74,6.489a14.622,14.622,0,0,1-4.712-4.538,1.155,1.155,0,0,1,0-1.245,14.621,14.621,0,0,1,4.712-4.538,12.747,12.747,0,0,1,1.586-.79,8.964,8.964,0,0,0,0,11.9A12.748,12.748,0,0,1,5.869,124.057ZM12,125.75c-3.213,0-5.827-3.074-5.827-6.853s2.614-6.853,5.827-6.853,5.827,3.074,5.827,6.853S15.211,125.75,12,125.75Zm10.841-6.23a14.621,14.621,0,0,1-4.712,4.538,12.737,12.737,0,0,1-1.585.788,8.964,8.964,0,0,0,0-11.9,12.74,12.74,0,0,1,1.587.791,14.622,14.622,0,0,1,4.712,4.538A1.155,1.155,0,0,1,22.839,119.52Z" transform="translate(0.002 -110.897)" />
                                                    </g>
                                                    <g transform="translate(9.565 5.565)">
                                                        <path d="M205.24,202.8a2.435,2.435,0,1,0,2.435,2.435A2.438,2.438,0,0,0,205.24,202.8Zm0,3.917a1.482,1.482,0,1,1,1.482-1.482A1.483,1.483,0,0,1,205.24,206.721Z" transform="translate(-202.805 -202.804)" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-6 mb-6">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cb1">
                                        <label class="custom-control-label" for="cb1">Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('reset') ?>">Forgot password?</a>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block" id="loginbtn" onclick="login();return false">Login</button>
                            </div>
                            <div class="mt-10 mb-4 text-center">
                                <div class="d-block text-center mb-2 text-sm">
                                    or login with
                                </div>
                                <button type="button" class="btn btn-social btn-block btn-facebook">
                                    Facebook
                                </button>
                                <button type="button" class="btn btn-social btn-block btn-google">
                                    Google
                                </button>
                                <button type="button" class="btn btn-social btn-block btn-twitter">
                                    Twitter
                                </button>
                            </div>
                            <div class="mt-10">
                                Don't have an account? <a href="<?= base_url('register') ?>">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-pane">
                    <div class="text-center" style="width: 300px">
                        <div class="mb-10 forny-logo">
                            <img src="img/logo-05.svg">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="296" height="264" viewBox="0 0 296 264">
                            <defs>
                                <style>
                                    .a {
                                        opacity: 0.8;
                                    }

                                    .b {
                                        fill: url(#a);
                                    }

                                    .c,
                                    .e {
                                        fill: #3f9142;
                                    }

                                    .d,
                                    .h {
                                        fill: #fff;
                                    }

                                    .d,
                                    .m {
                                        opacity: 0.1;
                                    }

                                    .e,
                                    .i {
                                        opacity: 0.2;
                                    }

                                    .f {
                                        opacity: 0.3;
                                    }

                                    .g {
                                        fill: url(#b);
                                    }

                                    .j {
                                        fill: #e0e0e0;
                                    }

                                    .k,
                                    .o,
                                    .q {
                                        opacity: 0.5;
                                    }

                                    .l {
                                        fill: url(#c);
                                    }

                                    .n {
                                        opacity: 0.05;
                                    }

                                    .o {
                                        fill: #4d8af0;
                                    }

                                    .p {
                                        fill: #47e6b1;
                                    }

                                    .q {
                                        fill: #f55f44;
                                    }
                                </style>
                                <linearGradient id="a" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="gray" stop-opacity="0.251" />
                                    <stop offset="0.54" stop-color="gray" stop-opacity="0.122" />
                                    <stop offset="1" stop-color="gray" stop-opacity="0.102" />
                                </linearGradient>
                                <linearGradient id="b" x1="-0.512" y1="7.758" x2="-0.512" y2="6.717" xlink:href="#a" />
                                <linearGradient id="c" x1="-1.386" y1="7.85" x2="-1.386" y2="6.809" xlink:href="#a" />
                            </defs>
                            <g class="a" transform="translate(98.3 6.928)">
                                <ellipse class="b" cx="53.831" cy="41.702" rx="53.831" ry="41.702" />
                            </g>
                            <ellipse class="c" cx="52.636" cy="40.776" rx="52.636" ry="40.776" transform="translate(99.498 7.854)" />
                            <path class="d" d="M477.526,153.077c0-22.52,23.563-40.776,52.633-40.776a64.519,64.519,0,0,1,26.228,5.414c-9.251-6.248-21.354-10.045-34.6-10.045-29.069,0-52.636,18.256-52.636,40.776,0,15.121,10.626,28.319,26.412,35.362C484.51,176.331,477.526,165.338,477.526,153.077Z" transform="translate(-368.986 -99.915)" />
                            <path class="e" d="M224.814,176.9l55.167,101.068,55.167,101.064H114.48l55.167-101.064Z" transform="translate(-72.403 -115.032)" />
                            <g class="f" transform="translate(119.12 161.253)">
                                <path class="g" d="M568.346,577.579l4.532-13.448a23.03,23.03,0,0,0-8.527-26.055l.037-.022a22.6,22.6,0,0,0-5.8-2.94h0l-.062-.022-.07-.022h0a22.624,22.624,0,0,0-6.212-1.169,21.788,21.788,0,0,0-2.246,0,22.908,22.908,0,0,0-3.856.533c-.368.081-.735.173-1.07.272s-.709.206-1.058.32c-.7.232-1.386.492-2.058.79-.338.147-.673.3-1,.467a22.6,22.6,0,0,0-2.849,1.676c-.305.21-.6.426-.9.647a22.788,22.788,0,0,0-7.807,10.879l-7.123,21.189a22.736,22.736,0,0,0-.985,10.335c.074.533.165,1.062.272,1.588s.239,1.044.368,1.558c.1.342.2.684.316,1.022.169.5.368,1.007.555,1.5.136.327.279.654.43.978.3.643.629,1.272.985,1.886a19.9,19.9,0,0,0,1.161,1.794c.309.434.636.86.974,1.272a19.2,19.2,0,0,0,1.441,1.591,22.719,22.719,0,0,0,7.718,5.105h0l.125.052a7.955,7.955,0,0,1,.515-.8A5,5,0,0,1,541,596.379c.132.029.265.07.4.11.926.327,1.838.911,2.731,1.2a2.447,2.447,0,0,0,2.062-.026c1.786-.952,1.125-3.955,2.657-5.271a2.384,2.384,0,0,1,.224-.169.7.7,0,0,1-.059-.085c1.183-.735,2.823-.246,4.186.228,1.47.518,3.389.867,4.411-.334.691-.823.64-2.077,1.3-2.94.765-.992,2.205-1.1,3.451-.926l.063.018a3.373,3.373,0,0,0,4.815-3.227A20.128,20.128,0,0,1,568.346,577.579Z" transform="translate(-521.084 -533.871)" />
                            </g>
                            <path class="h" d="M538.341,599.544a4.777,4.777,0,0,1,4.679-2.1c1.764.4,3.437,2.08,5.006,1.239,2.146-1.147.625-5.362,4.109-5.675a4.572,4.572,0,0,1,2.121.368c1.47.6,3.771,1.275,4.9-.074.665-.794.617-2,1.253-2.826a3.475,3.475,0,0,1,3.33-.893l.059.018a3.254,3.254,0,0,0,4.646-3.113,19.223,19.223,0,0,1,1.047-7.1l4.366-12.978a22.193,22.193,0,0,0-13.912-28.04h0a22.193,22.193,0,0,0-28.033,13.915l-6.884,20.41a22.2,22.2,0,0,0,12.8,27.621,7.886,7.886,0,0,1,.511-.772Z" transform="translate(-403.743 -374.739)" />
                            <circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(140.448 174.147)" />
                            <circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(153.485 178.668)" />
                            <ellipse class="j" cx="3.587" cy="2.393" rx="3.587" ry="2.393" transform="translate(143.033 190.412) rotate(-71.4)" />
                            <circle class="h" cx="3.587" cy="3.587" r="3.587" transform="translate(191.066 173.47)" />
                            <circle class="h" cx="1.794" cy="1.794" r="1.794" transform="translate(203.774 169.697)" />
                            <g class="k" transform="translate(123.66 19.958)">
                                <g class="f">
                                    <path class="l" d="M581.346,184.579l4.532-13.449a23.03,23.03,0,0,0-8.527-26.055l.037-.022a22.6,22.6,0,0,0-5.8-2.94h0l-.062-.022-.07-.022h0a22.623,22.623,0,0,0-6.212-1.169,21.788,21.788,0,0,0-2.246,0,22.9,22.9,0,0,0-3.856.533c-.368.081-.735.173-1.07.272s-.709.206-1.059.32c-.7.232-1.386.493-2.058.79-.338.147-.673.3-1,.467a22.6,22.6,0,0,0-2.849,1.676c-.305.21-.6.426-.9.647a22.788,22.788,0,0,0-7.807,10.879l-7.123,21.189a22.735,22.735,0,0,0-.985,10.335c.074.533.165,1.062.272,1.588s.239,1.044.368,1.558c.1.342.2.684.316,1.022.169.5.368,1.007.555,1.5.136.327.279.654.43.978.3.643.629,1.272.985,1.886a19.891,19.891,0,0,0,1.161,1.794c.309.434.636.86.974,1.272.456.551.934,1.084,1.441,1.591a22.718,22.718,0,0,0,7.718,5.105h0l.125.051a7.947,7.947,0,0,1,.515-.8A5,5,0,0,1,554,203.379c.132.029.265.07.4.11.926.327,1.838.912,2.731,1.2a2.448,2.448,0,0,0,2.062-.026c1.786-.952,1.125-3.955,2.657-5.271a2.394,2.394,0,0,1,.224-.169.691.691,0,0,1-.059-.085c1.183-.735,2.823-.246,4.186.228,1.47.518,3.389.867,4.411-.334.691-.823.64-2.077,1.3-2.94.765-.992,2.205-1.1,3.451-.926h.063a3.373,3.373,0,0,0,4.815-3.227A20.085,20.085,0,0,1,581.346,184.579Z" transform="translate(-534.084 -140.871)" />
                                </g>
                                <path class="h" d="M551.341,206.544a4.777,4.777,0,0,1,4.679-2.1c1.764.4,3.437,2.08,5.006,1.239,2.146-1.147.625-5.363,4.109-5.675a4.572,4.572,0,0,1,2.121.368c1.47.6,3.771,1.275,4.9-.074.665-.794.617-2,1.253-2.826a3.475,3.475,0,0,1,3.33-.893l.059.018a3.254,3.254,0,0,0,4.646-3.113,19.223,19.223,0,0,1,1.047-7.1l4.366-12.978a22.192,22.192,0,0,0-13.912-28.04h0a22.192,22.192,0,0,0-28.033,13.915l-6.884,20.41a22.2,22.2,0,0,0,12.8,27.621A7.9,7.9,0,0,1,551.341,206.544Z" transform="translate(-535.858 -142.992)" />
                                <circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(21.228 11.86)" />
                                <circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(34.834 16.436)" />
                            </g>
                            <path class="m" d="M574,186a32.167,32.167,0,0,1,1.026,8.086c0,22.52-23.563,40.776-52.633,40.776C498.6,234.847,478.5,222.622,472,205.848c4.83,18.66,26.1,32.712,51.607,32.712,29.069,0,52.636-18.256,52.636-40.776A32.4,32.4,0,0,0,574,186Z" transform="translate(-371.362 -149.455)" />
                            <g class="a" transform="translate(42.181 37.956)">
                                <ellipse class="b" cx="106.36" cy="28.452" rx="106.36" ry="28.452" />
                            </g>
                            <path class="h" d="M430.853,192.4c-58.138,0-105.273,12.316-105.273,27.515H536.125C536.125,204.716,488.991,192.4,430.853,192.4Z" transform="translate(-284.812 -153.503)" />
                            <path class="h" d="M430.853,294.771c58.138,0,105.273-12.316,105.273-27.511H325.58C325.58,282.454,372.714,294.771,430.853,294.771Z" transform="translate(-284.812 -201.722)" />
                            <path class="n" d="M430.853,294.771c58.138,0,105.273-12.316,105.273-27.511H325.58C325.58,282.454,372.714,294.771,430.853,294.771Z" transform="translate(-284.812 -201.722)" />
                            <rect class="n" width="100.487" height="14.356" rx="7.178" transform="translate(101.897 58.491)" />
                            <path class="o" d="M306.118,140.074a1.353,1.353,0,0,1-.753-1.632.683.683,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.734.734,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.606.606,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.734.734,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,306.118,140.074Z" transform="translate(-256.907 -118.827)" />
                            <path class="o" d="M815.15,446.074a1.353,1.353,0,0,1-.735-1.632.685.685,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.737.737,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.735,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.6.6,0,0,0,.073-.136,1.349,1.349,0,0,1,1.632-.735.735.735,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0a.6.6,0,0,0-.132-.092Z" transform="translate(-588.576 -313.934)" />
                            <path class="o" d="M253.118,588.074a1.353,1.353,0,0,1-.753-1.632.683.683,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.754.733.733,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.594.594,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.607.607,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.733.733,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,253.118,588.074Z" transform="translate(-223.387 -404.369)" />
                            <path class="o" d="M198.15,257.074a1.353,1.353,0,0,1-.735-1.632.682.682,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.736.736,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.7.7,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.606.606,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.737.737,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,198.15,257.074Z" transform="translate(-188.634 -193.566)" />
                            <path class="o" d="M804.986,89.074a1.353,1.353,0,0,1-.735-1.632.685.685,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.666.666,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.735.733.733,0,0,0-.151-.029h0a.676.676,0,0,0-.467,1.253h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.735,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.242.434h0a.6.6,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.734.734,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,804.986,89.074Z" transform="translate(-581.933 -86.571)" />
                            <g class="k" transform="translate(37.857 93.627)">
                                <rect class="p" width="1.103" height="6.248" transform="translate(2.573)" />
                                <rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)" />
                            </g>
                            <g class="k" transform="translate(289.752 64.578)">
                                <rect class="p" width="1.103" height="6.248" transform="translate(2.573)" />
                                <rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)" />
                            </g>
                            <g class="k" transform="translate(252.997 165.885)">
                                <rect class="p" width="1.103" height="6.248" transform="translate(2.573)" />
                                <rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)" />
                            </g>
                            <circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(250.792 27.878)" />
                            <circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(0 2.517)" />
                            <circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(63.389 127.77)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(70.209 53.535)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(70.209 72.781)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(206.063 53.535)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(206.063 72.781)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(139.716 43.16)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(148.492 16.33)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(125.674 27.356)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(169.555 32.134)" />
                            <ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(139.716 80.407)" />
                        </svg>
                        <div class="mt-10">
                            <h4 class="mb-4">Welcome to Forny.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonumm. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="base_url" value="<?= base_url() ?>">
    <script src="/assets/auth/js/jquery.min.js"></script>
    <script src="/assets/auth/js/bootstrap.min.js"></script>
    <script src="/assets/auth/js/main.js"></script>
    <script src="/assets/auth/js/demo.js"></script>
    <script src="/assets/js/customJS/auth/login.js"></script>
</body>

<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/05_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 08:06:21 GMT -->

</html>