<div class="example-header">Form</div>

<div class="example">
	<form action="" method="get">
		<fieldset>

		<div class="field">
			<label class="field-label" for="i1">Text</label>
			<input id="i1" type="text" class="input" name="text">
		</div>

		<div class="field">
			<label class="field-label">Text + Static</label>
			<div class="input-static">email@domain.com</div>
		</div>

		<div class="field">
			<label class="field-label" for="i2">Email</label>
			<input id="i2" type="email" class="input" name="email">
		</div>

		<div class="field">
			<label class="field-label" for="i3">URL</label>
			<input id="i3" type="url" class="input" name="url">
		</div>

		<div class="field">
			<label class="field-label" for="i4">Number</label>
			<input id="i4" type="number" class="input" name="number">
		</div>

		<div class="field">
			<label class="field-label" for="i5">Password</label>
			<input id="i5" type="password" class="input" name="password">
			<div class="field-help">This is a string of help text below the input</div>
		</div>

		<div class="field">
			<label class="field-label" for="i6">File</label>
			<input id="i6" type="file" class="input" name="file">
		</div>

		<div class="field">
			<label class="field-label" for="i7">Hidden</label>
			<input id="i7" type="hidden" name="hidden">
		</div>

		<div class="field">
			<label class="field-label" for="i8">Search</label>
			<input id="i8" type="search" class="input" name="search">
		</div>

		</fieldset>

		<fieldset>
			<legend>Selects</legend>

		<div class="field">
			<label class="field-label" for="i9">Select</label>
			<select id="i9" class="input" name="select">
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field">
			<label class="field-label" for="i10">Select + Optgroup</label>
			<select id="i10" class="input" name="select_group">
				<optgroup label="Front-end">
					<option value="">CSS</option>
					<option value="">HTML</option>
					<option value="">JavaScript</option>
				</optgroup>
				<optgroup label="Back-end">
					<option value="">PHP</option>
					<option value="">Python</option>
					<option value="">Ruby</option>
				</optgroup>
			</select>
		</div>

		<div class="field">
			<label class="field-label" for="i11">Select + Multiple</label>
			<select id="i11" class="input" name="select_multi" multiple>
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
				<option value="">PHP</option>
				<option value="">Python</option>
				<option value="">Ruby</option>
			</select>
		</div>

		</fieldset>

		<fieldset>
			<legend>Others</legend>

		<div class="field">
			<label class="field-label" for="i12">Textarea</label>
			<textarea id="i12" class="input span-4" name="textarea">Lorem ipsum dolor sit amet.</textarea>
		</div>

		<div class="field">
			<label class="checkbox" for="i15"><input id="i15" type="checkbox" name="checkbox"> Checkbox inline</label>
		</div>

		<div class="field">
			<label class="radio" for="i16"><input id="i16" type="radio" name="radio"> Radio first option</label><br>
			<label class="radio" for="i17"><input id="i17" type="radio" name="radio"> Radio second option</label>
		</div>

		<div class="form-actions">
			<button type="submit" class="button success">Submit</button>
			<button type="reset" class="button">Reset</button>
		</div>

		</fieldset>
	</form>
</div>

