<?php
/*
*	Template Name: Home Page Template
*/
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="banner" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url('','full'); ?>" data-speed="0.3">
        <div class="container">
            <div class="banner-text">
                <h1 class="wow slideInDown" data-wow-duration="1s">Find expert events Service provider</h1>
                <p class="wow fadeInUp" data-wow-duration="1.2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p> <a href="#" class="green-btn wow fadeInDown" data-wow-duration="1.4s">Get started</a> </div>
        </div>
        <div class="search-cover wow fadeInUp" data-wow-duration="1.8s">
            <div class="container">
                <div class="search-form">
                    <form>
                        <div class="form-group search-in">
                            <input type="text" class="form-control" placeholder="Search"> </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>Service Provider Type</option>
                                <option>Catering</option>
                                <option>Venue</option>
                                <option>Venue with Catering</option>
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Location"> </div>
                        <div class="form-group submit-field">
                            <input type="submit" class="blue-btn" value="Submit"> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="how-it-work" data="section" data-parallax="scroll" data-image-src="images/how-it-work-bac.jpg" data-speed="0.3">
        <div class="container">
            <h2>How It Works</h2>
            <div class="how-it-work-steps">
                <ul>
                    <li> <strong class="wow fadeIn" data-wow-duration="1.2s"><span>Step 1</span> Register</strong>
                        <div class="step-icon wow zoomIn" data-wow-duration="1s">
                            <svg id="step1-icon" x="0px" y="0px" viewBox="0 0 18.167 15.85">
                                <g>
                                    <path fill="#E5C028" d="M17.805,8.719c0-4.607-3.748-8.355-8.355-8.355c-4.606,0-8.354,3.748-8.354,8.355H0.731
		C0.731,3.912,4.643,0,9.449,0c4.808,0,8.718,3.912,8.718,8.719" />
                                    <circle fill="#E5C028" cx="0.913" cy="8.736" r="0.913" /> </g>
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2.3359" y1="8.7363" x2="16.5635" y2="8.7363">
                                    <stop offset="0" style="stop-color:#FFFFFF" />
                                    <stop offset="0.3647" style="stop-color:#FDFCFD" />
                                    <stop offset="0.5839" style="stop-color:#F4F4F5" />
                                    <stop offset="0.7648" style="stop-color:#E6E6E7" />
                                    <stop offset="0.9237" style="stop-color:#D2D2D4" />
                                    <stop offset="1" style="stop-color:#C6C5C8" /> </linearGradient>
                                <circle fill="url(#SVGID_1_)" cx="9.45" cy="8.736" r="7.114" />
                                <circle fill="#05A5C9" cx="9.45" cy="8.736" r="6.032" />
                                <circle fill="#E5C028" cx="9.45" cy="8.736" r="6.032" />
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path fill="#6DB3E2" d="M9.242,5.857c-0.146,0-0.385,0-0.531,0H6.778c-0.146,0-0.265,0.12-0.265,0.266v5.609
											c0,0.146,0.12,0.266,0.265,0.266h1.933c0.146,0,0.384,0,0.531,0h1.933c0.146,0,0.264-0.119,0.264-0.266V6.123
											c0-0.146-0.119-0.266-0.264-0.266H9.242z" /> </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path fill="#F2F2F2" d="M10.823,6.236H7.129c-0.123,0-0.223,0.1-0.223,0.223v4.928c0,0.124,0.1,0.223,0.223,0.223h3.693
												c0.123,0,0.223-0.099,0.223-0.223v-4.04V6.459C11.045,6.336,10.945,6.236,10.823,6.236z" /> </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <path fill="#FFC628" d="M9.442,5.58c0-0.258-0.209-0.466-0.467-0.466c-0.256,0-0.465,0.208-0.466,0.466H7.487v0.933h2.978V5.58
					H9.442z" />
                                                <g>
                                                    <g>
                                                        <rect x="7.408" y="8.083" fill="#DCDDDC" width="3.137" height="0.233" /> </g>
                                                    <g>
                                                        <rect x="7.408" y="8.73" fill="#DCDDDC" width="3.137" height="0.234" /> </g>
                                                    <g>
                                                        <rect x="7.408" y="9.379" fill="#DCDDDC" width="3.137" height="0.232" /> </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="10.1387" y1="9.583" x2="11.9182" y2="11.3625">
                                                <stop offset="0" style="stop-color:#231F20" />
                                                <stop offset="0.0492" style="stop-color:#413D3E" />
                                                <stop offset="0.1327" style="stop-color:#6D6A6B" />
                                                <stop offset="0.2221" style="stop-color:#949293" />
                                                <stop offset="0.3161" style="stop-color:#B5B4B4" />
                                                <stop offset="0.416" style="stop-color:#D0CFD0" />
                                                <stop offset="0.5238" style="stop-color:#E5E5E5" />
                                                <stop offset="0.6436" style="stop-color:#F4F4F4" />
                                                <stop offset="0.7846" style="stop-color:#FCFCFC" />
                                                <stop offset="1" style="stop-color:#FFFFFF" /> </linearGradient>
                                            <path fill="url(#SVGID_2_)" d="M9.86,10.016l-0.564,0.847l0.067,0.067l-0.144,0.143l0.006,0.047l0.727,0.879h1.22
				c0.147,0,0.268-0.121,0.268-0.268V8.281L9.86,10.016z" />
                                            <g>
                                                <g>
                                                    <path fill="#FFC628" d="M11.816,10.123c-0.09-0.133-0.164-0.34-0.098-0.531c0.024-0.076,0.065-0.152,0.115-0.222
						c0.042-0.058,0.09-0.114,0.149-0.169c0.207-0.197,0.467-0.326,0.677-0.43c0.115-0.058,0.21-0.113,0.292-0.17
						c0.169-0.117,0.287-0.27,0.337-0.439c0.03-0.098,0.037-0.198,0.02-0.299c-0.02-0.126-0.058-0.238-0.102-0.309l0.128-0.08
						c0.074,0.119,0.108,0.279,0.123,0.365c0.021,0.121,0.012,0.248-0.024,0.366c-0.062,0.204-0.198,0.384-0.397,0.521
						c-0.086,0.061-0.189,0.119-0.311,0.18c-0.256,0.126-0.464,0.236-0.64,0.404c-0.052,0.049-0.095,0.098-0.13,0.147
						c-0.041,0.056-0.076,0.122-0.096,0.184c-0.047,0.137,0.015,0.298,0.08,0.395L11.816,10.123z" /> </g>
                                                <g>
                                                    <path fill="#6DB3E2" d="M9.346,10.912l-0.121,0.121c-0.024,0.023-0.024,0.063,0,0.086c0.011,0.012,0.027,0.018,0.042,0.018
						s0.031-0.006,0.043-0.018L9.431,11L9.346,10.912z" />
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <rect x="11.393" y="8.351" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 14.1835 22.8965)" fill="#FFC628" width="0.881" height="0.32" /> </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <polygon fill="#41444C" points="9.246,10.836 9.509,11.098 10.329,10.484 9.86,10.016 												" /> </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <path fill="#41444C" d="M13.522,6.822c-0.12-0.12-0.292-0.166-0.479-0.145l-1.408,1.408l0.623,0.623l1.408-1.408
					C13.688,7.114,13.643,6.941,13.522,6.822z" />
                                                <polygon fill="#5F6571" points="11.409,8.313 9.86,10.016 10.329,10.484 12.032,8.936 				" /> </g>
                                        </g>
                                    </g>
                                    <circle fill="#E0A126" cx="8.976" cy="5.595" r="0.202" /> </g>
                            </svg>
                        </div>
                    </li>
                    
                    <li> <strong class="wow fadeIn" data-wow-duration="1.6s"><span>Step 2</span> Submit Requirements</strong>
                        <div class="step-icon wow zoomIn" data-wow-duration="1.4s">
                           <svg id="step2-icon"  x="0px" y="0px"
	  viewBox="0 0 18.168 15.831">
<g>
	<path fill="#0B72B5" d="M18.168,7.114c0,4.807-3.911,8.717-8.718,8.717c-4.808,0-8.719-3.91-8.719-8.717h0.363
		c0,4.607,3.748,8.354,8.355,8.354c4.606,0,8.354-3.746,8.354-8.354"/>
	<circle fill="#0B72B5" cx="0.913" cy="7.114" r="0.913"/>
</g>
<g>
	
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-202.0103" y1="212.0557" x2="-191.5382" y2="222.5277" gradientTransform="matrix(0 1 1 0 -207.8633 203.8667)">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0.3647" style="stop-color:#FDFCFD"/>
		<stop  offset="0.5839" style="stop-color:#F4F4F5"/>
		<stop  offset="0.7648" style="stop-color:#E6E6E7"/>
		<stop  offset="0.9237" style="stop-color:#D2D2D4"/>
		<stop  offset="1" style="stop-color:#C6C5C8"/>
	</linearGradient>
	<circle fill="url(#SVGID_1_)" cx="9.45" cy="7.114" r="7.114"/>
	<circle fill="#09629e" cx="9.45" cy="7.114" r="6.032"/>
	
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-192.3877" y1="221.6787" x2="-200.9064" y2="213.16" gradientTransform="matrix(0 1 1 0 -207.8633 203.8667)">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0.3825" style="stop-color:#FDFCFD"/>
		<stop  offset="0.6125" style="stop-color:#F4F4F5"/>
		<stop  offset="0.8022" style="stop-color:#E6E6E7"/>
		<stop  offset="0.969" style="stop-color:#D3D2D4"/>
		<stop  offset="1" style="stop-color:#CECDD0"/>
	</linearGradient>
	<circle fill="#09629e" cx="9.45" cy="7.114" r="6.032"/>
</g>
<g>
	<g>
		<polygon fill="#FFAA71" points="5.381,10.336 6.457,10.336 6.763,8.571 5.709,8.39 		"/>
		<g>
			<path fill="#FFAA71" d="M5.668,8.497L5.668,8.497C5.557,8.479,5.481,8.37,5.501,8.259l0.277-1.614
				c0.02-0.111,0.128-0.187,0.238-0.169l0,0c0.111,0.021,0.188,0.127,0.169,0.24L5.907,8.329C5.889,8.44,5.78,8.517,5.668,8.497z"/>
			<path fill="#FFAA71" d="M6.131,8.237L6.131,8.237c-0.114-0.02-0.189-0.127-0.17-0.238l0.243-1.406
				c0.019-0.111,0.125-0.187,0.237-0.168l0,0c0.113,0.02,0.188,0.127,0.168,0.238L6.367,8.069C6.349,8.18,6.242,8.257,6.131,8.237z"
				/>
			<path fill="#FFAA71" d="M6.534,8.308L6.534,8.308C6.421,8.287,6.346,8.18,6.365,8.069l0.206-1.197
				c0.02-0.113,0.126-0.189,0.238-0.17l0,0c0.112,0.02,0.189,0.127,0.17,0.24L6.771,8.139C6.752,8.25,6.646,8.326,6.534,8.308z"/>
			<path fill="#FFAA71" d="M6.872,8.759L6.872,8.759C6.759,8.74,6.684,8.632,6.703,8.521L6.93,7.204
				c0.019-0.111,0.128-0.188,0.238-0.169l0,0C7.28,7.056,7.356,7.162,7.337,7.274L7.11,8.591C7.09,8.702,6.983,8.778,6.872,8.759z"
				/>
			<path fill="#FFAA71" d="M6.164,9.243L6.164,9.243C5.719,9.167,5.418,8.74,5.493,8.295l0.004-0.019
				C5.574,7.831,6,7.529,6.446,7.606l0,0c0.444,0.076,0.746,0.503,0.669,0.949L7.112,8.574C7.036,9.019,6.608,9.32,6.164,9.243z"/>
		</g>
	</g>
	<g>
		<polygon fill="#2E4970" points="6.914,10.336 6.971,9.997 5.354,9.718 5.252,10.336 		"/>
		
			<rect x="5.378" y="9.437" transform="matrix(-0.9854 -0.1703 0.1703 -0.9854 10.493 20.1844)" fill="#FFFFFF" width="1.468" height="0.409"/>
		<circle fill="#2E4970" cx="6.543" cy="9.735" r="0.106"/>
	</g>
</g>
<path fill="#DDDDDD" d="M12.929,4.177v4.368c0,0.132-0.107,0.239-0.239,0.239H6.328c-0.131,0-0.24-0.107-0.24-0.239V4.177
	c0-0.133,0.109-0.24,0.24-0.24h6.361C12.821,3.937,12.929,4.044,12.929,4.177z"/>
<path fill="#EDEDED" d="M12.689,3.937H6.328c-0.098,0-0.182,0.059-0.219,0.143l6.807,4.547c0.008-0.025,0.013-0.052,0.013-0.081
	V4.177C12.929,4.044,12.821,3.937,12.689,3.937z"/>
<rect x="6.679" y="4.46" fill="#FE4352" width="5.692" height="3.803"/>
<circle fill="#A6A8AC" cx="6.389" cy="6.36" r="0.061"/>
<g>
	<path fill="#7A7B7C" d="M12.652,6.485c-0.067,0-0.123-0.057-0.123-0.125s0.056-0.124,0.123-0.124c0.07,0,0.126,0.056,0.126,0.124
		S12.723,6.485,12.652,6.485z M12.652,6.251c-0.062,0-0.109,0.049-0.109,0.109s0.048,0.111,0.109,0.111s0.111-0.051,0.111-0.111
		S12.714,6.251,12.652,6.251z"/>
</g>
<rect x="6.679" y="4.46" fill="#FFFFFF" width="5.692" height="3.803"/>
<rect x="6.679" y="4.46" fill="#414042" width="5.692" height="0.371"/>
<g>
	<circle fill="#6D6E71" cx="11.728" cy="4.639" r="0.077"/>
	<circle fill="#6D6E71" cx="11.977" cy="4.638" r="0.078"/>
	<circle fill="#6D6E71" cx="12.226" cy="4.638" r="0.078"/>
</g>
<g>
	<path fill="#FFAA71" d="M5.496,8.506L5.496,8.506C5.452,8.399,5.504,8.276,5.609,8.231l0.939-0.384
		c0.106-0.043,0.229,0.008,0.273,0.114l0,0C6.865,8.069,6.813,8.19,6.707,8.234L5.77,8.62C5.662,8.663,5.539,8.612,5.496,8.506z"/>
	<path fill="#FFBE91" d="M6.519,8.04c0.091-0.026,0.156-0.105,0.176-0.197C6.648,7.827,6.598,7.827,6.549,7.848L6.285,7.954
		C6.336,8.028,6.427,8.063,6.519,8.04z"/>
