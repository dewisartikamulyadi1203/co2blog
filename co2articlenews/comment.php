<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	* {box-sizing: border-box;}

	body { 
		margin: 0;
		font-family: Roboto, sans-serif;
		background-color: #FFC731;
	}

	@media screen and (max-width: 500px) {
  		.header-left {
  			display: none;
  		}
	}

	

	/*Form*/
	.box{
		width: 1305px;
		height: 1006px;
		margin: 73px auto;
		background-color: #FFFFFF;
		border-radius: 94px;
		justify-content: center;
	}
	.box h1{
		padding-top: 144px;
		font-weight: bold;
		font-size: 32px;
		font-style: normal;
		line-height: 37px;
		font-weight: 700;
		font-size: 32px;
		color: #474443;
		text-align: center;
	}
	.box button{
		height: 39px;
		width: 82px;
		align-items: center;
		background-color: #474443;
		color: #FFFFFF;
		border: none;
	}
	.box button:hover{		
		background-color: #FFC731;
	}

	input, textarea {
	  width: 751px;
	  padding: 12px;
	  border-bottom: 1px solid #474443;
	  border: none;
	}

	label {
	  padding: 12px 12px 12px 161px;
	  display: inline-block;
	  color: #474443;
	}



.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}






	/*Footer*/
.footer{
	background-color: #474443;
	position: relative;
	height: 384.19px;
	width: 100%;
	right,bottom,left: 0px;
	display: flex;
	justify-content: space-between;
  align-items: baseline;
}
.footer h3.time{
    font-style: normal;
    font-size: 26px;
    font-weight: bold;
    line-height: 37.5px;
    display: flex;
    margin: 0 auto;
    align-items: center;
    color: #FFC731;
}
.footer h3.title{
    font-style: normal;
    font-size: 32px;
    font-weight: bold;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #FFC731;
}
.footer h3.contact{
    font-style: normal;
    font-size: 32px;
    font-weight: bold;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #FFC731;
}
.footer h5{
    font-size: 20px;
    font-weight: bold;
    line-height: 23px;
    margin: 0 auto;
    flex-wrap: wrap;
    align-items: center;
    color: #FFC731;
}

.footer p{
	width: 249px;
	color: #FFFFFF;
	font-size: 20px;
	font-weight: bold;
}
.footer img{
    display: inline-block;
    white-space: nowrap;
    width: 245px;
	height: 82px;
	
}

.left-footer{
	margin-top: 20px;
	margin-left: 50px;
	width: 300px;
}

.middle-footer{
	margin-left: 12px;
	padding-top: 42px;
}


.right-footer{
	margin-left: 12px;
	padding-top: 42px;
}
.location{
	display: flex;
}

.text-yellow{
	color: #FFC731;
}

	</style>
<body>
	
	<div class="box">
		<h1>Kirim <span class="text-yellow">Komentar </span></h1>
	  <form>
		  <div class="row">
		    <div class="col-25">
		      <label for="name">Name</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="name" name="name" placeholder="Input Your Name..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="email">Email</label>
		    </div>

		    <div class="col-75">
		      <input type="text" id="email" name="email" placeholder="Input Your Email..">
		    </div>
  		</div>

		  <div class="row">
		    <div class="col-25">
		      <label for="comment">Comment</label>
		    </div>

		    <div class="col-75">
		      <textarea id="comment" name="comment" placeholder="Write something.."></textarea>
		    </div>
		    <button>SEND</button>
  		</div>
	  </form>
	</div>


	<div class="footer">
    <div class="left-footer">
      <img src="img/logo.png">
      <h3 class="time">Monday - Friday : 9 AM - 7 PM (GMT+8)</h3>
    </div>
    <div class="middle-footer">
      <table id="location">
            <tbody>
              <tr>
                <th colspan="3"><h3 class="title">CONTACT US</h3></th>
              </tr>
              <tr>
                <td><h5>Singapore Head Office</h5></td>
                <td><h5>Indonesia Office</h5></td>
                <td><h5>London Office</h5></td>
              </tr>
              <tr>
                  <td><p>456 Alexandra Road, #04-02 Fragrance Empire Building Singapore 119962</p></td>
                  <td><p>Jl. Soga No.46 Tahunan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55167</p></td>
                  <td><p>71-75 Shelton Street London, Greater London WC2H 9JQ, United Kingdom</p></td>
              </tr>
              <tr>
                  <td><p>+65 8430 0677</p></td>
                  <td><p>+62 822-4223-3230</p></td>
                  <td></td>
                </tr>
            </tbody>
        </table>
      </div>
      <div class="right-footer">
          <h3 class="contact">FOLLOW US</h3>
          <a href="https://www.facebook.com/codingcollective/" target="blank"><div class="facebook d-inline-block"></div></a>
          <a href="https://www.linkedin.com/company/codingcollective/" target="blank"><div class="linked-in d-inline-block"></div></a>
        </div>
    </div>
	

	
</body>
</html>