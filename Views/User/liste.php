<div class="row">
	<div class="col-12-sm">
		<a class="btn btn-red" href="<?php echo ROOT_URL; ?>"><span>Retour</span></a>
		<table class="table table-condensed table-hover" id="userPaginate">
			<thead>
			<?php
				$attributs = get_object_vars($users[0]);

				foreach($attributs as $k=>$v){
					echo '<th>'.$k.'</th>';
				}

				echo '<th>Action</th></thead><tbody>';

				foreach ($users as $user) {
					echo '<tr>';
					foreach ($attributs as $k => $attr) {
						echo '<td>'.$user->$k.'</td>';
					}
					echo '<td>
					<a class="userFillFields" href="'.ROOT_URL.'/User/fillFields" value="'.$user->USERNAME.'">
						<img src="'.HTDOCS_URL.'/images/icons/edit.png" alt="Modifier">
					</a>
					<a href="'.ROOT_URL.'/User/delete/'.$user->USERNAME.'" onClick="return confirm(\'Sure?\'); ">
						<img src="'.HTDOCS_URL.'/images/icons/delete.png" alt="Supprimer">
					</a>
					</td>';

					echo '</tr>';
				}

			?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript" src="<?php echo HTDOCS_URL.'/js/jquery.easyPaginate.js';?>"></script>
<script type="text/javascript" src="<?php echo HTDOCS_URL.'/js/jquery.tablesorter.min.js';?>"></script>