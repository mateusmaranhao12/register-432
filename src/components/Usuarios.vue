<template>
<!-- eslint-disable -->
<!-- prettier-ignore -->
    <div class="my-4">
        <div class="form-row">
            <div class="form-group col-md-12 col-sm-12">
                <button class="btn btn-success btn-sm float-right" @click="AddNew()">Add User</button>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mt-5">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Educ</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>Mateus</td>
                                <td>feradourada@gmail.com</td>
                                <td>22/02/2022</td>
                                <td> 
                                    <button class="btn btn-danger">Delete</button>
                                    <button class="btn btn-info"  @click="">Edit</button>
                                    <button class="btn btn-success">info</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- add users model -->
        <div class="modal fade" id="Users" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Add New Member</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        The Maker
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" v-if="modal == 'new'" @click="AddUsers()">Add Users</button>
                        <button type="button" class="btn btn-primary" v-if="modal == 'edit'" @click="updateUsers()">Update</button>
                    </div>

                </div>
            </div>
        </div> 
        <!-- ad user modal end -->

        
    </div>
</template>

<script>

export default {
  name: "users",
  data() {
    return {
      modal:null
    };
  },

  methods:{
    AddNew(){
        
      window.jQuery("#Users").modal('show');
      
    },

    editUsers(userid){
      this.modal = 'edit'
      this.users = userid
    }
    
  }
  
 
};
</script>