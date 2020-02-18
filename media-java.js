function mvmtSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        mvmtOptionValue = document.getElementById("squat").value;
        if(mvmtOptionValue == nameSelect.value){
            document.getElementById("mvmtDivCheck").style.display = "block";
        }
        else{
            document.getElementById("mvmtDivCheck").style.display = "none";
        }
    }
    else{
        document.getElementById("mvmtDivCheck").style.display = "none";
    }
}