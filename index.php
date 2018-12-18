<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
         $db_connection = pg_connect ("  host=ec2-46-51-184-66.eu-west-1.compute.amazonaws.com 
                                        dbname=dbns3a2p2i30bj 
                                        user=zthovxzrbvlazp 
                                        password=2877bd9ce71d8d9b8c0cb27ed2a41c31863f6468a28183867e9c682bed0fc73b"  );







 
$query="INSERT INTO Persons (PersonID,LastName,FirstName,Address,City) VALUES (1, 'keyur','khole','narayanpeth','pune');";




pg_query($db_connection, $query);




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css">
	.bidbKat {background:#f9f9f9;box-shadow:1px 1px 2px #f5f5f5; padding:20px 10px; margin-top:25px; border:1px solid #fff;  border-bottom:1px solid #eaeaea;}
.bidbKat:hover {background:#fff; border:1px solid #f5f5f5; box-shadow:1px 1px 3px #eee; transition:all .7s ease}
.iconyeri {border:1px solid #f5f5f5;background:#fff; color:#FF0000;width:44%; border-radius:50%; height:100px; margin-left:28%; text-align:center}
.iconyeri:hover {background:#FF0000; color:#fff; border:1px solid #f5f5f5}
.iconyeri i { margin-top:28px}
.bidbKat span.bidbkatBaslik {    width: 100%;    padding: 10px 0 5px 0;
    float: left;font-family: 'Roboto', sans-serif; color:#333; font-size:17px; font-weight:600; text-align:center}
.bidbKat p.bidbkatacikla {font-family: 'Noto Sans', sans-serif; color:#777; font-size:14px; text-align:center; line-height:1.6; margin:0}

</style>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="container">
<div class="col-md-12">
    			<div class="row">
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="bidbKat">
							<div class="iconyeri">
								<i class="fa fa-file-text-o fa-3x"></i>
							</div>
							<span class="bidbkatBaslik">İdari</span>
							<p class="bidbkatacikla">The standard chunk of Lorem Ipsum used since the 1500s is reproducbelow for those interested. Sections 1.10.32 and 1.10.33 from “de Fi</p>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="bidbKat">
							<div class="iconyeri">
								<i class="fa fa-file-text-o fa-3x"></i>
							</div>
							<span class="bidbkatBaslik">Teknik Servis</span>
							<p class="bidbkatacikla">The standard chunk of Lorem Ipsum used since the 1500s is reproducbelow for those interested. Sections 1.10.32 and 1.10.33 from “de Fi</p>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="bidbKat">
							<div class="iconyeri">
								<i class="fa fa-file-text-o fa-3x"></i>
							</div>
							<span class="bidbkatBaslik">Web Tasarım</span>
							<p class="bidbkatacikla">The standard chunk of Lorem Ipsum used since the 1500s is reproducbelow for those interested. Sections 1.10.32 and 1.10.33 from “de Fi</p>
						</div>
					</div>
					
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="bidbKat">
							<div class="iconyeri">
								<i class="fa fa-file-text-o fa-3x"></i>
							</div>
							<span class="bidbkatBaslik">Yazılım Geliştirme</span>
							<p class="bidbkatacikla">The standard chunk of Lorem Ipsum used since the 1500s is reproducbelow for those interested. Sections 1.10.32 and 1.10.33 from “de Fi</p>
						</div>
					</div>
                    
				</div>
			</div>
</div>
</body>
</html>
