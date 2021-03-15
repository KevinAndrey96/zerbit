<template>
  <div id="app">
    <VueSignaturePad width="1000px" height="500px" ref="signaturePad" />
    <div>
      <button @click="save">Guardar</button>
      <button @click="undo">Borrar</button>
    </div>
  </div>
</template>
<script>
export default {
  name: 'GenericSignature',
  props: {
    id: Number,
    stype: String,
  },
  data() {
    return {
      signature: this.stype,
      id: this.id,
      csrf: $('meta[name="csrf-token"]').attr('content'),
    }
  },
  created() {
  },
  methods: {
    undo() {
      this.$refs.signaturePad.undoSignature();
    },
    save() {
      const { isEmpty, data } = this.$refs.signaturePad.saveSignature();

      axios.post('/generic-signature', {
        id: this.id,
        signatureType: this.stype,
        dataSignature: data
      }).then(function (response) {
        console.log(response)
        window.location.href = response.data
      }).catch(function (error) {
        console.log(error);
      });
    }
  }
};

</script>