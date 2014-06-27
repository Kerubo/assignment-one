<?php require 'array_list.php';?>

<!DOCTYPE HTML>
<html>
	<head>
	
	</head>
<body>
<h2>My friends</h2>
<div>
<table array_list>
	
	<thead>
	
		<tr>
		<td>Name</td>
		<td>Age</td>
		<td>Phone</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($friends as $friends) : ?>
		
	
	 <tr> 
	 <td> <?=$friends['name']?></td>
	 <td><?=$friends['age']?></td>
	  <td><?=$friends['phone']?></td>
	  </tr>
	  <?php endforeach ?>
	  </tbody>
</table>
</div>
</body>
</html>

