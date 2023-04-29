function CheckValidity(){
    var res=false;
    var firstName=document.getElementById('firstName');
    var lastName=document.getElementById('lastName');
    var dob=document.getElementById('dob');
    var primaryContact=document.getElementById('primaryContact');
    var gender=GetGender();

    console.log(firstName,lastName,dob,primaryContact,gender);
    alert('hi')
    return res;
}

function GetGender(){
  let element = document.getElementsByName('gender');
    for (i = 0; i < element.length; i++)
    {
        if (element[i].checked)
        {
            return element[i].value;
        }
        }
}
function cv(){
    alert('hi')
    return false;
}