</g>
<path fill="#ACDD17" d="M12.229,6.284c0,0.009-0.008,0.016-0.017,0.016h-1.896c-0.009,0-0.015-0.007-0.015-0.016V5.581
	c0-0.008,0.006-0.016,0.015-0.016h1.896c0.009,0,0.017,0.008,0.017,0.016V6.284z"/>
<text transform="matrix(1 0 0 1 10.7471 6.0195)" fill="#FFFFFF" font-family="'GothamMedium'" font-size="0.2482">SUBMIT</text>
<g>
	<g>
		<polygon fill="#FFB380" points="13.683,10.336 12.618,10.336 12.259,7.576 13.315,7.429 		"/>
		<g>
			<path fill="#FFAA71" d="M12.537,8.239L12.537,8.239c-0.074,0.087-0.207,0.096-0.295,0.021l-0.765-0.665
				C11.39,7.519,11.381,7.387,11.457,7.3l0,0c0.075-0.088,0.207-0.096,0.295-0.02l0.765,0.664
				C12.604,8.02,12.612,8.152,12.537,8.239z"/>
			<path fill="#FFB380" d="M12.201,7.741L12.201,7.741c-0.112,0.016-0.217-0.063-0.233-0.176l-0.209-1.486
				c-0.015-0.112,0.064-0.217,0.177-0.233l0,0c0.113-0.016,0.219,0.063,0.232,0.177l0.209,1.485
				C12.394,7.62,12.313,7.726,12.201,7.741z"/>
			<path fill="#FFB380" d="M12.603,7.642L12.603,7.642c-0.113,0.017-0.218-0.063-0.233-0.176l-0.097-0.683
				c-0.015-0.112,0.063-0.218,0.176-0.233l0,0c0.112-0.016,0.217,0.063,0.233,0.176l0.096,0.684
				C12.793,7.521,12.714,7.625,12.603,7.642z"/>
			<path fill="#FFB380" d="M13.008,7.585L13.008,7.585c-0.112,0.016-0.218-0.063-0.232-0.176l-0.08-0.563
				c-0.016-0.112,0.063-0.217,0.176-0.233l0,0c0.112-0.015,0.218,0.063,0.234,0.177l0.078,0.561
				C13.198,7.464,13.12,7.568,13.008,7.585z"/>
			<path fill="#FFB380" d="M13.451,7.803L13.451,7.803c-0.111,0.016-0.217-0.063-0.233-0.177l-0.105-0.75
				c-0.016-0.113,0.063-0.218,0.177-0.234l0,0c0.113-0.014,0.218,0.064,0.233,0.176l0.104,0.751
				C13.643,7.682,13.564,7.788,13.451,7.803z"/>
			<path fill="#FFB380" d="M12.925,8.479L12.925,8.479c-0.447,0.063-0.863-0.252-0.927-0.699l-0.002-0.02
				c-0.063-0.447,0.251-0.864,0.697-0.927l0,0c0.448-0.063,0.865,0.253,0.928,0.699l0.003,0.021
				C13.688,7.999,13.373,8.417,12.925,8.479z"/>
			<path fill="#FFBE91" d="M11.66,7.536c-0.062-0.07-0.161-0.095-0.254-0.068c0.008,0.047,0.032,0.093,0.071,0.128l0.214,0.186
				C11.734,7.702,11.726,7.606,11.66,7.536z"/>
			<path fill="#FFBE91" d="M11.987,6.192L11.987,6.192c-0.078,0.012-0.152-0.043-0.163-0.121l-0.008-0.063
				c-0.011-0.078,0.044-0.151,0.121-0.163l0,0c0.08-0.01,0.152,0.045,0.163,0.123l0.009,0.063
				C12.121,6.108,12.064,6.183,11.987,6.192z"/>
		</g>
	</g>
	<g>
		<polygon fill="#2E4970" points="12.24,10.336 12.112,9.339 13.736,9.112 13.892,10.336 		"/>
		
			<rect x="12.248" y="8.806" transform="matrix(0.9904 -0.1384 0.1384 0.9904 -1.1224 1.884)" fill="#FFFFFF" width="1.467" height="0.41"/>
		<circle fill="#2E4970" cx="12.548" cy="9.09" r="0.106"/>
	</g>
</g>
<rect x="6.87" y="5.188" fill="#BCBCBC" width="2.823" height="0.168"/>
<rect x="6.87" y="5.599" fill="#BCBCBC" width="2.823" height="0.093"/>
<rect x="6.87" y="5.904" fill="#BCBCBC" width="2.823" height="0.093"/>
<rect x="6.87" y="6.195" fill="#BCBCBC" width="2.823" height="0.091"/>
<rect x="6.87" y="6.485" fill="#BCBCBC" width="2.823" height="0.093"/>
<rect x="6.87" y="6.776" fill="#BCBCBC" width="2.235" height="0.091"/>
<rect x="6.87" y="7.074" fill="#BCBCBC" width="1.884" height="0.093"/>
</svg>

                        </div>
                    </li>
                    
                    <li> <strong class="wow fadeIn" data-wow-duration="2s"><span>Step 3</span> Receive Bids</strong>
                        <div class="step-icon wow zoomIn" data-wow-duration="1.8s">
                           <svg id="step3-icon" x="0px" y="0px"
	 viewBox="0 0 18.167 15.85" >
<g>
	<path fill="#06C49C" d="M17.804,8.718c0-4.607-3.748-8.355-8.355-8.355c-4.606,0-8.354,3.748-8.354,8.355H0.731
		C0.731,3.911,4.643,0,9.449,0c4.808,0,8.718,3.911,8.718,8.718"/>
	<circle fill="#06C49C" cx="0.913" cy="8.736" r="0.913"/>
</g>
<g>
	
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-245.3809" y1="257.0488" x2="-234.9088" y2="267.5209" gradientTransform="matrix(0 1 1 0 -252.856 248.8594)">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0.3647" style="stop-color:#FDFCFD"/>
		<stop  offset="0.5839" style="stop-color:#F4F4F5"/>
		<stop  offset="0.7648" style="stop-color:#E6E6E7"/>
		<stop  offset="0.9237" style="stop-color:#D2D2D4"/>
		<stop  offset="1" style="stop-color:#C6C5C8"/>
	</linearGradient>
	<circle fill="url(#SVGID_1_)" cx="9.45" cy="8.736" r="7.114"/>
	<circle fill="#134960" cx="9.45" cy="8.736" r="6.032"/>
	<circle fill="#06C49C" cx="9.45" cy="8.736" r="6.032"/>
</g>
<g>
	<g>
		<g>
			<path fill="#E6A665" d="M8.085,8.803c0,0,0.885-1.467,0.975-1.398c0.089,0.068-0.024,1.643-0.024,1.643L8.193,9.303L8.085,8.803z
				"/>
			<polygon fill="#F7D6B4" points="9.807,11.777 10.348,11.132 11.503,9.647 11.898,8.947 9.214,8.827 7.813,11.001 7.491,11.6 
				8.9,12.05 9.514,12.444 			"/>
		</g>
		<path fill="#F7D6B4" d="M11.794,5.972l-0.34,0.318c-0.152,0.143-0.393,0.135-0.538-0.018l0,0
			c-0.143-0.154-0.135-0.395,0.018-0.538l0.338-0.317c0.154-0.144,0.395-0.136,0.539,0.017l0,0
			C11.955,5.587,11.947,5.828,11.794,5.972z"/>
		<polygon opacity="0.34" fill="#E6A665" points="11.503,9.647 11.898,8.947 11.218,8.919 		"/>
		<path opacity="0.34" fill="#E6A665" d="M8.781,10.03l1.696,0.26c0.165,0.026,0.28,0.18,0.257,0.346l0,0l0.525-0.676L8.781,10.03z"
			/>
		<g>
			<g>
				<defs>
					<rect id="SVGID_8_" x="8.481" y="4.383" width="3.022" height="5.265"/>
				</defs>
				<clipPath id="SVGID_2_">
					<use xlink:href="#SVGID_8_"  overflow="visible"/>
				</clipPath>
			</g>
			<path fill="#F2F2F2" d="M7.035,12.113l0.332-0.75c0.032-0.072,0.116-0.103,0.187-0.071l2.071,0.96
				c0.066,0.03,0.097,0.105,0.073,0.174l-0.109,0.298L7.035,12.113z"/>
			<path fill="#404040" d="M9.685,12.805L9.685,12.805c0.012-0.039-0.008-0.079-0.046-0.092l-2.596-0.886
				c-0.034-0.011-0.071,0.003-0.087,0.035l-0.491,0.942H9.685z"/>
		</g>
	</g>
	<g>
		<path fill="#F0F6F7" d="M11.207,10.03H8.781c-0.163,0-0.296-0.133-0.296-0.296V5.053c0-0.163,0.133-0.295,0.296-0.295h2.425
			c0.164,0,0.297,0.133,0.297,0.295v4.681C11.503,9.897,11.371,10.03,11.207,10.03z"/>
		<g>
			<defs>
				<rect id="SVGID_10_" x="8.485" y="5.313" width="3.018" height="4.081"/>
			</defs>
			<use xlink:href="#SVGID_10_"  overflow="visible" fill="#416369"/>
			<clipPath id="SVGID_3_">
				<use xlink:href="#SVGID_10_"  overflow="visible"/>
			</clipPath>
			<g opacity="0.11" clip-path="url(#SVGID_3_)">
				
					<rect x="9.305" y="4.262" transform="matrix(0.7824 0.6228 -0.6228 0.7824 6.4776 -4.3178)" fill="#FFFFFF" width="0.223" height="5.695"/>
				
					<rect x="10.3" y="5.383" transform="matrix(0.7819 0.6235 -0.6235 0.7819 7.4413 -4.8068)" fill="#FFFFFF" width="0.58" height="5.695"/>
				
					<rect x="9.49" y="4.736" transform="matrix(0.7826 0.6225 -0.6225 0.7826 6.8854 -4.5494)" fill="#FFFFFF" width="0.933" height="5.696"/>
			</g>
			<g clip-path="url(#SVGID_3_)">
				<g>
					<polygon fill="#4A7075" points="10.001,9.368 9.038,8.59 10.968,8.59 					"/>
					<polygon fill="#58898F" points="10.968,8.59 10.001,7.9 9.038,8.59 					"/>
					<g>
						<polygon fill="#6DA2AB" points="9.151,8.445 9.151,9.777 10.853,9.777 10.835,8.445 10.628,8.445 						"/>
						<g opacity="0.17">
							<g>
								<path fill="#FFFFFF" d="M10.61,8.881H9.394c-0.013,0-0.023-0.01-0.023-0.022l0,0c0-0.012,0.011-0.022,0.023-0.022h1.217
									c0.013,0,0.022,0.01,0.022,0.022l0,0C10.633,8.871,10.623,8.881,10.61,8.881z"/>
								<path fill="#FFFFFF" d="M10.61,9.003H9.394c-0.013,0-0.023-0.009-0.023-0.022l0,0c0-0.012,0.011-0.022,0.023-0.022h1.217
									c0.013,0,0.022,0.01,0.022,0.022l0,0C10.633,8.994,10.623,9.003,10.61,9.003z"/>
								<path fill="#FFFFFF" d="M10.62,9.249H9.961c-0.013,0-0.021-0.009-0.021-0.02V9.225c0-0.011,0.009-0.021,0.021-0.021h0.659
									c0.011,0,0.021,0.01,0.021,0.021v0.004C10.641,9.24,10.631,9.249,10.62,9.249z"/>
								<path fill="#FFFFFF" d="M10.62,9.372H9.961c-0.013,0-0.021-0.009-0.021-0.021V9.348c0-0.011,0.009-0.021,0.021-0.021h0.659
									c0.011,0,0.021,0.01,0.021,0.021v0.003C10.641,9.362,10.631,9.372,10.62,9.372z"/>
								<path fill="#FFFFFF" d="M10.348,9.495H9.961c-0.013,0-0.021-0.01-0.021-0.021V9.47c0-0.011,0.009-0.02,0.021-0.02h0.387
									c0.011,0,0.021,0.009,0.021,0.02v0.004C10.369,9.484,10.358,9.495,10.348,9.495z"/>
							</g>
							<path fill="#FFFFFF" d="M10.415,8.709H9.589c-0.013,0-0.022-0.01-0.022-0.022l0,0c0-0.013,0.01-0.022,0.022-0.022h0.826
								c0.013,0,0.022,0.01,0.022,0.022l0,0C10.438,8.699,10.428,8.709,10.415,8.709z"/>
						</g>
					</g>
					<polygon fill="#5C8C94" points="10.001,9.368 9.038,8.59 9.038,9.894 10.968,9.894 10.968,8.59 					"/>
					<polygon fill="#527D85" points="10.968,9.9 10.001,9.054 9.038,9.9 					"/>
				</g>
			</g>
			<g clip-path="url(#SVGID_3_)">
				
					<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="3.0879" y1="97.1309" x2="6.4502" y2="97.1309" gradientTransform="matrix(0.7071 0.7071 -1.1547 1.1547 119.808 -107.5811)">
					<stop  offset="0" style="stop-color:#002A6A"/>
					<stop  offset="1" style="stop-color:#001B45"/>
				</linearGradient>
				<polygon opacity="0.15" fill="url(#SVGID_4_)" points="12.546,7.857 11,6.245 8.993,7.599 11.371,9.976 				"/>
				<g>
					<g>
						<rect x="8.993" y="6.245" fill="#FF6A19" width="2.007" height="1.356"/>
					</g>
				</g>
				<defs>
					<filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="1.356">
						<feFlood  style="flood-color:white;flood-opacity:1" result="back"/>
						<feBlend  in="SourceGraphic" in2="back" mode="normal"/>
					</filter>
				</defs>
				<mask maskUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="1.356" id="SVGID_5_">
					<g filter="url(#Adobe_OpacityMaskFilter)">
						<defs>
							<filter id="Adobe_OpacityMaskFilter_1_" filterUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="1.356">
								<feFlood  style="flood-color:white;flood-opacity:1" result="back"/>
								<feBlend  in="SourceGraphic" in2="back" mode="normal"/>
							</filter>
						</defs>
						<mask maskUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="1.356" id="SVGID_5_">
						</mask>
						<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="10.0601" y1="6.4482" x2="11.0724" y2="7.1041">
							<stop  offset="0" style="stop-color:#FFFFFF"/>
							<stop  offset="1" style="stop-color:#000000"/>
						</linearGradient>
						<polygon mask="url(#SVGID_5_)" fill="url(#SVGID_6_)" points="8.993,6.245 10.584,7.601 11,7.601 11,6.245 						"/>
					</g>
				</mask>
				<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="10.0601" y1="6.4482" x2="11.0724" y2="7.1041">
					<stop  offset="0" style="stop-color:#002A6A"/>
					<stop  offset="1" style="stop-color:#001B45"/>
				</linearGradient>
				<polygon opacity="0.1" fill="url(#SVGID_7_)" points="8.993,6.245 10.584,7.601 11,7.601 11,6.245 				"/>
				<defs>
					<filter id="Adobe_OpacityMaskFilter_2_" filterUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="0.83">
						<feFlood  style="flood-color:white;flood-opacity:1" result="back"/>
						<feBlend  in="SourceGraphic" in2="back" mode="normal"/>
					</filter>
				</defs>
				<mask maskUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="0.83" id="SVGID_9_">
					<g filter="url(#Adobe_OpacityMaskFilter_2_)">
						<defs>
							<filter id="Adobe_OpacityMaskFilter_3_" filterUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="0.817">
								<feFlood  style="flood-color:white;flood-opacity:1" result="back"/>
								<feBlend  in="SourceGraphic" in2="back" mode="normal"/>
							</filter>
						</defs>
						<mask maskUnits="userSpaceOnUse" x="8.993" y="6.245" width="2.007" height="0.817" id="SVGID_9_">
						</mask>
						<linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="10.021" y1="6.2754" x2="10.5704" y2="6.9419">
							<stop  offset="0" style="stop-color:#FFFFFF"/>
							<stop  offset="0.5019" style="stop-color:#B0B0B0"/>
							<stop  offset="0.6155" style="stop-color:#626262"/>
							<stop  offset="1" style="stop-color:#000000"/>
						</linearGradient>
						<polygon mask="url(#SVGID_9_)" fill="url(#SVGID_11_)" points="8.993,6.245 10.068,7.063 11,6.245 						"/>
					</g>
				</mask>
				<linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="10.0181" y1="6.2715" x2="10.5634" y2="6.933">
					<stop  offset="0" style="stop-color:#000000"/>
					<stop  offset="0.5019" style="stop-color:#231F20"/>
					<stop  offset="0.6155" style="stop-color:#231F20"/>
					<stop  offset="1" style="stop-color:#000000"/>
				</linearGradient>
				<polygon opacity="0.08" fill="url(#SVGID_12_)" points="8.993,6.245 10.038,7.075 11,6.245 				"/>
				<polygon fill="#FFC14F" points="8.993,6.245 9.997,6.961 11,6.245 				"/>
				<g>
					<circle fill="#FFFFFF" cx="11" cy="6.245" r="0.402"/>
					<circle fill="#FF1F50" cx="11" cy="6.245" r="0.359"/>
					<g>
						<path fill="#FFFFFF" d="M10.982,6.079h0.063V6.41h-0.068V6.16l-0.071,0.047l-0.031-0.056L10.982,6.079z"/>
					</g>
				</g>
			</g>
		</g>
		<path opacity="0.49" fill="#B4D9DE" d="M10.247,5.111L9.741,5.113c-0.026,0-0.047-0.021-0.047-0.046l0,0
			c0-0.026,0.02-0.047,0.047-0.047l0.506-0.002c0.026,0,0.047,0.021,0.047,0.047l0,0C10.294,5.089,10.273,5.111,10.247,5.111z"/>
		<path opacity="0.49" fill="#B4D9DE" d="M10.621,9.751L9.366,9.754c-0.026,0-0.048-0.021-0.048-0.047l0,0
			c0-0.025,0.021-0.047,0.048-0.047l1.255-0.002c0.026,0,0.048,0.021,0.048,0.047l0,0C10.669,9.73,10.647,9.751,10.621,9.751z"/>
		<g opacity="0.12">
			<path fill="#F1F1F2" d="M8.925,5.597H8.698c-0.028,0-0.052-0.023-0.052-0.051l0,0c0-0.028,0.023-0.051,0.052-0.051h0.227
				c0.027,0,0.051,0.023,0.051,0.051l0,0C8.976,5.574,8.952,5.597,8.925,5.597z"/>
			<path fill="#F1F1F2" d="M9.139,5.597H9.062c-0.028,0-0.052-0.023-0.052-0.051l0,0c0-0.028,0.023-0.051,0.052-0.051h0.077
				c0.027,0,0.05,0.023,0.05,0.051l0,0C9.188,5.574,9.166,5.597,9.139,5.597z"/>
			<path fill="#F1F1F2" d="M11.314,5.597h-0.199c-0.029,0-0.052-0.023-0.052-0.051l0,0c0-0.028,0.022-0.051,0.052-0.051h0.199
				c0.027,0,0.051,0.023,0.051,0.051l0,0C11.365,5.574,11.341,5.597,11.314,5.597z"/>
		</g>
	</g>
	<g>
		<path fill="#F7D6B4" d="M11.898,8.947l-0.139,0.087c-0.146,0.093-0.344,0.051-0.438-0.098l-0.068-0.106
			c-0.093-0.149-0.049-0.344,0.098-0.438l0.139-0.087c0.146-0.094,0.344-0.051,0.438,0.098l0.068,0.106
			C12.089,8.658,12.046,8.853,11.898,8.947z"/>
		<path fill="#F7D6B4" d="M11.898,8.119l-0.139,0.087c-0.146,0.094-0.344,0.05-0.438-0.098l-0.068-0.107
			c-0.093-0.147-0.049-0.344,0.098-0.438l0.139-0.087c0.146-0.093,0.344-0.049,0.438,0.098l0.068,0.107
			C12.089,7.828,12.046,8.025,11.898,8.119z"/>
		<path fill="#F7D6B4" d="M11.898,7.296l-0.139,0.088c-0.146,0.094-0.344,0.05-0.438-0.097L11.253,7.18
			c-0.093-0.148-0.049-0.344,0.098-0.438l0.139-0.087c0.146-0.094,0.344-0.051,0.438,0.098l0.068,0.107
			C12.089,7.006,12.046,7.203,11.898,7.296z"/>
		
			<ellipse transform="matrix(0.8888 -0.4583 0.4583 0.8888 -1.9044 6.1495)" fill="#FCEEE3" cx="11.72" cy="6.999" rx="0.123" ry="0.269"/>
		<path fill="#FCEEE3" d="M11.81,7.762c0.066,0.132,0.074,0.264,0.014,0.295c-0.059,0.03-0.164-0.05-0.23-0.183
			c-0.07-0.131-0.078-0.264-0.018-0.295S11.74,7.629,11.81,7.762z"/>
		
			<ellipse transform="matrix(0.8867 -0.4623 0.4623 0.8867 -2.685 6.3632)" fill="#FCEEE3" cx="11.643" cy="8.661" rx="0.142" ry="0.269"/>
	</g>
	<g>
		<path fill="#F7D6B4" d="M7.813,11.233L7.217,9.192c-0.052-0.137-0.044-0.29,0.022-0.42l0.788-1.534
			c0.089-0.171,0.314-0.21,0.454-0.079l0,0v1.194L8.348,8.827l0.463,1.292L7.813,11.233z"/>
		<path fill="#FCEEE3" d="M7.771,7.743L8.061,7.18l0.094,0.174L8.007,7.65C7.942,7.71,7.859,7.743,7.771,7.743L7.771,7.743z"/>
	</g>
