<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE><?=$title?> - Hello, Wild.</TITLE>
		
		<LINK href="<?=base_url()?>assets/styles/Normalize/normalize.css" type="text/css" rel="stylesheet" />
		<LINK href="<?=base_url()?>assets/styles/global.css" type="text/css" rel="stylesheet" />
		
		<!-- Aloha! -->
		<script src="<?=base_url()?>assets/ex/Aloha/src/lib/aloha.js"
				data-aloha-plugins="common/format, common/list" ></SCRIPT>
		<LINK href="<?=base_url()?>assets/ex/Aloha/src/css/aloha.css" rel="stylesheet" type="text/css" />
	</HEAD>
	<BODY>
		<DIV class="centering">
			<DIV id="head">
				<H1>
					<A href="<?=site_url("news")?>">Hello, Wild.</A>
					<small>A CodeIgniter &amp; GIT study project</small>
					<NAV>
						<UL>
							<LI>
								<A href="<?=site_url("home")?>">Home</A>
							</LI>
							<LI>
								<A href="<?=site_url("news")?>">News</A>
							</LI>
						</UL>
					</NAV>
				</H1>
			</DIV><!-- /#head -->
			<DIV id="content">