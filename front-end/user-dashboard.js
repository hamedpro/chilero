$(document).ready(function(){
    function update_records(){
        $("#records_container").empty();
        let new_data = [];
        let records_count = api.get_records().length;
        let cached_records = api.get_records();
        console.log(cached_records)
        new_data.push(cached_records[records_count-5].number +" at "+ cached_records[records_count-5].time);
        new_data.push(cached_records[records_count-4].number +" at "+ cached_records[records_count-5].time);
        new_data.push(cached_records[records_count-3].number +" at "+ cached_records[records_count-5].time);
        new_data.push(cached_records[records_count-2].number +" at "+ cached_records[records_count-5].time);
        new_data.push(cached_records[records_count-1].number +" at "+ cached_records[records_count-5].time);
        

        new_data.forEach(number=>{
            $('#records_container').append(
                `
                <h2> ${number} </h2>
                `
            )
        })
    }
    setInterval(() => {
        update_records()
    }, 2000);

    $("#new_record_box button").click(function(){
        //collecting numbers =>
        let input_values = [];
        input_values.push(Number($("#new_record_box #input_1").val()));
        input_values.push(Number($("#new_record_box #input_2").val()));
        input_values.push(Number($("#new_record_box #input_3").val()));
        input_values.push(Number($("#new_record_box #input_4").val()));
        input_values.push(Number($("#new_record_box #input_5").val()));

        //send numbers to server =>
        input_values.forEach(value =>{
            api.new_record(value)
        })
        
    })
})
