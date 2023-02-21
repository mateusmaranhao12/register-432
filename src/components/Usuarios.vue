<template>
<!-- eslint-disable -->
<!-- prettier-ignore -->
    <div class="my-4">
        <div class="form-row">
            <div class="form-group col-md-12 col-sm-12">
                <button class="btn btn-success btn-sm" @click="adicionarNovo()">Adicionar Usuário</button>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mt-5">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Educ</th>
                            <th>Ação</th>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>Mateus</td>
                                <td>feradourada@gmail.com</td>
                                <td>22/02/2022</td>
                                <td> 
                                    <button class="btn btn-danger">Remover</button>
                                    <button class="btn btn-info">Editar</button>
                                    <button class="btn btn-success">info</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- add users model -->
        <div class="modal fade" id="Usuarios" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Adicionar novo membro</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome: </label>
                                    <input v-model="usuarios.nome" class="form-control" type="text" name="nome" id="nome" placeholder="Nome" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nome">Email: </label>
                                    <input v-model="usuarios.email" class="form-control" type="text" name="email" id="email" placeholder="e-mail" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nível de educação: </label>
                                    <select v-model="usuarios.educacao" class="form-select" name="educacao" id="educacao">
                                        <option v-for="e in educacao" :value="e">
                                            {{ e }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mt-3 ml-1">
                                    <input 
                                        v-model="usuarios.genero" 
                                        class="form-check-input" 
                                        type="radio" value="masculino" 
                                        id="genero" 
                                        name="genero" 
                                    /> 
                                        Masculino

                                    <input 
                                        v-model="usuarios.genero" 
                                        class="form-check-input" 
                                        type="radio" 
                                        value="feminino" 
                                        id="genero" 
                                        name="genero" 
                                    /> 
                                        Feminino
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Adicionar Usuário</button>
                    </div>

                </div>
            </div>
        </div> 
        <!-- ad user modal end -->

        
    </div>
</template>

<script>

export default {
  name: "Usuarios",
  data() {
    return {
        modal: '',
        educacao: ["Matric", "Inter", "Bachlor", "Master"],
        usuarios: {
            nome: '',
            email: '',
            educacao: '',
            genero: ''
        }
    }
  },

  methods:{
    adicionarNovo(){
        
      window.jQuery('#Usuarios').modal('show')
      
    }
    
  }
  
 
}

</script>