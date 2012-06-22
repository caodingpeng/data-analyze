<?php
	class Model_Connect extends Model{
		public function connect(){
			$con=mysql_connect("192.168.1.3","liyan","liyan");
			if(!$con){
				die("could not connect ".mysql_error());
			}
			mysql_select_db("test");
			$query="select * from student";
			$result=mysql_query($query);
			echo "<table border='1'>";
			while ($row=mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<th>ID</td>";
				echo "<th>Name</td>";
				echo "<tr>";
				echo "<td>".$row["ID"]."</td>";
				echo"<td>".$row["name"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>