</g>
<g>
	
		<line fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.0554" stroke-linecap="round" stroke-miterlimit="10" x1="11.449" y1="4.448" x2="11.449" y2="4.157"/>
	
		<line fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.0554" stroke-linecap="round" stroke-miterlimit="10" x1="11.621" y1="4.516" x2="11.826" y2="4.311"/>
	
		<line fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.0554" stroke-linecap="round" stroke-miterlimit="10" x1="11.662" y1="4.718" x2="11.953" y2="4.718"/>
</g>
</svg>

                        </div>
                    </li>
                    
                    <li> <strong class="wow fadeIn" data-wow-duration="2.4s"><span>Step 4</span>Select Service 
Provider</strong>
                        <div class="step-icon wow zoomIn" data-wow-duration="2.2s">
                            <svg id="step4-icon"  x="0px" y="0px"
	viewBox="0 0 18.167 21.895" >
<g>
	<path fill="#A5C655" d="M9.449,21.895c-4.808,0-8.718-3.91-8.718-8.717h0.362c0,4.608,3.748,8.354,8.355,8.354
		c4.606,0,8.354-3.746,8.354-8.354c0-4.607-3.748-8.355-8.354-8.355H9.268V2.308h0.363v2.153c4.724,0.097,8.536,3.97,8.536,8.716
		C18.167,17.984,14.257,21.895,9.449,21.895z"/>
	<polygon fill="#A5C655" points="7.678,2.315 9.449,0 11.221,2.315 	"/>
	<circle fill="#A5C655" cx="0.913" cy="13.177" r="0.913"/>
</g>
<g>
	
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-266.5269" y1="282.6377" x2="-256.0555" y2="293.109" gradientTransform="matrix(0 1 1 0 -278.4443 274.4478)">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0.3647" style="stop-color:#FDFCFD"/>
		<stop  offset="0.5839" style="stop-color:#F4F4F5"/>
		<stop  offset="0.7648" style="stop-color:#E6E6E7"/>
		<stop  offset="0.9237" style="stop-color:#D2D2D4"/>
		<stop  offset="1" style="stop-color:#C6C5C8"/>
	</linearGradient>
	<circle fill="url(#SVGID_1_)" cx="9.449" cy="13.177" r="7.114"/>
	<circle fill="#A5C655" cx="9.449" cy="13.177" r="6.032"/>
	
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-256.9058" y1="292.2588" x2="-265.4231" y2="283.7415" gradientTransform="matrix(0 1 1 0 -278.4443 274.4478)">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0.3825" style="stop-color:#FDFCFD"/>
		<stop  offset="0.6125" style="stop-color:#F4F4F5"/>
		<stop  offset="0.8022" style="stop-color:#E6E6E7"/>
		<stop  offset="0.969" style="stop-color:#D3D2D4"/>
		<stop  offset="1" style="stop-color:#CECDD0"/>
	</linearGradient>
	<circle fill="#8eab49" cx="9.449" cy="13.177" r="6.032"/>
