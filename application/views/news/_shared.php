<?
	$data["data"] = $data;
	$data["title"] = "News \\ " .$title;
	$this->load->view("_shared/_shared_top", $data); //load the appropriate header ?>


<SECTION>
	<H2>
		<A href="<?=site_url("news")?>">News \ <?=$title?></A>
		<NAV>
			<UL>
				<LI>
					<A href="<?=site_url("news/create")?>">Create New</A>
				</LI>
			</UL>
		</NAV>
		<DIV style="clear:both;"></DIV>
	</H2>
	<P>
		
	<? $this->load->view($page, $data); //load the appropriate content ?>
	
	</P>
</SECTION>


<? $this->load->view("_shared/_shared_bottom", $data); //load the appropriate footer?>