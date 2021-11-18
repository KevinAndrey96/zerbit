<template>
  <div id="PhysicalSignature">
    <form-wizard title="Formato consentimiento Historia clínica"
                 @on-complete="onComplete"
                 subtitle="Por favor rellena los campos solicitados a continuación"
                 next-button-text="Siguiente"
                 back-button-text="Atrás"
                 finish-button-text="Finalizar"
                 color="#99be12"
    >

      <tab-content title="Paso 1" >
        <div class="form-group">
          <label for="therapist_id">Fisioterapeuta</label><br>
          <v-select id="therapist_id" :options="therapists" v-model="form.therapistID" searchable/>
        </div>
        <div class="form-group">
          <label for="patient_id">Paciente</label><br>
            <v-select id="patient_id" :options="patients" v-model="form.patientID" searchable/>
        </div>
        <div class="form-group">
          <label for="reason">Motivo de consulta de fisioterapeuta</label><br>
          <textarea id="reason" v-model="form.objective" class="form-control"></textarea>
        </div>
        <hr>
        <div class="form-group">
          <label for="sessions_number">Número de sesiones</label><br>
          <input type="number" id="sessions_number" v-model="form.sessionsNumber" class="form-control">
        </div>
        <div class="form-group">
          <label>Pago de deducible</label><br>
          <input type="radio" v-model="form.deductiblePayment" value="true" id="yes" name="authorized">
          <label for="yes"> Si</label><br>
          <input type="radio" v-model="form.deductiblePayment" value="false" id="not" name="authorized">
          <label for="not"> No</label><br>
        </div>
        <div class="form-group">
          <label for="payment_value">Valor</label><br>
          <input type="number" id="payment_value" v-model="form.paymentValue" class="form-control">
        </div>

      </tab-content>
      <tab-content title="Paso 2" >
        <h4>Antecedentes</h4>
        <div class="form-group">
          <label for="medicalPathological">Médico-Patológico</label><br>
          <input id="medicalPathological" type="text" class="form-control" v-model="form.medicalPathological" placeholder="Médico-Patológico">
        </div>
        <div class="form-group">
          <label for="surgical">Quirurgicos</label><br>
          <input id="surgical" type="text" class="form-control" v-model="form.surgical" placeholder="Quirurgicos">
        </div>
        <div class="form-group">
          <label for="traumatic">Traumáticos</label><br>
          <input id="traumatic" type="text" class="form-control" v-model="form.traumatic" placeholder="Traumáticos">
        </div>
        <div class="form-group">
          <label for="pharmacological">Farmacológicos</label><br>
          <input id="pharmacological" type="text" class="form-control" v-model="form.pharmacological" placeholder="Farmacológicos">
        </div>
        <div class="form-group">
          <label for="allergy">Alergicos</label><br>
          <input id="allergy" type="text" class="form-control" v-model="form.allergy" placeholder="Alergicos">
        </div>
        <div class="form-group">
          <label for="family">Familiares</label><br>
          <input id="family" type="text" class="form-control" v-model="form.family" placeholder="Familiares">
        </div>
        <div class="form-group">
          <label for="others">Otros</label><br>
          <input id="others" type="text" class="form-control" v-model="form.others" placeholder="Otros">
        </div>
      </tab-content>
      <tab-content title="Paso 3">
        <h4>Valoración Fisioterapéutica</h4>
        <div class="form-group">
          <label for="pain">Dolor</label><br>
          <input id="pain" type="text" class="form-control" v-model="form.pain" placeholder="Dolor">
        </div>
        <div class="form-group">
          <label for="edema">Edema</label><br>
          <input id="edema" type="text" class="form-control" v-model="form.edema" placeholder="Edema">
        </div>
        <div class="form-group">
          <label for="jointMobility">Movilidad articular</label><br>
          <input id="jointMobility" type="text" class="form-control" v-model="form.jointMobility" placeholder="Movilidad articular">
        </div>
        <div class="form-group">
          <label for="sensitivity">Sensibilidad</label><br>
          <input id="sensitivity" type="text" class="form-control" v-model="form.sensitivity" placeholder="Sensibilidad">
        </div>
        <div class="form-group">
          <label for="integumentarySystem">Sistema integumentario</label><br>
          <input id="integumentarySystem" type="text" class="form-control" v-model="form.integumentarySystem" placeholder="Sistema integumentario">
        </div>
        <div class="form-group">
          <label for="muscularStrength">Fuerza muscular</label><br>
          <input id="muscularStrength" type="text" class="form-control" v-model="form.muscularStrength" placeholder="Fuerza muscular">
        </div>
        <div class="form-group">
          <label for="flexibility">Flexibilidad</label><br>
          <input id="flexibility" type="text" class="form-control" v-model="form.flexibility" placeholder="Flexibilidad">
        </div>
        <div class="form-group">
          <label for="posture">Postura</label><br>
          <input id="posture" type="text" class="form-control" v-model="form.posture" placeholder="Postura">
        </div>
        <div class="form-group">
          <label for="march">Marcha</label><br>
          <input id="march" type="text" class="form-control" v-model="form.march" placeholder="Marcha">
        </div>


      </tab-content>
      <tab-content title="Paso 4">
        <div class="form-group">
          <label for="balance">Equilibrio</label><br>
          <input id="balance" type="text" class="form-control" v-model="form.balance" placeholder="Equilibrio">
        </div>
        <div class="form-group">
          <label for="fallingRisk">Riesgo de caida</label><br>
          <input id="fallingRisk" type="text" class="form-control" v-model="form.fallingRisk" placeholder="Riesgo de caida">
        </div>
        <div class="form-group">
          <label for="otherValuations">Otras valoraciones</label><br>
          <input id="otherValuations" type="text" class="form-control" v-model="form.otherValuations" placeholder="Otras valoraciones">
        </div>
        <div class="form-group">
          <label for="medicalDiagnostic">Diagnostico médico</label><br>
          <input id="medicalDiagnostic" type="text" class="form-control" v-model="form.medicalDiagnostic" placeholder="Diagnostico médico">
        </div>
        <div class="form-group">
          <label for="physiotherapistDiagnostic">Diagnostico fisioterapéutico (Según CIF)</label><br>
          <textarea class="form-control" v-model="form.physiotherapistDiagnostic" name="" id="physiotherapistDiagnostic" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="objective2">Objetivo y plan de tratamiento fisioterapeutico</label><br>
          <textarea class="form-control" name="" v-model="form.objective2" id="objective2" cols="30" rows="10"></textarea>
        </div>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import VueFormWizard from 'vue-form-wizard'
