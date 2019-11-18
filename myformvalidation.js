function validateForm() {
    var rego = document.forms["bookingform"]["Rego"].value;
    var desc = document.forms["bookingform"]["Description"].value;
    var thedate = document.forms["bookingform"]["Date"].value;
    var cust = document.forms["bookingform"]["CustomerID"].value;
    if (rego == "") {
      alert("Rego must be filled out");
      return false;
    }
    if (desc == "") {
        alert("Description must be filled");
        return false;
      }
    if(thedate == "01-01-1970")
    {
      alert("Date must be filled");
        return false;
    }
    if ( cust== "") {
      alert("Customer must be Selected");
      return false;
    }
}

function validatecustomerForm()
{
    var name = document.forms["customerform"]["CustomerID"].value;
    var ph = document.forms["customerform"]["Phnum"].value;
    var email = document.forms["customerform"]["Email"].value;
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (ph == "") {
        alert("Phone number field must be filled");
        return false;
    }
    if (email == "") {
        alert("Email field must be filled");
        return false;
    }
}