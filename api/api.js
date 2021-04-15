let api = {};
api.get_records = function(){
    let return_value;
    $.ajax({
        url:"../backend/get_records.php",
        async:false,
        success:function(data){
            return_value = JSON.parse(data);
        }
    })
    return return_value;
}