</g>
<g>
	<g id="chef_2_">
		<g>
			<path fill="#D3D3D3" d="M8.763,16.632C8.806,16.614,8.747,16.642,8.763,16.632L8.763,16.632z"/>
			<path fill="#D3D3D3" d="M7.369,16.632C7.36,16.642,7.389,16.614,7.369,16.632L7.369,16.632z"/>
		</g>
		<g>
			<polygon fill="#BF8858" points="7.203,11.59 7.138,11.56 7.138,11.353 6.721,11.353 6.721,11.56 6.654,11.588 6.673,12.175 
				6.721,12.175 6.721,12.266 7.138,12.266 7.138,12.175 7.187,12.175 			"/>
			<path fill="#F6CCB8" d="M6.721,11.353v0.096c0,0,0.07,0.086,0.209,0.086c0.138,0,0.208-0.086,0.208-0.086v-0.096H6.721z"/>
		</g>
		<g>
			<g>
				<polygon fill="#777575" points="7.008,13.669 6.851,13.669 6.284,13.669 6.327,17.171 6.786,17.171 6.87,14.171 6.989,14.171 
					7.072,17.171 7.531,17.171 7.574,13.669 				"/>
				<g>
					<path fill="#221F1F" d="M7.05,17.288c0-0.129,0.108-0.176,0.251-0.176c0.146,0,0.253,0.047,0.253,0.176
						c0,0.064,0,0.137-0.253,0.137C7.05,17.425,7.05,17.353,7.05,17.288z"/>
					<path fill="#42404D" d="M7.553,17.278c-0.004,0.049-0.053,0.096-0.252,0.096c-0.197,0-0.246-0.047-0.251-0.096
						c0,0.004,0,0.008,0,0.01c0,0.064,0,0.137,0.251,0.137c0.253,0,0.253-0.072,0.253-0.137C7.554,17.286,7.553,17.282,7.553,17.278
						z"/>
				</g>
				<g>
					<path fill="#221F1F" d="M6.811,17.288c0-0.129-0.109-0.176-0.253-0.176c-0.145,0-0.254,0.047-0.254,0.176
						c0,0.064,0,0.137,0.254,0.137C6.811,17.425,6.811,17.353,6.811,17.288z"/>
					<path fill="#42404D" d="M6.305,17.278c0.005,0.049,0.055,0.096,0.253,0.096c0.197,0,0.247-0.047,0.252-0.096
						c0,0.004,0.001,0.008,0.001,0.01c0,0.064,0,0.137-0.253,0.137c-0.254,0-0.254-0.072-0.254-0.137
						C6.304,17.286,6.305,17.282,6.305,17.278z"/>
				</g>
			</g>
			<path fill="#E6E6E6" d="M7.868,11.9c-0.033-0.195-0.318-0.195-0.659-0.323c0,0-0.098,0.211-0.279,0.211
				c-0.183,0-0.28-0.211-0.28-0.211c-0.341,0.128-0.626,0.128-0.66,0.323c-0.053,0.315,0.231,0.454,0.234,0.452
				c0,0,0.061,0.549,0.051,1.118c-0.009,0.553-0.035,1.126-0.042,1.229H6.93h0.697c-0.008-0.103-0.035-0.676-0.044-1.229
				c-0.009-0.569,0.053-1.118,0.053-1.118C7.638,12.354,7.923,12.215,7.868,11.9z"/>
			<g>
				<path fill="#DCDCDC" d="M7.211,11.578c-0.001-0.001-0.001-0.001-0.002-0.001c0,0-0.085,0.185-0.245,0.208V11.7
					c0-0.028,0.011-0.054,0.032-0.071l0.144-0.135L7.211,11.578z"/>
			</g>
			<g>
				<path fill="#DCDCDC" d="M6.648,11.578C6.648,11.577,6.648,11.577,6.648,11.578c0.001-0.001,0.087,0.184,0.248,0.208V11.7
					c0-0.028-0.013-0.054-0.033-0.071l-0.145-0.135L6.648,11.578z"/>
			</g>
			<g>
				<circle fill="#4E4D55" cx="6.763" cy="12.007" r="0.048"/>
				<circle fill="#4E4D55" cx="6.763" cy="12.53" r="0.048"/>
				<ellipse fill="#4E4D55" cx="6.763" cy="13.052" rx="0.048" ry="0.053"/>
				<circle fill="#4E4D55" cx="6.763" cy="13.576" r="0.048"/>
				<circle fill="#4E4D55" cx="6.763" cy="14.099" r="0.048"/>
			</g>
			<g>
				<ellipse fill="#4E4D55" cx="7.096" cy="12.007" rx="0.046" ry="0.052"/>
				<ellipse fill="#4E4D55" cx="7.096" cy="12.53" rx="0.046" ry="0.052"/>
				<ellipse fill="#4E4D55" cx="7.096" cy="13.052" rx="0.046" ry="0.053"/>
				<ellipse fill="#4E4D55" cx="7.096" cy="13.576" rx="0.046" ry="0.053"/>
				<ellipse fill="#4E4D55" cx="7.096" cy="14.099" rx="0.046" ry="0.052"/>
			</g>
			<polygon fill="#D6D6D6" points="6.57,14.699 6.537,14.699 6.537,11.942 7.01,11.736 7.022,11.768 6.57,11.966 			"/>
		</g>
		<g>
			<g>
				<path fill="#BF8858" d="M7.705,14.315c0.023-0.139,0.045-0.365,0.063-0.504c0.063,0.008,0.184,0.025,0.189,0.032
					c0.006,0.009-0.028,0.402-0.041,0.476c-0.006,0.045-0.015,0.087-0.046,0.123C7.772,14.548,7.686,14.439,7.705,14.315z"/>
				<path fill="#BF8858" d="M7.627,14.257c0.017-0.107,0.083-0.196,0.087-0.199c0.012-0.016,0.025-0.04,0.045-0.045
					c0.034-0.01,0.056,0.024,0.052,0.055c-0.004,0.026-0.026,0.044-0.042,0.065c-0.021,0.03-0.035,0.062-0.045,0.095
					c-0.01,0.029-0.009,0.075-0.045,0.084C7.645,14.322,7.621,14.289,7.627,14.257C7.638,14.185,7.623,14.285,7.627,14.257z"/>
			</g>
			<path fill="#E6E6E6" d="M7.973,14.075c0.031-0.456,0.096-1.615-0.111-2.207l-0.396,0.285c0,0,0.136,0.19,0.221,0.958
				c0.028,0.24,0.011,0.539,0.009,0.961L7.973,14.075z"/>
		</g>
		<g>
			<g>
				<path fill="#BF8858" d="M6.154,14.315c-0.021-0.139-0.045-0.365-0.064-0.504c-0.062,0.008-0.183,0.025-0.188,0.032
					c-0.007,0.009,0.027,0.402,0.04,0.476c0.008,0.045,0.014,0.087,0.047,0.123C6.087,14.548,6.175,14.439,6.154,14.315z"/>
				<path fill="#BF8858" d="M6.233,14.257c-0.019-0.107-0.085-0.196-0.088-0.199c-0.01-0.016-0.025-0.04-0.045-0.045
					c-0.033-0.01-0.057,0.024-0.053,0.055c0.004,0.026,0.029,0.044,0.044,0.065c0.019,0.03,0.035,0.062,0.045,0.095
					c0.008,0.029,0.007,0.075,0.044,0.084C6.213,14.322,6.237,14.289,6.233,14.257C6.222,14.185,6.237,14.285,6.233,14.257z"/>
			</g>
			<path fill="#E6E6E6" d="M5.887,14.075c-0.031-0.456-0.097-1.608,0.109-2.199l0.399,0.277c0,0-0.136,0.19-0.222,0.958
				c-0.029,0.24-0.011,0.539-0.009,0.961L5.887,14.075z"/>
		</g>
		<g>
			<path fill="#F05D44" d="M7.604,15.436h-1.35c-0.021,0-0.036-0.017-0.035-0.037l0.055-1.929h1.309l0.055,1.929
				C7.639,15.418,7.624,15.436,7.604,15.436z"/>
			<polygon fill="#B44633" points="7.586,13.609 6.271,13.609 6.274,13.47 7.583,13.47 			"/>
		</g>
		<g>
			<g>
				<path fill="#BF8858" d="M7.387,10.779L7.4,10.595c0-0.24-0.231-0.435-0.471-0.435c-0.241,0-0.47,0.195-0.47,0.435l0.013,0.184
					c-0.013,0.004-0.024,0.01-0.036,0.019c-0.018,0.016-0.03,0.041-0.03,0.066v0.091c0,0.048,0.04,0.086,0.086,0.086
					c0,0.228,0.274,0.442,0.438,0.442c0.162,0,0.436-0.215,0.436-0.442c0.048,0,0.087-0.039,0.087-0.086v-0.091
					C7.452,10.822,7.424,10.789,7.387,10.779z"/>
				<path opacity="0.8" fill="#F7CDB9" d="M7.387,10.779L7.4,10.595c0-0.24-0.231-0.435-0.471-0.435l0,0v0.618
					c-0.063,0.135-0.105,0.332-0.105,0.332H6.93v0.374l0,0l0,0c0.163,0,0.436-0.215,0.436-0.442c0.048,0,0.087-0.039,0.087-0.086
					v-0.091C7.452,10.822,7.424,10.789,7.387,10.779z"/>
				<g>
					<g>
						<circle fill="#F7CDB9" cx="6.729" cy="10.83" r="0.069"/>
						<circle fill="#3C2417" cx="6.729" cy="10.813" r="0.069"/>
						<circle fill="#FFFFFF" cx="6.752" cy="10.792" r="0.017"/>
					</g>
					<g>
						<circle fill="#F7CDB9" cx="7.129" cy="10.83" r="0.069"/>
						<circle fill="#3C2417" cx="7.129" cy="10.813" r="0.069"/>
						<circle fill="#FFFFFF" cx="7.153" cy="10.792" r="0.017"/>
					</g>
				</g>
			</g>
			<path fill="#3C2417" d="M6.93,9.992c-0.545,0-0.528,0.626-0.474,0.832c0.004,0.009,0.017,0.008,0.017-0.002
				c0-0.133,0.012-0.411,0.168-0.388c0.126,0.019,0.22,0.025,0.289,0.024c0.07,0,0.162-0.006,0.288-0.024
				c0.156-0.022,0.17,0.255,0.168,0.388c0,0.01,0.015,0.011,0.018,0.002C7.457,10.618,7.474,9.992,6.93,9.992z"/>
			<g>
				<path fill="#F05D44" d="M7.087,11.198c0,0.076-0.071,0.14-0.157,0.14c-0.087,0-0.156-0.063-0.156-0.14H7.087z"/>
				<path fill="#FFFFFF" d="M7.04,11.25H6.814c-0.01,0-0.017-0.008-0.017-0.017v-0.035H7.06v0.035
					C7.06,11.242,7.051,11.25,7.04,11.25z"/>
			</g>
		</g>
	</g>
	<g id="waiter">
		<g>
			<polygon fill="#F7CDB9" points="11.946,11.535 11.88,11.504 11.88,11.297 11.461,11.297 11.461,11.504 11.396,11.533 
				11.412,12.122 11.461,12.122 11.461,12.213 11.88,12.213 11.88,12.122 11.928,12.122 			"/>
			<polygon fill="#F7CDB9" points="11.879,11.318 11.879,11.487 11.46,11.399 11.46,11.318 			"/>
		</g>
		<g>
			<polygon fill="#32303A" points="11.749,13.632 11.592,13.632 11.022,13.632 11.015,17.147 11.474,17.147 11.609,14.135 
				11.729,14.135 11.867,17.147 12.326,17.147 12.318,13.632 			"/>
			<g>
				<path fill="#221F1F" d="M11.843,17.263c0-0.133,0.108-0.176,0.253-0.176s0.254,0.043,0.254,0.176c0,0.064,0,0.135-0.254,0.135
					C11.843,17.397,11.843,17.327,11.843,17.263z"/>
				<path fill="#42404D" d="M12.349,17.251c-0.004,0.051-0.054,0.096-0.253,0.096s-0.248-0.045-0.253-0.096c0,0.002,0,0.008,0,0.012
					c0,0.064,0,0.135,0.253,0.135c0.254,0,0.254-0.07,0.254-0.135C12.35,17.259,12.349,17.253,12.349,17.251z"/>
			</g>
			<g>
				<path fill="#221F1F" d="M11.498,17.263c0-0.133-0.108-0.176-0.253-0.176s-0.254,0.043-0.254,0.176c0,0.064,0,0.135,0.254,0.135
					C11.498,17.397,11.498,17.327,11.498,17.263z"/>
				<path fill="#42404D" d="M10.991,17.251c0.004,0.051,0.055,0.096,0.254,0.096c0.197,0,0.248-0.045,0.252-0.096
					c0,0.002,0.001,0.008,0.001,0.012c0,0.064,0,0.135-0.253,0.135c-0.254,0-0.254-0.07-0.254-0.135
					C10.991,17.259,10.991,17.253,10.991,17.251z"/>
			</g>
			<g>
				<rect x="11.022" y="13.632" fill="#221F1F" width="1.295" height="0.136"/>
				<path fill="#43414D" d="M11.727,13.803h-0.113c-0.042,0-0.076-0.034-0.076-0.075v-0.056c0-0.042,0.034-0.076,0.076-0.076h0.113
					c0.041,0,0.076,0.034,0.076,0.076v0.056C11.803,13.769,11.768,13.803,11.727,13.803z M11.613,13.634
					c-0.021,0-0.038,0.017-0.038,0.039v0.056c0,0.021,0.017,0.038,0.038,0.038h0.113c0.021,0,0.038-0.018,0.038-0.038v-0.056
					c0-0.021-0.017-0.039-0.038-0.039H11.613z"/>
			</g>
		</g>
		<g>
			<path fill="#E6E7E8" d="M12.383,12.285c0,0-0.025,1.342-0.066,1.342H11.67h-0.646c-0.041,0-0.066-1.342-0.066-1.342
				s-0.277-0.221-0.182-0.436c0.078-0.167,0.293-0.208,0.599-0.314c0.001,0,0.002-0.001,0.004-0.001
				c0.011-0.003,0.022-0.007,0.032-0.012c0.001,0.001,0.001,0.002,0.001,0.003c0.021,0.115,0.078,0.145,0.258,0.162
				c0.18-0.017,0.237-0.046,0.258-0.162c0,0,0-0.001,0-0.003c0.011,0.005,0.022,0.009,0.034,0.012
				c0.308,0.107,0.524,0.148,0.602,0.315C12.66,12.064,12.383,12.285,12.383,12.285z"/>
			<path fill="#3C3A44" d="M12.231,11.624c-0.075-0.026-0.158-0.052-0.252-0.083l-0.31,0.897l-0.309-0.897
				c-0.094,0.031-0.178,0.057-0.252,0.083c0.026,0.624-0.151,0.661-0.151,0.661s0.025,1.36,0.066,1.36l0.268,0.245l0.378-0.262
				l0.379,0.262l0.268-0.245c0.041,0,0.066-1.36,0.066-1.36S12.204,12.248,12.231,11.624z"/>
			<g>
				<circle fill="#2A2932" cx="11.67" cy="12.631" r="0.051"/>
				<circle fill="#2A2932" cx="11.67" cy="13.03" r="0.051"/>
				<circle fill="#2A2932" cx="11.67" cy="13.429" r="0.051"/>
			</g>
			<g>
				<polygon fill="#F5F5F5" points="11.67,11.687 11.54,11.823 11.292,11.56 11.46,11.491 11.511,11.539 				"/>
				<polygon fill="#F5F5F5" points="11.67,11.687 11.799,11.823 12.049,11.56 11.882,11.491 11.829,11.539 				"/>
			</g>
			<g>
				<path fill="#F05D44" d="M11.693,11.751H11.67h-0.023c0,0-0.178-0.139-0.201-0.045c0,0-0.014,0.04,0.019,0.083
					c0,0.001,0,0.002,0,0.003c-0.032,0.044-0.019,0.084-0.019,0.084c0.023,0.094,0.201-0.045,0.201-0.045h0.023h0.023
					c0,0,0.18,0.139,0.201,0.045c0,0,0.013-0.04-0.018-0.084c-0.001-0.001-0.001-0.002,0-0.003c0.03-0.043,0.018-0.083,0.018-0.083
					C11.873,11.612,11.693,11.751,11.693,11.751z"/>
				<path fill="#DB4930" d="M11.789,11.771c0-0.025-0.09,0.014-0.09,0.014H11.67h-0.029c0,0-0.089-0.039-0.089-0.014
					c0,0,0,0.01,0.01,0.02c-0.01,0.01-0.01,0.021-0.01,0.021c0,0.024,0.089-0.015,0.089-0.015h0.029h0.029c0,0,0.09,0.04,0.09,0.015
					c0,0-0.001-0.011-0.011-0.021C11.788,11.781,11.789,11.771,11.789,11.771z"/>
				<circle fill="#DB4930" cx="11.671" cy="11.791" r="0.075"/>
			</g>
		</g>
		<g>
			<g>
				<path fill="#F7CDB9" d="M11.896,12.758l-0.35,0v0.288l0.35,0.001c0.068,0,0.088-0.064,0.088-0.144
					C11.984,12.823,11.965,12.758,11.896,12.758z"/>
				<path fill="#F7CDB9" d="M11.828,12.675c-0.12,0-0.205,0.087-0.208,0.093c-0.016,0.021-0.011,0.051,0.007,0.066
					c0.018,0.017,0.044,0.013,0.058-0.008c0.001,0,0.016-0.015,0.043-0.027c0.025-0.014,0.062-0.027,0.101-0.027
					c0.023,0,0.042-0.021,0.042-0.048C11.871,12.696,11.852,12.675,11.828,12.675z"/>
			</g>
			<path fill="#E6E7E8" d="M11.654,13.075L10.8,13.074c-0.05,0-0.098-0.022-0.132-0.06c-0.031-0.038-0.046-0.087-0.039-0.137
				l0.128-0.969h0.337l-0.097,0.82l0.658,0L11.654,13.075z"/>
			<path fill="#FFFFFF" d="M11.596,13.573c0,0-0.101-0.06-0.245,0c-0.146,0.06-0.246,0-0.246,0v-0.834c0-0.04,0.032-0.07,0.07-0.07
				h0.351c0.038,0,0.07,0.031,0.07,0.07V13.573z"/>
		</g>
		<g>
			<g>
				<path fill="#F7CDB9" d="M13.287,11.726l-0.242,0.184l0.149,0.177l0.282-0.204c0.05-0.036,0.054-0.109,0.012-0.164
					C13.448,11.664,13.335,11.69,13.287,11.726z"/>
				<path fill="#F7CDB9" d="M13.148,11.751c-0.084,0.064-0.097,0.168-0.097,0.174c0.001,0.022,0.019,0.041,0.039,0.042
					c0.022,0.002,0.038-0.015,0.036-0.037c0,0,0.001-0.005,0.003-0.012c0.003-0.007,0.007-0.018,0.011-0.029
					c0.014-0.023,0.031-0.051,0.058-0.072c0.018-0.012,0.02-0.036,0.003-0.054C13.188,11.745,13.165,11.739,13.148,11.751z"/>
			</g>
			<path fill="#E6E7E8" d="M12.758,12.734c-0.003,0-0.006,0-0.008,0c-0.06-0.003-0.114-0.037-0.143-0.089l-0.301-0.495l0.234-0.342
				l0.232,0.422l0.268-0.397l0.287,0.194L12.9,12.658C12.869,12.705,12.814,12.734,12.758,12.734z"/>
			<g>
				<path fill="#D9DEDF" d="M13.975,11.77h-1.31c-0.024,0-0.044-0.019-0.044-0.044c0-0.024,0.02-0.044,0.044-0.044h1.31
					c0.023,0,0.044,0.02,0.044,0.044C14.019,11.751,13.998,11.77,13.975,11.77z"/>
				<g>
					<rect x="13.537" y="11.175" fill="#E1E1E1" width="0.053" height="0.477"/>
					<path fill="#E1E1E1" d="M13.695,11.687h-0.262c0-0.039,0.059-0.07,0.131-0.07C13.636,11.617,13.695,11.648,13.695,11.687z"/>
					<path fill="#E1E1E1" d="M13.395,10.65c-0.006,0.035-0.149,0.524,0.17,0.524s0.173-0.49,0.168-0.524H13.395z"/>
					<path fill="#96281B" d="M13.564,11.14c-0.057,0-0.099-0.018-0.126-0.053c-0.031-0.039-0.047-0.097-0.047-0.176l0.344,0
						c0,0.078-0.014,0.137-0.045,0.175C13.663,11.123,13.621,11.14,13.564,11.14z"/>
				</g>
				<g>
					<rect x="13.049" y="11.175" fill="#E1E1E1" width="0.052" height="0.477"/>
					<path fill="#E1E1E1" d="M13.205,11.687h-0.262c0-0.039,0.059-0.07,0.131-0.07C13.147,11.617,13.205,11.648,13.205,11.687z"/>
					<path fill="#E1E1E1" d="M12.905,10.65c-0.005,0.035-0.15,0.524,0.169,0.524s0.175-0.49,0.169-0.524H12.905z"/>
					<path fill="#96281B" d="M13.074,11.14c-0.056,0-0.099-0.018-0.125-0.053c-0.031-0.039-0.047-0.097-0.047-0.176l0.345,0
						c0,0.078-0.016,0.137-0.047,0.175C13.174,11.123,13.131,11.14,13.074,11.14z"/>
				</g>
			</g>
		</g>
		<g>
			<path fill="#F7CDB9" d="M12.128,10.706l0.014-0.184c0-0.241-0.23-0.438-0.472-0.438s-0.471,0.196-0.471,0.438l0.013,0.184
				c-0.012,0.003-0.025,0.009-0.035,0.018c-0.02,0.017-0.03,0.041-0.03,0.067v0.091c0,0.048,0.038,0.086,0.087,0.087
				c0,0.228,0.273,0.444,0.437,0.444c0.165,0,0.437-0.216,0.437-0.444c0.049,0,0.089-0.039,0.089-0.087v-0.091
				C12.195,10.749,12.166,10.715,12.128,10.706z"/>
			<path opacity="0.8" fill="#F7CDB9" d="M12.128,10.706l0.014-0.184c0-0.241-0.23-0.438-0.472-0.438v0.621
				c-0.063,0.136-0.104,0.332-0.104,0.332h0.104v0.376c0.165,0,0.437-0.216,0.437-0.444c0.049,0,0.089-0.039,0.089-0.087v-0.091
				C12.195,10.749,12.166,10.715,12.128,10.706z"/>
			<g>
				<g>
					<circle fill="#F7CDB9" cx="11.469" cy="10.757" r="0.069"/>
					<circle fill="#3C2417" cx="11.469" cy="10.74" r="0.069"/>
					<circle fill="#FFFFFF" cx="11.493" cy="10.718" r="0.018"/>
				</g>
				<g>
					<circle fill="#F7CDB9" cx="11.871" cy="10.757" r="0.068"/>
					<circle fill="#3C2417" cx="11.871" cy="10.74" r="0.068"/>
					<circle fill="#FFFFFF" cx="11.895" cy="10.718" r="0.017"/>
				</g>
			</g>
			<path fill="#4F3C30" d="M12.136,10.237c0.004-0.059-0.014-0.142-0.061-0.26c-0.01-0.028-0.047-0.033-0.065-0.009
				c-0.054,0.066-0.123,0.053-0.24,0.006c-0.193-0.079-0.335-0.03-0.418,0.055c-0.351,0.179-0.136,0.807-0.136,0.807
				s0.006-0.326,0.128-0.477c0.066,0.015,0.252,0.041,0.326,0.041c0.075,0,0.269-0.024,0.338-0.041
				c0.088,0.096,0.118,0.477,0.118,0.477S12.263,10.487,12.136,10.237z"/>
			<g>
				<path fill="#F05D44" d="M11.848,11.115c0,0.087-0.081,0.158-0.178,0.158c-0.098,0-0.177-0.07-0.177-0.158H11.848z"/>
				<path fill="#FFFFFF" d="M11.798,11.175h-0.26c-0.009,0-0.018-0.008-0.018-0.018v-0.042h0.296v0.042
					C11.816,11.167,11.809,11.175,11.798,11.175z"/>
			</g>
		</g>
	</g>
	<g id="chef">
		<g>
			<polygon fill="#FFBD84" points="9.798,11.131 9.713,11.097 9.713,10.854 9.176,10.854 9.176,11.097 9.093,11.129 9.114,11.815 
				9.176,11.815 9.176,11.919 9.713,11.919 9.713,11.815 9.774,11.815 			"/>
			<path fill="#F6CCB8" d="M9.176,10.854v0.112c0,0,0.092,0.101,0.269,0.101c0.178,0,0.269-0.101,0.269-0.101v-0.112H9.176z"/>
		</g>
		<g>
			<g>
				<polygon fill="#777575" points="9.545,13.558 9.344,13.558 8.615,13.558 8.63,17.646 9.22,17.646 9.368,14.145 9.521,14.145 
					9.669,17.646 10.259,17.646 10.274,13.558 				"/>
				<g>
					<path fill="#221F1F" d="M9.64,17.784c0-0.154,0.138-0.207,0.323-0.207s0.324,0.053,0.324,0.207c0,0.076,0,0.16-0.324,0.16
						C9.64,17.944,9.64,17.86,9.64,17.784z"/>
					<path fill="#42404D" d="M10.286,17.771c-0.006,0.061-0.068,0.111-0.323,0.111c-0.254,0-0.317-0.051-0.323-0.111
						c0,0.004,0,0.006,0,0.014c0,0.076,0,0.16,0.323,0.16c0.324,0,0.324-0.084,0.324-0.16
						C10.287,17.776,10.286,17.774,10.286,17.771z"/>
				</g>
				<g>
					<path fill="#221F1F" d="M9.251,17.784c0-0.154-0.14-0.207-0.325-0.207s-0.324,0.053-0.324,0.207c0,0.076,0,0.16,0.324,0.16
						C9.251,17.944,9.251,17.86,9.251,17.784z"/>
					<path fill="#42404D" d="M8.602,17.771c0.007,0.061,0.069,0.111,0.324,0.111c0.254,0,0.317-0.051,0.324-0.111
						c0.001,0.004,0.001,0.006,0.001,0.014c0,0.076,0,0.16-0.325,0.16c-0.324,0-0.324-0.084-0.324-0.16
						C8.602,17.776,8.602,17.774,8.602,17.771z"/>
				</g>
			</g>
			<path fill="#E6E6E6" d="M10.65,11.493c-0.043-0.228-0.409-0.228-0.847-0.377c0,0-0.126,0.246-0.359,0.246
				s-0.359-0.246-0.359-0.246c-0.437,0.149-0.805,0.149-0.847,0.377c-0.069,0.369,0.294,0.489,0.296,0.486l0.053,1.151
				c0,0-0.076,1.498-0.085,1.631h0.942h0.942c-0.01-0.135-0.084-1.631-0.084-1.631l0.053-1.151
				C10.357,11.981,10.721,11.861,10.65,11.493z"/>
			<g>
				<path fill="#DCDCDC" d="M9.807,11.116c-0.001,0-0.001,0-0.002,0c0,0-0.111,0.216-0.316,0.243v-0.1
					c0-0.032,0.016-0.063,0.041-0.082l0.188-0.158L9.807,11.116z"/>
			</g>
			<g>
				<path fill="#DCDCDC" d="M9.084,11.116C9.085,11.116,9.085,11.116,9.084,11.116c0.001,0,0.112,0.216,0.317,0.243v-0.1
					c0-0.032-0.015-0.063-0.04-0.082L9.174,11.02L9.084,11.116z"/>
			</g>
			<g>
				<circle fill="#4E4D55" cx="9.23" cy="11.618" r="0.061"/>
				<circle fill="#4E4D55" cx="9.23" cy="12.228" r="0.061"/>
				<circle fill="#4E4D55" cx="9.23" cy="12.839" r="0.061"/>
				<circle fill="#4E4D55" cx="9.23" cy="13.45" r="0.061"/>
				<circle fill="#4E4D55" cx="9.23" cy="14.061" r="0.061"/>
			</g>
			<g>
				<circle fill="#4E4D55" cx="9.658" cy="11.618" r="0.062"/>
				<circle fill="#4E4D55" cx="9.658" cy="12.228" r="0.062"/>
				<circle fill="#4E4D55" cx="9.658" cy="12.839" r="0.062"/>
				<circle fill="#4E4D55" cx="9.658" cy="13.45" r="0.062"/>
				<circle fill="#4E4D55" cx="9.658" cy="14.061" r="0.062"/>
			</g>
			<polygon fill="#D6D6D6" points="8.982,14.761 8.941,14.761 8.941,11.542 9.549,11.301 9.563,11.339 8.982,11.57 			"/>
		</g>
		<g>
			<path fill="#FFBD84" d="M8.679,13.28c-0.03,0.034-0.069,0.076-0.106,0.083s-0.073,0.001-0.102-0.022l-0.18-0.163l0.239-0.27l0,0
				c0.006,0,0.01,0,0.015,0c0.047,0.004,0.113,0.019,0.166,0.064c0.017,0.016,0.015,0.047-0.007,0.07
				c-0.011,0.012-0.024,0.02-0.037,0.021l0.028,0.026C8.747,13.138,8.738,13.211,8.679,13.28z"/>
			<path fill="#FFBD84" d="M10.593,13.179l-0.183,0.163c-0.026,0.023-0.063,0.03-0.101,0.022c-0.037-0.008-0.075-0.049-0.104-0.083
				c-0.062-0.069-0.07-0.143-0.018-0.188l0.028-0.026c-0.014-0.002-0.026-0.009-0.038-0.021c-0.021-0.023-0.022-0.054-0.007-0.07
				c0.054-0.046,0.118-0.061,0.166-0.064c0.005,0,0.011,0,0.014,0l0,0L10.593,13.179z"/>
			<path fill="#E6E6E6" d="M8.275,11.408l-0.649,1.009c-0.063,0.084-0.049,0.196,0.035,0.263l0.642,0.523l0.296-0.3l-0.497-0.405
				l0.485-0.516L8.275,11.408z"/>
			<path fill="#E6E6E6" d="M10.613,11.408l0.65,1.009c0.063,0.084,0.048,0.196-0.035,0.263l-0.644,0.523l-0.296-0.3l0.5-0.405
				l-0.486-0.516L10.613,11.408z"/>
		</g>
		<g id="scarf_5_">
			<path fill="#F05D44" d="M9.906,11.148c0,0-0.131-0.082-0.189-0.128c0,0-0.102,0.089-0.283,0.092
				c-0.179-0.003-0.262-0.092-0.262-0.092c-0.059,0.046-0.189,0.128-0.189,0.128c0.071,0.064,0.325,0.202,0.462,0.202l0,0l0,0
				C9.582,11.351,9.834,11.212,9.906,11.148z"/>
			<path fill="#F05D44" d="M9.46,11.218c0.019,0.228,0.063,0.356-0.262,0.662C9.161,11.706,9.137,11.407,9.46,11.218z"/>
			<path fill="#F05D44" d="M9.428,11.218c-0.017,0.228-0.063,0.356,0.265,0.662C9.727,11.706,9.752,11.407,9.428,11.218z"/>
			<circle fill="#DC4930" cx="9.444" cy="11.23" r="0.122"/>
		</g>
		<g>
			<g>
				<path fill="#FFBD84" d="M9.978,10.185L9.994,9.97c0-0.28-0.27-0.509-0.55-0.509S8.896,9.689,8.896,9.97l0.016,0.215
					c-0.016,0.003-0.029,0.01-0.04,0.021c-0.023,0.019-0.037,0.046-0.037,0.077v0.106c0,0.056,0.045,0.101,0.103,0.102
					c0,0.265,0.319,0.517,0.508,0.517c0.191,0,0.509-0.251,0.509-0.517c0.056,0,0.102-0.046,0.102-0.102v-0.106
					C10.055,10.235,10.021,10.195,9.978,10.185z"/>
				<path opacity="0.8" fill="#F7CDB9" d="M9.978,10.185L9.994,9.97c0-0.28-0.27-0.509-0.55-0.509l0,0v0.723
					C9.37,10.34,9.323,10.57,9.323,10.57h0.121v0.437l0,0l0,0c0.191,0,0.509-0.251,0.509-0.517c0.056,0,0.102-0.046,0.102-0.102
					v-0.106C10.055,10.235,10.021,10.195,9.978,10.185z"/>
				<g>
					<g>
						<circle fill="#F7CDB9" cx="9.21" cy="10.245" r="0.081"/>
						<circle fill="#3C2417" cx="9.21" cy="10.224" r="0.081"/>
						<circle fill="#FFFFFF" cx="9.238" cy="10.199" r="0.021"/>
					</g>
					<g>
						<circle fill="#F7CDB9" cx="9.679" cy="10.245" r="0.081"/>
						<circle fill="#3C2417" cx="9.679" cy="10.224" r="0.081"/>
						<circle fill="#FFFFFF" cx="9.705" cy="10.199" r="0.02"/>
					</g>
				</g>
			</g>
			<path fill="#3C2417" d="M9.444,10.566c-0.228,0-0.274,0.091-0.274,0.203c0,0,0.221-0.011,0.274-0.094
				c0.054,0.083,0.274,0.094,0.274,0.094C9.719,10.657,9.672,10.566,9.444,10.566z"/>
			<path fill="#3C2417" d="M9.444,9.264c-0.636,0-0.618,0.732-0.553,0.972c0.004,0.012,0.021,0.009,0.021-0.002
				c-0.003-0.155,0.014-0.479,0.195-0.453c0.148,0.022,0.256,0.028,0.337,0.028c0.082,0,0.191-0.006,0.336-0.028
				c0.183-0.026,0.199,0.298,0.196,0.453c0,0.011,0.017,0.014,0.02,0.002C10.061,9.997,10.08,9.264,9.444,9.264z"/>
			<g>
				<path fill="#E6E6E6" d="M10.208,9.049c0-0.148-0.137-0.268-0.309-0.274c-0.051-0.089-0.158-0.149-0.28-0.149
					c-0.053,0-0.101,0.011-0.144,0.03c-0.05-0.039-0.114-0.061-0.187-0.061c-0.137,0-0.252,0.084-0.278,0.196
					c-0.007,0-0.014-0.001-0.023-0.001c-0.169,0-0.306,0.118-0.306,0.264c0,0.145,0.137,0.263,0.306,0.263c0.003,0,0.007,0,0.01,0
					c0.037,0.112,0.155,0.194,0.297,0.194c0.08,0,0.153-0.026,0.208-0.068C9.539,9.453,9.578,9.46,9.618,9.46
					c0.117,0,0.22-0.054,0.273-0.137C10.065,9.322,10.208,9.199,10.208,9.049z"/>
				<path fill="#DCDCDC" d="M9.998,9.734c0,0-0.283-0.081-0.556-0.081c-0.276,0-0.559,0.081-0.559,0.081V9.209
					c0,0,0.188-0.062,0.573-0.062c0.385,0,0.541,0.062,0.541,0.062V9.734z"/>
				<g>
					<path fill="#D3D3D3" d="M9.102,9.677c-0.024,0-0.042-0.018-0.042-0.041V9.248c0-0.022,0.018-0.041,0.042-0.041
						c0.021,0,0.04,0.018,0.04,0.041v0.389C9.142,9.659,9.123,9.677,9.102,9.677z"/>
					<path fill="#D3D3D3" d="M9.327,9.636c-0.022,0-0.041-0.018-0.041-0.041V9.228c0-0.023,0.019-0.041,0.041-0.041
						s0.041,0.018,0.041,0.041v0.368C9.368,9.618,9.35,9.636,9.327,9.636z"/>
					<path fill="#D3D3D3" d="M9.555,9.636c-0.022,0-0.041-0.018-0.041-0.041V9.228c0-0.023,0.019-0.041,0.041-0.041
						c0.021,0,0.04,0.018,0.04,0.041v0.368C9.595,9.618,9.576,9.636,9.555,9.636z"/>
					<path fill="#D3D3D3" d="M9.781,9.677c-0.021,0-0.041-0.018-0.041-0.041V9.248c0-0.022,0.02-0.041,0.041-0.041
						c0.022,0,0.041,0.018,0.041,0.041v0.389C9.822,9.659,9.804,9.677,9.781,9.677z"/>
				</g>
			</g>
		</g>
	</g>
