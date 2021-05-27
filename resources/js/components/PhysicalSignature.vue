<template>
  <div id="PhysicalSignature">
    <form-wizard title="Formato consentimiento terapia física"
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
          <select class="form-control selectpicker" v-model="form.therapistID" data-live-search="true"
                  name="patient_id" id="therapist_id">
            <option v-for="therapist in therapists" :value="therapist.id">{{therapist.name}}</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="patient_id">Paciente</label><br>
            <v-select id="patient_id" :options="patients" v-model="form.patientID" searchable/>
          </div>
        </div>
      </tab-content>
      <tab-content title="Paso 2">
        <div class="form-group">
          <label for="sessionsNumber">Número de sesiones</label><br>
          <input id="sessionsNumber" type="number" class="form-control" v-model="form.sessionsNumber" placeholder="1">
        </div>
        <div class="form-group">
          <label for="startDate">Fecha Inicio</label><br>
          <input id="startDate" type="date" class="form-control" v-model="form.startDate">
        </div>
        <div class="form-group">
          <label for="finishDate">Fecha Fin</label><br>
          <input id="finishDate" type="date" class="form-control" v-model="form.finishDate">
        </div>

        <hr>
        <div class="form-group">
          <label>¿Quién firma?</label><br>
          <input type="radio" v-model="form.signedByHimself" value="true" id="signed_by_himself" name="signed_by_himself">
          <label for="signed_by_himself"> Firma propia</label><br>
          <input type="radio" v-model="form.signedByHimself" value="false" id="signed_by_guardian" name="signed_by_himself">
          <label for="signed_by_himself"> Firma acudiente</label><br>
        </div>

      </tab-content>
      <tab-content title="Información">
        <div>
          <b>¿QUE ES UNA INTERVENCIÓN FISIOTERAPÉUTICA?</b>
          <p align="justify">
            Tratamiento dirigido al paciente para corregir, aliviar y disminuir la incapacidad física, alteración del movimiento funcionalidad y postura,
            así como el alivio del dolor de origen congénito o de las condiciones de envejecimiento, lesión o enfermedad (daño o procedimiento
            quirúrgico). La fisioterapia tiene como un fin más significativo restaurar las funciones físicas pérdidas o deterioradas.
            Utiliza como tratamiento principalmente los agentes y medios físicos como la electricidad, el movimiento, el masaje o manipulación de los
            tejidos y las articulaciones, el agua, la luz, el calor, el frio.
          </p>
          <b>¿QUE RIESGOS TIENE?</b>
          <p align="justify">
            La fisioterapia tiene muy pocos riesgos y los mayores peligros son su incorrecta indicación y su mala ejecución, de las técnicas de
            realización y de sus posibles riesgos, por ello siempre es realizado en los pacientes por nuestras profesionales fisioterapeutas profesionales de alta experiencia, habilidad y cultura de seguridad con nuestros pacientes debe ser aplicado por profesionales de la fisioterapia.
          </p>
          <b>CONSIDERACIONES GENERALES DE LOS TRATAMIENTOS.</b>
          <p align="justify">
            El paciente está obligado a revelar todos los datos médicos personales para la buena elección de la técnica por parte del fisioterapeuta,
            y sería conveniente que expresara sus problemas emocionales para la correcta elaboración del juicio diagnóstico. Durante la exploración
            y el tratamiento es necesario que el paciente descubra las zonas del cuerpo oportunas para la ejecución del paciente con el fin de
            realizar las técnicas adecuadas para su mejoría.
          </p>
        </div>
      </tab-content>
      <tab-content title="Firma">
        <p align="justify">He leído la información y me ha sido explicada. He tenido la oportunidad de hacer preguntas sobre mi examen, valoración y tratamiento.
          Firmando abajo consiento que se me aplique el tratamiento que se me ha explicado de forma suficiente y comprensible.</p>
        <p align="justify">Entiendo que tengo el derecho de rehusar parte o todo el tratamiento en cualquier momento. Entiendo mi plan de tratamiento y consciento en ser tratado por la fisioterapeuta. Y entiendo que puedo
          revocar mi consentimiento en cualquier momento del tratamiento.</p>
        <p align="justify">Declaro no encontrarme en ningún de los casos de las contraindicaciones especificadas por la profesional en este documento, declaro
          haber facilitado de manera leal y verdadera los datos sobre estado físico y salud de mi persona que pudiera afectar a los tratamientos
          que se me van a realizar. Así mismo decido, dentro de las opciones clínicas disponibles, dar mi conformidad, libre, voluntaria y consciente
          a los tratamientos que se me han informado.</p>
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
        therapistID: 1,
        sessionsNumber: 1,
        startDate: "2020-10-01",
        finishDate: "2020-10-05",
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
      axios.post('/physical-therapies', {
        patient_id: this.form.patientID.value,
        therapist_id: this.form.therapistID,
        sessions_number: this.form.sessionsNumber,
        start_date: this.form.startDate,
        finish_date: this.form.finishDate,
        signed_by_himself: Boolean(this.form.signedByHimself),
      }).then(function (response) {
        console.log(response);
        window.location.href = "/generic-signature/therapy/"+response.data.id
      })
          .catch(function (error) {
            alert("Ha ocurrido un error inesperado");
            console.log(error);
          });
    },
  }
}
</script>

<style scoped>
</style>