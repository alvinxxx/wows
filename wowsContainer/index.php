<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>WOWS Container</title>
  <meta name="description" content="Statistics of WOWS Container">
  <meta name="author" content="alvinxxx">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <form>

    <div class="form-group" data-toggle="buttons">
      <h3>Container type</h3>
      <label class="btn btn-default btn-lg active">
        <input type="radio" name="options" id="option1" class="form-control" autocomplete="off" checked/>
         <i class="fa fa-money" aria-hidden="true"></i> Credits
      </label>
      <label class="btn btn-default btn-lg">
        <input type="radio" name="options" id="option3" class="form-control" autocomplete="off"/>
        <i class="fa fa-flag" aria-hidden="true"></i>/ Signals/Consumables
      </label>
      <label class="btn btn-default btn-lg">
        <input type="radio" name="options" id="option2" class="form-control" autocomplete="off"/>
        <i class="fa fa-paint-brush" aria-hidden="true"></i> Camouflages
      </label>
      <label class="btn btn-default btn-lg">
        <input type="radio" name="options" id="option3" class="form-control" autocomplete="off"/>
        <i class="fa fa-bullseye" aria-hidden="true"></i> Try your luck
      </label>
    </div>
    <div class="form-group">
      <label class="radio-inline">
        <input type="radio" name="optradio">Normal
      </label>
      <label class="radio-inline">
        <input type="radio" name="optradio">Super
      </label>
    </div>

    <input list="browsers" name="browser">
    <datalist id="browsers">
      <option value="Internet Explorer">
      <option value="Firefox">
      <option value="Chrome">
      <option value="Opera">
      <option value="Safari">
    </datalist>


    <div class="form-group">
      <label for="c1">Reward 1:</label>
      <input type="text" class="form-control" id="c1" placeholder="Reward 1">
    </div>

      <div id="choice" style="display: none;" class="panel with-nav-tabs panel-default">
        <div class="panel-heading ">
          <ul class="nav nav-tabs ">
              <li class="active"><a href="#tab1default" data-toggle="tab"><i class="fa fa-money" aria-hidden="true"></i> Credits</a></li>
              <li><a href="#tab2default" data-toggle="tab"><i class="fa fa-flag" aria-hidden="true"></i>/ Signals/Consumables</a></li>
              <li><a href="#tab3default" data-toggle="tab"><i class="fa fa-paint-brush" aria-hidden="true"></i> Camouflages</a></li>
              <li><a href="#tab4default" data-toggle="tab"><i class="fa fa-bullseye" aria-hidden="true"></i> Try your luck</a></li>
          </ul>
        </div>

        <div class="panel-body">
          <div class="tab-content">

            <div class="tab-pane fade in active" id="tab1default" role="tabpanel">
              <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=250×100&w=250&h=100" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Sploink!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                      <div class="card">
                          <img class="card-img-top" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=250×100&w=250&h=100" alt="Card image cap">
                          <div class="card-block">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Sploink!</a>
                          </div>
                      </div>
                  </div>

            </div>

            <div class="tab-pane fade" id="tab2default" role="tabpanel">2</div>
            <div class="tab-pane fade" id="tab3default" role="tabpanel">3</div>
            <div class="tab-pane fade" id="tab4default" role="tabpanel">4</div>
          </div>
        </div>

      </div>

    <div class="form-group">
      <label for="c2">Reward 2:</label>
      <input type="text" class="form-control" id="c2" placeholder="Reward 2">
    </div>
    <div class="form-group">
      <label for="c3">Reward 3:</label>
      <input type="text" class="form-control" id="c3" placeholder="Reward 3">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

  </form>





  <!--bootstrap script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>

  <!--myscript-->
  <script src="js/custom.js"></script>
</body>
</html>
