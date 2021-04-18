let api = {};
api.get_records = function(){
    let return_value;
    $.ajax({
        url:"../back-end/get_records.php",
        async:false,
        success:function(data){
            return_value = JSON.parse(data);
        }
    })
    return return_value;
}
api.new_record = function(number){
    let return_value;
    $.ajax({
        url:"../back-end/new_record.php",
        async:false,
        data:{
            number:number
        },
        success:function(data){
            if(JSON.parse(data)['state'] == true){
            return_value = true;
            }else{
            return_value = false ;
            }
        }
    })
    return return_value;
}