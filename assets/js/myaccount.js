function toggle() {
    if (document.querySelector(".hideit").style.display == "none") {
      document.querySelector(".hideit").style.display = "block";
      document.querySelector(".paytgl").style.display = "none";
    } else {
      document.querySelector(".hideit").style.display = "none";
      document.querySelector(".paytgl").style.display = "inline-block";
    }
  }
  
  $('#prom').click(function() {
  const promo = $("#promo").val();
  const roll = $("#roll").val();
  if (!promo || !roll ) {
    document.getElementById('error-message').innerHTML='Please fill all the fields';
    setTimeout(() => {
      document.querySelector('#error-message').style.display='none';
    }, 4000);
    document.querySelector('#error-message').style.display='block';
  }
  else if (roll.length !=10) {
    document.getElementById('error-message').innerHTML='Check your roll number';
    setTimeout(() => {
      document.querySelector('#error-message').style.display='none';
    }, 4000);
    document.querySelector('#error-message').style.display='block';
  }
  else if (prom =="E") {
    document.getElementById('error-message').innerHTML='Check promocode';
    setTimeout(() => {
      document.querySelector('#error-message').style.display='none';
    }, 4000);
    document.querySelector('#error-message').style.display='block';
  }
  else {
    $.ajax({
    url: 'restapi.php?promo=true&email=<?php echo $_SESSION['email']; ?>',
    type: 'post',
    data: {
      roll: roll
    },
    success: function (data) {
      console.log(data);
      
      document.querySelector('#error-message').innerHTML="Promo applied successfully";
    setTimeout(() => {
      document.querySelector('#error-message').style.display='none';
      window.location.reload();
    }, 800);
    document.querySelector('#error-message').style.display='block';
      
    },
    error: function(data) {
      console.log(data);
    }
  })
    
  }

})

