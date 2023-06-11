<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Google Place Autocomplete</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h1>Google Place Autocomplete exemple</h1>
          <hr>

          <form role="form" class="form-horizontal">
            <fieldset>
               <div class="form-group">
                <label class="col-sm-4 control-label">Adres:</label>
                <div class="col-sm-8">
                  <input id="user_autocomplete_address" name="user_autocomplete_address"
                         class="form-control" placeholder="Start typing your address...">
                </div>
              </div>
            </fieldset>

            <fieldset class="disabled">
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Numer ulicy:</code></label>
                <div class="col-sm-8">
                  <input id="street_number" name="street_number" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Ulica</code></label>
                <div class="col-sm-8">
                  <input id="route" name="route" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Miejscowość:</code></label>
                <div class="col-sm-8">
                  <input id="locality" name="locality" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Województwo:</code></label>
                <div class="col-sm-8">
                  <input id="administrative_area_level_1" name="administrative_area_level_1" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Kod pocztowy:</code></label>
                <div class="col-sm-8">
                  <input id="postal_code" name="postal_code" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Kraj:</code></label>
                <div class="col-sm-8">
                  <input id="country" name="country" disabled="true" class="form-control">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

    <!-- Include Google Maps JS API -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBRc8HqI9R9GxSh0gMGEqzIePdp-Hg8q5w"></script>

    <!-- Custom JS code to bind to Autocomplete API -->
    <script type="text/javascript" src="{{asset('js/autocomplete.js') }}"></script>
  </body>
</html>