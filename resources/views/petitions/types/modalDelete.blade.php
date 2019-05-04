<form method="POST" v-on:submit.prevent="deleteTypes(fillType.id)">
    <div class="modal fade" id="alertDelete"   tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content col-md-8">
                <div class="modal-header ">                          
                </div> 
                <div class="modal-body">
                    <h4>Deletar <strong>@{{fillType.title}} </strong>  ?</h4> 
                </div>                                       
                <div class="modal-footer">
                    <div class="col">
                        <input type="submit" class="btn btn-danger" value="Confirmar">
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-success"  data-dismiss="modal">
                                Cancelarr
                        </button>  
                    </div>
                </div>  
            </div>
        </div>
    </div> 
</form>