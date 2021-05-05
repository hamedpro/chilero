var template = 
`
<div id="show-data">
    <table class="table table-hover table-info table-striped">
        <thead>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>company</td>
                <td>{{company}}</td>
            </tr>
            <tr>
                <td>sample</td>
                <td>{{sample}}</td>
            </tr>
            <tr>
                <td>set_point</td>
                <td>{{set_point}}</td>
            </tr>
            <tr>
                <td>witemp</td>
                <td>{{witemp}}</td>
            </tr>
            <tr>
                <td>wotemp</td>
                <td>{{wotemp}}</td>
            </tr>
            <tr>
                <td>air_temp</td>
                <td>{{air_temp}}</td>
            </tr>
            <tr>
                <td>error</td>
                <td>{{error}}</td>
            </tr>
            <tr>
                <td>compno</td>
                <td>{{compno}}</td>
            </tr>
            <tr>
                <td>fancoil</td>
                <td>{{fancoil}}</td>
            </tr>
            <tr>
                <td>screen_active_time_in</td>
                <td>{{screen_active_time_in}}</td>
            </tr>
            <tr>
                <td>eco</td>
                <td>{{eco}}</td>
            </tr>
            <tr>
                <td>eco_set_point</td>
                <td>{{eco_set_point}}</td>
            </tr>
            
            <tr>
                <td>auto_start</td>
                <td>{{auto_start}}</td>
            </tr>
        </tbody>
    </table>
</div>

`;

Vue.component('show-data',{
    template,
    data:function(){
        return{
        company:"loading ...",
        sample:"loading ...",
        set_point:"loading ...",
        witemp:"loading ...",
        wotemp:"loading ...",
        air_temp:"loading ...",
        error:"loading ...",
        compno:"loading ...",
        fancoil:"loading ...",
        screen_active_time_in:"loading ...",
        eco:"loading ...",
        eco_set_point:"loading ...",
        auto_start:"loading ..."
        }
    },
    created:function(){
        setInterval(()=>{
            take_action({
                function_name:'get_table_as_json',
                table_name:'records'
            }).then(data => {
                let row = JSON.parse(data)[JSON.parse(data).length - 1];
                console.log(row)
                for(prop in row){
                    this[prop] = row[prop]
                };
            });
        },2000)
    }
})