<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t7NyOWuwfBulFos8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QWERJmuKZwyZ0vrL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oDKzhqq9ev5sDnes',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMlS8siLGca1iAB1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::id0SCyXs0XL7Apeg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signatures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ov129bjLXIc37sT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'patients',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F5p19cYpg94eRswV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/patients/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qHmaeDh3GsMpAN3k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lab-samples/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lab-samples-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lab-samples' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lab-samples',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qLcfUj0GY6RXnSX4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/physical-therapies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'physical-therapies-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/physical-therapies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'physical-therapies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gx4I441ckp31rYuC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clinical-histories-a' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clinical-histories-a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clinical-histories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clinical-histories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6qa5HBPkNKzvgxHS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clinical-histories-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clinical-histories-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/evolutions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OWp8gbzJVFy7s1gG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7OKx8UEbdQ5a7qM2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'appointments-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments/reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9S3ZnG8FRUnIiCWv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointments/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0HjNxMxJ1qGbXl9S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fMI6XbZoPYjqcCVn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t86MT4tQdVfhkwI6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIvPoPdFJTTXWsq7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generic-signature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wcMNFyBKkz8aDRlr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZfNy5NauTk593bB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n8pjy32L8O6zosHV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|a(?|ssword/reset/([^/]++)(*:37)|tients/(?|([^/]++)(*:62)|external(?|(*:80)|Auth(*:91))))|hysical\\-therapies/([^/]++)(?|(*:131)))|/users/(?|([^/]++)(*:159)|change\\-password(?|(*:186)))|/signatures/(?|([^/]++)(*:219)|create/([^/]++)(*:242)|([^/]++)(*:258))|/lab\\-samples(?|/(?|([^/]++)(?|(*:298)|(*:306))|externalLab(*:326))|\\-pdf/([^/]++)(*:349))|/cli(?|nical\\-histories(?|/([^/]++)(*:393)|\\-pdf/(?|([^/]++)(*:418)|refresh/([^/]++)(*:442)))|ents/externalAuth/([^/]++)(*:478))|/f9664ea1803311b35f81d07d8c9e072d/([^/]++)(*:529)|/generic\\-signature/([^/]++)/([^/]++)(*:574))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3nRJCtKNdhoUrqT1',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'externalRegister',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'externalAuth',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LCq16ORura2JmSuK',
          ),
          1 => 
          array (
            0 => 'physicalTherapy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iHQUH4JeHKt6XM01',
          ),
          1 => 
          array (
            0 => 'physicalTherapy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MfQi1HFrQwCz2yJ9',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ou4lPYEeKrzoNzF8',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qrdbnJezTq2ogsDU',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLYgPzlOTxK52FQJ',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vy055RLdbjgEiS5e',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfKuMfNr3ILilJlg',
          ),
          1 => 
          array (
            0 => 'filter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qSUyH9o1yGRmYVL9',
          ),
          1 => 
          array (
            0 => 'labSample',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'externalLab',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M25t3bSGQp4DnVjY',
          ),
          1 => 
          array (
            0 => 'labSample',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iiUS7x9xzPDn2hqI',
          ),
          1 => 
          array (
            0 => 'filter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTqP2qa5eKP5PnZh',
          ),
          1 => 
          array (
            0 => 'clinicalHistory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9P1kqQJtVA5bs9gv',
          ),
          1 => 
          array (
            0 => 'clinicalHistory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6dp19Mv2EfuXCVHN',
          ),
          1 => 
          array (
            0 => 'patient',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VR9kMDgl74FfkQMM',
          ),
          1 => 
          array (
            0 => 'labSample',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQ3KsbXrWRxj9PaF',
          ),
          1 => 
          array (
            0 => 'signatureType',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::t7NyOWuwfBulFos8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@BZqS/64pnroF20V9KrO0u7A84VXJarclOUnkGMjZdsM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000035d8294c000000004e664eca";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::t7NyOWuwfBulFos8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QWERJmuKZwyZ0vrL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::QWERJmuKZwyZ0vrL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oDKzhqq9ev5sDnes' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::oDKzhqq9ev5sDnes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NMlS8siLGca1iAB1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NMlS8siLGca1iAB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\UsersController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::id0SCyXs0XL7Apeg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\UsersController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::id0SCyXs0XL7Apeg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MfQi1HFrQwCz2yJ9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::MfQi1HFrQwCz2yJ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@change',
        'controller' => 'App\\Http\\Controllers\\UsersController@change',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ou4lPYEeKrzoNzF8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@changePassword',
        'controller' => 'App\\Http\\Controllers\\UsersController@changePassword',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ou4lPYEeKrzoNzF8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1ov129bjLXIc37sT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signatures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SignatureController@index',
        'controller' => 'App\\Http\\Controllers\\SignatureController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::1ov129bjLXIc37sT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qrdbnJezTq2ogsDU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signatures/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SignatureController@show',
        'controller' => 'App\\Http\\Controllers\\SignatureController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qrdbnJezTq2ogsDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hLYgPzlOTxK52FQJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signatures/create/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SignatureController@create',
        'controller' => 'App\\Http\\Controllers\\SignatureController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::hLYgPzlOTxK52FQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vy055RLdbjgEiS5e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'signatures/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SignatureController@store',
        'controller' => 'App\\Http\\Controllers\\SignatureController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::vy055RLdbjgEiS5e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'patients' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@index',
        'controller' => 'App\\Http\\Controllers\\PatientsController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'patients',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qHmaeDh3GsMpAN3k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'patients/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@create',
        'controller' => 'App\\Http\\Controllers\\PatientsController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qHmaeDh3GsMpAN3k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F5p19cYpg94eRswV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@store',
        'controller' => 'App\\Http\\Controllers\\PatientsController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::F5p19cYpg94eRswV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3nRJCtKNdhoUrqT1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'patients/{patient}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@destroy',
        'controller' => 'App\\Http\\Controllers\\PatientsController@destroy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::3nRJCtKNdhoUrqT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lab-samples-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lab-samples/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@create',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lab-samples-create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lfKuMfNr3ILilJlg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lab-samples/{filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@index',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lfKuMfNr3ILilJlg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lab-samples' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lab-samples',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@index',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lab-samples',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M25t3bSGQp4DnVjY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lab-samples-pdf/{labSample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@show',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::M25t3bSGQp4DnVjY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qLcfUj0GY6RXnSX4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lab-samples',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@store',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qLcfUj0GY6RXnSX4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qSUyH9o1yGRmYVL9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lab-samples/{labSample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@destroy',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@destroy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qSUyH9o1yGRmYVL9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'physical-therapies-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'physical-therapies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhysicalTherapyController@create',
        'controller' => 'App\\Http\\Controllers\\PhysicalTherapyController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'physical-therapies-create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'physical-therapies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'physical-therapies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhysicalTherapyController@index',
        'controller' => 'App\\Http\\Controllers\\PhysicalTherapyController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'physical-therapies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LCq16ORura2JmSuK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'physical-therapies/{physicalTherapy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhysicalTherapyController@show',
        'controller' => 'App\\Http\\Controllers\\PhysicalTherapyController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LCq16ORura2JmSuK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gx4I441ckp31rYuC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'physical-therapies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhysicalTherapyController@store',
        'controller' => 'App\\Http\\Controllers\\PhysicalTherapyController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::gx4I441ckp31rYuC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iHQUH4JeHKt6XM01' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'physical-therapies/{physicalTherapy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhysicalTherapyController@destroy',
        'controller' => 'App\\Http\\Controllers\\PhysicalTherapyController@destroy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iHQUH4JeHKt6XM01',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iiUS7x9xzPDn2hqI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories/{filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@index',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iiUS7x9xzPDn2hqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'clinical-histories-a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories-a',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@indexa',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@indexa',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'clinical-histories-a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'clinical-histories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@index',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'clinical-histories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'clinical-histories-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@create',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'clinical-histories-create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6qa5HBPkNKzvgxHS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'clinical-histories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@store',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::6qa5HBPkNKzvgxHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LTqP2qa5eKP5PnZh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories-pdf/{clinicalHistory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@show',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LTqP2qa5eKP5PnZh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9P1kqQJtVA5bs9gv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clinical-histories-pdf/refresh/{clinicalHistory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ClinicalHistoriesController@refresh',
        'controller' => 'App\\Http\\Controllers\\ClinicalHistoriesController@refresh',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::9P1kqQJtVA5bs9gv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OWp8gbzJVFy7s1gG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'evolutions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EvolutionsController@store',
        'controller' => 'App\\Http\\Controllers\\EvolutionsController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::OWp8gbzJVFy7s1gG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'appointments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentsController@index',
        'controller' => 'App\\Http\\Controllers\\AppointmentsController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'appointments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'appointments-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentsController@create',
        'controller' => 'App\\Http\\Controllers\\AppointmentsController@create',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'appointments-create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7OKx8UEbdQ5a7qM2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentsController@store',
        'controller' => 'App\\Http\\Controllers\\AppointmentsController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::7OKx8UEbdQ5a7qM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9S3ZnG8FRUnIiCWv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointments/reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentsController@reminder',
        'controller' => 'App\\Http\\Controllers\\AppointmentsController@reminder',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::9S3ZnG8FRUnIiCWv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0HjNxMxJ1qGbXl9S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointments/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentsController@cancel',
        'controller' => 'App\\Http\\Controllers\\AppointmentsController@cancel',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::0HjNxMxJ1qGbXl9S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fMI6XbZoPYjqcCVn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@login',
        'controller' => 'App\\Http\\Controllers\\ClientController@login',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::fMI6XbZoPYjqcCVn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t86MT4tQdVfhkwI6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@register',
        'controller' => 'App\\Http\\Controllers\\ClientController@register',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::t86MT4tQdVfhkwI6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uIvPoPdFJTTXWsq7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@documents',
        'controller' => 'App\\Http\\Controllers\\ClientController@documents',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::uIvPoPdFJTTXWsq7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'externalRegister' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'patients/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@externalStore',
        'controller' => 'App\\Http\\Controllers\\PatientsController@externalStore',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'externalRegister',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'externalAuth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'patients/externalAuth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@externalAuth',
        'controller' => 'App\\Http\\Controllers\\PatientsController@externalAuth',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'externalAuth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6dp19Mv2EfuXCVHN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients/externalAuth/{patient}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PatientsController@alreadyAuth',
        'controller' => 'App\\Http\\Controllers\\PatientsController@alreadyAuth',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::6dp19Mv2EfuXCVHN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'externalLab' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lab-samples/externalLab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@externalLab',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@externalLab',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'externalLab',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VR9kMDgl74FfkQMM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'f9664ea1803311b35f81d07d8c9e072d/{labSample}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LabSampleController@show',
        'controller' => 'App\\Http\\Controllers\\LabSampleController@show',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::VR9kMDgl74FfkQMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mQ3KsbXrWRxj9PaF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generic-signature/{signatureType}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GenericSignatureController@index',
        'controller' => 'App\\Http\\Controllers\\GenericSignatureController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::mQ3KsbXrWRxj9PaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wcMNFyBKkz8aDRlr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generic-signature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GenericSignatureController@store',
        'controller' => 'App\\Http\\Controllers\\GenericSignatureController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wcMNFyBKkz8aDRlr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oZfNy5NauTk593bB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CacheController@index',
        'controller' => 'App\\Http\\Controllers\\CacheController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::oZfNy5NauTk593bB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n8pjy32L8O6zosHV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":259:{@u4M3YQ7KqiuHfxW4xrVS03NhFBDF+vHvvXdw6BTNOg0=.a:5:{s:3:"use";a:0:{}s:8:"function";s:47:"function () {
    return \\redirect(\'/login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000035d8290a000000004e664eca";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::n8pjy32L8O6zosHV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
