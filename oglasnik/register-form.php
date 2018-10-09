<div style="width: 80%; margin: 0 auto;">
	<form method = "post" action="" id="registerForm">
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Ime</label>
			<div class="col-10">
				<input class="form-control" type="text" id="ime" name="ime">
				<span id="imeRegister"></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-search-input" class="col-2 col-form-label">Prezime</label>
			<div class="col-10">
				<input class="form-control" type="text" id="prezime" name="prezime">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-email-input" class="col-2 col-form-label">Email</label>
			<div class="col-10">
				<input class="form-control" type="email" id="email" name="email">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-url-input" class="col-2 col-form-label">Dob</label>
			<div class="col-10">
				<input class="form-control" type="text" id="dob" name="dob">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-tel-input" class="col-2 col-form-label">Mjesto stanovanja</label>
			<div class="col-10">
				<input class="form-control" type="text" id="mjestostanovanja" name="mjestostanovanja">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-number-input" class="col-2 col-form-label">Poštanski broj</label>
			<div class="col-10">
				<input class="form-control" type="text" id="postbr" name="postbr">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-password-input" class="col-2 col-form-label">Lozinka</label>
			<div class="col-10">
				<input class="form-control" type="password" id="password" name="password">
			</div>
		</div>
		<div class="form-group row">
			<button onclick="validateRegister()" type="button" class="btn btn-primary" name="submit">Potvrdi</button>
		</div>
	</form>
</div>