<div class="example">
	<div class="example-title">States</div>

	<p>States for required, error, warning, success and disabled.</p>

	<form action="" method="get">
		<div class="field">
			<label class="field-label" for="i1d">Text + Disabled</label>
			<input id="i1d" type="text" class="input" name="disabled" disabled value="Some value here">
		</div>

		<div class="field is-required">
			<label class="field-label" for="i1r">Text + Readonly</label>
			<input id="i1r" type="text" class="input" name="readonly" readonly value="Some value here">
		</div>

		<div class="field">
			<label class="field-label" for="i9d">Select + Disabled</label>
			<select id="i9d" class="input" name="select" disabled>
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field">
			<label class="field-label" for="i12d">Textarea + Disabled</label>
			<textarea id="i12d" class="input span-4" name="textarea" disabled>Lorem ipsum dolor sit amet.</textarea>
		</div>

		<div class="field">
			<label class="checkbox" for="i15d"><input id="i15d" type="checkbox" name="checkbox" disabled> Checkbox</label>
		</div>

		<div class="field is-required">
			<label class="radio" for="i17d"><input id="i17d" type="radio" name="radio" disabled> Radio option</label>
		</div>

		<div class="field has-error">
			<label class="field-label" for="s1">Text</label>
			<input id="s1" type="text" class="input" name="text">
		</div>

		<div class="field has-error">
			<label class="field-label" for="s2">Select</label>
			<select id="s2" class="input" name="select">
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field has-error is-required">
			<label class="field-label" for="s3">Textarea</label>
			<textarea id="s3" class="input span-4" name="textarea">Lorem ipsum dolor sit amet.</textarea>
		</div>

		<div class="field has-error">
			<label class="checkbox" for="s4"><input id="s4" type="checkbox" name="checkbox"> Checkbox</label>
		</div>

		<div class="field has-error is-required">
			<label class="radio" for="s5"><input id="s5" type="radio" name="radio"> Radio option</label>
		</div>

		<div class="field has-warning">
			<label class="field-label" for="w1">Text</label>
			<input id="w1" type="text" class="input" name="text">
		</div>

		<div class="field has-warning is-required">
			<label class="field-label" for="w2">Select</label>
			<select id="w2" class="input" name="select">
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field has-warning">
			<label class="field-label" for="w3">Textarea</label>
			<textarea id="w3" class="input span-4" name="textarea">Lorem ipsum dolor sit amet.</textarea>
		</div>

		<div class="field has-warning is-required">
			<label class="checkbox" for="w4"><input id="w4" type="checkbox" name="checkbox"> Checkbox</label>
		</div>

		<div class="field has-warning">
			<label class="radio" for="w5"><input id="w5" type="radio" name="radio"> Radio option</label>
		</div>

		<div class="field has-success">
			<label class="field-label" for="s1">Text</label>
			<input id="s1" type="text" class="input" name="text">
		</div>

		<div class="field has-success is-required">
			<label class="field-label" for="s2">Select</label>
			<select id="s2" class="input" name="select">
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field has-success is-required">
			<label class="field-label" for="s3">Textarea</label>
			<textarea id="s3" class="input span-4" name="textarea">Lorem ipsum dolor sit amet.</textarea>
		</div>

		<div class="field has-success">
			<label class="checkbox" for="s4"><input id="s4" type="checkbox" name="checkbox"> Checkbox</label>
		</div>

		<div class="field has-success">
			<label class="radio" for="s5"><input id="s5" type="radio" name="radio"> Radio option</label>
		</div>

		<div class="form-actions">
			<button type="submit" class="button success">Submit</button>
			<button type="reset" class="button">Reset</button>
		</div>
	</form>
</div>

<div class="example">
	<div class="example-title">Horizontal</div>

	<p>Utilizes the grid component and its columns to build the layout.</p>

	<form action="" method="get" class="form--horizontal">
		<fieldset>
			<legend>Horizontal</legend>

		<div class="field">
			<label class="field-label col-4" for="h1">Text</label>
			<div class="field-col col-7">
				<input id="h1" type="text" class="input" name="text">
			</div>
		</div>

		<div class="field">
			<label class="field-label col-4">Text + Static</label>
			<div class="field-col col-7">
				<div class="input-static">email@domain.com</div>
			</div>
		</div>

		<div class="field">
			<label class="field-label col-4" for="h2">Select</label>
			<div class="field-col col-7">
				<select id="h2" class="input" name="select">
					<option value="">CSS</option>
					<option value="">HTML</option>
					<option value="">JavaScript</option>
				</select>
			</div>
		</div>

		<div class="field">
			<label class="field-label col-4" for="h3">Textarea</label>
			<div class="field-col col-7">
				<textarea id="h3" class="input span-6" name="textarea">Lorem ipsum dolor sit amet.</textarea>
			</div>
		</div>

		<div class="field">
			<div class="field-col col-7 push-4">
				<label class="checkbox" for="h4"><input id="h4" type="checkbox" name="checkbox"> Checkbox</label>
			</div>
		</div>

		<div class="field">
			<div class="field-col col-7 push-4">
				<label class="radio" for="h5"><input id="h5" type="radio" name="radio"> Radio option</label>
			</div>
		</div>

		<div class="form-actions">
			<button type="submit" class="button success">Submit</button>
			<button type="reset" class="button">Reset</button>
		</div>

		</fieldset>
	</form>
</div>

<div class="example">
	<div class="example-title">Inline</div>

	<form action="" method="get" class="form--inline">
		<div class="field">
			<label class="field-label" for="n1">Text</label>
			<input id="n1" type="text" class="input" name="text">
		</div>

		<div class="field">
			<label class="field-label">Text + Static</label>
			<div class="input-static">email@domain.com</div>
		</div>

		<div class="field">
			<label class="field-label" for="n2">Select</label>
			<select id="n2" class="input" name="select">
				<option value="">CSS</option>
				<option value="">HTML</option>
				<option value="">JavaScript</option>
			</select>
		</div>

		<div class="field">
			<label class="checkbox" for="n3"><input id="n3" type="checkbox" name="checkbox"> Checkbox</label>
		</div>

		<div class="field">
			<label class="radio" for="n4"><input id="n4" type="radio" name="radio"> Radio option</label>
		</div>

		<div class="form-actions">
			<button type="submit" class="button success">Submit</button>
			<button type="reset" class="button">Reset</button>
		</div>
	</form>
</div>