<template>
<!-- eslint-disable -->
<!-- prettier-ignore -->
    <div class="my-4">
        <div class="form-row">
            <div class="form-group col-md-12 col-sm-12">
                <button class="btn btn-success btn-sm" @click="adicionarNovo()"><i class="fa-solid fa-plus"></i> Adicionar Usuário</button>
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
                                    <button class="m-1 btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                    <button class="m-1 btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="m-1 btn btn-success"><i class="fa-solid fa-circle-info"></i></button>
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

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="adicionarUsuario()">Adicionar Usuário</button>
                    </div>

                </div>
            </div>
        </div> 
        <!-- ad user modal end -->

        
    </div>
</template>

<script>

import axios from 'axios'
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
    },

    adicionarUsuario() {

        let data = new FormData()
        data.append('nome', this.usuarios.nome)
        data.append('email', this.usuarios.email)
        data.append('educacao', this.usuarios.educacao)
        data.append('genero', this.usuarios.genero)
        axios.post(
            'http://localhost/Projetos/register-432/src/Api/api.php?action=adicionarusuario', 
            data
        ).then((res) => {
            if(res.data.error) {
                alert('Erro')
            } else {
                window.jQuery('#Usuarios').modal('hide')
                alert(res.data.mensagem)
                this.limparFormulario()
            }
        }).catch((err) => {
            console.log(err)
        })

    },

    limparFormulario() {
        this.usuarios.nome = ''
        this.usuarios.email = ''
        this.usuarios.educacao = ''
        this.usuarios.genero = ''
    }
    
  }
  
 
}

</script>