 <!DOCTYPE html>
 <html>

 <head>
     <script>
     function myFunction() {
         thisUrl = new URLSearchParams(String(window.location))
         var q = thisUrl.get('q')
         document.getElementById("headertag").innerHTML = "Your Response" + " have been submitted";
     }
     $(window).ready(function() {
         $('#loading').hide();
     });
     </script>
     <style>
     #loading {
         background: url('success.gif') no-repeat center center;
         position: absolute;
         height: 100%;
         width: 100%;
     }
     </style>
 </head>

 <body onload="myFunction()">
     <div id="loading">
         <center><br \><br \><br \><br \><br \><br \>
             <h1 id="headertag" style="color: rgb(120, 178, 77);"><span id="headertag"></span></h1>
         </center>
     </div>

     <script>
     setTimeout(function() {
         window.location.href = '../my.html'; // the redirect goes here

     }, 2000); // 5 seconds
     </script>



 </body>

 </html>