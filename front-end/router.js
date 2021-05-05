let routes = [
    {
        path:"/",
        component:{
            template:"<home></home>"
        }
    },
    {
        path:"/new-data",
        component:{
            template:"<new-data></new-data>"
        }
    },
    {
        path:"/show-data",
        component:{
            template:"<show-data></show-data>"
        }
    },

]
let router = new VueRouter({
    routes
})