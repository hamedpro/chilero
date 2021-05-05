var template = 
`
<div id="new-data">
    <table class="table table-info table-striped table hover">
    <thead>
        <tr>
            <th>key</th>
            <th>value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>company</td>
            <td><input type="text" id="company"></td>
        </tr>
        <tr>
            <td>sample</td>
            <td><input type="text" id="sample"></td>
        </tr>
        <tr>
            <td>set_point</td>
            <td><input type="text" id="set_point"></td>
        </tr>
        <tr>
            <td>witemp</td>
            <td><input type="text" id="witemp"></td>
        </tr>
        <tr>
            <td>wotemp</td>
            <td><input type="text" id="wotemp"></td>
        </tr>
        <tr>
            <td>air_temp</td>
            <td><input type="text" id="air_temp"></td>
        </tr>
        <tr>
            <td>error</td>
            <td><input type="text" id="error"></td>
        </tr>
        <tr>
            <td>compno</td>
            <td><input type="text" id="compno"></td>
        </tr>
        <tr>
            <td>fancoil</td>
            <td><input type="text" id="fancoil"></td>
        </tr>
        <tr>
            <td>screen_active_time_in</td>
            <td><input type="text" id="screen_active_time_in"></td>
        </tr>
        <tr>
            <td>eco</td>
            <td><input type="text" id="eco"></td>
        </tr>
        <tr>
            <td>eco_set_point</td>
            <td><input type="text" id="eco_set_point"></td>
        </tr>

        <tr>
            <td>auto_start</td>
            <td><input type="text" id="auto_start"></td>
        </tr>
    </tbody>
    

    </table>

    <button id="submit" class="btn-primary text-light">submit data</button>
</div>
`;

Vue.component('new-data',{
    template,
    created:function(){
        $('#new-data').ready(()=>{
        $('#submit').click(()=>{
            submit_data();
        })
    })
    }
    
})

function submit_data(){
    let user_confirm = window.confirm('are you sure?');
    if(!user_confirm) return false;
    let data_object = {
        function_name:'new_record',
        company:$('#company').val(),
        sample:$('#sample').val(),
        set_point:$('#set_point').val(),
        witemp:$('#witemp').val(),
        wotemp:$('#wotemp').val(),
        air_temp:$('#air_temp').val(),
        error:$('#error').val(),
        compno:$('#compno').val(),
        fancoil:$('#fancoil').val(),
        screen_active_time_in:$('#screen_active_time_in').val(),
        eco:$('#eco').val(),
        eco_set_point:$('#eco_set_point').val(),
        auto_start:$('#auto_start').val()
    };
    take_action(data_object).then(answer=>{
        if(answer == 'true'){
            alert('done successfuly !');
        }else{
            alert('there was an error, try again !')
        }
    })
}

