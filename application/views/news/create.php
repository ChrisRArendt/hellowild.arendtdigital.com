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
	
	<SCRIPT type="text/javascript">
		Aloha.ready( function() {
			var $ = Aloha.jQuery;
			Aloha.jQuery('.editable').aloha();
		});
	</SCRIPT>
</SECTION>