<!--
content:
- (page 2) download: navigation, content, scripts
-->

<!DOCTYPE html>

<html lang="de">

<?php require_once("head.inc.html"); ?>

<body class="container">
	<div class="row">
		<!-- navigation -->
		<?php require_once("navigation.inc.php"); ?>

		<!-- content -->
		<div class="column-7">
			<main class="animate" id="no-reload">
				<h1 class="heading">Download</h1>
				<section class="section-container">
					<p class="paragraph">Hole dir die gesamten Dateien als Paket.</p>
					<a class="download-button" href="download/no_reload.zip" target="_blank">
						<span class="icon-file-zip">
							<?php include("images/icon_file_zip.svg"); ?>
						</span>
						Download
					</a>
				</section>
				<section class="section-container">
					<p class="paragraph">Lade dir die CSS-Datei und die dazugehörige MAP-Datei herunter.</p>
					<ul class="download-list">
						<li>
							<a class="download-link" href="css/no_reload.css" target="_blank">
								<span class="icon-download-file">
									<?php include("images/icon_download_file.svg"); ?>
								</span>
								no_reload.css
							</a>
						</li>
						<li>
							<a class="download-link" href="css/no_reload.css.map" target="_blank">
								<span class="icon-download-file">
									<?php include("images/icon_download_file.svg"); ?>
								</span>
								no_reload.css.map
							</a>
						</li>
					</ul>
					<p class="paragraph">Lade dir die SCSS-Datei herunter, wenn du die CSS-Datei selber generieren möchtest.</p>
					<ul class="download-list">
						<li>
							<a class="download-link" href="scss/no_reload.scss" target="_blank">
								<span class="icon-download-file">
									<?php include("images/icon_download_file.svg"); ?>
								</span>
								no_reload.scss
							</a>
						</li>
					</ul>
					<p class="paragraph">Lade dir die JS-Datei in reinem JavaScript oder für jQuery herunter.</p>
					<ul class="download-list">
						<li>
							<a class="download-link" href="js/no_reload.js" target="_blank">
								<span class="icon-download-file">
									<?php include("images/icon_download_file.svg"); ?>
								</span>
								no_reload.js
							</a>
						</li>
						<li>
							<a class="download-link" href="js/no_reload_jquery.js" target="_blank">
								<span class="icon-download-file">
									<?php include("images/icon_download_file.svg"); ?>
								</span>
								no_reload_jquery.js
							</a>
						</li>
					</ul>
				</section>
			</main>
		</div>
		<?php /* ToDo: require_once("aside.inc.php"); */ ?>
	</div>

	<!-- scripts -->
	<?php require_once("scripts.inc.html"); ?>
</body>

</html>