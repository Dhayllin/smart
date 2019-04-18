
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
        btnActive: function(item){            
            var url = "btn-active-section/" + item.id; 
                axios.get(url).then(response => {

                    this.getSections();     
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Estado alterado!'
                    },{
                        type: 'success'
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
        btnActive: function(item){            
            var url = "btn-active-demand/" + item.id; 
                axios.get(url).then(response => {

                    this.getDemands();      
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Estado alterado!'
                    },{
                        type: 'success'
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
            this.selectedUser = item;
            Event.$emit('alertDelete', item);
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
        btnActive: function(item){            
            var url = "btn-active-type/" + item.id; 
                axios.get(url).then(response => {

                    this.getTypes();
                    $('.modal').modal('hide');
                    $.notify({
                        message: 'Estado alterado!'
                    },{
                        type: 'success'
                    });
                }); 
        },   
    }
})