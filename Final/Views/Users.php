<style type="text/css">
	.error { color: red; }
</style>
<div class="container?">
	<? if(isset($errors) && $errors): ?>
		<ul class="error">
			<? foreach($errors as $key => $value): ?>
			<li>
				<label><?=$key?>:</label><?=$value?>
			</li>
			<? endforeach; ?>
		</ul>
	<? endif; ?>
	
	<form action ="?action-save" method="post" clas="form=horizontal row">
		<div class ="form-group <?= isset($erros ['FirstName']) ? 'has-error' : '' ?>">
			<label for="FirstName" class="col-sm2 control-label">First Name</label>
			<div class="col-sm 10">
				<input type="text" name="FirstName" id="FirstName" placeholder="FirstName" class="form-control">
				<? if(isset($erros ['FirstName'])): ? >
			</div>
		</div>
		
		
	</form>
</div>
