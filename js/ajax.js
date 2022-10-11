$(document).ready(function(){
    $(".message a").click(function(){
        $('form').animate({heigt:"toggle",opacity:"toggle"},"fast");
    });
});
function checkUsername(){
    $username=$('#uname').val();
    $.ajax({
        url:'signup.php',
        method:'get',
        data:{'usernam':$username},
        success:function(data){
            $('#availability').html(data);
        },error:function(){}
    });
};
function checkLogin(){
    $username=$('#uname').val();
    $.ajax({
        url:'Login.php',
        method:'get',
        data:{'username':$username},
        success:function(data){
            $('#availability').html(data);
        },error:function(){}
    });
};

function bookedDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Place..?');
    if($cnf){
        $.ajax({
            url:"delete.php",
            method:"post",
            data:{record4:id},
            success:function(data){
                alert(data);
            }
        });
        
    }else{
        viewbooked()
}
}
/**
 * The function `copyRight()` gets the current year and displays it in the footer.
 */
 function copyRight(){
    var date= new Date();
    $fullYear=date.getFullYear();
    $("#getyear").html($fullYear);
    }
    /* Calling the function `copyRight()` every 100000 milliseconds. */
    setInterval(copyRight(),100000);