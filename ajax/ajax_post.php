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
    <form>
      <input type="text" id='name' placeholder='please Enter Name'><br>
      <input type="text" id='user_name' placeholder='please Enter user_name'><br>
      <input type="email" id='email' placeholder='please Enter email'><br>
      <input type="text" id='phone' placeholder='please Enter phone'><br>
      <input type="text" id='address' placeholder='please Enter address'><br>
      <input type="password" id='password' placeholder='please Enter password'><br>
      <input type="button" name='submit' id='submit' value='submit'>
    </form>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script type="text/javascript">
    $("#submit").on('click', function() {
      var name = $('#name').val();
      var user_name = $('#user_name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var password = $('#password').val();
      var address = $('#address').val();
      var submit = $('#submit').val();
      if (name == '' || user_name == '' || email == '' || phone == '' || password == '') {
        alert("Please fill all fields.");
        return false;
      }
      $.ajax({
        type: "POST",
        url: 'postdata.php',
        data: {
          name: name,
          user_name: user_name,
          email: email,
          phone: phone,
          address: address,
          password: password,
          submit: submit,
        },
        success: function(data) {
          // console.log(data);
          console.log(data.success);
          // console.log(data.errors);
          alert(data);
        }

      });
    });
  </script>

</body>

</html>