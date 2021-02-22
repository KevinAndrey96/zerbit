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
  name: 'SignaturePad',
  methods: {
    undo() {
      this.$refs.signaturePad.undoSignature();
    },
    save() {
      const { isEmpty, data } = this.$refs.signaturePad.saveSignature();
      //console.log(data);
      axios.post('/signatures/'+window.location.href.split('/').pop(), {
        signature: data
      }).then(function (response) {
        window.location.href = '/users';
         console.log(response)
          }).catch(function (error) {
            console.log(error);
          });
    }
  }
};

</script>