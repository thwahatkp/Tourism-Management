function viewcustomer(){
    $.ajax({
        url:"../admin/viewcustomer.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function customerDelete(id , full){
    $cnf=confirm('Are you sure delete '+full+'..?');
    if($cnf){
        $.ajax({
            url:"./delete.php",
            method:"post",
            data:{record1:id},
            success:function(data){
                // alert(full+' Details Successfully deleted');
                // $('.admincontent').trigger('reset');
                viewcustomer()
            }
        });
        
    }else{
        viewcustomer()
}
}
function viewfeedback(){
    $.ajax({
        url:"../admin/viewfeedback.php",
        method:"post",
        data:{record1:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function feedbackDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Feedback..?');
    if($cnf){
        $.ajax({
            url:"../admin/delete.php",
            method:"post",
            data:{record:id},
            success:function(data){
                // alert(nme+" "+data);
                viewfeedback()
            }
        });
        
    }else{
        viewfeedback()
}
}
function viewplace(){
    $.ajax({
        url:"../admin/viewplace.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function placeDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Place..?');
    if($cnf){
        $.ajax({
            url:"../admin/place.php",
            method:"post",
            data:{record:id},
            success:function(data){
                viewplace()
            }
        });
        
    }else{
        viewplace()
}
}
function placeUpdateForm(id){
    $.ajax({
        url:"../admin/placeupdate.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.admincontent').html(data);
        }
    });

}
function placeUpdate(id,place,city){
    $.ajax({
        url:"../admin/placeupdatecode.php",
        method:"post",
        data:{Id:id,place:place,city:city},
        success:function(data){
            alert(place+" "+data);
            viewplace()
        }
    });

}
function placeInsertForm(){
    $.ajax({
        url:"../admin/place.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function insertPlace(placename,city){
    $.ajax({
        url:"../admin/insertplace.php",
        method:"post",
        data:{placename:placename,city:city},
        success:function(data){
            // $('.admincontent').html(data);
            alert(data);
            // $('.admincontent').trigger('reset');
            placeInsertForm()
        }
    });
}
function destination(){
    $.ajax({
        url:"../admin/viewdestination.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function destinationDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Place..?');
    if($cnf){
        $.ajax({
            url:"../admin/delete.php",
            method:"post",
            data:{record2:id,src:nme},
            success:function(data){
                // window.location="../admin/viewdestination.php";
                // alert("Delete success Please Reload page ");
                $reload=confirm("Delete success Reload page..? ");
                if($reload){
                    window.location="../admin/viewdestination.php";
                }else{

                }

                // destination()
            }
        });
        
    }else{
        destination()
}
}
function destinationInsertForm(){
    $.ajax({
        url:"../admin/destinationform.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function viewgallery(){
    $.ajax({
        url:"../admin/viewgallery.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);

        }

    });
}
function galleryInsertForm(){
    $.ajax({
        url:"../admin/galleryinsertform.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function galleryDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Place..?');
    if($cnf){
        $.ajax({
            url:"../admin/delete.php",
            method:"post",
            data:{record3:id,src:nme},
            success:function(data){
                $reload=confirm("Delete success Reload page..? ");
                if($reload){
                    window.location="../admin/viewgallery.php";
                }else{

                }
            }
        });
        
    }else{
        window.location="../admin/viewgallery.php";

}
}
function viewbooked(){
    $.ajax({
        url:"../admin/viewbooked.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.admincontent').html(data);
        }
    });
}
function bookedDelete(id,nme){
    $cnf=confirm('Are you sure delete '+nme+' Place..?');
    if($cnf){
        $.ajax({
            url:"../admin/delete.php",
            method:"post",
            data:{record4:id},
            success:function(data){
                viewbooked()
            }
        });
        
    }else{
        viewbooked()
}
}

// Data table library
