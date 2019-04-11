var app = new Vue({
    el:"#appvue",
    data:{
        title: "Vue js do jeito  ninja! 04", 
        linguagens:[
            {nome: "Javascript"},
            {nome: "PHP"} ,             
            {nome: "Java"},     
            {nome: "Python"},
        ]             
    }
})

var app = new Vue({
    el:"#list_sections",    
    created: function(){
        this.getSections()
    }, 
    data:{
        sections: []
    },
    methods: {
        getSections: function(){
            var urlSections = "list-sections";
                   axios.get(urlSections).then(response =>{
                this.sections = response.data
            })
        }
    }
})