function validate()
  {
    const quantity1 = document.getElementById("num1").value;
    const quantity2 = document.getElementById("num2").value;
    const quantity3 = document.getElementById("num3").value;
    const quantity4 = document.getElementById("num4").value;
    const userName = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const option1 = document.getElementById("option1").value;
    const option2 = document.getElementById("option2").value;
    const option3 = document.getElementById("option3").value;

    if((quantity1 == "") && (quantity2 == "") && (quantity3 == "") && (quantity4 == "") && (userName == "") && (password == ""))
    {
      alert("One or more fields is empty!");
    }
    else if ((quantity1 < 0) && (quantity2 < 0) && (quantity3 < 0) && (quantity4 < 0))
    {
      alert("Quantity cannot be negative");
    }
    else
    {
        //link php file
    }

  }