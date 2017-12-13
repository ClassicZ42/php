<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript">
      function showSuggestion(str){
          // check if there is atleast 1 char in searchbar
          if(str.length == 0){
            // if it's zero clear the output value
              document.getElementById('output').innerHTML = '';
          } else {
            // do the ajax request

            // create a xhttp object calles xmlhttp
            //there is a built in  XMLHttpRequest(); constructor function
            // using var nameOfXhttpObject =
            // check if its ready state is 4(request finished and response is ready) (in this case (4) we wait till response is ready before we do anything )and status 200 ( ready )
            var xmlhttp = new XMLHttpRequest();
            // access the on readystatechange property
            // set it equal to an anonamous function
            xmlhttp.onreadystatechange = function(){
              // test for ready state 4 and status 200
              if(this.readyState == 4 && this.status == 200){
                // change the output
                document.getElementById('output').innerHTML = this.responseText;
              };
            };
            // acess the xmlhttp objext
            // make a get
            // make the request to suggest.php
            // add on a query string with the values of the str variable we pass into the showSuggestion function
            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
          }


      };
  </script>
  <title>Search</title>
</head>
<body>
  <div class="container">
    <h1>Search Users</h1>
    <form >
        <!--
        html
        key up event listener
        set equal  showSuggestion(value);
        use this to get the inputs value
        set it equal to showSuggestion
       -->
      <input onkeyup="showSuggestion(this.value)" type="text" class="form-control" placeholder="Search User...">
    </form>
    <br>
    <p>Suggestions: </p>
    <span id="output" style="font-weight:bold"></span>
  </div>

</body>
</html>
