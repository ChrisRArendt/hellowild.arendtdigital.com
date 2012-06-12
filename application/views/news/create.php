<SECTION class="create">
	<H3>Create a news item</H3>
	<P>To create a new news item, please fill out the form below. Both the Title and Text fields are absolutely necessary.</P>
	<?=validation_errors();?>
	<?=form_open("news/create")?>
		<LABEL for="title">Title</LABEL>
		<INPUT type="text" name="title" value="<?=set_value("title")?>"/>
			
		<LABEL for="text">Text</LABEL>
		<TEXTAREA class="editable" name="text"><?=set_value("text")?></TEXTAREA>
		
		<INPUT type="submit" name="submit" value="Create news item"/>
	</FORM>
	

	<!-- Aloha! -->
	<?
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		if(	stripos($ua,'android') === false &&
			stripos($ua,'iPad') === false &&
			stripos($ua,'iPod') === false &&
			stripos($ua,'iPhone') === false){ 
	?>
		<script src="<?=base_url()?>assets/ex/Aloha/src/lib/aloha.js"
				data-aloha-plugins="common/format, common/list"
				 ></SCRIPT>
		<LINK href="<?=base_url()?>assets/ex/Aloha/src/css/aloha.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			//Aloha needs to be positioned so that it doesnt accidentally extend the screen size
			//Additionally, the right-side tab needs to be dismissed.
			function hideAloha(){
				if(Aloha.Sidebar)
				{
					(Aloha.jQuery)(Aloha.Sidebar.left.container[0]).css("display","none");
					(Aloha.jQuery)(Aloha.Sidebar.right.container[0]).css("display","none");
					(Aloha.jQuery)(".aloha-shadow").css("left",0);
					(Aloha.jQuery)(".aloha-floatingmenu").css("left",0);
					Aloha.jQuery('.editable').aloha();
				}
			}
			var hideAloha_t = setInterval(hideAloha, 10);
		</SCRIPT>
	<?	} ?>
</SECTION>