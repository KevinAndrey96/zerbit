<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Calibri;
            panose-1:2 15 5 2 2 2 4 3 2 4;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:8.0pt;
            margin-left:0in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        .MsoPapDefault
        {margin-bottom:8.0pt;
            line-height:107%;}
        @page WordSection1
        {size:8.5in 11.0in;
            margin:1.0in 1.0in 1.0in 1.0in;}
        div.WordSection1
        {page:WordSection1;}
        -->
    </style>

</head>

<body lang=ES-MX style='word-wrap:break-word'>

<div class=WordSection1>

    <p class=MsoNormal><span style='color:#4472C4'><img width=130 height=101
                                                        id="Picture 1" src="https://zerbit.co/images/logo.png"></span></p>

    <p class=MsoNormal align=center style='text-align:center'><b><span
                    style='font-size:14.0pt;line-height:107%;color:#4472C4'>HISTORIA CLÍNICA</span></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='font-size:12.0pt;color:#4472C4'>NÚMERO DE HISTORIA CLÍNICA (Documento de
  identidad): {{$clinicalHistory->patient->document}}</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='font-size:12.0pt;color:#4472C4'>&nbsp;</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='font-size:12.0pt;color:#4472C4'>FECHA DE APERTURA DE LA H.C      D/M/A:
       {{substr($clinicalHistory->created_at, 0, 10)}}</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><br>
DATOS DEL PACIENTE</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>TIPO DE DOCUMENTO</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->document_type)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>DOCUMENTO NÚMERO<br>
  1032485</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>PRIMER NOMBRE<br>
  {{strtoupper($clinicalHistory->patient->first_name)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>SEGUNDO NOMBRE</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->second_name)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>PRIMER APELLIDO</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->first_surname)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>SEGUNDO APELLIDO<br>
  {{strtoupper($clinicalHistory->patient->second_surname)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>FECHA DE NACIMIENTO: D/M/A</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->birthdate)}}</span></p>
            </td>
            <td width=156 valign=top style='width:116.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>EDAD:</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{ date('Y') - substr($clinicalHistory->patient->birthdate, 0, 4)}} AÑOS</span></p>
            </td>
            <td width=156 valign=top style='width:116.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>ESTADO CIVIL</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->civil_status)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>DIRECCIÓN DE DOMICILIO:</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->address)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>TELÉFONO:<br>
  {{strtoupper($clinicalHistory->patient->phone)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>SEXO</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->gender)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>EPS<br>
  {{strtoupper($clinicalHistory->patient->eps)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>OCUPACIÓN DEL PACIENTE</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->occupation)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>NOMBRE DEL RESPONSABLE</span><br>
                    <span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->guardian_name)}}</span>
                </p>
            </td>
            <td width=156 valign=top style='width:116.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>TELÉFONO</span><br>
                    <span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->guardian_phone)}}</span></p>
            </td>
            <td width=156 valign=top style='width:116.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>PARENTESCO</span><br>
                    <span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->guardian_relationship)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>MÉDICO TRATANTE</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->professional->name)}}</span></p>
            </td>
            <td width=312 colspan=2 valign=top style='width:233.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>DIAGNOSTICO MÉDICO</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->medical_diagnostic)}}</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal><span style='color:#4472C4'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'>MOTIVO DE CONSULTA DE
FISIOTERAPÉUTICA</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            lang=EN-US style='font-size:14.0pt;color:#4472C4'>{{strtoupper($clinicalHistory->reason)}}.</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'><span
                            style='text-decoration:none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'>ANTECEDENTES</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>MÉDICO PATOLÓGICO</span></b></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>QUIRURGICOS</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>
                        @foreach($chRecords as $chRecord)
                            {{$chRecord->medical_pathological}},
                        @endforeach
                    </span></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->surgical}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>TRAUMÁTICOS</span></b></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>ALERGICOS</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->traumatic}},
                        @endforeach</span></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->allergy}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>FAMILIARES</span></b></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>FARMACOLOGICOS</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->family}},
                        @endforeach</span></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->pharmacological}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>OTROS</span></b></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><b><span lang=EN-US style='color:#4472C4'>&nbsp;</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->others}},
                        @endforeach</span></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-US style='color:#4472C4'>&nbsp;</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'><span
                            style='text-decoration:none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'>VALORACIÓN
FISIOTERAPÉUTICA</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>DOLOR: </span></b><span lang=EN-US
                                                                                         style='color:#4472C4'>
                        @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->pain}},
                        @endforeach
                    </span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>EDEMA:</span></b><span lang=EN-US
                                                                                        style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->edema}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>MOVILIDAD ARTICULAR:</span></b><span
                            lang=EN-US style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->joint_mobility}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>SENSIBILIDAD:</span></b><span lang=EN-US
                                                                                               style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->sensitivity}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>SISTEMA INTEGUMENTARIO:</span></b><span
                            style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->integumentary_system}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>FUERZA MUSCULAR:</span></b><span style='color:#4472C4'>
  @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->muscular_strength}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>FLEXIBILIDAD:</span></b><span lang=EN-US
                                                                                               style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->flexibility}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>POSTURA:</span></b><span lang=EN-US
                                                                                          style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->posture}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>MARCHA:</span></b><span lang=EN-US
                                                                                         style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->march}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>EQUILIBRIO:</span></b><span style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->balance}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>RIESGO DE CAIDA:</span></b><span style='color:#4472C4'>
  @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->falling_risk}},
                        @endforeach</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>OTRAS VALORACIONES:</span></b><span
                            lang=EN-US style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->other_valuations}},
                        @endforeach</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'><span
                            style='text-decoration:none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'>DIAGNOSTICO
FISIOTERAPÉUTICO (Según CIF)</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            lang=EN-US style='color:#4472C4'>
                            {{$clinicalHistory->physiotherapist_diagnostic}}
                      </span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><span style='text-decoration:
 none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'>OBJETIVO Y PLAN DE
TRATAMIENTO FISIOTERAPÉUTICO</span></u></b></p>

    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>{{$clinicalHistory->objective}}</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><span style='text-decoration:
 none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><span style='text-decoration:
 none'>&nbsp;</span></span></u></b></p>

    <p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%;
color:#4472C4'>NOMBRE DEL PROFESIONAL</span></b><span style='font-size:12.0pt;
line-height:107%;color:#4472C4'>: {{$clinicalHistory->professional->name}}</span></p>

    <p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%;
color:#4472C4'>FIRMA DEL PROFESIONAL: </span></b><span style='font-size:12.0pt;
line-height:107%;color:#4472C4'><img height="50px" src="{{$clinicalHistory->professional->signature}}" alt=""></span></p>

    <p class=MsoNormal><b><span style='font-size:12.0pt;line-height:107%;
color:#4472C4'>C.C DEL PROFESIONAL: </span></b><span style='font-size:12.0pt;
line-height:107%;color:#4472C4'>{{$clinicalHistory->professional->document}}</span></p>

</div>

</body>

</html>
