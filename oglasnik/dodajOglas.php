<div style="width: 80%; margin: 0 auto;">
	<form method = "post" action="" id="dodajOglasForm">
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Marka automobila</label>
			<div class="col-10">
				<input class="form-control" type="text" id="ime" name="ime" placeholder="Unesite marku automobila">
				<span id="imeRegister" class="errorRegister"></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Model automobila</label>
			<div class="col-10">
				<input class="form-control" type="text" id="ime" name="ime" placeholder="Unesite model automobila">
				<span id="imeRegister" class="errorRegister"></span>
			</div>
		</div>
		
		<div class="form-group row">
			<select class="form-control form-control-lg">
			  <option disabled selected>-- Gorivo --</option>
			  <option>Benzin</option>
			  <option>Dizel</option>
			  <option>Struja</option>
			</select>
		</div>
		<div class="form-group row">
			<select class="form-control form-control-lg">
			  <option disabled selected>-- Mjenjac --</option>
			  <option>Ručni</option>
			  <option>Automatik</option>
			</select>
		</div>
		
		<div class="form-group row">
			<select class="form-control form-control-lg">
			<option disabled selected>-- Pogon --</option>
			  <option>2wd</option>
			  <option>4wd</option>
			</select>
		</div>
		<div class="form-group row">
			<select class="form-control form-control-lg">
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
		
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Cijena</label>
			<div class="col-10">
				<input class="form-control" type="text" id="ime" name="ime" placeholder="Unesite cijenu automobila u kunama">
				<span id="imeRegister" class="errorRegister"></span>
			</div>
		</div>
		
		<div class="col-xs-10" style = "margin-top:10px">
			<label>Opis</label>
			<textarea class="form-control" rows="10" name="objasnjenje" id="objasnjenje" placeholder="Unesite objašnjenje"></textarea>
			<span class="errorRegister" id="objasnjenjeError"></span>
		</div>
	</form>
<div style="width: 80%; margin: 0 auto;">