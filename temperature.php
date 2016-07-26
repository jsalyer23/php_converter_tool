<?php
	include("top.php");
	$this_page = "Temperature";
	include("functions.php");
	include("controller.php");
?>

	<div>
		<div class="title">
			<p>Temperature</p>
		</div>

		<?php if($input != 0) { ?>


			<div class="resultsText">
				<span>From:</span> <?php echo ucfirst($type); ?>
			</div>

			<div class="resultsNumber">
				<span>Before:</span> <?php echo $input; ?>
			</div>

			<div class="resultsText">
				<span>To:</span> <?php echo $type2; ?>
			</div>

			<div class="resultsNumber">
				<span>After:</span> <?php echo $temperature->convert_to(); ?>
			</div>

		<?php } else { ?>

			<div class="form">
				<form action="temperature.php?<?php $type; ?>">
					<select name="temperature">
						<option value="fahrenheit">Fahrenheit</option>
						<option value="celsius">Celsius</option>
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