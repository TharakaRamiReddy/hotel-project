
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


        //slideshow//
              var myIndex = 0;
              carousel();
              function carousel() {
               var i;
                 var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++)
               {
               x[i].style.display = "none";  
               }
                myIndex++;
                 if (myIndex > x.length)
                  {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2000); // Change image every 2 seconds
                        }






              //------map---//
          function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.2), zoom: 10
           };
            var map = new google.maps.Map(mapCanvas, mapOptions);
          }



