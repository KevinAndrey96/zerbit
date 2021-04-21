<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clientes Zerbit</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="/assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-133433427-1');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '327167911228268');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=327167911228268&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->



    <!-- Flatpickr -->
    <link type="text/css" href="/assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Quill Theme -->
    <link type="text/css" href="/assets/css/vendor-quill.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-quill.rtl.css" rel="stylesheet">

    <!-- Dropzone -->
    <link type="text/css" href="/assets/css/vendor-dropzone.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-dropzone.rtl.css" rel="stylesheet">

    <!-- Select2 -->
    <link type="text/css" href="/assets/css/vendor-select2.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-select2.rtl.css" rel="stylesheet">
    <link type="text/css" href="/assets/vendor/select2/select2.min.css" rel="stylesheet">


</head>

<body class="layout-default">
<div class="preloader"></div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">




                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center">
                        <div class="flex">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                    <li class="breadcrumb-item">Documentos</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Nombre Apellido Completo</h1>
                        </div>
                        <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#modal-large">Nuevo formato de consentimiento <i class="material-icons">add</i></button>
                    </div>
                </div>

                <div class="container-fluid page__container" width="50%">
                    <div class="card">
                        <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
                            <table class="table mb-0 thead-border-top-0 table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">#ID</th>
                                    <th class="text-center">Tipo de prueba</th>
                                    <th  class="text-center">Fecha</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="companies">
                                <tr>
                                    <td class="text-center">
                                        <div class="badge badge-light">#29177</div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                <a href="#">Blue Space Ltd</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p>2020-10-25</p>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-info">Descargar PDF</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <style>
                    .modal-backdrop.show {
                        opacity: 0 !important;
                        display: none !important;
                    }
                </style>
                <div id="modal-large" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-large-title">Muestra de laboratorio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> <!-- // END .modal-header -->
                            <div class="modal-body">
                                <div>
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
                                </div>
                                <hr>
                                <div class="form-group">
                                <label for="">Tipo de muestra</label><br>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="">Sanguinea</option>
                                    <option value="">VIH</option>
                                    <option value="">Ecografía</option>
                                </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Autorizo realizar la toma de muestra: </label><br>
                                    <input type="radio" v-model="labSampleForm.authSample" value="true" id="authorized" name="authorized">
                                    <label for="authorized"> Si Autorizo</label><br>
                                    <input type="radio" v-model="labSampleForm.authSample" value="false" id="unauthorized" name="authorized">
                                    <label for="unauthorized"> No Autorizo</label><br>
                                </div>
                                <div class="form-group">
                                    <label>Autorizo el envío de resultados vía: </label><br>
                                    <input type="radio" v-model="labSampleForm.emailDelivery" id="email" value="true" name="delivery_method">
                                    <label >CORREO ELECTRÓNICO</label><br>
                                    <input type="radio" v-model="labSampleForm.emailDelivery" id="physical" value="false" name="delivery_method" >
                                    <label >EN FÍSICO</label><br>
                                </div>
                                <div class="form-group">
                                    <label>¿Quién firma?</label><br>
                                    <input type="radio" v-model="labSampleForm.signedByHimself" value="true" id="signed_by_himself" name="signed_by_himself">
                                    <label for="signed_by_himself"> Firma propia</label><br>
                                    <input type="radio" v-model="labSampleForm.signedByHimself" value="false" id="signed_by_guardian" name="signed_by_himself">
                                    <label for="signed_by_himself"> Firma acudiente</label><br>
                                </div>
                            </div> <!-- // END .modal-body -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Continuar y firmar</button>
                            </div> <!-- // END .modal-footer -->
                        </div> <!-- // END .modal-content -->
                    </div> <!-- // END .modal-dialog -->
                </div>



            </div>
            <!-- // END drawer-layout__content -->
        </div>
        <!-- // END drawer-layout -->

    </div>

</div>
<!-- // END header-layout -->

<!-- App Settings FAB -->
<div id="app-settings">
    <app-settings layout-active="default" :layout-location="{
      'default': 'ui-forms.html',
      'fixed': 'fixed-ui-forms.html',
      'fluid': 'fluid-ui-forms.html',
      'mini': 'mini-ui-forms.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="/assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/vendor/popper.min.js"></script>
<script src="/assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar -->
<script src="/assets/vendor/simplebar.min.js"></script>

<!-- DOM Factory -->
<script src="/assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="/assets/vendor/material-design-kit.js"></script>

<!-- App -->
<script src="/assets/js/toggle-check-all.js"></script>
<script src="/assets/js/check-selected-row.js"></script>
<script src="/assets/js/dropdown.js"></script>
<script src="/assets/js/sidebar-mini.js"></script>
<script src="/assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="/assets/js/app-settings.js"></script>



<!-- Flatpickr -->
<script src="/assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="/assets/js/flatpickr.js"></script>

<!-- jQuery Mask Plugin -->
<script src="/assets/vendor/jquery.mask.min.js"></script>

<!-- Quill -->
<script src="/assets/vendor/quill.min.js"></script>
<script src="/assets/js/quill.js"></script>

<!-- Dropzone -->
<script src="/assets/vendor/dropzone.min.js"></script>
<script src="/assets/js/dropzone.js"></script>

<!-- Select2 -->
<script src="/assets/vendor/select2/select2.min.js"></script>
<script src="/assets/js/select2.js"></script>

</body>

</html>