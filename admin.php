<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The admin page shows all the operations that the admin can do in the database
		It points out to different webpages based on the selection given by the admin
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
	  <div class="row">
		<div class="col-sm-12">
			<form>
				<div class="panel panel-default">
				<div class="panel-heading"><h2 class="panel-title">Admin Options</h2>
				</div>
					<div class="panel-body">
						<div class="span2">
						<p><a href="addappraiser.php" class="btn btn-primary btn-lg active" role="button">      Add An Appraiser     </a></p>
						<p><a href="addshow.php" class="btn btn-primary btn-lg active" role="button">         Add A Show         </a></p>
						<p><a href="addwinner.php" class="btn btn-primary btn-lg active" role="button">        Add A Winner         </a></p>
						<p><a href="approve.php" class="btn btn-primary btn-lg active" role="button">Approve Pending Applications</a></p>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php 
	require_once('footer.php');
?>