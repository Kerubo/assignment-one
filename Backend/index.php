<?php require 'listcar.php';?>

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
		<th>Type</th>
		<th>Name</th>
		<th>color</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($models as $models) : ?>
		
	
	 <tr> 
	 <td> <?=$model['name']?></td>
	 <td><?=$model['age']?></td>
	  <td><?=$model['phone']?></td>
	  </tr>
	  <?php endforeach ?>
	  </tbody>
</table>
</div>
</body>
</html>


