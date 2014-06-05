			<td><?=$row->phone_number?></td>
			<td><?=$row->organisation?></td>
			<td>
				<?php
				foreach ($contactgroup as $cg) {
					if($cg->contact_id==$row->id){
						foreach ($group as $gr) {
							if($cg->group_id==$gr->id)
								echo '<li>'.$gr->group_name.'</li>';
						}
					}
				}
				?>
			</td>