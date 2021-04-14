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
          <label for="patient_id">Paciente</label><br>
          <select class="form-control selectpicker" v-model="form.patientID" data-live-search="true"
                  name="patient_id" id="patient_id">
            <option v-for="patient in patients" :value="patient.id">{{patient.first_name + ' ' + patient.first_surname}}</option>
          </select>
        </div>
        <div class="form-group">
          <label for="reason">Motivo de consulta de fisioterapeuta</label><br>
          <textarea id="reason" v-model="form.reason" class="form-control"></textarea>
        </div>
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
          <label for="allergy">Alergicos</label><br>
          <input id="allergy" type="text" class="form-control" v-model="form.allergy" placeholder="Alergicos">
        </div>
        <div class="form-group">
          <label for="family">Familiares</label><br>
          <input id="family" type="text" class="form-control" v-model="form.family" placeholder="Familiares">
        </div>
        <div class="form-group">
          <label for="pharmacological">Farmacologicos</label><br>
          <input id="pharmacological" type="text" class="form-control" v-model="form.pharmacological" placeholder="Farmacologicos">
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
          <label for="physiotherapistDiagnostic">Diagnostico fisioterapéutico (Según CIF)</label><br>
          <textarea class="form-control" v-model="form.physiotherapistDiagnostic" name="" id="physiotherapistDiagnostic" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="medicalDiagnostic">Objetivo y plan de tratamiento fisioterapeutico</label><br>
          <textarea class="form-control" name="" v-model="form.medicalDiagnostic" id="medicalDiagnostic" cols="30" rows="10"></textarea>
        </div>

      </tab-content>
      <tab-content title="Información y firma">
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
export default {
  name: "PhysicalSignature",
  components: {
    VueFormWizard
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
        patientID: 1,
        therapistID: 1,
        sessionsNumber: 1,
        startDate: "2020-10-01",
        finishDate: "2020-10-05",
        signedByHimself: true,

        medicalPathological: '',
        surgical: '',
        traumatic: '',
        allergy: '',
        family: '',
        pharmacological: '',
        others: '',

        pain: '',
        edema: '',
        joint_mobility: '',
        sensitivity: '',
        integumentarySystem: '',
        muscularStrength: '',
        flexibility: '',
        posture: '',
        march: '',
        balance: '',
        fallingRisk: '',
        otherValuations: '',

        medicalDiagnostic: '',
        physiotherapistDiagnostic: '',
        objective: '',
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
        patient_id: this.form.patientID,
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