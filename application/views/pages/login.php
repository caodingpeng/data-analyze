<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>登录数据平台</title>
		<link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid" align="center" >
			<div class="row-fluid" style="padding-top: 100" >
				<div class="span4"></div>
				<div class="span4 offset4">
					<p>
						<h1>欢迎登录数据平台！</h1>
					</p>
				</div>
			</div>
			<div class="row-fluid" style="padding-top: 30px">
				<div class="span4">
				</div>
				<div class="span4" align="left">
					<form action="/welcome/login" class="well form-horizontal" method="post" style="line-height: 50px">
						<label class="control-label" for="name">用户名:</label>
						<input type="text" name="username" placeholder="user name" id="name" />
						<label class="control-label">密码:</label>
						<input type="password" name="password" value="" id="password" />
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" id="chkbox" name="chkbox">记住密码</input>
							</label>
						</div>
						<div class="controls">
							<button class="btn btn-primary" type="submit">登录</button>
							<button class="btn btn-primary" type="reset">取消</button>
						</div>
						<div class="control-group">
							<label style="padding-left: 100px;color: #ff0000"><?php echo $loginError?></label>
						</div>
				</form>
			</div>        
		<footer class="span4 navbar-fixed-bottom">
				&copy; 新浪游戏事业部 2012 
		</footer>
		<a class="btn" data-toggle="modal" href="#myModal">Launch Modal</a>
		<div class="modal hide" id="myModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>modal header</h3>
				</div>
				<div class="modal-body">
					<p>this is the content .....</p>
					<input type="text" name="" id="test" /> 
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">close</a>
					<a href="#" class="btn btn-primary">save change</a>
				</div>
			</div>
	</body>
</html>