<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<style>
body {
  padding : 10px ;

}


/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}


</style>


<body>


<div id="exTab3" class="container">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="#1b" data-toggle="tab">Overview2</a>
    </li>
    <li><a href="#2b" data-toggle="tab">Using nav-pills</a>
    </li>
    <li><a href="#3b" data-toggle="tab">Applying clearfix</a>
    </li>
    <li><a href="#4a" data-toggle="tab">Background color</a>
    </li>
  </ul>

  <div class="tab-content clearfix">
    <div class="tab-pane active" id="1b">
      <h3>Same as example 1 but we have now styled the tab's corner</h3>
    </div>
    <div class="tab-pane" id="2b">
      <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
    </div>
    <div class="tab-pane" id="3b">
      <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
    </div>
    <div class="tab-pane" id="4b">
      <h3>We use css to change the background color of the content to be equal to the tab</h3>
    </div>
  </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</body>
</html>
