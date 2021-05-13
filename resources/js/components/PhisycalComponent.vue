<template>
  <div id="PhysicalComponent" class="container">
    <b-row class="mb-3">
      <b-col md="3">
        <b-form-input v-model="filter" type="search" id="filterInput" placeholder="Buscar"></b-form-input>
      </b-col>
      <b-col md="3">
        <a href="/physical-therapies/create" class="btn btn-primary">Nueva</a>
      </b-col>
    </b-row>
    <b-row>
      <b-col>
        <b-table
            responsive
            striped
            hover
            thead-tr-class="d-none"
            outlined
            :items="list"
            :filter="filter"
            :fields="fields"
        >
          <template v-slot:thead-top="data">
            <b-tr>
              <b-th><span>Id</span></b-th>
              <b-th>Documento</b-th>
              <b-th>Nombre</b-th>
              <b-th>Apellido</b-th>
              <b-th># Sesiones</b-th>
              <b-th>Fecha de firma</b-th>
              <b-th>Firma</b-th>
              <b-th>Opciones</b-th>
            </b-tr>
          </template>
          <template v-slot:cell(signature)="data">
            <img v-bind:src="data.item.signature" alt="" height="20px">
          </template>
          <template v-slot:cell(actions)="data">
            <form method="POST" v-bind:action="deleteRoute+''+data.item.id">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="csrf">
              <input type="submit" class="btn btn-danger form-control" value="Eliminar">
            </form>
            <a v-bind:href="showRoute+data.item.id" class="btn btn-info form-control">Ver</a>
          </template>
        </b-table>
      </b-col>
    </b-row>
  </div>

</template>

<script>
export default {
  name: "PhysicalComponent",
  props: {
    list: Array,
    csrf_token: String,
  },
  data() {
    return {
      fields: ["id", "patient.document", "patient.first_name", "patient.first_surname", "sessions_number", "created_at", "signature", "actions"],
      filter: "",
      list: this.list,
      createRoute: "/physical-therapies",
      deleteRoute: "/physical-therapies/",
      showRoute: "/physical-therapies/",
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