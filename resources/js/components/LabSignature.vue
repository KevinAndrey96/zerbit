<template>
  <div id="LabSignature">
  <form-wizard title="Formato muestra de laboratorio"
               @on-complete="onComplete"
               subtitle="Por favor rellena los campos solicitados a continuación"
               next-button-text="Siguiente"
               back-button-text="Atrás"
               finish-button-text="Finalizar"
               color="#99be12"
  >
    <tab-content title="Información de muestra" >
      <div class="form-group">
        <label >Tipo de muestra</label><br>
        <input type="text" class="form-control" v-model="labSampleForm.sampleType" placeholder="Ej. Sanguinea">
      </div>
      <div class="form-group">
        <label for="patient_id">Paciente</label><br>
        <v-select id="patient_id" :options="patients" v-model="labSampleForm.patientID" searchable/>
      </div>
    </tab-content>
    <tab-content title="Autorizaciones">
      <div class="form-group">
        <label>Autorizo realizar la toma de muestra: </label><br>
        <input type="radio" v-model="labSampleForm.authSample" value="true" id="authorized" name="authorized">
        <label for="authorized"> Si Autorizo</label><br>
        <input type="radio" v-model="labSampleForm.authSample" value="false" id="unauthorized" name="authorized">
        <label for="unauthorized"> No Autorizo</label><br>
      </div>
      <hr>
      <div class="form-group">
        <label>Autorizo el envío de resultados vía: </label><br>
        <input type="radio" v-model="labSampleForm.emailDelivery" id="email" value="true" name="delivery_method">
        <label >CORREO ELECTRÓNICO</label><br>
        <input type="radio" v-model="labSampleForm.emailDelivery" id="physical" value="false" name="delivery_method" >
        <label >EN FÍSICO</label><br>
      </div>
      <hr>
      <div class="form-group">
        <label>¿Quién firma?</label><br>
        <input type="radio" v-model="labSampleForm.signedByHimself" value="true" id="signed_by_himself" name="signed_by_himself">
        <label for="signed_by_himself"> Firma propia</label><br>
        <input type="radio" v-model="labSampleForm.signedByHimself" value="false" id="signed_by_guardian" name="signed_by_himself">
        <label for="signed_by_himself"> Firma acudiente</label><br>
      </div>

    </tab-content>
    <tab-content title="Firma">
      <p align="justify">Yo, en pleno uso de mis facultades mentales declaro que: he leído y/o me
        han explicado el documento <b>"CONSENTIMIENTO INFORMADO TOMA DE MUESTRAS DE LABORATORIO CLÍNICO"</b>,
        y que para el presente caso se refiere a, así como sus condiciones, posibles efectos y contraindicaciones.</p>
      <p align="justify">Comprendo que la toma de muestra es voluntaria y que me puedo retractar de este consentimiento
        antes de que la muestra sea tomada</p>
      <hr>
      <p align="justify">Con la firma de este documento autorizo de manera voluntaria, previa, explícita e informada a <b>ZERBIT S.A.S. a usar y tratar mis datos
        personales para los fines relacionados con el desarrollo de su objeto social, en especial para la prestación de servicios de salud.</b> Así
        mismo como titular de los datos tengo derecho a conocer, actualizar, rectificar y suprimir mi información personal, así como a revocar
        el consentimiento otorgado para el tratamiento de datos personales. </p>
      <p><b>ZERBIT S.A.S.</b> actuará como Responsable del Tratamiento de datos personales de los cuales soy titular y garantiza la confidencialidad, libertad, seguridad, veracidad, transparencia, acceso y circulación restringida de mis datos.
      </p><p align="justify"> La información obtenida para el Tratamiento de mis datos personales la he suministrado de forma voluntaria y es verídica.
      (Para mayor información consultar la Política de Protección de Datos y la Ley 1581 de 2012.).</p>
    </tab-content>
  </form-wizard>
    </div>
</template>

<script>
import VueFormWizard from 'vue-form-wizard'
import VSelect from "@alfsnd/vue-bootstrap-select";

export default {
  name: "LabSignature",
  components: {
    VueFormWizard,
    VSelect
  },
  props: {
    patients_list: Array,
    csrf_token: String,
  },
  data() {
    return {
      patients: this.patients_list,
      labSampleForm: {
        sampleType: "",
        patientID: null,
        authSample: true,
        emailDelivery: true,
        signedByHimself: true
      },
      csrf: $('meta[name="csrf-token"]').attr('content'),
    }
  },
  created() {

  },
  methods: {
    onComplete: function(){
      const axios = require('axios');
      $(':button').prop('disabled', true);
      axios.post('/lab-samples', {
        sample_type: this.labSampleForm.sampleType,
        patient_id: this.labSampleForm.patientID.value,
        authorized: Boolean(this.labSampleForm.authSample),
        email_delivery: Boolean(this.labSampleForm.emailDelivery),
        signed_by_himself: Boolean(this.labSampleForm.signedByHimself)
      }).then(function (response) {
            //console.log(response);
            window.location.href = "/generic-signature/labSample/"+response.data.id
          })
          .catch(function (error) {
            axios.post('/lab-samples', {
              sample_type: this.labSampleForm.sampleType,
              patient_id: this.labSampleForm.patientID.value,
              authorized: Boolean(this.labSampleForm.authSample),
              email_delivery: Boolean(this.labSampleForm.emailDelivery),
              signed_by_himself: Boolean(this.labSampleForm.signedByHimself)
            }).then(function (response) {
              //console.log(response);
              window.location.href = "/generic-signature/labSample/"+response.data.id
            })
                .catch(function (error) {
                  console.log(error);
                  window.location.reload();
                });
            console.log(error);
          });
    },
  }
}
</script>

<style scoped>

</style>