</g>
</svg>

                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    
    <div class="featured-section" data="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Featured Categories</h2>
                    
                    <div class="featured-list-cover">
                        <div class="featured-table">
                            <div class="featured-data">
                               <a href="#"> <figure>
                                   <svg  id="featured-icon-1" x="0px" y="0px"
	  viewBox="0 0 1501.586 1539.78">
<g>
	<path  d="M1501.586,858.257c-0.073-64.44-0.041-128.881-0.045-193.321c0-15.737-10.19-26.017-25.945-26.067
		c-16.904-0.055-33.81-0.013-50.714-0.014c-6.105,0-6.111-0.001-6.111-5.967c-0.001-78.022,0-156.045,0-234.067
		c0-0.723,0.071-1.453-0.01-2.166c-0.296-2.602,0.752-3.627,3.428-3.523c3.743,0.146,7.522,0.13,11.184-0.868
		c12.223-3.334,19.604-14.371,18.05-26.916c-1.507-12.158-11.44-21.105-23.947-21.25c-13.002-0.151-26.007-0.095-39.01-0.003
		c-2.604,0.018-3.85-0.48-4.021-3.486c-0.63-11.098-2.307-22.093-4.494-32.973c-11.243-55.903-35.264-105.658-73.13-148.338
		c-57.225-64.5-129.02-100.734-214.88-108.944c-2.491-0.238-3.138-1.02-3.102-3.364c0.114-7.511,0.085-15.026,0.032-22.539
		c-0.098-13.6-10.986-24.409-24.566-24.452c-13.708-0.043-24.657,10.536-24.848,24.126c-0.105,7.513-0.103,15.027,0.004,22.539
		c0.033,2.424-0.439,3.491-3.247,3.706c-15.545,1.189-30.924,3.606-46.076,7.279c-72.816,17.651-132.797,55.691-179.3,114.378
		c-39.059,49.291-61.357,105.543-66.959,168.271c-0.272,3.045-1.315,3.837-4.216,3.811c-13.147-0.119-26.299-0.196-39.443,0.033
		c-9.465,0.165-16.538,4.834-20.876,13.147c-4.264,8.17-3.864,16.471,1.019,24.302c5.753,9.228,14.672,12.082,24.976,11.529
		c3.198-0.171,4.188,0.803,4.184,4.092c-0.086,79.178-0.084,158.356-0.006,237.535c0.003,3.161-0.755,4.188-4.086,4.182
		c-55.049-0.105-110.098-0.07-165.147-0.107c-1.01,0-2.316,0.642-3.164-0.93c8.291-11.483,14.82-23.936,18.819-37.639
		c1-3.427,1.029-8.007,3.304-9.959c2.551-2.189,7.197-0.595,10.928-0.695c12.505-0.335,23.171-10.377,23.761-22.474
		c0.673-13.811-8.256-24.894-21.459-26.278c-10.222-1.073-20.5-0.217-30.749-0.468c-1.465-0.036-3.074,0.419-4.602-0.725
		c4.088-5.901,7.852-11.685,10.938-17.885c3.088-6.202,5.748-12.566,7.708-19.215c1.05-3.561,1.066-8.261,3.415-10.373
		c2.448-2.202,7.186-0.51,10.918-0.689c12.383-0.594,22.856-10.126,23.783-21.688c1.089-13.583-6.646-24.159-19.597-27.05
		c-3.168-0.707-6.316-0.56-9.48-0.575c-9.162-0.045-18.323-0.016-28.291-0.016c5.483-7.628,9.871-14.861,13.436-22.579
		c3.64-7.879,6.383-16.056,8.297-24.504c0.469-2.069,1.886-1.845,3.286-1.892c3.319-0.11,6.654-0.01,9.958-0.288
		c13.623-1.143,22.952-11.929,22.464-25.833c-0.443-12.615-11.016-22.772-24.097-22.976c-8.378-0.13-16.76-0.034-25.14-0.038
		c-2.498-0.002-4.996,0-8.099,0c1.04-1.628,1.541-2.483,2.108-3.291c7.432-10.578,13.125-22.019,16.958-34.368
		c1.146-3.691,1.039-8.665,3.478-10.824c2.711-2.401,7.74-0.623,11.754-0.786c15.128-0.612,26.371-15.88,22.41-30.53
		c-3.223-11.921-12.671-18.693-26.339-18.695c-163.414-0.015-326.828-0.009-490.241-0.008c-0.867,0-1.736-0.01-2.6,0.05
		c-13.824,0.949-23.358,10.194-24.284,23.534c-0.819,11.79,7.666,22.777,19.91,25.192c3.77,0.743,7.767,0.499,11.654,0.423
		c2.662-0.051,3.943,0.472,4.65,3.518c3.589,15.461,10.022,29.709,19.257,42.666c0.59,0.827,1.824,1.581,0.931,3.119
		c-5.274,0-10.615-0.004-15.955,0c-5.491,0.003-10.983-0.077-16.471,0.04c-11.871,0.253-21.971,8.949-23.594,20.195
		c-1.849,12.81,4.946,23.9,16.912,27.67c4.786,1.508,9.714,1.233,14.605,1.17c2.583-0.034,3.67,0.707,4.312,3.452
		c3.612,15.462,10.074,29.691,19.261,42.672c0.534,0.755,1.581,1.364,1.228,2.561c-0.146,0.087-0.259,0.212-0.373,0.213
		c-10.688,0.055-21.377-0.019-32.062,0.173c-12.99,0.234-23.059,9.944-24.208,23.08c-1.054,12.06,7.512,22.997,19.865,25.62
		c4.175,0.887,8.345,0.544,12.516,0.549c2.284,0.001,3.14,0.697,3.684,3.042c3.623,15.618,10.093,29.995,19.402,43.077
		c0.466,0.655,1.321,1.213,0.944,2.361c-1.543,0.895-3.292,0.409-4.954,0.449c-9.817,0.234-19.663-0.564-29.453,0.412
		c-12.461,1.242-21.276,10.698-22.074,23.268c-0.723,11.384,7.156,21.776,18.746,24.855c4.424,1.176,8.907,0.588,13.36,0.624
		c2.419,0.02,3.441,0.665,4.032,3.221c3.61,15.617,10.068,29.997,19.393,43.07c0.542,0.759,1.495,1.44,1.075,3.027
		c-1.457,0-2.996-0.001-4.534,0c-26.007,0.009-52.016-0.087-78.022,0.073c-13.229,0.083-23.862,10.941-23.872,24.162
		C-0.017,728.831,0,794.573,0.021,860.313c0.002,6.343,2.375,11.801,6.678,16.428c6.001,6.455,13.649,7.769,22.081,7.768
		c404.272-0.073,808.544-0.063,1212.816-0.066c1.878,0,3.757-0.005,5.634-0.081c15.911-0.648,26.971-16.321,22.263-31.533
		c-3.506-11.33-12.663-17.419-26.32-17.42c-150.12-0.007-300.242-0.006-450.363-0.004c-245.915,0-491.83,0.002-737.746,0
		c-5.593,0-5.595-0.012-5.595-5.563c-0.001-45.225-0.017-90.449,0.016-135.672c0.005-6.817-1.095-6.104,6.307-6.104
		c260.509-0.014,521.017-0.012,781.525-0.012c203.003,0,406.006-0.003,609.009,0.007c6.729,0,5.74-0.496,5.744,5.809
		c0.026,45.513-0.034,91.026,0.099,136.54c0.011,3.881-0.882,5.118-4.951,5.091c-26.729-0.186-53.459-0.108-80.189-0.086
		c-8.233,0.007-16.49-0.268-24.695,0.242c-15.152,0.943-25.545,16.148-21.379,30.74c3.242,11.356,12.243,17.991,24.949,18.023
		c30.631,0.076,61.262,0.008,91.893,0.042c6.527,0.007,5.65-0.803,5.65,5.844c0.017,164.57,0.014,329.14,0.014,493.709
		c0,7.535,0.026,7.337-7.455,6.327c-23.009-3.102-44.367-10.909-64.665-21.991c-13.914-7.596-27.706-15.442-42.208-21.912
		c-27.066-12.075-55.48-18.035-85.04-19.332c-28.151-1.234-55.922,0.734-83.239,7.948c-23.622,6.239-45.253,17.061-66.268,29.141
		c-28.07,16.137-57.77,26.492-90.403,27.747c-17.807,0.684-35.494,0.116-53.101-2.704c-22.368-3.583-42.768-12.396-62.437-23.253
		c-14.507-8.008-29.034-15.97-44.382-22.345c-28.951-12.025-59.289-16.666-90.387-16.959c-24.754-0.233-49.229,2.199-73.202,8.886
		c-22.969,6.407-44.068,16.974-64.591,28.744c-27.951,16.032-57.51,26.325-89.994,27.604c-24.513,0.967-48.721-0.303-72.455-7.083
		c-18.885-5.395-35.937-14.753-52.969-24.162c-20.108-11.109-40.762-20.885-63.18-26.462c-26.957-6.709-54.322-8.46-81.992-7.009
		c-24.644,1.294-48.583,5.749-71.702,14.569c-19.481,7.432-37.404,17.931-55.697,27.706c-20.399,10.901-41.854,18.438-64.933,21.165
		c-4.127,0.488-5.182-0.35-5.178-4.693c0.133-141.451,0.11-282.904,0.109-424.355c0-1.444,0.028-2.891-0.007-4.335
		c-0.368-14.948-15.147-26.457-29.701-23.14C16.17,936.9,8.656,946.276,8.648,959.046c-0.035,57.216-0.016,114.434-0.016,171.649
		c0,94.927-0.011,189.854,0.012,284.782c0.004,15.026,10.08,25.857,24.819,25.981c15.453,0.129,30.862-1.043,46.138-3.598
		c9.317-1.559,18.482-3.806,27.915-6.438c0,2.074,0,3.654,0,5.232c0.001,26.152-0.076,52.306,0.03,78.456
		c0.066,16.262,15.112,27.735,30.886,23.773c11.036-2.772,18.496-12.081,18.525-23.656c0.088-33.81,0.038-67.62,0.045-101.429
		c0-1.971-0.252-3.735,2.086-5.095c30.229-17.564,61.691-30.716,97.407-32.415c39.136-1.861,76.438,3.316,111.174,22.577
		c16.502,9.15,32.961,18.421,50.476,25.636c26.888,11.074,54.972,15.954,83.888,16.792c26.97,0.782,53.583-1.532,79.699-8.715
		c23.988-6.596,45.79-18.042,67.267-30.146c24.021-13.535,49.298-23.006,76.95-25.438c19.343-1.704,38.639-1.494,57.916,1.021
		c24.104,3.143,46.149,11.963,67.255,23.656c14.742,8.168,29.493,16.349,45.136,22.763c24.807,10.169,50.661,15.212,77.381,16.548
		c28.731,1.436,57.086-0.584,84.958-7.989c23.895-6.348,45.713-17.487,67.006-29.646c27.474-15.689,56.498-25.691,88.381-27.045
		c23.501-0.999,46.715,0.105,69.572,6.019c20.597,5.326,38.975,15.589,57.482,25.606c2.602,1.407,3.602,2.953,3.591,5.976
		c-0.118,32.798-0.081,65.598-0.059,98.396c0.002,2.731-0.166,5.47,0.512,8.187c3.116,12.512,14.61,20.629,27.156,19.112
		c12.586-1.522,21.767-11.99,21.788-25.021c0.045-26.006,0.014-52.015,0.015-78.022c0-1.576,0-3.154,0-4.965
		c1.125,0.228,1.959,0.33,2.754,0.564c21.185,6.235,42.921,8.615,64.899,9.313c4.483,0.143,8.967,0.238,13.332-0.989
		c11.188-3.146,17.889-12.694,17.89-25.537c0.009-129.17,0.006-258.341,0.006-387.511c0.001-48.259-0.003-96.517,0.012-144.775
		c0.001-1.959-0.271-3.844,1.487-5.569C1499.647,871.959,1501.594,865.557,1501.586,858.257z M141.063,294.806
		c120.606-0.003,241.212-0.003,361.818-0.003c1.279,0,2.559,0,4.287,0c-3.025,9.108-7.688,16.798-13.754,23.62
		c-15.38,17.296-34.839,25.593-57.856,25.614c-57.631,0.05-115.262,0.017-172.893,0.016c-18.633,0-37.279,0.454-55.895-0.107
		c-31.724-0.958-54.72-15.868-68.374-44.717C136.342,294.891,136.475,294.806,141.063,294.806z M141.789,393.175
		c111.687-0.002,223.374,0,335.062,0c9.942,0,19.885,0,30.34,0c-4.07,11.542-10.339,20.93-18.801,28.771
		c-14.475,13.414-31.635,20.223-51.451,20.218c-77.011-0.02-154.024,0.341-231.031-0.19c-31.323-0.216-53.763-15.874-67.334-44.094
		C136.353,393.264,136.497,393.176,141.789,393.175z M466.458,632.836c-9.367,4.106-19.254,5.994-29.451,5.999
		c-76.702,0.036-153.404,0.061-230.107-0.002c-30.255-0.024-57.825-18.355-68.89-45.404c-1.161-2.839-1.186-3.903,2.458-3.9
		c121.337,0.08,242.674,0.066,364.011,0.072c0.717,0,1.435,0.073,2.849,0.151C499.384,610.093,485.904,624.311,466.458,632.836z
		 M450.96,539.236c-4.834,1.012-9.742,1.15-14.649,1.151c-76.271,0.014-152.542,0.193-228.811-0.079
		c-32.295-0.115-55.239-15.611-69.224-44.632c-1.569-3.255-1.31-4.251,2.666-4.248c120.761,0.088,241.522,0.072,362.283,0.072
		c1.147,0,2.295,0,4.235,0C496.504,517.688,478.043,533.57,450.96,539.236z M793.948,337.836
		c5.009-44.423,20.129-85.177,45.785-121.685c42.851-60.971,100.948-99.185,174.304-113.055
		c140.565-26.58,277.068,59.938,313.566,198.244c3.427,12.984,5.586,26.189,7.237,39.499c0.316,2.552-0.376,3.485-2.894,3.229
		c-1.145-0.116-2.311-0.018-3.466-0.018c-88.258,0.001-176.518,0.001-264.775,0.001c-88.114,0-176.229,0-264.344,0
		C793.178,344.053,793.247,344.059,793.948,337.836z M1363.677,638.95c-99.982-0.122-199.964-0.095-299.945-0.095
		c-99.693,0-199.386,0.001-299.078-0.001c-5.495,0-5.503-0.004-5.503-5.663c-0.002-78.165-0.002-156.33,0-234.494
		c0-5.517,0.01-5.522,5.677-5.522c199.53-0.001,399.06-0.001,598.59-0.001c5.685,0,5.691,0.007,5.692,5.484
		c0.001,78.309-0.043,156.618,0.113,234.927C1369.231,638.113,1367.916,638.955,1363.677,638.95z"/>
	<path fill="#0093C8" d="M1253.707,1220.152c-0.044-13.7-11.223-24.736-24.882-24.565c-13.391,0.167-24.555,11.331-24.606,24.605
		c-0.054,13.481,11.244,24.717,24.855,24.717C1242.832,1244.907,1253.75,1233.933,1253.707,1220.152z"/>
	<path fill="#0093C8" d="M1352.666,1121.917c-0.041-13.808-10.883-24.464-24.851-24.42c-13.517,0.043-24.53,10.925-24.657,24.364
		c-0.125,13.429,11.187,24.72,24.818,24.769C1341.72,1146.678,1352.706,1135.681,1352.666,1121.917z"/>
	<path fill="#0093C8" d="M1293.23,442.166c-152.129-0.005-304.26-0.003-456.39-0.002c-1.012,0-2.025-0.026-3.033,0.029
		c-16.715,0.926-27.793,17.689-21.955,33.213c3.801,10.105,12.956,16.087,24.786,16.088c76.137,0.012,152.274,0.006,228.412,0.006
		c67.18,0,134.359,0,201.539,0c9.535,0,19.074,0.155,28.605-0.039c17.493-0.356,29.111-17.388,22.945-33.427
		C1314.265,447.952,1305.213,442.166,1293.23,442.166z"/>
