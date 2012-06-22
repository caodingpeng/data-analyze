<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="/assets/bootstrap/css/datepicker.css" rel="stylesheet" type="text/css" />
		<link href="/assets/bootstrap/css/custom.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/assets/bootstrap/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="/assets/bootstrap/js/bootstrap-datepicker.js"></script>
		<title><?php echo $page_title; ?></title>
		<style type="text/css">
			body {
				padding-top: 0px;
			}
			ul {
				font-size: 18px;
			}
			a {
				font-size: 14px;
				color: red;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#linkplat").on("click",function(){
					var name=$("linkplat").val();
					var type=1;
					if(name=="切换到有人玩平台"){
						type=2;
					}
					$.post("/welcome/changeplat",{"type":type},function(data){
						alert("data",data);
						if(data==1){
							$("#linkplat").val("切换到有人玩平台");
						}else{
							$("#linkplat").val("切换到玩玩平台");
						}
					});
				});
			});
		</script>
	</head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Project name</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			</div>
				<form class="form-inline">
					<span class="label label-important" style="size: 20px">您当前所在平台</span>
					<a href="javascript:void(0)" style="size: 14px;color: #fff000" name="linkplat" id="linkplat">切换到有人玩平台</a>
				</form>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<ul class="nav nav-list">
						<li class="nav-header">
							操作列表
						</li>
						<li class="active">
							<a href="/welcome/echo">充值查询</a>
						</li>
						<li>
							<a href="/welcome/about">用户数据查询</a>
						</li>
					</ul>
				</div>
				<div class="span9">
					<?php echo $body; ?>
				</div>
			</div>
			<footer class="navbar-fixed-bottom">
				&copy; Company 2012
			</footer>
		</div>
	</body>
</html>