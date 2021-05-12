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
<style>
    .page_break { page-break-before: always; }
</style>
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
                     identidad): {{$clinicalHistory->patient->document}}</span>
                </p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='font-size:12.0pt;color:#4472C4'>&nbsp;</span></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='font-size:12.0pt;color:#4472C4'>FECHA DE APERTURA DE LA H.C      D/M/A:
                          {{substr($clinicalHistory->created_at, 0, 10)}}</span>
                </p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><br>
            DATOS DEL PACIENTE</span></u></b>
    </p>
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
                     1032485</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>PRIMER NOMBRE<br>
                     {{strtoupper($clinicalHistory->patient->first_name)}}</span>
                </p>
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
                     {{strtoupper($clinicalHistory->patient->second_surname)}}</span>
                </p>
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
                     {{strtoupper($clinicalHistory->patient->phone)}}</span>
                </p>
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
                     {{strtoupper($clinicalHistory->patient->eps)}}</span>
                </p>
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
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->guardian_phone)}}</span>
                </p>
            </td>
            <td width=156 valign=top style='width:116.9pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            style='color:#4472C4'>PARENTESCO</span><br>
                    <span
                            style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->guardian_relationship)}}</span>
                </p>
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
            FISIOTERAPÉUTICA</span></u></b>
    </p>
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
                     </span>
                </p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->surgical}},
                        @endforeach</span>
                </p>
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
                        @endforeach</span>
                </p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->allergy}},
                        @endforeach</span>
                </p>
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
                     line-height:normal'><b><span lang=EN-US style='color:#4472C4'>FARMACOLÓGICOS</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->family}},
                        @endforeach</span>
                </p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><span lang=EN-US style='color:#4472C4'>@foreach($chRecords as $chRecord)
                            {{$chRecord->pharmacological}},
                        @endforeach</span>
                </p>
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
                        @endforeach</span>
                </p>
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
            FISIOTERAPÉUTICA</span></u></b>
    </p>
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
                     </span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>EDEMA:</span></b><span lang=EN-US
                                                                                        style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->edema}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>MOVILIDAD ARTICULAR:</span></b><span
                            lang=EN-US style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->joint_mobility}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>SENSIBILIDAD:</span></b><span lang=EN-US
                                                                                               style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->sensitivity}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>SISTEMA INTEGUMENTARIO:</span></b><span
                            style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->integumentary_system}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>FUERZA MUSCULAR:</span></b><span style='color:#4472C4'>
                     @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->muscular_strength}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>FLEXIBILIDAD:</span></b><span lang=EN-US
                                                                                               style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->flexibility}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>POSTURA:</span></b><span lang=EN-US
                                                                                          style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->posture}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>MARCHA:</span></b><span lang=EN-US
                                                                                         style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->march}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>EQUILIBRIO:</span></b><span style='color:#4472C4'> @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->balance}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>RIESGO DE CAIDA:</span></b><span style='color:#4472C4'>
                     @foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->falling_risk}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>OTRAS VALORACIONES:</span></b><span
                            lang=EN-US style='color:#4472C4'>@foreach($chPsychotherapeuticalAssesments as $chPsychotherapeuticalAssesment)
                            {{$chPsychotherapeuticalAssesment->other_valuations}},
                        @endforeach</span>
                </p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'><span
                            style='text-decoration:none'>&nbsp;</span></span></u></b></p>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        lang=EN-US style='font-size:14.0pt;line-height:107%;color:#4472C4'>DIAGNOSTICO
            FISIOTERAPÉUTICO (Según CIF)</span></u></b>
    </p>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            lang=EN-US style='color:#4472C4'>
                     {{$clinicalHistory->physiotherapist_diagnostic}}
                     </span>
                </p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'><span style='text-decoration:
            none'>&nbsp;</span></span></u></b></p>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
                        style='font-size:14.0pt;line-height:107%;color:#4472C4'>OBJETIVO Y PLAN DE
            TRATAMIENTO FISIOTERAPÉUTICO</span></u></b>
    </p>
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
<div class="page_break"></div>
<div class=WordSection1>
    <p class=MsoNormal><span style='color:#4472C4'><img width=130 height=101
                                                        src="https://zerbit.co/images/logo.png"></span></p>
    <p class=MsoNormal align=center style='text-align:center'><b><span
                    style='font-size:14.0pt;line-height:105%;color:#4472C4'>FORMATO DE EVOLUCIÓN</span></b></p>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=246 valign=top style='width:184.25pt;border:none;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><b><span style='font-size:14.0pt;line-height:105%;
                     color:#4472C4'>HISTORIA CLÍNICA NÚMERO</span></b></p>
            </td>
            <td width=378 valign=top style='width:283.25pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><span style='font-size:14.0pt;line-height:105%;color:#4472C4'>{{$clinicalHistory->id}}</span></p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
           style='border-collapse:collapse'>
        <tr>
            <td width=623 colspan=2 valign=top style='width:467.0pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><b><span style='color:#4472C4'>DATOS GENERALES</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=311 valign=top style='width:233.45pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>PRIMER NOMBRE:</span></b><span style='color:#4472C4'>
                     {{strtoupper($clinicalHistory->patient->first_name)}}</span>
                </p>
            </td>
            <td width=311 valign=top style='width:233.55pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>SEGUNDO NOMBRE:</span></b><span style='color:#4472C4'>
                     {{strtoupper($clinicalHistory->patient->second_name)}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=311 valign=top style='width:233.45pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>PRIMER APELLIDO:</span></b><span style='color:#4472C4'>
                     </span><span lang=EN-US style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->first_surname)}}</span>
                </p>
            </td>
            <td width=311 valign=top style='width:233.55pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>SEGUNDO APELLIDO:</span></b><span style='color:#4472C4'>
                     {{strtoupper($clinicalHistory->patient->second_surname)}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 colspan=2 valign=top style='width:467.0pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>TIPO Y NÚMERO DE DOCUMENTO DE IDENTIDAD:</span></b><span
                            style='color:#4472C4'> {{strtoupper($clinicalHistory->patient->document_type)}}. {{$clinicalHistory->patient->document}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=311 valign=top style='width:233.45pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>EDAD:</span></b><span style='color:#4472C4'> {{ date('Y') - substr($clinicalHistory->patient->birthdate, 0, 4)}} AÑOS</span></p>
            </td>
            <td width=311 valign=top style='width:233.55pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>EPS:</span></b><span style='color:#4472C4'> {{strtoupper($clinicalHistory->patient->eps)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 colspan=2 valign=top style='width:467.0pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='color:#4472C4'>DIAGNOSTICO MÉDICO:</span></b><span
                            lang=EN-US style='color:#4472C4'> {{strtoupper($clinicalHistory->medical_diagnostic)}}</span>
                </p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            lang=EN-US style='color:#4472C4'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=623 colspan=2 valign=top style='width:467.0pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                style='color:#4472C4'>NÚMERO DE SESIONES ORDENADAS:</span></b><span
                            style='color:#4472C4'> {{$clinicalHistory->sessions_number}} SESIONES</span></p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal><span style='color:#4472C4'>&nbsp;</span></p>
    <p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>
    @foreach($chEvolutions as $evolution)
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
           style='border-collapse:collapse'>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
                     line-height:normal'><b><span lang=EN-US style='font-size:14.0pt;color:#4472C4'>EVOLUCIÓN</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
                            lang=EN-US style='font-size:14.0pt;color:#4472C4'>

                            {{$evolution->evolution_text}}

                     </span>
                </p>
            </td>
        </tr>
        <tr>
            <td width=623 valign=top style='width:467.5pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='font-size:14.0pt;color:#4472C4'>FIRMA DEL PROFESIONAL: <img height="50px" src="{{$clinicalHistory->professional->signature}}" alt=""></span></b></p>
                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><b><span
                                lang=EN-US style='font-size:14.0pt;color:#4472C4'>&nbsp;</span></b></p>
            </td>
        </tr>
    </table>
        <br>
    @endforeach
    <p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
                                                                       style='font-size:14.0pt;line-height:105%;color:#4472C4'>&nbsp;</span></b></p>
</div>
<div class="page_break"></div>
<div class=WordSection1>
    <p class=MsoNormal><span style='color:#4472C4'><img width=130 height=101
                                                        src="https://zerbit.co/images/logo.png"></span></p>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=207 rowspan=3 valign=top style='width:154.95pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:14.0pt;line-height:105%;color:#4472C4'><br>
                     </span></b><b><span style='font-size:16.0pt;line-height:105%;color:#4472C4'>PLANILLA
                     DE FIRMAS DOMICILIO</span></b>
                </p>
            </td>
            <td width=207 colspan=2 valign=top style='width:154.95pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><b><span style='color:#4472C4'>NOMBRE PACIENTE</span></b></p>
            </td>
            <td width=210 colspan=3 valign=top style='width:157.6pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><span style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->first_name.' '.$clinicalHistory->patient->second_name.' '.$clinicalHistory->patient->first_surname.' '.$clinicalHistory->patient->second_surname)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=207 colspan=2 valign=top style='width:154.95pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><b><span style='color:#4472C4'>IDENTIFICACIÓN DEL PACIENTE</span></b></p>
            </td>
            <td width=210 colspan=3 valign=top style='width:157.6pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><span style='color:#4472C4'>{{strtoupper($clinicalHistory->patient->document_type.' '.$clinicalHistory->patient->document)}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=207 colspan=2 valign=top style='width:154.95pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><b><span style='color:#4472C4'>N° DE SESIONES ORDENADAS</span></b></p>
            </td>
            <td width=210 colspan=3 valign=top style='width:157.6pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal><span style='color:#4472C4'>{{strtoupper($clinicalHistory->sessions_number)}} SESIONES</span></p>
            </td>
        </tr>
        <tr style='height:.25in'>
            <td width=207 rowspan=2 valign=top style='width:154.95pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><b><span style='color:#4472C4'>NOMBRE DEL PROFESIONAL QUE
                     REALIZA LAS TERAPIAS</span></b>
                </p>
            </td>
            <td width=103 rowspan=2 valign=top style='width:77.15pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><span style='color:#4472C4'> <br> {{strtoupper($clinicalHistory->professional->name)}}</span></p>
            </td>
            <td width=104 rowspan=2 valign=top style='width:77.8pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><b><span style='color:#4472C4'>PAGO DE DEDUCIBLE</span></b></p>
            </td>
            <td width=34 valign=top style='width:25.5pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>SI

                        </span></b></p>
            </td>
            <td width=34 valign=top style='width:.35in;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>NO

                        </span></b></p>
            </td>
            <td width=143 valign=top style='width:106.9pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>VALOR<br>

                        </span></b></p>
            </td>
        </tr>
        <tr style='height:.25in'>
            <td width=34 valign=top style='width:25.5pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><span style='color:#4472C4'>@if($clinicalHistory->deductible_payment)
                            <div style="color:#4472C4; text-align: center;">X</div>
                        @endif</span></p>
            </td>
            <td width=34 valign=top style='width:.35in;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><span style='color:#4472C4'>@if(!$clinicalHistory->deductible_payment)
                            <div style="color:#4472C4; text-align: center;">X</div>
                        @endif</span></p>
            </td>
            <td width=143 valign=top style='width:106.9pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt;height:.25in'>
                <p class=MsoNormal><span style='color:#4472C4'>{{$clinicalHistory->payment_value}}</span></p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal align=center style='text-align:center'><b><span
                    style='font-size:14.0pt;line-height:105%;color:#4472C4'>PLANILLA DE FIRMAS</span></b></p>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>N°</span></b></p>
            </td>
            <td width=96 valign=top style='width:1.0in;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>FECHA DE ATENCIÓN</span></b></p>
            </td>
            <td width=108 valign=top style='width:81.0pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>HORA DE INICIO</span></b></p>
            </td>
            <td width=102 valign=top style='width:76.5pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>HORA FINAL</span></b></p>
            </td>
            <td width=288 valign=top style='width:215.75pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>FIRMA DEL PACIENTE</span></b></p>
            </td>
        </tr>
        @foreach($chEvolutions as $evolution)
        <tr>
            <td width=30 valign=top style='width:22.25pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'>{{$evolution->id}}</span></p>
            </td>
            <td width=96 valign=top style='width:1.0in;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'>{{$evolution->created_at}}</span></p>
            </td>
            <td width=108 valign=top style='width:81.0pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'>{{$evolution->start_time}}</span></p>
            </td>
            <td width=102 valign=top style='width:76.5pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'>{{$evolution->end_time}}</span></p>
            </td>
            <td width=288 valign=top style='width:215.75pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'><img src="{{$evolution->signature}}" height="50px" alt=""></span></p>
            </td>
        </tr>
            @endforeach
    </table>
    <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
                                                                    style='color:#4472C4'>&nbsp;</span></p>
    <p class=MsoNormal><b><span lang=EN-US style='color:#4472C4'>TOTAL SESIONES
            REALIZADAS:</span></b><span lang=EN-US style='color:#4472C4'> {{$clinicalHistory->sessions_number}} SESIONES</span>
    </p>
    <p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
                                                           style='color:#4472C4'>OBSERVACIONES:</span></b><span lang=EN-US
                                                                                                                style='color:#4472C4'>
        @foreach($chEvolutions as $evolution)
            {{$evolution->observation}},
        @endforeach
        </span>
    </p>
    <p class=MsoNormal align=center style='text-align:center'><span
                style='color:#4472C4'>&nbsp;</span></p>
    <p class=MsoNormal align=center style='text-align:center'><span
                style='color:#4472C4'>&nbsp;</span></p>
    <p class=MsoNormal align=center style='text-align:center'><span
                style='color:#4472C4'><br>
            <br>
            </span>
    </p>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
           style='border-collapse:collapse;border:none'>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'>{{$clinicalHistory->professional->name}}</span></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='color:#4472C4'><img height="50px" src="{{$clinicalHistory->professional->signature}}" alt=""> <b>C.C.</b> {{$clinicalHistory->professional->document}}</span></p>
            </td>
        </tr>
        <tr>
            <td width=312 valign=top style='width:233.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>NOMBRE DE FISIOTERAPEUTA</span></b></p>
            </td>
            <td width=312 valign=top style='width:233.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='color:#4472C4'>FIRMA Y C.C FISIOTERAPEUTA</span></b></p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal>&nbsp;</p>
</div>
</body>
</html>