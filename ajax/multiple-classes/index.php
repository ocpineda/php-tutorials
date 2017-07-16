<?php
include_once 'anotherclass.php';
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#myButtons input:radio').change(function() {
      var buttonValue = $("#myButtons input:radio:checked").val();
        $("#myDiv").load('getajax.php', {selectedButtonValue : buttonValue});
    });
  });
</script>
</head>

<body>
  <div id="myButtons">
    <input type="radio" name="category" value="10" />ButtonA 
    <input type="radio" name="category" value="20" />ButtonB
    <input type="radio" name="category" value="30" />ButtonC
  </div>
  <div id="myDiv">Click the button to load results</div>

  <div>
    <?php 
    $anotherClass = new anotherClass();
    echo $anotherClass->printAnotherClass();
    ?>

  </div>
</body>