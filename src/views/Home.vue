<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 ml-auto mr-auto offset-md-4">
          <div class="card my-4">
            <div class="card-heading">
              <h4 class="h card-title bg-info p-3 text-center text-white">
                Admin Login
              </h4>
            </div>
            <div class="card-body">
              <form action="">
                <div class="form-row">
                  <div class="form-group col-md-12 mx-2">
                    <label for="user">Usuário</label>
                    <input type="text" placeholder="Usuário" id="usuario" class="form-control mb-3" name="usuario"/>
                  </div>
                  <div class="form-group col-md-12 mx-2">
                    <label for="user">Senha</label>
                    <input type="password" placeholder="Senha" id="senha" class="form-control" name="senha"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <button class="btn btn-primary float-end mt-2">Fazer login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>