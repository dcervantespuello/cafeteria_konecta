<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleSelect" class="form-label">Select menu</label>
        <select class="form-select" id="exampleSelect">
            <option selected="">Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <fieldset class="mb-3">
        <legend>Radios buttons</legend>
        <div class="form-check">
            <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
            <label class="form-check-label" for="exampleRadio1">Default radio</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
            <label class="form-check-label" for="exampleRadio2">Another radio</label>
        </div>
    </fieldset>
    <div class="mb-3">
        <label class="form-label" for="customFile">Upload</label>
        <input type="file" class="form-control" id="customFile">
    </div>
    <div class="mb-3 form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
    </div>
    <div class="mb-3">
        <label for="customRange3" class="form-label">Example range</label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>