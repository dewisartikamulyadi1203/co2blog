<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	@media (min-width: 1200px){
		.container, .container-lg, .container-md, .container-sm, .container-xl {
		    max-width: 1140px;
		}
	}
	@media (min-width: 992px){
		.container, .container-lg, .container-md, .container-sm {
		    max-width: 960px;
		}
	}
	@media (min-width: 768px){
		.container, .container-md, .container-sm {
		    max-width: 720px;
		}
	}
	@media (min-width: 576px){
		.container, .container-sm {
		    max-width: 540px;
		}
	}
	@media (min-width: 992px){
		.col-lg-3 {
		    -ms-flex: 0 0 25%;
		    flex: 0 0 25%;
		    max-width: 25%;
		}
	}
	@media (min-width: 768px){
		.col-md-3 {
		    -ms-flex: 0 0 25%;
		    flex: 0 0 25%;
		    max-width: 25%;
		}
	}
	@media (min-width: 992px){
		.col-lg-7 {
		    -ms-flex: 0 0 58.333333%;
		    flex: 0 0 58.333333%;
		    max-width: 58.333333%;
		}
	}
	@media (min-width: 768px){
		.col-md-2 {
		    -ms-flex: 0 0 16.666667%;
		    flex: 0 0 16.666667%;
		    max-width: 16.666667%;
		}
	}
	@media (min-width: 992px){
		.col-lg-2 {
		    -ms-flex: 0 0 16.666667%;
		    flex: 0 0 16.666667%;
		    max-width: 16.666667%;
		}
	}

	*, ::after, ::before {
	    box-sizing: border-box;
	}
	a {
	    color: #007bff;
	    text-decoration: none;
	    cursor: pointer;
	    -webkit-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out;
	}
	a {
	    color: #007bff;
	    text-decoration: none;
	    background-color: transparent;
	}
	a:-webkit-any-link {
	    color: -webkit-link;
	    cursor: pointer;
	    text-decoration: underline;
	}
	body {
	    font-family: "Roboto",sans-serif;
	    font-weight: 300;
	}
/*	body {
	    margin: 0;
	    font-size: 1rem;
	    font-weight: 400;
	    line-height: 1.5;
	    color: #212529;
	    text-align: left;
	    background-color: #fff;
	}*/

	footer {
	    display: block;
	}

	.h5, h5, {
		margin-top: 0;
	    margin-bottom: .5rem;
	    font-size: 32px;
	    font-weight: 300;
	    line-height: 1.2;
	}

	i {
	    font-style: italic;
	}
	img {
	    vertical-align: middle;
	    border-style: none;
	}
	p {
	    margin-top: 0;
	    margin-bottom: 1rem;
	}

	table {
	    border-collapse: collapse;
	}

	table td {
	    font-size: .9rem;
	    font-weight: 300;
	}
	table th {
	    font-size: .9rem;
	    font-weight: 400;
	}
	tbody {
	    display: table-row-group;
	    vertical-align: middle;
	    border-color: inherit;
	}
	td {
	    display: table-cell;
	    vertical-align: inherit;
	}
	th {
	    text-align: inherit;
	}
