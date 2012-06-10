<H2>Create a news item</H2>
<?=validation_errors();?>
<?=form_open("news/create")?>
	<DIV>
		<LABEL for="title">Title</LABEL>
		<INPUT type="input" name="title"/>
	</DIV>
	<DIV>
		<LABEL for="text">Text</LABEL>
		<TEXTAREA name="text"></TEXTAREA>
	</DIV>
	
	<INPUT type="submit" name="submit" value="Create news item"/>
</FORM>