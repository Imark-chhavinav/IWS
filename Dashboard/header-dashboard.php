<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() . '/css/dashboard-style.css'; ?>">
    
</head>

<body <?php body_class(); ?>>
   <header>
        <div class="logo">
            <a href="index.html"> <img src="../images/logo.png" alt="I Want Service"></a>
        </div>
        <div class="header-right-menu">
            <ul class="user-side user-profile-menu">
                <li class="notification"> <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="badge">3</span> Notifications</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <figure style="background-image:url('../images/user-profile-pic-large-2.jpg');"></figure> Peter <span class="fa fa-caret-down fa-fw"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Setting</a></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <aside class="menu-sidebar">
        <div class="welcome-profile">
            <div class="profile-pic">
                <figure style="background-image:url('../images/user-profile-pic-large-2.jpg');"></figure> <span>Welcome,</span>Peter Bell </div>
            <ul class="profile-details">
                <li><a href="tel:0250501461"><i class="fa fa-phone" aria-hidden="true"></i> (02) 5050 1461</a></li>
                <li><a href="mailto:Peter.bell@info.com"><i class="fa fa-envelope" aria-hidden="true"></i> Peter.bell@info.com</a></li>
            </ul>
        </div>
        <ul class="menu-links">
            <li class="active">
                <a href="#">
                    <svg version="1.1" id="dashboard-icon" x="0px" y="0px" viewBox="0 0 93.93 93.93">
                        <g>
                            <g>
                                <rect x="50.602" y="50.602" width="28.057" height="28.055" />
                                <rect x="15.274" y="15.272" width="28.055" height="28.057" />
                                <rect x="50.602" y="15.272" width="28.057" height="28.057" />
                                <path d="M91.332,0H2.598C1.164,0,0,1.162,0,2.598v88.734c0,1.434,1.164,2.598,2.598,2.598h88.734c1.436,0,2.598-1.164,2.598-2.598
            V2.598C93.93,1.162,92.768,0,91.332,0z M85.93,85.93H8V7.998h77.93V85.93z" />
                                <rect x="15.274" y="50.602" width="28.055" height="28.055" /> </g>
                        </g>
                    </svg> Dashboard</a>
            </li>
            <li>
                <a href="#">
                    <svg id="profile-icon" x="0px" y="0px" viewBox="0 0 33.75 45.313">
                        <g>
                            <g>
                                <defs>
                                    <rect id="SVGID_1_" x="-15.5" y="-8.5" width="64.8" height="53.813" /> </defs>
                                <clipPath id="SVGID_2_">
                                    <use xlink:href="#SVGID_1_" overflow="visible" /> </clipPath>
                                <path clip-path="url(#SVGID_2_)" d="M17.023,19.82c5.195,0,9.402-4.207,9.402-9.401c0-5.191-4.207-9.398-9.402-9.398
            c-5.191,0-9.402,4.207-9.402,9.402C7.621,15.614,11.832,19.82,17.023,19.82L17.023,19.82z M21.012,20.462h-7.977
            c-6.637,0-12.039,5.401-12.039,12.039v9.758l0.027,0.152l0.672,0.211c6.332,1.977,11.836,2.637,16.368,2.637
            c8.848,0,13.973-2.521,14.293-2.685l0.625-0.315h0.066v-9.758C33.051,25.863,27.648,20.462,21.012,20.462L21.012,20.462z
             M8.973,18.829" /> </g>
                        </g>
                    </svg> Profile </a>
            </li>
            <li>
                <a href="#">
                    <svg id="messages-icon" x="0px" y="0px" viewBox="0 0 511.626 511.626">
                        <g>
                            <g>
                                <path d="M49.106,178.729c6.472,4.567,25.981,18.131,58.528,40.685c32.548,22.554,57.482,39.92,74.803,52.099
            c1.903,1.335,5.946,4.237,12.131,8.71c6.186,4.476,11.326,8.093,15.416,10.852c4.093,2.758,9.041,5.852,14.849,9.277
            c5.806,3.422,11.279,5.996,16.418,7.7c5.14,1.718,9.898,2.569,14.275,2.569h0.287h0.288c4.377,0,9.137-0.852,14.277-2.569
            c5.137-1.704,10.615-4.281,16.416-7.7c5.804-3.429,10.752-6.52,14.845-9.277c4.093-2.759,9.229-6.376,15.417-10.852
            c6.184-4.477,10.232-7.375,12.135-8.71c17.508-12.179,62.051-43.11,133.615-92.79c13.894-9.703,25.502-21.411,34.827-35.116
            c9.332-13.699,13.993-28.07,13.993-43.105c0-12.564-4.523-23.319-13.565-32.264c-9.041-8.947-19.749-13.418-32.117-13.418H45.679
            c-14.655,0-25.933,4.948-33.832,14.844C3.949,79.562,0,91.934,0,106.779c0,11.991,5.236,24.985,15.703,38.974
            C26.169,159.743,37.307,170.736,49.106,178.729z" />
                                <path d="M483.072,209.275c-62.424,42.251-109.824,75.087-142.177,98.501c-10.849,7.991-19.65,14.229-26.409,18.699
            c-6.759,4.473-15.748,9.041-26.98,13.702c-11.228,4.668-21.692,6.995-31.401,6.995h-0.291h-0.287
            c-9.707,0-20.177-2.327-31.405-6.995c-11.228-4.661-20.223-9.229-26.98-13.702c-6.755-4.47-15.559-10.708-26.407-18.699
            c-25.697-18.842-72.995-51.68-141.896-98.501C17.987,202.047,8.375,193.762,0,184.437v226.685c0,12.57,4.471,23.319,13.418,32.265
            c8.945,8.949,19.701,13.422,32.264,13.422h420.266c12.56,0,23.315-4.473,32.261-13.422c8.949-8.949,13.418-19.694,13.418-32.265
            V184.437C503.441,193.569,493.927,201.854,483.072,209.275z" /> </g>
                        </g>
                    </svg> messages </a>
            </li>
            <li>
                <a href="#">
                    <svg id="earnings-icon" x="0px" y="0px" viewBox="0 0 484.184 484.184">
                        <g>
                            <path d="M309.43,219.944c-19-10.5-39.2-18.5-59.2-26.8c-11.6-4.8-22.7-10.4-32.5-18.2c-19.3-15.4-15.6-40.4,7-50.3
        c6.4-2.8,13.1-3.7,19.9-4.1c26.2-1.4,51.1,3.4,74.8,14.8c11.8,5.7,15.7,3.9,19.7-8.4c4.2-13,7.7-26.2,11.6-39.3
        c2.6-8.8-0.6-14.6-8.9-18.3c-15.2-6.7-30.8-11.5-47.2-14.1c-21.4-3.3-21.4-3.4-21.5-24.9c-0.1-30.3-0.1-30.3-30.5-30.3
        c-4.4,0-8.8-0.1-13.2,0c-14.2,0.4-16.6,2.9-17,17.2c-0.2,6.4,0,12.8-0.1,19.3c-0.1,19-0.2,18.7-18.4,25.3c-44,16-71.2,46-74.1,94
        c-2.6,42.5,19.6,71.2,54.5,92.1c21.5,12.9,45.3,20.5,68.1,30.6c8.9,3.9,17.4,8.4,24.8,14.6c21.9,18.1,17.9,48.2-8.1,59.6
        c-13.9,6.1-28.6,7.6-43.7,5.7c-23.3-2.9-45.6-9-66.6-19.9c-12.3-6.4-15.9-4.7-20.1,8.6c-3.6,11.5-6.8,23.1-10,34.7
        c-4.3,15.6-2.7,19.3,12.2,26.6c19,9.2,39.3,13.9,60,17.2c16.2,2.6,16.7,3.3,16.9,20.1c0.1,7.6,0.1,15.3,0.2,22.9
        c0.1,9.6,4.7,15.2,14.6,15.4c11.2,0.2,22.5,0.2,33.7-0.1c9.2-0.2,13.9-5.2,13.9-14.5c0-10.4,0.5-20.9,0.1-31.3
        c-0.5-10.6,4.1-16,14.3-18.8c23.5-6.4,43.5-19,58.9-37.8C386.33,329.544,370.03,253.444,309.43,219.944z" /> </g>
                    </svg> earnings </a>
            </li>
            <li>
                <a href="#">
                    <svg id="contracts-icon" x="0px" y="0px" viewBox="0 0 392.533 392.533">
                        <g>
                            <g>
                                <path d="M243.467,319.289H52.113c-6.077,0.065-10.925,4.913-10.925,10.925s4.848,10.925,10.925,10.925h191.354
            c6.012,0,10.925-4.849,10.925-10.925C254.392,324.202,249.543,319.289,243.467,319.289z" /> </g>
                        </g>
                        <g>
                            <g>
                                <path d="M136.735,259.232H52.113c-6.012,0-10.925,4.849-10.925,10.925c0,6.077,4.848,10.925,10.925,10.925h84.622
            c6.012,0,10.925-4.849,10.925-10.925C147.661,264.145,142.812,259.232,136.735,259.232z" /> </g>
                        </g>
                        <g>
                            <g>
                                <path d="M145.204,199.24H52.113c-6.012,0-10.925,4.848-10.925,10.925c0,6.012,4.848,10.925,10.925,10.925h93.091
            c6.012,0,10.925-4.848,10.925-10.925C156.129,204.154,151.281,199.24,145.204,199.24z" /> </g>
                        </g>
                        <g>
                            <g>
                                <path d="M199.83,139.248H52.113c-6.012,0-10.925,4.849-10.925,10.925c0,6.077,4.848,10.925,10.925,10.925H199.83
            c6.012,0,10.925-4.849,10.925-10.925C210.756,144.162,205.907,139.248,199.83,139.248z" /> </g>
                        </g>
                        <g>
                            <g>
                                <path d="M241.01,80.356H113.98c-6.012,0-10.925,4.849-10.925,10.925c0,6.077,4.913,10.925,10.925,10.925h127.03
            c6.012,0,10.925-4.849,10.925-10.925C251.935,85.269,247.087,80.356,241.01,80.356z" /> </g>
                        </g>
                        <g>
                            <g>
                                <path d="M381.81,58.699c-6.982-6.982-31.354-20.493-51.846,0l-34.457,34.457V31.547C295.507,14.158,281.349,0,263.96,0H82.368
            c-8.275,0-16.162,3.232-22.109,9.18L9.252,60.186C3.37,66.069,0.008,74.279,0.008,82.489v278.497
            c0,17.39,14.158,31.547,31.547,31.547h232.533c17.39,0,31.547-14.158,31.547-31.547V196.784l86.174-86.238
            C396.097,96.259,396.097,72.986,381.81,58.699z M63.038,37.301v25.794H37.244L63.038,37.301z M273.915,361.05h-0.129
            c0,5.301-4.331,9.632-9.632,9.632H31.556c-5.301,0-9.632-4.331-9.632-9.632V85.01h52.17c6.012,0,10.925-4.848,10.925-10.925
            V21.851h179.2c5.301,0,9.632,4.331,9.632,9.632v83.394L162.659,226.069c-2.004,2.004-3.168,4.784-3.168,7.758v36.396
            c0,6.012,4.848,10.925,10.925,10.925h36.396c2.844,0,5.624-1.164,7.758-3.168l59.345-59.345V361.05z M202.222,259.297h-21.01
            v-21.01L323.111,96.388l21.01,21.01L202.222,259.297z M366.424,95.095l-6.982,6.982l-21.01-21.01l6.982-6.982
            c5.624-5.624,15.386-5.624,21.01,0C371.919,79.644,371.79,89.794,366.424,95.095z" /> </g>
                        </g>
                    </svg> contracts </a>
            </li>
            <li>
                <a href="#">
                    <svg id="invites-icon" x="0px" y="0px" width="80.13px" height="80.13px" viewBox="0 0 80.13 80.13">
                        <g>
                            <path d="M48.355,17.922c3.705,2.323,6.303,6.254,6.776,10.817c1.511,0.706,3.188,1.112,4.966,1.112
        c6.491,0,11.752-5.261,11.752-11.751c0-6.491-5.261-11.752-11.752-11.752C53.668,6.35,48.453,11.517,48.355,17.922z M40.656,41.984
        c6.491,0,11.752-5.262,11.752-11.752s-5.262-11.751-11.752-11.751c-6.49,0-11.754,5.262-11.754,11.752S34.166,41.984,40.656,41.984
        z M45.641,42.785h-9.972c-8.297,0-15.047,6.751-15.047,15.048v12.195l0.031,0.191l0.84,0.263
        c7.918,2.474,14.797,3.299,20.459,3.299c11.059,0,17.469-3.153,17.864-3.354l0.785-0.397h0.084V57.833
        C60.688,49.536,53.938,42.785,45.641,42.785z M65.084,30.653h-9.895c-0.107,3.959-1.797,7.524-4.47,10.088
        c7.375,2.193,12.771,9.032,12.771,17.11v3.758c9.77-0.358,15.4-3.127,15.771-3.313l0.785-0.398h0.084V45.699
        C80.13,37.403,73.38,30.653,65.084,30.653z M20.035,29.853c2.299,0,4.438-0.671,6.25-1.814c0.576-3.757,2.59-7.04,5.467-9.276
        c0.012-0.22,0.033-0.438,0.033-0.66c0-6.491-5.262-11.752-11.75-11.752c-6.492,0-11.752,5.261-11.752,11.752
        C8.283,24.591,13.543,29.853,20.035,29.853z M30.589,40.741c-2.66-2.551-4.344-6.097-4.467-10.032
        c-0.367-0.027-0.73-0.056-1.104-0.056h-9.971C6.75,30.653,0,37.403,0,45.699v12.197l0.031,0.188l0.84,0.265
        c6.352,1.983,12.021,2.897,16.945,3.185v-3.683C17.818,49.773,23.212,42.936,30.589,40.741z" /> </g>
                    </svg> Invites </a>
            </li>
            <li>
                <a href="#">
                    <svg x="0px" y="0px" viewBox="0 0 100 125" id="applied-jobs-icon">
                        <g>
                            <path d="M54.46,76.452c0.002-0.987,0.41-1.956,1.111-2.652l5.893-5.895c0.717-0.718,1.662-1.113,2.663-1.113   c0.971,0,1.88,0.376,2.558,1.056l4.103,4.103l4.158-4.157c-2.933-10.524-11.411-4.016-22.934-12.919   c-0.063,2.367-5.174,4.28-11.479,4.28c-6.304,0-11.416-1.913-11.478-4.28C14.65,66.005,5,53.043,5,79.394   c0,7.221,19.271,10.695,35.462,10.695c0.024,0,0.049-0.001,0.071-0.001c0.024,0,0.049,0.001,0.071,0.001   c7.953,0,16.644-0.841,23.434-2.55l-8.524-8.523C54.832,78.334,54.458,77.424,54.46,76.452z" />
                            <path d="M25.013,39.761c1.266,3.448,3.192,6.801,5.564,9.433c0.617,0.684,1.271,1.302,1.944,1.878   c0.184,0.157,0.361,0.327,0.549,0.476c2.277,1.796,4.831,2.908,7.534,2.908c2.687,0,5.225-1.098,7.492-2.874   c0.153-0.12,0.298-0.261,0.448-0.387c0.704-0.589,1.385-1.229,2.027-1.938c2.405-2.649,4.358-6.04,5.634-9.525   c1.07-0.317,2.192-2.347,2.65-4.939c0.496-2.818,0.026-5.276-1.051-5.678c-0.051-0.915-0.136-1.84-0.263-2.765   c-0.434-7.967-2.868-11.528-6.464-13.118c-2.547-2.045-5.954-3.321-10.475-3.321c-4.508,0-7.903,1.244-10.439,3.243   c-3.962,1.663-6.555,5.625-6.703,15.024c-0.024,0.299-0.043,0.596-0.061,0.893c-1.175,0.229-1.709,2.781-1.19,5.722   C22.69,37.509,23.899,39.602,25.013,39.761z" />
                            <path d="M94.671,65.132l-5.895-5.896c-0.217-0.217-0.499-0.328-0.773-0.328c-0.245,0-0.483,0.09-0.665,0.271L70.787,75.73   l-5.992-5.993c-0.182-0.183-0.422-0.272-0.668-0.272c-0.273,0-0.554,0.11-0.771,0.328l-5.894,5.896   c-0.413,0.41-0.443,1.052-0.059,1.437l12.693,12.693c0.169,0.168,0.387,0.243,0.611,0.257c0.026,0.002,0.051,0.012,0.077,0.013   c0.033-0.001,0.065-0.013,0.101-0.016c0.219-0.017,0.431-0.09,0.596-0.254l23.248-23.25C95.113,66.187,95.084,65.546,94.671,65.132   z" /> </g>
                    </svg> applied jobs </a>
            </li>
            <li>
                <a href="#">
                    <svg  version="1.1" x="0px" y="0px" viewBox="0 0 20 25" id="payment-info-icon"><g><path d="M0,3.1v13.9H20V3.1H0z M18,5.1V7H2V5.1H18z M2,14.9V9H18v6H2z"/><rect x="4" y="11" width="4" height="2"/></g></svg>
                    
                    Payment info
                </a></li>
            <li>
                <a href="#">
                    <svg id="settings-icon" x="0px" y="0px" viewBox="0 0 347.958 347.958">
                        <path d="M327.976,93.864l19.982-19.991l-59.02-59.042l-146.92,146.923c-35.84-22.488-83.666-18.17-114.852,13.009
    c-36.223,36.23-36.223,94.968,0,131.196c36.227,36.224,94.957,36.224,131.184-0.001c31.18-31.182,35.5-79.019,13.012-114.84
    l61.035-61.022l29.678,29.674l21.539-21.553l-19.682-19.677l10.627-10.621l19.672,19.679l23.127-23.119l-19.676-19.674l10.613-10.62
    L327.976,93.864z M91.825,300.022L33.107,241.3l19.979-19.994l58.726,58.724L91.825,300.022z" /> </svg> Settings </a>
            </li>
        </ul>
    </aside>