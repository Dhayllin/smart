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
        },

        deleteSections: function(item){            
            var url = "sections/" + item.id;        
                axios.delete(url).then(response => {
                    console.log(response);
                    this.getSections();
                }); 
        },
    }
})

var app = new Vue({
    el:"#list_demands",    
    created: function(){
        this.getDemands()
    }, 
    data:{
        demands: []
    },
    methods: {
        getDemands: function(){
            var urlDemands = "list-demands";
                axios.get(urlDemands).then(response =>{
                    this.demands = response.data
            })
        },

        deleteDemands: function(item){            
            var url = "demands/" + item.id;        
                axios.delete(url).then(response => {
                    console.log(response);
                    this.getDemands();
                }); 
        },
    }
})

var app = new Vue({
    el:"#list_types",    
    created: function(){
        this.getTypes()
    }, 
    data:{
        types: []
    },
    methods: {
        getTypes: function(){
            var urlTypes = "list-types";
                axios.get(urlTypes).then(response =>{
                    this.types = response.data
            })
        },

        deleteTypes: function(item){            
            var url = "types/" + item.id;        
                axios.delete(url).then(response => {
                    console.log(response);
                    this.getTypes();
                }); 
        },
    }
})