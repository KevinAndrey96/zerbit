<template>
  <div id="UsersComponent" class="container">
    <b-row class="mb-3">
      <b-col md="3">
        <b-form-input v-model="filter" type="search" id="filterInput" placeholder="Buscar"></b-form-input>
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
            <b-button variant="danger" @click="deleteItem(data.item.id)">Delete</b-button>
          </template>
        </b-table>
      </b-col>
    </b-row>
  </div>
</template>
<script>
export default {
  name: "UsersComponent",
  props: [
    'users'
  ],
  data() {
    return {
      fields: ["id", "name", "email", "actions"],
      filter: "",
      users: this.users
    };
  },
  created() {
    console.log(this.users);
  },
  methods: {
    deleteItem(id) {
      const index = this.users.indexOf((x) => x.id === id);
      this.users.splice(index, 1);
    },
  },
}
</script>