</g>
</svg>

                                
                                </figure>
                                <strong>Catering</strong>
                                   </a>
                            </div>
                            
                            <div class="featured-data">
                               <a href="#"> <figure>
                                <svg  id="featured-icon-2" x="0px" y="0px"
	  viewBox="0 0 266.246 223.332" >
<g>
	<path d="M238.719,0H27.531L0,60.972v1.11C0,75.898,11.137,87.367,25.68,89.57v133.762h27.207V115.257h54.636
		v108.075H238.41V89.847c15.59-1.332,27.836-13.269,27.836-27.758v-1.113L238.719,0z M117.805,213.043V104.968H42.602v108.075
		h-6.637V89.57c0.461-0.07,0.91-0.191,1.367-0.281c0.508-0.106,1.02-0.192,1.516-0.317c0.738-0.183,1.441-0.41,2.152-0.64
		c0.75-0.243,1.484-0.508,2.211-0.801c0.633-0.258,1.269-0.512,1.879-0.805c0.512-0.246,0.988-0.523,1.48-0.793
		c0.492-0.265,0.973-0.531,1.442-0.82c0.488-0.305,0.957-0.617,1.418-0.945c0.437-0.317,0.871-0.629,1.293-0.957
		c0.437-0.344,0.875-0.696,1.289-1.059c0.422-0.367,0.816-0.75,1.215-1.145c0.375-0.363,0.753-0.722,1.109-1.105
		c0.504-0.543,0.961-1.121,1.414-1.699c0.184-0.239,0.402-0.453,0.582-0.699c0.363,0.503,0.797,0.96,1.195,1.437
		c0.352,0.418,0.668,0.855,1.043,1.25c0.207,0.223,0.45,0.406,0.66,0.617c0.622,0.625,1.243,1.238,1.922,1.813
		c0.172,0.14,0.368,0.261,0.543,0.398c0.754,0.602,1.528,1.192,2.344,1.735c0.145,0.097,0.309,0.164,0.457,0.261
		c0.875,0.543,1.762,1.078,2.695,1.543c0.379,0.188,0.786,0.328,1.176,0.504c0.735,0.328,1.457,0.676,2.227,0.957
		c0.519,0.184,1.066,0.313,1.601,0.473c1.864,0.57,3.789,1.027,5.797,1.262c1.289,0.148,2.602,0.226,3.938,0.226
		c10.664,0,20.078-4.953,25.597-12.469c5.512,7.516,14.93,12.469,25.598,12.469s20.082-4.953,25.598-12.469
		c5.512,7.516,14.934,12.469,25.602,12.469c1.332,0,2.648-0.074,3.934-0.226c0.371-0.047,0.719-0.133,1.082-0.188
		c0.914-0.137,1.82-0.27,2.707-0.48c0.082-0.016,0.152-0.051,0.238-0.067c1.148-0.281,2.277-0.605,3.367-1.004
		c0.074-0.023,0.145-0.066,0.219-0.097c5.738-2.118,10.629-5.762,14.031-10.391c0.148,0.207,0.352,0.371,0.516,0.57
		c0.77,0.992,1.617,1.938,2.527,2.832c0.332,0.325,0.664,0.645,1.016,0.957c3.871,3.473,8.723,6.032,14.176,7.254v123.899H117.805
		V213.043z M235.762,79.675l-2.086-0.164c-2.652-0.211-5.137-0.832-7.383-1.793c-0.008-0.004-0.016-0.011-0.027-0.015
		c-1.047-0.453-2.035-0.981-2.965-1.578c-0.227-0.145-0.434-0.309-0.648-0.461c-0.711-0.493-1.395-1.008-2.023-1.575
		c-0.367-0.339-0.691-0.714-1.027-1.074c-0.43-0.457-0.867-0.91-1.238-1.398c-0.402-0.535-0.73-1.113-1.059-1.676
		c-0.238-0.402-0.508-0.781-0.711-1.199c-0.332-0.715-0.57-1.465-0.801-2.219c-0.105-0.332-0.258-0.648-0.328-0.992
		c-0.266-1.117-0.406-2.266-0.406-3.445h-10.285c0,9.71-9.172,17.613-20.453,17.613s-20.457-7.903-20.457-17.613h-10.285
		c0,9.71-9.176,17.613-20.457,17.613c-11.277,0-20.457-7.903-20.457-17.613h-10.281c0,9.71-9.172,17.613-20.453,17.613
		c-11.282,0-20.453-7.903-20.457-17.621l-10.285,0.008c0,1.207-0.145,2.386-0.418,3.531c-1.903,7.992-10.133,14.039-19.969,14.07
		h-0.18c-10.82-0.051-19.687-7.371-20.305-16.574l23.852-52.832h197.91l23.852,52.832C255.309,72.277,246.52,79.566,235.762,79.675
		L235.762,79.675z M121.875,181.238H224.27v-76.267H121.875V181.238z M132.156,115.257h81.832v55.696h-81.832V115.257z
		 M132.156,115.257"/>
