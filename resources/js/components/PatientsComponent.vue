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
            :items="patients"
            :filter="filter"
            :fields="fields"
        >
          <template v-slot:cell(actions)="data">
            <form method="POST" v-bind:action="deletePatientRoute+data.item.id">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="csrf">
              <input type="submit" class="btn btn-danger form-control" value="Eliminar">
            </form>
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
          <form method="POST" v-bind:action="createPatientRoute">
            <input type="hidden" name="_token" v-bind:value="csrf">
            <b-form-group
                label="Nombre"
                label-for="newPatient.name"
                invalid-feedback="Nombre es requerido"
            >
              <b-form-input
                  id="newPatient.name"
                  name="name"
                  required
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Documento"
                label-for="newPatient.document"
                invalid-feedback="Documento es requerido"
            >
              <b-form-input
                  id="newPatient.document"
                  name="document"
                  required
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Correo Electrónico"
                label-for="newPatient.email"
                invalid-feedback="Email es requerido"
            >
              <b-form-input
                  id="newPatient.email"
                  type="email"
                  name="email"
                  required
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Teléfono"
                label-for="newPatient.phone"
                invalid-feedback="Teléfono es requerido"
            >
              <b-form-input
                  id="newUser.email"
                  type="number"
                  name="phone"
                  required
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Dirección"
                label-for="newPatient.address"
                invalid-feedback="Dirección es requerido"
            >
              <b-form-input
                  id="newPatient.address"
                  type="text"
                  name="address"
                  required
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Acudiente (Opcional)"
                label-for="newPatient.guardian"
            >
              <b-form-input
                  id="newPatient.guardian"
                  type="text"
                  name="guardian"
              ></b-form-input>
            </b-form-group>
            <b-form-group
                label="Parentesco acudiente"
                label-for="newPatient.guardian_relationship"
            >
              <b-form-input
                  id="newPatient.guardian_relationship"
                  type="text"
                  name="guardian_relationship"
              ></b-form-input>
            </b-form-group>

            <input type="submit" class="btn btn-primary form-control" value="Crear Paciente">

          </form>
        </div>
        <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Cerrar</b-button>
      </b-modal>
    </div>
  </div>

</template>

<script>
export default {
  name: "PatientsComponent",
  props: {
    patients_list: Array,
    csrf_token: String,
  },
  data() {
    return {
      fields: ["id", "name", "document", "email", "phone", "address", "guardian", "guardian_relationship", "actions"],
      filter: "",
      patients: this.patients_list,
      createPatientRoute: "/patients",
      deletePatientRoute: "/patients/",
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