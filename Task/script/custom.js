
function checkValidity()
{
    console.log('asj');
    var mregex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    

    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var mail = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var tier = getTier();
    if (mregex.match(mail))
    {
        
     }
    console.log(firstName, lastName , mail, password, tier);

}
function cv(){

    console.log('cv');
    alert('hey');
    return false;
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

function show()
{
    var data = document.getElementById('txt').value;
    console.log(data);
   // alert("yo",data);
   var r = checkLegth(data);
   console.log(r);
   return r;
}
function checkLegth(data)
{
    console.log(data);
    if (data.length <1)
        return false;
    return true;
}

function LoadData()
{
    var data=document.getElementById('search').value;
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (this.readyState === 2)
        {
            document.getElementById('stat').innerHTML = "request has been processing";
            }
        if (this.readyState === 4 &&  this.status === 200)
        {
            document.getElementById('ajx').innerHTML=this.responseText;    
        }
    }

    req.open("POST", "http://localhost/class/Lab4/task/controller/ajxController.php", true);
   //for post method
    req.setRequestHeader('Content-Type','application/x-www form-urlencoded')
//
    req.send(`search=${data}`);

}