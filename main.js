
$("#num").submit(function(e){

    let m_data = new FormData ($("#num").get(0));
    
    e.preventDefault();
    
    $.ajax({
    
    type: "post",
    contentType:false,
    dataType:false,
    processData:false,
    url: "api_set.php",
    data:m_data,
    
    success: function (result){
    
        console.log("succesfull connection");
        $("#s").html(result);
    
    }
    
    
    
    
    });
    
    
    });