<?php
	include("top.php");
	$this_page = "Weight";
	include("functions.php");
	include("controller.php");
?>

	<div>
		<div class="title">
			<p>Weight</p>
		</div>

		<?php if($input != 0) { ?>


			<div class="resultsText">
				<span>From:</span> <?php  echo ucfirst($type); ?>
			</div>

			<div class="resultsNumber">
				<span>Before:</span> <?php echo $input; ?>
			</div>

			<div class="resultsText">
				<span>To:</span> <?php echo ucfirst($convert_to); ?>
			</div>

			<div class="resultsNumber">
				<span>After:</span> <?php echo $weight->convert_to(); ?>
			</div>

		<?php } else { ?>

			<div class="form">
				<form action="weight.php?<?php $type; ?>">
					From:<select name="weight">
						<option value="pounds">Pounds</option>
						<option value="kilograms">Kilograms</option>
						<option value="stones">Stones</option>
					</select>
					To:<select name="convert_to">
						<option value="pounds">Pounds</option>
						<option value="kilograms">Kilograms</option>
						<option value="stones">Stones</option>
					</select>
					To Convert:<input type="text" name="input" />
					<input type="submit" value="Submit"/>
				</form>
			</div>

		<?php } ?>

	</div>

<?php
	include("bottom.php");
?>