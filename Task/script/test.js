
function chk()
{
    
     var mregex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    var charRegex =/^[a-zA-Z]+$/;
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var mail = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log('mail', mail);
    var res = false;
    var tier = getTier();
    console.log('t',tier);
    if (firstName === null || firstName.length < 1 ||
        lastName === null || lastName.length < 1 ||
        mail === null || mail.length < 1 ||
        password === null || password.length <1 ||
        tier===undefined || tier.length<1 || tier===null
        
    )
    {
        alert('not valid');
        return res;    
    }
    else {
        var d =mregex.test(mail);
       
        if (d)
        {
            if (charRegex.test(firstName)&&charRegex.test(lastName))
            {
                if (password.length > 4)
                {
                    res = true;
                    return res;
                 }
            }
            
        }
        alert('not valid');
        return res;

    }
    
   
}

function validateEmail(email) {
    const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return res.test(String(email).toLowerCase());
  }
function  getTier(){
    let element = document.getElementsByName('tier');
    for (i = 0; i < element.length; i++)
    {
        if (element[i].checked)
        {
            return element[i].value;
        }
        }
}