</g>
</svg>

                                </figure>
                                <strong>Venue</strong>
                                   </a>
                            </div>
                            
                            <div class="featured-data">
                               <a href="#"> <figure>
                                <svg  id="featured-icon-3"  x="0px" y="0px"
	 viewBox="0 0 595.717 392.881" >
<g>
	<g>
		<path  d="M388.599,51.68l-49.203-49.2c-1.68-1.679-3.359-2.48-5.84-2.48h-276c-2.477,0-4.16,0.801-5.84,2.48
			L2.517,51.68c-1.758,1.199-2.719,3.601-2.481,6.16v0.48c0,27.2,10.801,51.602,27.52,67.2v266.402h336.96V125.52
			c16.723-15.598,27.52-40,27.52-67.2C391.958,58.32,391.958,55.359,388.599,51.68L388.599,51.68z M61.716,16.641h268.563
			l32.559,32.558H28.439L61.716,16.641z M250.196,65.84c-3.359,34.16-26.719,60.879-54.238,60.879
			c-28.32,0-51.68-26.719-54.242-60.879H250.196z M16.677,65.84h108.402c-3.363,34.16-26.723,60.879-54.242,60.879
			C42.517,126.719,19.157,100,16.677,65.84L16.677,65.84z M195.958,375.199H95.876V193.441h100.082V375.199z M347.876,375.199
			H212.677v-198.48H79.239v198.48H44.196V137.121c8.243,4,17.282,6.238,26.723,6.238c27.117,0,50.637-18.32,62.559-45.121
			c11.918,26.801,35.441,45.121,62.558,45.121c27.121,0,50.641-18.32,62.563-45.121c11.918,26.801,35.438,45.121,62.559,45.121
			c9.441,0,18.48-2.238,26.719-6.238V375.199z M321.079,126.719c-28.32,0-51.684-26.719-54.242-60.879h108.402
			C371.958,100,348.599,126.719,321.079,126.719L321.079,126.719z M321.079,126.719"/>
	</g>
	<rect x="258.517" y="185.039"  width="49.199" height="16.641"/>
	<rect x="258.517" y="250.16"  width="49.199" height="16.641"/>
