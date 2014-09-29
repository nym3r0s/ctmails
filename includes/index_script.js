
function checkradios(x)
{


var i;
var k = document.getElementsByName(x);
var flag = 0;
for(i=0;i<k.length;i++){

    if(k[i].checked == true)
    {
        flag =1;
        break;
    }
}

    if(flag==0){
        document.getElementById('div_'+x).className += ' has-error';
        return false;
    }

    else{
        document.getElementById('div_'+x).className = 'form-group has-success';
        return true ;
    }

}

function checkselect(x)
{

var i;
var k = document.getElementsByName(x);
var flag = 0;
for(i=0;i<k.length;i++){

    if(k[i].value == "")
    {
        flag =1;
        break;
    }
}

    if(flag==1){
        document.getElementById('div_'+x).className += ' has-error';
        return false;
    }

    else{
        document.getElementById('div_'+x).className = 'form-group has-success';
        return true ;
    }

}

function checkdate(){
 if(document.getElementsByName('date_check')[0].value=="")
 {
    document.getElementById('div_date').className = 'form-group has-error';
    return false;
 }
 else{
    document.getElementById('div_date').className = 'form-group has-success';
    return true;
}

}



function validate(){
var dept = checkselect('dept');
var prof_cnt = checkselect('prof_cnt');

var mark=checkradios('mark');
var sem=checkradios('sem');
var sem_type=checkradios('sem_type');
var exam_type=checkradios('exam_type');

var date = checkdate();

if(dept&&prof_cnt&&mark&&sem&&sem_type&&exam_type&&date)
{

    var d = document.getElementsByName('date_check')[0].value.split('-');
    var tmp = d[2];
    d[2] = d[0];
    d[0] = tmp;

    var m = d.join('-');

    document.getElementsByName('date')[0].value = m;

//    alert(document.getElementsByName('date')[0].value);
//    alert(m);

    document.getElementById('theform').submit();
}
}
