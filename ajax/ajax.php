<html>

<head>
  <title>AJAX</title>
  <style type="text/css">
    body {
      font-family: Verdana, Geneva, sans-serif;
    }

    .container {
      width: 50%;
      margin: 0 auto;
    }

    table,
    tr,
    th,
    td {
      border: 1px solid #e3e3e3;
      padding: 10px;
    }
  </style>
</head>

<body>

  <div class="container">
    <p><strong>Click on button to display users records from database</strong></p>

    <div id="records"></div>
    <p>
      <input type="button" id="getusers" value="Fetch Records" />
      <a href="ajaxpostexp.php"><input type="button" value="New Add Record" id="modal-body"></a>
    </p>
    <div id='div1'></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#getusers").on('click', function() {

        $.ajax({
          method: "GET",
          url: "getajaxdata.php",
        }).done(function(data) {
          console.log(data);
          document.getElementById('div1').innerHTML = data;
          // document.write(data);
          // window.location.reload();
        });
      });

    });
  </script>

</body>

</html>