import VSelect from '@alfsnd/vue-bootstrap-select'

export default {
  name: "PhysicalSignature",
  components: {
    VueFormWizard,
    VSelect
  },
  props: {
    patients_list: Array,
    therapists_list: Array,
    csrf_token: String,
  },
  data() {
    return {
      patients: this.patients_list,
      therapists: this.therapists_list,
      form: {
        patientID: null,
        therapistID: null,
        medicalDiagnostic: '',
        physiotherapistDiagnostic: '',
        objective: '',
        deductiblePayment: true,
        paymentValue: 0,

        medicalPathological: '',
        surgical: '',
        traumatic: '',
        allergy: '',
        family: '',
        pharmacological: '',
        others: '',

        pain: '',
        edema: '',
        jointMobility: '',
        sensitivity: '',
        integumentarySystem: '',
        muscularStrength: '',
        flexibility: '',
        posture: '',
        march: '',
        balance: '',
        fallingRisk: '',
        otherValuations: '',
        objective2: '',
        therapist_id: 1,
      },
      csrf: $('meta[name="csrf-token"]').attr('content'),
    }
  },
  mounted() {
    $('.selectpicker').selectpicker('render');
  },
  created() {
    $('.selectpicker').selectpicker('render');
  },
  methods: {
    onChange:function(){
      console.log("OKs");
    },
    onComplete: function(){
      window.alert("la firma se está guardando por favor espere un momento hasta que sea redireccionado a la página principal, no cierre esta ventana hasta que el proceso termine. Gracias")
      const axios = require('axios');
      $(':button').prop('disabled', true);
      axios.post('/clinical-histories', {
        patient_id: this.form.patientID.value,
        professional_id: this.form.therapistID.value,
        signed_by_himself: Boolean(this.form.signedByHimself),
        deductible_payment: Boolean(this.form.deductiblePayment),

        medical_diagnostic: this.form.medicalDiagnostic,
        physiotherapist_diagnostic: this.form.physiotherapistDiagnostic,
        objective: this.form.objective,
        objective2: this.form.objective2,
        sessions_number: this.form.sessionsNumber,
        payment_value: this.form.paymentValue,

        medical_pathological: this.form.medicalPathological,
        surgical: this.form.surgical,
        traumatic: this.form.traumatic,
        allergy: this.form.allergy,
        family: this.form.family,
        pharmacological: this.form.pharmacological,
        others: this.form.others,

        pain: this.form.pain,
        edema: this.form.edema,
        joint_mobility: this.form.jointMobility,
        sensitivity: this.form.sensitivity,
        integumentary_system: this.form.integumentarySystem,
        muscular_strength: this.form.muscularStrength,
        flexibility: this.form.flexibility,
        posture: this.form.posture,
        march: this.form.march,
        balance: this.form.balance,
        falling_risk: this.form.fallingRisk,
        other_valuations: this.form.otherValuations,
      }).then(function (response) {
        console.log(response);
        window.location.href = "/clinical-histories"
      })
          .catch(function (error) {
            axios.post('/clinical-histories', {
              patient_id: this.form.patientID.value,
              professional_id: this.form.therapistID.value,
              signed_by_himself: Boolean(this.form.signedByHimself),
              deductible_payment: Boolean(this.form.deductiblePayment),

              medical_diagnostic: this.form.medicalDiagnostic,
              physiotherapist_diagnostic: this.form.physiotherapistDiagnostic,
              objective: this.form.objective,
              objective2: this.form.objective2,
              sessions_number: this.form.sessionsNumber,
              payment_value: this.form.paymentValue,

              medical_pathological: this.form.medicalPathological,
              surgical: this.form.surgical,
              traumatic: this.form.traumatic,
              allergy: this.form.allergy,
              family: this.form.family,
              pharmacological: this.form.pharmacological,
              others: this.form.others,

              pain: this.form.pain,
              edema: this.form.edema,
              joint_mobility: this.form.jointMobility,
              sensitivity: this.form.sensitivity,
              integumentary_system: this.form.integumentarySystem,
              muscular_strength: this.form.muscularStrength,
              flexibility: this.form.flexibility,
              posture: this.form.posture,
              march: this.form.march,
              balance: this.form.balance,
              falling_risk: this.form.fallingRisk,
              other_valuations: this.form.otherValuations,
            }).then(function (response) {
              console.log(response);
              window.location.href = "/clinical-histories"
            })
                .catch(function (error) {
                  window.alert('Ha ocurrido un error, por favor vuelva a dibujar su firma')
                  window.location.reload();
                  console.log(error);
                });
            console.log(error);
          });
    },
  }
}
</script>

<style scoped>

</style>