<div class="row">
	<div class="col-12-sm">
		<a class="btn btn-red" href="<?php echo ROOT_URL; ?>"><span>Retour</span></a>
		<table class="table table-condensed table-hover" id="userPaginate">
			<thead>
			<?php
				$attributs = get_object_vars($vues[0]);

				foreach($attributs as $k=>$v){
					echo '<th>'.$k.'</th>';
				}

				echo '</thead><tbody>';

				foreach ($vues as $vue) {
					echo '<tr>';
					foreach ($attributs as $k => $attr) {
						echo '<td>'.$vue->$k.'</td>';
					}
					echo '</tr>';
				}

			?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript" src="<?php echo HTDOCS_URL.'/js/jquery.easyPaginate.js';?>"></script>
<script type="text/javascript" src="<?php echo HTDOCS_URL.'/js/jquery.tablesorter.min.js';?>"></script>