/*	th {
	    display: table-cell;
	    vertical-align: inherit;
	    font-weight: bold;
	    text-align: -internal-center;
	}*/
	tr {
	    display: table-row;
	    vertical-align: inherit;
	    border-color: inherit;
	}




	.bg-dark{
		background-color: #2F2F2F !important;
	}
	.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
	    position: relative;
	    width: 100%;
	    padding-right: 15px;
	    padding-left: 15px;
	}
	.container {
	    width: 100%;
	    padding-right: 15px;
	    padding-left: 15px;
	    margin-right: auto;
	    margin-left: auto;
	}
	.d-inline-block {
	    display: inline-block!important;
	}
	.fa, .fas {
	    font-weight: 900;
	}
	.fa, .far, .fas {
	    font-family: "Font Awesome 5 Free";
	}
	.fa, .fab, .fad, .fal, .far, .fas {
	    -moz-osx-font-smoothing: grayscale;
	    -webkit-font-smoothing: antialiased;
	    display: inline-block;
	    font-style: normal;
	    font-variant: normal;
	    text-rendering: auto;
	    line-height: 1;
	}
	.facebook {
	    background-image: url(../img/icon/facebook.png);
	    background-repeat: no-repeat, repeat;
	    background-position: center;
	    background-size: contain;
	    height: 38px;
	    width: 44px;
	}
	.fa-map-marker-alt:before {
	    content: "\f3c5";
	}
	.fa-phone-alt:before {
	    content: "\f879";
	}
	.font-weight-bold {
	    font-weight: 700!important;
	}
	.linked-in {
	    background-image: url(../img/icon/linked-in.png);
	    background-repeat: no-repeat, repeat;
	    background-position: center;
	    background-size: contain;
	    height: 38px;
	    width: 44px;
	}
	.mb-0, .my-0 {
	    margin-bottom: 0!important;
	}
	.mb-2, .my-2 {
	    margin-bottom: .5rem!important;
	}
	.mt-4, .my-4 {
	    margin-top: 1.5rem!important;
	}
	.pb-5, .py-5 {
	    padding-bottom: 3rem!important;
	}
	.pt-5, .py-5 {
	    padding-top: 3rem!important;
	}
	.row {
	    display: flex;
	    justify-content: space-between;
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.table-responsive {
	    display: block;
	    /*width: 100%;
	    overflow-x: auto;*/
	}
	.text-uppercase {
	    text-transform: uppercase!important;
	}
	.text-white {
	    color: #fff!important;
	}
	.text-yellow {
	    color: #FFC731 !important;
	}


	/*#table-footer td {
	    width: 33% !important;
	}*/
    
	</style>
</head>
<body>

	<footer class="bg-dark">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="img/logo.png" width="192px" height="64px">
                        <p class="mt-4 text-yellow font-weight-bold">Monday - Friday : 9 AM - 7 PM (GMT+8)</p>
                    </div>
                    <div class="col-lg-7 col-md-2 table-responsive">
                        <table id="table-footer">
                          <tbody><tr>
                            <th colspan="3"><h5 class="text-uppercase text-yellow font-weight-bold mb-2">Contact Us</h5></th>
                          </tr>
                          <tr>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Singapore Head Office</p></td>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Indonesia Office</p></td>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;London Office</p></td>
                          </tr>
                          <tr>
                            <td><p class="text-white">456 Alexandra Road, #04-02 Fragrance Empire Building Singapore 119962</p></td>
                            <td><p class="text-white">Jl. Soga No.46 Tahunan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55167</p></td>
                            <td><p class="text-white">71-75 Shelton Street London, Greater London WC2H 9JQ, United Kingdom</p></td>
                          </tr>
                            <tr>
                            <td><p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;  +65 8430 0677</span></p></td>
                            <td><p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;+62 822-4223-3230</span></p></td>
                            <td><!--<p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;</span></p>--></td>
                          </tr>
                        </tbody></table>
                    </div>
                    <!--<div class="col-lg-2 col-md-2">-->
                    <!--    <h5 class="text-uppercase text-yellow font-weight-bold mb-2">contact us</h5>-->
                    <!--    <p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp; Singapore Head Office</p>-->
                    <!--    <p class="text-white">456 Alexandra Road,<br/>#04-02 Fragrance Empire Building<br/>Singapore 119962</p>-->
                    <!--    <p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;  +65 8430 0677</span></p>-->
                    <!--</div>-->
                    <!--<div class="col-lg-2 col-md-2">-->
                    <!--    <h5 class="text-uppercase text-dark font-weight-bold mb-2">contact us</h5>-->
                    <!--    <p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Indonesia Office</p>-->
                    <!--    <p class="text-white">Jl. Soga No.46 Tahunan,<br/>Kec. Umbulharjo, Kota Yogyakarta,<br/>Daerah Istimewa Yogyakarta 55167</p>-->
                    <!--    <p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;+62 822-4223-3230</span></p>-->
                    <!--</div>-->
                    <!--<div class="col-lg-2 col-md-2">-->
                    <!--    <h5 class="text-uppercase text-dark font-weight-bold mb-2">contact us</h5>-->
                    <!--    <p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Indonesia Office</p>-->
                    <!--    <p class="text-white">Jl. Soga No.46 Tahunan,<br/>Kec. Umbulharjo, Kota Yogyakarta,<br/>Daerah Istimewa Yogyakarta 55167</p>-->
                    <!--    <p class="text-yellow mb-0"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;+62 822-4223-3230</span></p>-->
                    <!--</div>-->
                    <div class="col-lg-2 col-md-2">
                        <h5 class="text-uppercase text-yellow font-weight-bold mb-2">Follow Us</h5>
                        <a href="https://www.facebook.com/codingcollective/" target="blank"><div class="facebook d-inline-block"></div></a>
                        <a href="https://www.linkedin.com/company/codingcollective/" target="blank"><div class="linked-in d-inline-block"></div></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>