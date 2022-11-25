<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://kit.fontawesome.com/f4edef5943.js" crossorigin="anonymous"></script>
   <style>
      #myBtn {
         display: none;
         position: fixed;
         bottom: 20px;
         right: 20px;
         z-index: 99;
         font-size: 15px;
         border: none;
         outline: none;
         background-color: rgb(247, 97, 97);
         color: white;
         cursor: pointer;
         padding: 15px;
         border-radius: 4px;
         height: 45px;
      }

      #myBtn:hover {
         background-color: rgb(214, 94, 94);
      }
   </style>
</head>

<body>

   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

   <script>
      // Get the button
      let mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
         scrollFunction()
      };

      function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
         } else {
            mybutton.style.display = "none";
         }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }
   </script>

</body>

</html>