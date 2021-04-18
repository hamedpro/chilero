$(document).ready(function(){
    function update_records(){
        $("#records_container").empty();
        api.get_records().forEach(record=>{
            $('#records_container').append(
                `
                <h2> ${record} </h2>
                `
            )
        })
    }
    setInterval(() => {
        update_records()
    }, 3000);

    $("#new_record_box button").click(function(){
        let input_value = $("#new_record_box input").val();
        api.new_record(Number(input_value))
    })
})
