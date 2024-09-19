$('#submit').click(function() {
    var mail = document.getElementById('forgotpassword').value;
  
    document.getElementById('spinner').style.display="block";
    $.post('restapi.php?checkUser=true', {
      mail: mail
    }, function(response) {
      
      if (response == 'S') {
        $.post('restapi.php?forgotPassword=true&mail=' + mail, function(response) {
          console.log(response);
    document.getElementById('spinner').style.display="none";
          if (response == 'S')
            document.getElementById('result').innerHTML = 'We Have Sent a Verification Link to Your Mail, Follow the instructions. The Link will be valid for 10 minutes';
          else if (response == 'F')
            document.getElementById('result').innerHTML = 'We Cannot Send Verification Link to Your Mail, Try Again Later.';
        });


      } else if (response == 'F') {
        document.getElementById('result').innerHTML = 'Email And Account Type Does Not Match';
      }



    });
  });