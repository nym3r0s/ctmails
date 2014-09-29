function validate()
{
    var flag =0;
    for(var i=1;i<=count;i++)
    {
        var divname = 'f'+i;
        var subcode = 'sub'+i;
        var prof = 'prof'+i;

        var subname = document.getElementById(subcode).value;
        var profname = document.getElementById(prof).value;

        if((subname=="")||(profname=="")){
        document.getElementById(divname).className = 'form-group has-error';
//        document.getElementById(subcode).className = 'form-group has-error';
//        document.getElementById(prof).className = 'form-group has-error';
            flag=1;
        }
        else{
        document.getElementById(divname).className = 'form-group has-success';
//        document.getElementById(subcode).className = 'form-group has-success';
//        document.getElementById(prof).className = 'form-group has-success';
        }

    }

 if(flag==0){
     document.getElementById('theform').submit();
 }
}
