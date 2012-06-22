<html>
	<head>
		<title><?php echo $page_title?></title>
		<script type="text/javascript">
		$(function(){
			$('#dp1').datepicker({
				format: 'yyyy/mm/dd'
			});
			$('#dp2').datepicker({
				format: 'yyyy/mm/dd'
			});
		});		
		</script>
	</head>
	<body>
		<form class="well form-inline" method="post" action="../welcome/search">
			<label>产品名称</label>
			<select id="combobox" style="width: 80px" name="combobox">
				<?php 
				for($i=0;$i<4;$i++){
					echo '<option value="'.$i.'">name'.$i.'</option>';	
				}
				?>
			</select>
			<label>开始日期</label>
			<script>
				var today=new Date();
				var yesterday=today.getFullYear()+"/"+(today.getMonth()+1)+"/"+(today.getDate()-1);
				var now=today.getFullYear()+"/"+(today.getMonth()+1)+"/"+today.getDate();
				document.write('<input type="text" style="width: 80px " id="dp1" name="dp1" value='+yesterday+' />');
				document.write('<label>截至日期</label>');
				document.write('<input type="text" style="width: 80px" id="dp2" name="dp2" value='+now+' />')
			</script>            
			<button class="btn btn-primary" id="btn" type="submit">查询</button>
			<button type="submit"></button>
		</form>
		<div class="container-fluid">
			<?php echo $content ?>;
		</div>
	</body>
</html>

