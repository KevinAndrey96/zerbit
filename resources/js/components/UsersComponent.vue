<template>
  <div id="UsersComponent" class="container">
    <b-row class="mb-3">
      <b-col md="3">
        <b-form-input v-model="filter" type="search" id="filterInput" placeholder="Buscar"></b-form-input>
      </b-col>
      <b-col md="3">
        <b-button id="show-btn" @click="$bvModal.show('bv-modal-example')">Nuevo</b-button>
      </b-col>
    </b-row>
    <b-row>
      <b-col>
        <b-table
            striped
            hover
            outlined
            :items="users"
            :filter="filter"
            :fields="fields"
        >
          <template v-slot:cell(actions)="data">
            <form method="POST" v-bind:action="deleteUserRoute+data.item.id">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="csrf">
              <input type="submit" class="btn btn-danger form-control" value="Eliminar">
            </form>
            <a class="btn btn-info form-control" v-bind:href="'/signatures/'+data.item.id">Firma</a>
          </template>
        </b-table>
      </b-col>
    </b-row>
    <div>
      <b-modal id="bv-modal-example" hide-footer>
        <template #modal-title>
          Crear Usuario
        </template>
        <div class="d-block text-center">
          <form method="POST" v-bind:action="createUserRoute">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <b-form-group
                label="Nombre"
                label-for="newUser.name"
                invalid-feedback="Nombre es requerido"
            >
              <b-form-input
                  id="newUser.name"
                  name="name"
                  required
              ></b-form-input>
            </b-form-group>

            <b-form-group
                label="Correo Electrónico"
                label-for="newUser.email"
                invalid-feedback="Email es requerido"
            >
              <b-form-input
                  id="newUser.email"
                  type="email"
                  name="email"
                  required
              ></b-form-input>
            </b-form-group>

            <b-form-group
                label="Contraseña"
                label-for="newUser.password"
                invalid-feedback="Contraseña es requerido"
            >
              <b-form-input
                  id="newUser.password"
                  type="password"
                  name="password"
                  required
              ></b-form-input>
            </b-form-group>

            <input type="submit" class="btn btn-primary form-control" value="Crear Usuario">

          </form>
        </div>
        <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Cerrar</b-button>
      </b-modal>
    </div>
  </div>

</template>

<script>
export default {
  name: "UsersComponent",
  props: {
    users_list: Array,
    csrf_token: String,
  },
  data() {
    return {
      fields: ["id", "name", "email", "actions"],
      filter: "",
      users: this.users_list,
      newUser: {
        name: '',
        email: '',
        password: ''
      },
      name: '',
      createUserRoute: "/users",
      deleteUserRoute: "/users/",
      csrf: $('meta[name="csrf-token"]').attr('content'),
    };
  },
  created() {

  },
  methods: {
    deleteItem(id) {
      const index = this.users_list.indexOf((x) => x.id === id);
      this.users_list.splice(index, 1);
    }
  },
}
</script>