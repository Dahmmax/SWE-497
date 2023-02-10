<?php
include('../../app/database/connect.php');
$i = 1;
session_start();

if (isset($_GET['QcodeLeader'])) {

	$QcodeCode = $_GET['QcodeLeader'];

	$sql = "SELECT ParticipantsName,TotalScore FROM participants
	 WHERE participants.QuizCode='$QcodeCode' ORDER BY TotalScore DESC LIMIT 5;";
	$result = $conn->query($sql);
	if ($result === TRUE)
		echo $result;
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Interctive Quiz | Leader Board </title>
	<link rel="stylesheet" href="styles.css">
</head>
<style>
	.x {
		--bs-blue: #5E50F9;
		--bs-indigo: #6610f2;
		--bs-purple: #6a008a;
		--bs-pink: #E91E63;
		--bs-red: #f96868;
		--bs-orange: #f2a654;
		--bs-yellow: #f6e84e;
		--bs-green: #46c35f;
		--bs-teal: #58d8a3;
		--bs-cyan: #57c7d4;
		--bs-white: #ffffff;
		--bs-gray: #434a54;
		--bs-gray-light: #aab2bd;
		--bs-gray-lighter: #e8eff4;
		--bs-gray-lightest: #e6e9ed;
		--bs-gray-dark: #0f1531;
		--bs-black: #000000;
		--bs-gray-100: #f8f9fa;
		--bs-gray-200: #e9ecef;
		--bs-gray-300: #dee2e6;
		--bs-gray-400: #ced4da;
		--bs-gray-500: #adb5bd;
		--bs-gray-600: #6c757d;
		--bs-gray-700: #495057;
		--bs-gray-800: #343a40;
		--bs-gray-900: #212529;
		--bs-primary: #b66dff;
		--bs-secondary: #c3bdbd;
		--bs-success: #1bcfb4;
		--bs-info: #198ae3;
		--bs-warning: #fed713;
		--bs-danger: #fe7c96;
		--bs-light: #f8f9fa;
		--bs-dark: #3e4b5b;
		--bs-primary-rgb: 13, 110, 253;
		--bs-secondary-rgb: 108, 117, 125;
		--bs-success-rgb: 25, 135, 84;
		--bs-info-rgb: 13, 202, 240;
		--bs-warning-rgb: 255, 193, 7;
		--bs-danger-rgb: 220, 53, 69;
		--bs-light-rgb: 248, 249, 250;
		--bs-dark-rgb: 33, 37, 41;
		--bs-white-rgb: 255, 255, 255;
		--bs-black-rgb: 0, 0, 0;
		--bs-body-color-rgb: 52, 58, 64;
		--bs-body-bg-rgb: 255, 255, 255;
		--bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
		--bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
		--bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
		--bs-body-font-family: var(--bs-font-sans-serif);
		--bs-body-font-size: 1rem;
		--bs-body-font-weight: 400;
		--bs-body-line-height: 1.5;
		--bs-body-color: #343a40;
		--bs-body-bg: #fff;
		-webkit-text-size-adjust: 100%;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		-webkit-font-smoothing: antialiased;
		--bs-gutter-x: 40px;
		--bs-gutter-y: 0;
		-webkit-box-direction: normal;
		word-wrap: break-word;
		box-sizing: border-box;
		margin: 0;
		text-transform: none;
		outline: 0;
		outline-offset: 0;

		display: inline-block;
		font-weight: 400;
		text-align: center;
		text-decoration: none;
		vertical-align: middle;
		user-select: none;
		padding: 0.875rem 2.5rem;
		box-shadow: none;
		font-size: 0.875rem;
		line-height: 1;
		font-family: "ubuntu-bold", sans-serif;
		background: linear-gradient(to right, #f6e384, #ffd500);
		border: 0;
		transition: opacity 0.3s ease;
		cursor: pointer;
		margin-top: 1rem !important;
		margin-right: 1rem !important;
		border-radius: 50px;
		min-width: 150px;
		color: #ffffff;
	}



	.b-div {
		margin-top: 1%;
		margin-left: 60%;
		right: 0%;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		/* flex-wrap: nowrap; */
		z-index: 1;
	}
</style>

<body>

	<div class="wrapper">
		<div class="lboard_section">
			<div class="lboard_tabs">
				<div class="tabs">
					<ul>

						<li class="active" data-li="month">Top 5</li>

					</ul>
				</div>
			</div>

			<div class="lboard_wrap">
				<div class="lboard_item today">
					<?php while ($row = $result->fetch_assoc()) : ?>
						<div class="lboard_mem">
							<div class="img">
								<img src="<?php echo $i; ?>.svg" alt="Place">
							</div>
							<div class="name_bar">
								<?php echo " <p><span>" . $i++ . ".</span>" . $row['ParticipantsName'] . "</p>  "; ?>
								<div class="bar_wrap">
									<div class="inner_bar" style="width: <?php echo $row['TotalScore'] . "%"; ?>"></div>
								</div>
							</div>
							<div class="points">
								<?php echo $row['TotalScore'] . " %"; ?>

							</div>
						</div>
					<?php endwhile ?>
					<?php while ($i < 6) : ?>
						<div class="lboard_mem">
							<div class="img">
								<img src="<?php echo $i; ?>.svg" alt="Place">
							</div>
							<div class="name_bar">
								<?php echo " <p><span>" . $i++ . ".</span> NONE</p>  "; ?>
								<div class="bar_wrap">
									<div class="inner_bar" style="width: 0%"></div>
								</div>
							</div>
							<div class="points">


							</div>
						</div>
					<?php endwhile ?>
				</div>
				<?php if (!empty($_SESSION['username'])) : ?>
					<div class="b-div">
						<button type="button" onclick="location.href = '../../dashboard/index.php';" class="x">Leave The Quiz</button>

					</div>
				<?php endif; ?>
				<?php if (empty($_SESSION['username'])) : ?>

					<div class="b-div">
						<button type="button" onclick="location.href = '../../index.php';" class="x">Leave The Quiz</button>

					</div>
				<?php endif; ?>
			</div>

		</div>
	</div>


	<!-- <script src="scripts.js"></script> -->
</body>

</html>