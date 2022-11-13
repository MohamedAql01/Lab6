function output_message(username, password) {
  var text1 = '';

  let x = document.getElementById('validation');
  if (username_check(username) == true && password.length != 0) {
    text1 = 'Valid credentials';
  }
  else if (username_check(username) == true && password.length == 0) {
    text1 = 'Password must not be left blank';
  }
  else if (username_check(username) == false && password.length == 0) {
    text1 = 'Username and password is invalid';
  }
  else {
    text1 = 'Username is invalid';
  }

  return text1;
}

function username_check(username) {
  var bool = false;
  var domain = ['gmail.com', 'hotmail.com', 'outlook.com', 'yahoo.com'];
  var inputted_domain = (username.split('@'))[1];

  for (let i = 0; i < domain.length; i++) {
    if (inputted_domain == domain[i]) {
      bool = true;
      break;
    }
  }

  return bool;
}

function validate() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  text = document.getElementById('validation');
  text.textContent = output_message(username, password);
}