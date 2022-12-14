function checkValidity()
{
    console.log('asj');
    var mregex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    

    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var mail = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var tier = getTier();

    console.log(firstName, lastName , mail, password, tier);

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