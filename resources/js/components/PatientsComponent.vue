<template>
  <div id="PatientsComponent" class="container">
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
            responsive
            striped
            hover
            outlined
            :items="patients"
            :filter="filter"
            :fields="fields"
            :filter-included-fields="['actions']">
        >
          <template v-slot:thead-top="data" scope="data">
          <b-tr>
            <b-th><span>Id</span></b-th>
            <b-th>Nombre</b-th>
            <b-th>Documento</b-th>
            <b-th>Correo</b-th>
            <b-th>Teléfono</b-th>
            <b-th>Dirección</b-th>
            <b-th>Opciones</b-th>
          </b-tr>
          </template>
          <template v-slot:cell(actions)="data" scope="data">
            <a class="btn btn-info form-control" v-bind:href="clinicalHistoriesRoute+data.item.document">H. clínicas</a>
            <a class="btn btn-primary form-control" v-bind:href="labSamplesRoute+data.item.document">Consentimientos</a>
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
            <b-form-group label="Primer Nombre" label-for="newPatient.first_name" invalid-feedback="Nombre es requerido">
              <b-form-input id="newPatient.first_name" name="first_name" required></b-form-input>
            </b-form-group>
            <b-form-group label="Segundo Nombre" label-for="newPatient.second_name" invalid-feedback="Nombre es requerido">
              <b-form-input id="newPatient.name" name="second_name"></b-form-input>
            </b-form-group>
            <b-form-group label="Primer Apellido" label-for="newPatient.first_surname" invalid-feedback="Apellido es requerido">
              <b-form-input id="newPatient.first_surname" name="first_surname" required></b-form-input>
            </b-form-group>
            <b-form-group label="Segundo Apellido" label-for="newPatient.second_surname" invalid-feedback="Apellido es requerido">
              <b-form-input id="newPatient.second_surname" name="second_surname"></b-form-input>
            </b-form-group>

            <b-form-group label="Fecha de nacimiento" label-for="newPatient.birthdate" invalid-feedback="Fecha de nacimiento es requerido">
              <b-form-datepicker id="newPatient.birthdate" name="birthdate" required></b-form-datepicker>
            </b-form-group>

            <b-form-group label="Estado civil" label-for="newPatient.civil_status" invalid-feedback="Apellido es requerido">
              <b-form-input id="newPatient.civil_status" name="civil_status" required></b-form-input>
            </b-form-group>

            <b-form-group label="Genero" label-for="newPatient.gender" invalid-feedback="Genero es requerido">
              <b-form-select v-model="selected" name="gender" class="mb-3">
                <b-form-select-option :value="null">Seleccione una opción</b-form-select-option>
                <b-form-select-option value="male">Masculino</b-form-select-option>
                <b-form-select-option value="female">Femenino</b-form-select-option>
                <b-form-select-option value="other">Otro</b-form-select-option>
              </b-form-select>
            </b-form-group>

            <b-form-group label="EPS" label-for="newPatient.eps" invalid-feedback="EPS es requerida">
              <b-form-input id="newPatient.eps" name="eps" required></b-form-input>
            </b-form-group>

            <b-form-group label="Ocupación" label-for="newPatient.occupation" invalid-feedback="Ocupación es requerida">
              <b-form-input id="newPatient.occupation" name="occupation" required></b-form-input>
            </b-form-group>

            <b-form-group label="Tipo de documento" label-for="newPatient.document_type" invalid-feedback="Documento es requerido">
              <b-form-select v-model="selected" name="document_type" class="mb-3">
                <b-form-select-option :value="null">Seleccione una opción</b-form-select-option>
                <b-form-select-option value="cc">CC</b-form-select-option>
                <b-form-select-option value="ti">TI</b-form-select-option>
                <b-form-select-option value="ce">CE</b-form-select-option>
                <b-form-select-option value="other">Otro</b-form-select-option>
              </b-form-select>
            </b-form-group>

            <b-form-group label="Documento" label-for="newPatient.document" invalid-feedback="Documento es requerido">
              <b-form-input id="newPatient.document" name="document" required></b-form-input>
            </b-form-group>
            <b-form-group label="Correo Electrónico" label-for="newPatient.email" invalid-feedback="Email es requerido">
              <b-form-input id="newPatient.email" type="email" name="email" required></b-form-input>
            </b-form-group>
            <b-form-group label="Teléfono" label-for="newPatient.phone" invalid-feedback="Teléfono es requerido">
              <b-form-input id="newUser.email" type="number" name="phone" required></b-form-input>
            </b-form-group>
            <b-form-group label="Dirección" label-for="newPatient.address" invalid-feedback="Dirección es requerido">
              <b-form-input id="newPatient.address" type="text" name="address" required></b-form-input>
            </b-form-group>
            <b-form-group label="Acudiente (Opcional)" label-for="newPatient.guardian">
              <b-form-input id="newPatient.guardian" type="text" name="guardian"></b-form-input>
            </b-form-group>
            <b-form-group label="Teléfono acudiente" label-for="newPatient.guardian_phone">
              <b-form-input id="newPatient.guardian_phone" type="text" name="guardian_phone"></b-form-input>
            </b-form-group>
            <b-form-group label="Parentesco acudiente" label-for="newPatient.guardian_relationship">
              <b-form-input id="newPatient.guardian_relationship" type="text" name="guardian_relationship"></b-form-input>
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
      fields: ["id", "first_name", "document", "email", "phone", "address", "actions"],
      filter: ["id", "first_name", "document", "email", "phone", "address", "actions"],
      patients: this.patients_list,
      createPatientRoute: "/patients",
      deletePatientRoute: "/patients/",
      clinicalHistoriesRoute: "/clinical-histories/",
      labSamplesRoute: "/lab-samples/",
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