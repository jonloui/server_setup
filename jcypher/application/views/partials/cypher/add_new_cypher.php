	<tr>
		<td><?= $cypher ?></td>
		<td><?= $hint ?></td>
		<td><a href='/cyphers/show/<?= $cypher_id ?>'>Solve</a></td>
		<td>
			<?php
				if($user_name['user_name'] != "")
					echo $user_name['user_name'];
				else
					echo $user_name['first_name'] . " " . $user_name['last_name'];
			?>
		</td>
		<td><?= $cypher_id ?></td>
	</tr>