<div style="width: 80%; margin: 0 auto;">
	<form method = "post" action="" id="dodajOglasForm" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Marka automobila</label>
			<div class="col-10">
				<input class="form-control" type="text" id="marka" name="marka" placeholder="Unesite marku automobila">
				<span id="markaOglas" class="errorRegister"></span>
			</div>
		</div>
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Model automobila</label>
			<div class="col-10">
				<input class="form-control" type="text" id="model" name="model" placeholder="Unesite model automobila">
				<span id="modelOglas" class="errorRegister"></span>
			</div>
		</div>
		
		<div class="form-group row">
			<select class="form-control form-control-lg" id="gorivo" name="gorivo">
			  <option disabled selected>-- Gorivo --</option>
			  <option>Benzin</option>
			  <option>Dizel</option>
			  <option>Struja</option>
			</select>
			<span id="gorivoOglas" class="errorRegister"></span>
		</div>
		<div class="form-group row">
			<select class="form-control form-control-lg" id="mjenjac" name="mjenjac">
			  <option disabled selected>-- Mjenjac --</option>
			  <option>Ručni</option>
			  <option>Automatik</option>
			</select>
			<span id="mjenjacOglas" class="errorRegister"></span>
		</div>
		
		<div class="form-group row">
			<select class="form-control form-control-lg" id="pogon" name="pogon">
			<option disabled selected>-- Pogon --</option>
			  <option>2wd</option>
			  <option>4wd</option>
			</select>
			<span id="pogonOglas" class="errorRegister"></span>
		</div>
		<div class="form-group row">
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
			<span id="bojaOglas" class="errorRegister"></span>
		</div>
		
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Cijena</label>
			<div class="col-10">
				<input class="form-control" type="text" id="cijena" name="cijena" placeholder="Unesite cijenu automobila u kunama">
				<span id="cijenaOglas" class="errorRegister"></span>
			</div>
		</div>
		
		<div class="form-group row" style = "margin-top:10px">
			<label>Opis</label>
			<textarea class="form-control" rows="10" id="opis" name="opis" placeholder="Unesite opis"></textarea>
			<span id="opisOglas" class="errorRegister"></span>
		</div>
		<div class="form-group row">
			<label for="example-text-input" class="col-2 col-form-label">Slike</label>
			<div class="col-10">
				<input type="file" id="file" name="image" class="image"/>
				<span id="slikeOglas" class="errorRegister"></span>
			</div>
		</div>
			<button onclick="validateDodajOglas(event)" type="button" class="btn btn-primary" name="submit">Potvrdi</button>
		</div>
	</form>
	
	<div id="image_preview"> </div>
</div>