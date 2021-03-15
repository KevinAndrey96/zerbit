<html>
<style>
    @page { margin: 0px; }
    body { margin: 0px; }
    html { margin: 0px}
</style>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
        <!--
        span.cls_003{font-family:Arial,serif;font-size:12.2px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_003{font-family:Arial,serif;font-size:12.2px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_002{font-family:Arial,serif;font-size:10.2px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_002{font-family:Arial,serif;font-size:10.2px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_004{font-family:Arial,serif;font-size:11.7px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_004{font-family:Arial,serif;font-size:11.7px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_006{font-family:Arial,serif;font-size:9.5px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_006{font-family:Arial,serif;font-size:9.5px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_007{font-family:Arial,serif;font-size:39.5px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_007{font-family:Arial,serif;font-size:39.5px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_005{font-family:Arial,serif;font-size:15.7px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_005{font-family:Arial,serif;font-size:15.7px;color:rgb(52,83,145);font-weight:normal;font-style:normal;text-decoration: none}
        -->
    </style>
    <script type="text/javascript" src="6958c0e6-765b-11eb-8b25-0cc47a792c0a_id_6958c0e6-765b-11eb-8b25-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-400px;top:0px;width:1200px;height:396px;">
    <div style="position:absolute;left:0px;top:0px">
        <img style="opacity: 0.7;" src="https://zerbit.co/portal/images/background1.png" width=775 height=396></div>
    <div style="position:absolute;left:5.62px;top:10.90px" class="cls_003"><span class="cls_003">CONSENTIMIENTO INFORMADO DE TOMA DE MUESTRAS DE LABORATORIO CLINICO ZERBIT SAS</span></div>
    <div style="position:absolute;left:12.33px;top:59.23px" class="cls_002"><span class="cls_002">Fecha: {{$date}}.</span></div>
    <div style="position:absolute;left:620.00px;top:83.57px" class="cls_004"><span class="cls_004">RESULTADOS LAB CLINICO</span></div>
    <div style="position:absolute;left:12.33px;top:95.23px" class="cls_002"><span class="cls_002">Yo</span></div>
    <div style="position:absolute;left:34.55px;top:95.23px" class="cls_002"><span class="cls_002">(nombre    de    paciente),</span></div>
    <div style="position:absolute;left:150.02px;top:95.23px" class="cls_002"><span class="cls_002">{{$labSample->patient->name}}<span style="display:inline-block; width: 100px;"></span>,    documento    de    identidad N° {{$labSample->patient->document}}</span></div>
    <div style="position:absolute;left:670.28px;top:103.68px" class="cls_006"><span class="cls_006">Zerbit: teléfono</span></div>
    <div style="position:absolute;left:12.33px;top:107.23px" class="cls_002"><span class="cls_002"> en pleno uso de mis facultades mentales declaro que: he leído y/o me han explicado el documento “CONSENTIMIENTO INFORMADO </span></div>
    <div style="position:absolute;left:655.14px;top:112.68px" class="cls_006"><span class="cls_006">7517440-3178956464.</span></div>
    <div style="position:absolute;left:12.33px;top:119.23px" class="cls_002"><span class="cls_002"> TOMA DE MUESTRAS DE LABORATORIO CLINICO”, y que para el presente caso se refiere a, toma de muestra: {{$labSample->sample_type}},</span></div>
    <div style="position:absolute;left:625.11px;top:121.68px" class="cls_006"><span class="cls_006">Av El Dorado N 68C-61 Oficina 524</span></div>
    <div style="position:absolute;left:12.34px;top:131.23px" class="cls_002"><span class="cls_002">así como sus condiciones, posibles efectos y contraindicaciones.</span></div>
    <div style="position:absolute;left:12.34px;top:143.23px" class="cls_002"><span class="cls_002"></span></div>
    <div style="position:absolute;left:655.70px;top:142.25px" class="cls_004"><span class="cls_004">CONSECUTIVO</span></div>
    <div style="position:absolute;left:12.34px;top:167.23px" class="cls_002"><span class="cls_002">Comprendo que la toma de muestra es voluntaria y que me puedo retractar de este consentimiento antes de que la muestra sea</span></div>
    <div style="position:absolute;left:12.34px;top:179.23px" class="cls_002"><span class="cls_002">tomada.</span></div>
    <div style="position:absolute;left:12.34px;top:203.23px" class="cls_002"><span class="cls_002">Autorizo realizar la toma de muestra:</span></div>
    @if($labSample->authorized)
        <div style="position:absolute;left:165.65px;top:203.23px" class="cls_002"><span class="cls_002">SI_X_</span></div>
        <div style="position:absolute;left:239.22px;top:203.23px" class="cls_002"><span class="cls_002">NO____</span></div>
    @else
        <div style="position:absolute;left:165.65px;top:203.23px" class="cls_002"><span class="cls_002">SI____</span></div>
        <div style="position:absolute;left:239.22px;top:203.23px" class="cls_002"><span class="cls_002">NO_X_</span></div>
    @endif
    <div style="position:absolute;left:640.80px;top:216.43px" class="cls_004"><span class="cls_004">FECHA DE ENTREGA</span></div>
    <div style="position:absolute;left:12.33px;top:227.23px" class="cls_002"><span class="cls_002">Autorizo el envío de resultados al CORREO ELECTRONICO y/o EN FISICO y asumo la responsabilidad del uso de esta información y</span></div>
    <div style="position:absolute;left:12.34px;top:239.23px" class="cls_002"><span class="cls_002">confidencialidad de mis resultados.</span></div>
    <div style="position:absolute;left:12.34px;top:263.23px" class="cls_002"><span class="cls_002">EMAIL: {{$labSample->patient->email}} ENTREGA FISICA (  ): {{$labSample->patient->address}} </span></div>
    <div style="position:absolute;left:640.73px;top:278.32px" class="cls_006"><span class="cls_006">EMAIL</span></div>
    <div style="position:absolute;left:710.36px;top:277.81px" class="cls_006"><span class="cls_006">FISICO</span></div>
    @if($labSample->email_delivery)
        <div style="position:absolute;left:650.73px;top:298.32px" class="cls_006"><span class="cls_006">X</span></div>
    @else
        <div style="position:absolute;left:720.36px;top:297.81px" class="cls_006"><span class="cls_006">X</span></div>
    @endif
    @if(!$labSample->signed_by_himself)
        <div style="position:absolute;left:12.33px;top:299.23px" class="cls_002"><span class="cls_002">Teléfono: {{$labSample->patient->phone}}<span style="display:inline-block; width: 100px;"></span>
            Dirección: {{$labSample->patient->address}}<span style="display:inline-block; width: 100px;"></span> Firma: ____________________________ </span></div>
        <div style="position:absolute;left:12.33px;top:335.23px" class="cls_002"><span class="cls_002">NOMBRE DEL ACUDIENTE (en caso de ser menor de edad o en condición de discapacidad):</span></div>
        <div style="position:absolute;left:14.67px;top:371.23px" class="cls_002"><span class="cls_002">{{$labSample->patient->guardian}}<span style="display:inline-block; width: 100px;"></span>PARENTESCO:{{$labSample->patient->guardian_relationship}} <span style="display:inline-block; width: 100px;"></span>FIRMA <img src="{{$labSample->signature}}" height="30px" alt=""></span></div>
    @else
        <div style="position:absolute;left:12.33px;top:299.23px" class="cls_002"><span class="cls_002">Teléfono: {{$labSample->patient->phone}}<span style="display:inline-block; width: 100px;"></span>
            Dirección: {{$labSample->patient->address}}<span style="display:inline-block; width: 100px;"></span> Firma: <img src="{{$labSample->signature}}" height="30px" alt=""></span></div>
        <div style="position:absolute;left:12.33px;top:335.23px" class="cls_002"><span class="cls_002">NOMBRE DEL ACUDIENTE (en caso de ser menor de edad o en condición de discapacidad):</span></div>
        <div style="position:absolute;left:14.67px;top:371.23px" class="cls_002"><span class="cls_002">____________________________ PARENTESCO: ____________________________ FIRMA ____________________________</span></div>
    @endif
</div>
<div style="position:absolute;left:50%;margin-left:-400px;top:406px;width:1200px;height:396px;overflow:hidden">
    <div style="position:absolute;left:0px;top:0px">
        <img style="opacity: 0.2;" src="http://zerbit.co/portal/images/background2.jpg" width=775 height=396></div>
    <div style="position:absolute;left:99.49px;top:70.90px" class="cls_003"><span class="cls_003">AUTORIZACIÓN PARA EL TRATAMIENTO  DE DATOS PERSONALES.</span></div>
    <div style="position:absolute;left:12.33px;top:131.56px" class="cls_002"><span class="cls_002">Con la firma de este documento autorizo de manera voluntaria, previa, explícita e informada a ZERBIT S.A.S. a usar y tratar mis datos</span></div>
    <div style="position:absolute;left:12.33px;top:143.56px" class="cls_002"><span class="cls_002">personales para los fines relacionados con el desarrollo de su objeto social, en especial para la prestación de servicios de salud. Así</span></div>
    <div style="position:absolute;left:12.33px;top:155.56px" class="cls_002"><span class="cls_002">mismo como titular de los datos tengo derecho a conocer, actualizar, rectificar y suprimir mi información personal, así como a revocar</span></div>
    <div style="position:absolute;left:12.33px;top:167.56px" class="cls_002"><span class="cls_002">el consentimiento otorgado para el tratamiento de datos personales.</span></div>
    <div style="position:absolute;left:12.33px;top:191.56px" class="cls_002"><span class="cls_002">ZERBIT S.A.S. actuará como Responsable del Tratamiento de datos personales de los cuales soy titular y garantiza la confidenciali-</span></div>
    <div style="position:absolute;left:12.33px;top:203.56px" class="cls_002"><span class="cls_002">dad, libertad, seguridad, veracidad, transparencia, acceso y circulación restringida de mis datos.</span></div>
    <div style="position:absolute;left:12.33px;top:251.56px" class="cls_002"><span class="cls_002">La información obtenida para el Tratamiento de mis datos personales la he suministrado de forma voluntaria y es verídica.</span></div>
    <div style="position:absolute;left:12.33px;top:263.56px" class="cls_002"><span class="cls_002">(Para mayor información consultar la Política de Protección de Datos y la Ley 1581 de 2012.).</span></div>
    <div style="position:absolute;left:12.93px;top:320.62px" class="cls_005"><span class="cls_005">Se firma en Bogotá,<span style="display:inline-block; width: 100px;"></span> fecha: {{$date}} <span style="display:inline-block; width: 100px;"></span>Firma: <img src="{{$labSample->signature}}" height="30px" alt=""></span></div>
</div>

</body>
</html>
