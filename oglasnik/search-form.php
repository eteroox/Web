<div style="width: 80%; margin: 0 auto;">
	<form method = "post" action="" id="searchOglasForm">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="example-text-input" class="col-2 col-form-label">Marka automobila</label>
				<input class="form-control" type="text" id="marka" name="marka" placeholder="Unesite marku automobila">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="example-text-input" class="col-2 col-form-label">Model automobila</label>
				<input class="form-control" type="text" id="model" name="model" placeholder="Unesite model automobila">
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
				<select class="form-control form-control-lg" id="gorivo" name="gorivo">
				  <option disabled selected>-- Gorivo --</option>
				  <option>Benzin</option>
				  <option>Dizel</option>
				  <option>Struja</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<select class="form-control form-control-lg" id="mjenjac" name="mjenjac">
				  <option disabled selected>-- Mjenjac --</option>
				  <option>Ručni</option>
				  <option>Automatik</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-3">
				<select class="form-control form-control-lg" id="pogon" name="pogon">
				<option disabled selected>-- Pogon --</option>
				  <option>2wd</option>
				  <option>4wd</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<select class="form-control form-control-lg" id="boja" name="boja">
				  <option disabled selected>-- Boja --</option>
				  <option>Bijela</option>
				  <option>Crna</option>
				  <option>Crvena</option>
				  <option>Siva</option>
				  <option>Smeđa</option>
				  <option>Zelena</option>
				  <option>Žuta</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="example-text-input" class="col-2 col-form-label">Cijena od</label>
				<input class="form-control" type="text" id="cijenaOd" name="cijenaOd" placeholder="Unesite cijenu automobila u kunama">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="example-text-input" class="col-2 col-form-label">Cijena do</label>
				<input class="form-control" type="text" id="cijenaDo" name="cijenaDo" placeholder="Unesite cijenu automobila u kunama">
			</div>
		</div>
			<button onclick="searchOglasi()" type="button" class="btn btn-primary" name="submit">Potvrdi</button>
		</div>
	</form>
</div>