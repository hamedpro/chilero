function update_results(){
    //empty container => 
    $("body").empty();

    //get and inject records => 
    api.get_records().forEach(record =>{
        $("body").append(record)
        $("body").append("<br>");
    })
}
setInterval(function(){
    update_results();
},3000)