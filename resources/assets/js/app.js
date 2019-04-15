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

                    this.getSections();
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Deletado com sucesso!'
                    },{
                        type: 'danger'
                    });
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
                    
                    this.getDemands();                   
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Deletado com sucesso!'
                    },{
                        type: 'danger'
                    });
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
        types: [],
        showModal: true
    },
    methods: {
        getTypes: function(){
            var urlTypes = "list-types";
                axios.get(urlTypes).then(response =>{
                    this.types = response.data
            })
        },

        getModalId: function(item){               
            $('#alertDelete').modal('show');
        },
        deleteTypes: function(item){            
            var url = "types/" + item.id; 
                axios.delete(url).then(response => {
                    this.getTypes();
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Deletado com sucesso!'
                    },{
                        type: 'danger'
                    });
                }); 
        },    
    }
})