</g>
<g>
	<path  d="M595.717,300.82c-0.01-8.706-0.006-17.409-0.006-26.114c0-2.125-1.376-3.515-3.505-3.521
		c-2.283-0.009-4.567-0.002-6.85-0.002c-0.826,0-0.826,0-0.826-0.807c0-10.539,0-21.079,0-31.618c0-0.098,0.009-0.195-0.001-0.292
		c-0.041-0.353,0.101-0.491,0.463-0.476c0.505,0.02,1.016,0.017,1.511-0.117c1.65-0.45,2.648-1.941,2.438-3.636
		c-0.204-1.643-1.545-2.852-3.233-2.871c-1.757-0.021-3.514-0.014-5.271,0c-0.352,0.002-0.52-0.064-0.543-0.471
		c-0.085-1.5-0.312-2.985-0.607-4.454c-1.519-7.552-4.764-14.272-9.878-20.039c-7.731-8.712-17.429-13.607-29.027-14.715
		c-0.335-0.033-0.423-0.138-0.419-0.455c0.016-1.016,0.012-2.028,0.006-3.045c-0.015-1.835-1.484-3.297-3.319-3.303
		c-1.853-0.007-3.331,1.423-3.356,3.259c-0.014,1.016-0.014,2.03,0.001,3.044c0.004,0.329-0.06,0.473-0.438,0.501
		c-2.101,0.16-4.178,0.486-6.226,0.983c-9.835,2.384-17.937,7.521-24.219,15.45c-5.277,6.658-8.288,14.257-9.045,22.73
		c-0.036,0.41-0.179,0.519-0.57,0.514c-1.775-0.016-3.552-0.026-5.328,0.005c-1.278,0.023-2.233,0.652-2.819,1.776
		c-0.577,1.104-0.522,2.225,0.138,3.282c0.777,1.247,1.98,1.632,3.373,1.558c0.434-0.023,0.565,0.108,0.565,0.553
		c-0.012,10.695-0.012,21.391,0,32.086c0,0.428-0.103,0.566-0.552,0.565c-7.437-0.015-14.873-0.009-22.309-0.015
		c-0.137,0-0.313,0.086-0.428-0.125c1.12-1.553,2.002-3.233,2.541-5.085c0.137-0.463,0.139-1.081,0.447-1.345
		c0.346-0.295,0.973-0.081,1.477-0.094c1.689-0.045,3.13-1.402,3.209-3.036c0.091-1.865-1.115-3.363-2.898-3.55
		c-1.381-0.145-2.769-0.029-4.154-0.063c-0.196-0.006-0.415,0.058-0.62-0.098c0.552-0.798,1.062-1.579,1.478-2.416
		c0.416-0.838,0.775-1.697,1.041-2.597c0.142-0.48,0.143-1.114,0.46-1.4c0.332-0.296,0.973-0.068,1.477-0.092
		c1.672-0.081,3.086-1.37,3.212-2.931c0.146-1.835-0.898-3.263-2.647-3.653c-0.428-0.096-0.854-0.077-1.28-0.078
		c-1.237-0.007-2.476-0.002-3.821-0.002c0.739-1.031,1.333-2.009,1.814-3.05c0.492-1.065,0.862-2.17,1.121-3.311
		c0.063-0.279,0.254-0.248,0.443-0.256c0.448-0.015,0.899-0.001,1.347-0.038c1.839-0.155,3.1-1.611,3.034-3.49
		c-0.061-1.703-1.489-3.077-3.256-3.103c-1.131-0.018-2.265-0.007-3.396-0.007c-0.337,0-0.675,0-1.094,0
		c0.14-0.219,0.208-0.334,0.285-0.443c1.003-1.429,1.773-2.975,2.29-4.643c0.154-0.498,0.14-1.171,0.471-1.463
		c0.365-0.325,1.044-0.083,1.587-0.105c2.043-0.083,3.563-2.146,3.026-4.123c-0.435-1.612-1.71-2.527-3.557-2.527
		c-22.074-0.001-44.148-0.001-66.224-0.001c-0.116,0-0.233-0.001-0.35,0.008c-1.868,0.129-3.156,1.377-3.28,3.179
		c-0.111,1.592,1.035,3.077,2.689,3.402c0.509,0.101,1.049,0.067,1.574,0.058c0.358-0.007,0.532,0.064,0.628,0.476
		c0.485,2.088,1.354,4.013,2.602,5.763c0.078,0.111,0.245,0.215,0.125,0.421c-0.713,0-1.434,0-2.156,0
		c-0.74,0-1.482-0.01-2.223,0.007c-1.604,0.033-2.969,1.207-3.188,2.728c-0.25,1.731,0.668,3.229,2.285,3.736
		c0.646,0.204,1.312,0.168,1.972,0.16c0.35-0.005,0.496,0.095,0.584,0.466c0.487,2.088,1.359,4.01,2.602,5.763
		c0.071,0.103,0.213,0.185,0.165,0.347c-0.019,0.012-0.035,0.029-0.05,0.029c-1.445,0.007-2.888-0.003-4.332,0.022
		c-1.754,0.032-3.114,1.343-3.269,3.119c-0.144,1.629,1.013,3.105,2.683,3.46c0.564,0.12,1.127,0.073,1.69,0.075
		c0.309,0,0.424,0.094,0.498,0.411c0.49,2.108,1.363,4.05,2.619,5.818c0.064,0.088,0.18,0.163,0.129,0.318
		c-0.209,0.121-0.445,0.055-0.669,0.061c-1.326,0.031-2.656-0.076-3.979,0.056c-1.683,0.169-2.873,1.445-2.982,3.143
		c-0.095,1.538,0.968,2.942,2.534,3.357c0.598,0.159,1.203,0.081,1.805,0.085c0.327,0.003,0.465,0.09,0.544,0.436
		c0.488,2.109,1.361,4.052,2.619,5.817c0.073,0.102,0.202,0.193,0.146,0.409c-0.196,0-0.405,0-0.612,0
		c-3.513,0.001-7.026-0.013-10.539,0.01c-1.787,0.01-3.223,1.478-3.224,3.264c-0.008,8.879-0.005,17.761-0.003,26.642
		c0,0.855,0.322,1.594,0.902,2.22c0.811,0.872,1.844,1.049,2.983,1.049c54.61-0.011,109.219-0.009,163.829-0.009
		c0.252,0,0.507-0.002,0.761-0.012c2.149-0.088,3.645-2.205,3.007-4.259c-0.474-1.531-1.711-2.354-3.557-2.354
		c-20.277-0.002-40.556-0.002-60.835,0c-33.218,0-66.437,0-99.655,0c-0.756,0-0.756-0.003-0.756-0.753
		c0-6.107-0.002-12.217,0.004-18.326c0-0.921-0.149-0.824,0.851-0.824c35.189-0.003,70.38-0.003,105.569-0.003
		c27.422,0,54.844,0,82.265,0.003c0.91,0,0.776-0.068,0.777,0.784c0.003,6.147-0.006,12.295,0.014,18.444
		c0.002,0.524-0.12,0.691-0.67,0.688c-3.609-0.026-7.221-0.016-10.831-0.011c-1.112,0-2.228-0.037-3.337,0.031
		c-2.046,0.127-3.45,2.182-2.887,4.152c0.437,1.533,1.653,2.431,3.37,2.435c4.138,0.012,8.275,0,12.413,0.007
		c0.883,0,0.763-0.11,0.763,0.789c0.002,22.229,0.002,44.461,0.002,66.689c0,1.019,0.003,0.992-1.008,0.854
		c-3.107-0.419-5.992-1.473-8.734-2.97c-1.879-1.025-3.742-2.086-5.701-2.959c-3.656-1.632-7.494-2.438-11.486-2.612
		c-3.804-0.167-7.556,0.099-11.245,1.072c-3.19,0.844-6.112,2.307-8.951,3.938c-3.793,2.18-7.805,3.578-12.212,3.748
		c-2.407,0.093-4.795,0.016-7.173-0.365c-3.022-0.483-5.777-1.675-8.435-3.142c-1.96-1.081-3.922-2.156-5.995-3.018
		c-3.91-1.625-8.01-2.252-12.21-2.292c-3.344-0.029-6.649,0.298-9.888,1.202c-3.103,0.864-5.953,2.292-8.726,3.883
		c-3.775,2.165-7.769,3.556-12.156,3.728c-3.311,0.132-6.582-0.041-9.787-0.956c-2.551-0.729-4.854-1.993-7.155-3.264
		c-2.717-1.501-5.506-2.821-8.535-3.574c-3.641-0.907-7.336-1.144-11.074-0.947c-3.329,0.176-6.563,0.777-9.686,1.968
		c-2.633,1.003-5.054,2.423-7.524,3.743c-2.755,1.473-5.653,2.49-8.771,2.858c-0.558,0.065-0.7-0.046-0.7-0.634
		c0.021-19.107,0.016-38.216,0.016-57.323c0-0.194,0.005-0.39,0-0.585c-0.05-2.02-2.047-3.574-4.014-3.125
		c-1.649,0.375-2.664,1.642-2.664,3.367c-0.006,7.729-0.004,15.459-0.004,23.187c0,12.822-0.001,25.646,0.002,38.469
		c0.002,2.029,1.362,3.492,3.354,3.51c2.087,0.018,4.169-0.143,6.231-0.486c1.26-0.211,2.497-0.515,3.771-0.87
		c0,0.28,0,0.493,0,0.706c0,3.534-0.011,7.066,0.004,10.599c0.009,2.196,2.041,3.747,4.173,3.212
		c1.489-0.376,2.498-1.632,2.503-3.197c0.011-4.566,0.004-9.133,0.005-13.699c0-0.267-0.033-0.505,0.282-0.689
		c4.084-2.371,8.333-4.148,13.157-4.378c5.286-0.251,10.326,0.448,15.018,3.05c2.229,1.235,4.452,2.489,6.818,3.463
		c3.632,1.496,7.427,2.155,11.332,2.268c3.643,0.106,7.238-0.206,10.766-1.177c3.24-0.891,6.186-2.438,9.086-4.072
		c3.245-1.828,6.66-3.107,10.396-3.436c2.612-0.229,5.22-0.202,7.823,0.139c3.256,0.423,6.233,1.615,9.084,3.194
		c1.992,1.104,3.985,2.209,6.098,3.074c3.351,1.374,6.844,2.056,10.453,2.236c3.88,0.193,7.711-0.079,11.476-1.08
		c3.229-0.856,6.175-2.361,9.052-4.004c3.711-2.119,7.633-3.471,11.939-3.654c3.173-0.134,6.309,0.016,9.396,0.814
		c2.783,0.719,5.266,2.105,7.765,3.458c0.352,0.19,0.487,0.398,0.484,0.809c-0.015,4.429-0.01,8.859-0.007,13.291
		c0,0.368-0.022,0.738,0.069,1.106c0.421,1.689,1.974,2.785,3.668,2.581c1.701-0.206,2.94-1.62,2.942-3.382
		c0.007-3.511,0.003-7.024,0.003-10.539c0-0.213,0-0.425,0-0.67c0.151,0.031,0.264,0.046,0.372,0.076
		c2.862,0.843,5.798,1.164,8.767,1.258c0.605,0.021,1.21,0.032,1.801-0.133c1.511-0.426,2.416-1.715,2.416-3.449
		c0.002-17.45,0.002-34.897,0.002-52.346c0-6.519-0.002-13.037,0.001-19.556c0-0.267-0.036-0.521,0.2-0.754
		C595.456,302.67,595.718,301.805,595.717,300.82z M411.937,224.709c16.289-0.002,32.583-0.002,48.875-0.002
		c0.172,0,0.345,0,0.578,0c-0.408,1.23-1.039,2.269-1.857,3.19c-2.078,2.336-4.707,3.459-7.815,3.461
		c-7.786,0.006-15.57,0.001-23.354,0.001c-2.517,0-5.036,0.063-7.552-0.015c-4.284-0.128-7.391-2.143-9.236-6.039
		C411.297,224.719,411.315,224.709,411.937,224.709z M412.034,237.996c15.087,0,30.174,0,45.261,0c1.343,0,2.686,0,4.098,0
		c-0.549,1.559-1.396,2.826-2.539,3.886c-1.956,1.813-4.273,2.731-6.951,2.731c-10.401-0.002-20.806,0.045-31.207-0.025
		c-4.232-0.03-7.262-2.146-9.096-5.956C411.301,238.007,411.319,237.996,412.034,237.996z M455.891,270.37
		c-1.265,0.554-2.6,0.809-3.979,0.809c-10.36,0.006-20.721,0.01-31.084,0c-4.086-0.003-7.81-2.479-9.305-6.132
		c-0.157-0.385-0.161-0.528,0.332-0.528c16.391,0.012,32.78,0.009,49.17,0.011c0.099,0,0.195,0.011,0.387,0.021
		C460.338,267.297,458.518,269.217,455.891,270.37z M453.798,257.726c-0.653,0.138-1.317,0.154-1.979,0.156
		c-10.303,0.002-20.606,0.024-30.907-0.012c-4.363-0.015-7.464-2.108-9.353-6.028c-0.212-0.44-0.176-0.574,0.361-0.573
		c16.313,0.012,32.625,0.009,48.937,0.009c0.154,0,0.312,0,0.573,0C459.949,254.815,457.455,256.96,453.798,257.726z
		 M500.128,230.52c0.676-5.999,2.719-11.505,6.186-16.437c5.788-8.237,13.637-13.397,23.545-15.271
		c18.987-3.592,37.426,8.096,42.356,26.778c0.463,1.753,0.756,3.537,0.978,5.335c0.043,0.345-0.05,0.471-0.391,0.438
		c-0.154-0.016-0.312-0.004-0.469-0.004c-11.922,0-23.844,0-35.767,0c-11.901,0-23.804,0-35.707,0
		C500.024,231.359,500.033,231.361,500.128,230.52z M577.089,271.195c-13.507-0.017-27.012-0.013-40.518-0.013
		c-13.467,0-26.934,0-40.399,0c-0.742,0-0.743,0-0.743-0.765c-0.002-10.56-0.002-21.117,0-31.676c0-0.746,0.001-0.746,0.767-0.746
		c26.952,0,53.905,0,80.857,0c0.768,0,0.77,0,0.77,0.74c0,10.579-0.007,21.155,0.015,31.734
		C577.838,271.083,577.661,271.195,577.089,271.195z"/>
	<path  d="M562.232,349.704c-0.007-1.849-1.515-3.341-3.36-3.316c-1.809,0.021-3.316,1.528-3.323,3.322
		c-0.008,1.821,1.518,3.339,3.356,3.339C560.765,353.049,562.238,351.565,562.232,349.704z"/>
	<path  d="M575.6,336.436c-0.005-1.866-1.47-3.306-3.356-3.3c-1.825,0.006-3.313,1.476-3.33,3.292
		c-0.018,1.814,1.511,3.34,3.353,3.346C574.121,339.78,575.606,338.295,575.6,336.436z"/>
	<path  d="M567.571,244.613c-20.549-0.001-41.1,0-61.649,0c-0.138,0-0.272-0.005-0.409,0.003
		c-2.258,0.126-3.754,2.391-2.965,4.487c0.513,1.365,1.75,2.174,3.347,2.174c10.285,0.001,20.57,0,30.855,0
		c9.073,0,18.148,0,27.224,0c1.287,0,2.576,0.021,3.863-0.005c2.363-0.049,3.933-2.349,3.1-4.516
		C570.413,245.396,569.19,244.613,567.571,244.613z"/>
</g>
</svg>

                                </figure>
                                <strong>Venue with Catering</strong>
                                   </a>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                   
                    
                    
                </div>
                
                <div class="col-md-3 text-right">
                    <img src="images/featured-section-add.jpg" alt="featured-section add">
                </div>
            </div>
                 
        </div>
    </div>
    
    
    <div class="venue-service-providers" data="section">
        <div class="container">
            <h2>Venue Service Providers</h2>    
            
            <div class="row">
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/venue-service-provider-img-1.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/venue-service-provider-img-2.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/venue-service-provider-img-3.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/venue-service-provider-img-4.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                 
            </div>
            
            
        </div>
    </div>
    
    <div class="venue-service-providers catering-service-providers" data="section">
        <div class="container">
            <h2>Catering Service Providers</h2>    
            
            <div class="row">
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/catering-service-provider-img-1.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/catering-service-provider-img-2.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/catering-service-provider-img-3.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="provider-profile-post">
                        <figure style="background-image:url('images/venue-service-provider-img-1.jpg');">
                            <div class="figure-inner">
                            <figcaption><a href="#">View Profile</a></figcaption>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                                </div>
                        </figure>
                        
                        <div class="provider-profile-info">
                            <h4>James Anderson</h4>
                            <div class="location">
                                <p>los angeles</p>
                            </div>
                            <div class="rating">
                                <img src="images/rating.png">
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                 
            </div>
            
            
        </div>
    </div>
    
    <div class="testimonial-section" data="section">
        <div class="container">
            <h2>Testimonials</h2>
            
            
            <div class="testimonial-slider">
                <div class="owl-carousel owl-theme owl-testi-carousel">
                    <div class="item">
                        <div class="testimonial-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
dummy text ever since the when an unknown printer took a galley of type and scrambled</p>
                        </div>
                        <h5>Peter Jone <small>wedding planner</small></h5>
                    </div>
                    
                    <div class="item">
                        <div class="testimonial-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
dummy text ever since the when an unknown printer took a galley of type and scrambled</p>
                        </div>
                        <h5>Peter Jone <small>wedding planner</small></h5>
                    </div>
                  
                </div>
            </div>
            
            
        </div>
    </div>



<?php endwhile; ?>
<?php get_footer(); ?>