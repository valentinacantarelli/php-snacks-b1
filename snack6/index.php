<?php
$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="green">
        
            <?php foreach($db["teachers"] as $key => $value) {?>
                
                    <p><?php echo $value["name"];?></p>
                    <p><?php echo $value["lastname"];?></p>
                
            <?php }?>    
        
    </div>

    <div class="gray">
    
            <?php foreach($db["pm"] as $key => $value) {?>
                
                    <p><?php echo $value["name"];?></p>
                    <p><?php echo $value["lastname"];?></p>
                
            <?php }?>    
        
    </div>
</body>
</html>