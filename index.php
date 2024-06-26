<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Timer</title>
</head>

<body>

  <div class="countdown" data-end="<?php echo $offer['to_date']; ?>">
  </div>


  <script>
    $('.countdown').each(function() {
      var $this = $(this);
      var toDate = $(this).data('end');

      console.log("iojca " + toDate);

      var countDownDate = new Date(toDate + "T15:37:25").getTime();

      var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var countdownStr = "<span>" + days +
          "<span class='padding-l'></span><span class='timer-cal'>Days </span></span>" + "<span>" + hours +
          "<span class='padding-l'></span><span class='timer-cal'>Hrs </span></span>" + "<span>" + minutes +
          "<span class='padding-l'></span><span class='timer-cal'>Min </span></span>" + "<span>" + seconds +
          "<span class='timer-cal'>Sec</span></span>";

        var demoElements = document.getElementsByClassName("demo");

        for (var i = 0; i < demoElements.length; i++) {
          demoElements[i].innerHTML = countdownStr;
        }

        if (distance < 0) {
          clearInterval(x);
          for (var i = 0; i < demoElements.length; i++) {
            demoElements[i].innerHTML = "EXPIRED";
          }
        }

        $this.html(countdownStr);

      }, 1000);


    });
  </script>
</body>

</html>