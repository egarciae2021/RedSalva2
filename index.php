<?php
// Definir las variables de metadatos comunes
$commonMetadata = [
    'title' => 'Clinica Montesur',
    'keywords' => '', // Tus palabras clave comunes
    'description' => ''
];

// Definir las variables específicas de cada página
$pageSpecificMetadata = [
    'index' => [
        'imagen' => 'https://montesur.newways.pe/images/nosotros.webp',
        'title' => 'Clinica Montesur'
    ],
    'nosotros' => [
        'imagen' => 'https://montesur.newways.pe/images/nosotros.webp',
        'title' => 'Nosotros | Clinica Montesur',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    'staff-medico' => [
        'imagen' => 'https://montesur.newways.pe/images/nosotros.webp',
        'title' => 'Staff Médico | Clinica Montesur',
        'h1' => 'Staff Médico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia' => [
        'imagen' => 'https://montesur.newways.pe/images/anestesiologia.webp',
        'title' => 'Anestesiologia | Clinica Montesur',
        'h1' => 'Anestesiologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-ambulatoria-de-riesgo-anestesico' => [
        'imagen' => 'https://montesur.newways.pe/images/consulta-ambulatoria-de-riesgo-anestesico.webp',
        'title' => 'Consulta ambulatoria de riesgo anestésico | Clinica Montesur',
        'h1' => 'Consulta ambulatoria de riesgo anestésico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-especializada-de-tratamiento-del-dolor' => [
        'imagen' => 'https://montesur.newways.pe/images/consulta-especializada-de-tratamiento-del-dolor.webp',
        'title' => 'Consulta especializada de tratamiento del dolor | Clinica Montesur',
        'h1' => 'Consulta especializada de tratamiento del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/otra' => [
        'imagen' => 'https://montesur.newways.pe/images/consulta-especializada-de-tratamiento-del-dolor.webp',
        'title' => 'Consulta especializada de tratamiento del dolor | Clinica Montesur',
        'h1' => 'Consulta especializada de tratamiento del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/consulta-especializada-de-cuidados-paliativos' => [
        'imagen' => 'https://montesur.newways.pe/images/consulta-especializada-de-cuidados-paliativos.webp',
        'title' => 'Consulta especializada de cuidados paliativos | Clinica Montesur',
        'h1' => 'Consulta especializada de cuidados paliativos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/procedimientos-de-intervencionismo-en-dolor' => [
        'imagen' => 'https://montesur.newways.pe/images/procedimientos-de-intervencionismo-en-dolor.webp',
        'title' => 'Procedimientos de intervencionismo en dolor | Clinica Montesur',
        'h1' => 'Procedimientos de intervencionismo en dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/atencion-de-interconsultas-hospitalarias-para-manejo-del-dolor' => [
        'imagen' => 'https://montesur.newways.pe/images/atencion-de-interconsultas-hospitalarias-para-manejo-del-dolor.webp',
        'title' => 'Atención de interconsultas hospitalarias para manejo del dolor | Clinica Montesur',
        'h1' => 'Atención de interconsultas hospitalarias para manejo del dolor',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/anestesiologia/anestesia-ambulatoria-para-procedimientos-fuera-del-quirofano' => [
        'imagen' => 'https://montesur.newways.pe/images/anestesia-ambulatoria-para-procedimientos-fuera-del-quirofano.webp',
        'title' => 'Anestesia ambulatoria para procedimientos fuera del quirófano | Clinica Montesur',
        'h1' => 'Anestesia ambulatoria para procedimientos fuera del quirófano',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/cardiologia' => [
        'imagen' => 'https://montesur.newways.pe/images/cardiologia.webp',
        'title' => 'Cardiología | Clinica Montesur',
        'h1' => 'Cardiología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/arritmia-cardiaca' => [
        'imagen' => 'https://montesur.newways.pe/images/arritmia-cardiaca.webp',
        'title' => 'Arritmia cardiaca | Clinica Montesur',
        'h1' => 'Arritmia cardiaca',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/cardiopatia-coronaria' => [
        'imagen' => 'https://montesur.newways.pe/images/cardiopatia-coronaria.webp',
        'title' => 'Cardiopatía coronaria | Clinica Montesur',
        'h1' => 'Cardiopatía coronaria',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/hipertension-arterial' => [
        'imagen' => 'https://montesur.newways.pe/images/hipertension-arterial.webp',
        'title' => 'Hipertensión arterial | Clinica Montesur',
        'h1' => 'Hipertensión arterial',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/insuficiencia-cardiaca' => [
        'imagen' => 'https://montesur.newways.pe/images/insuficiencia-cardiaca.webp',
        'title' => 'Insuficiencia cardiaca | Clinica Montesur',
        'h1' => 'Insuficiencia cardiaca',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/patologia-del-sistema-circulatorio' => [
        'imagen' => 'https://montesur.newways.pe/images/patologia-del-sistema-circulatorio.webp',
        'title' => 'Patología del sistema circulatorio | Clinica Montesur',
        'h1' => 'Patología del sistema circulatorio',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cardiologia/valvulopatias' => [
        'imagen' => 'https://montesur.newways.pe/images/valvulopatias.webp',
        'title' => 'Valvulopatías | Clinica Montesur',
        'h1' => 'Valvulopatías',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],


    '/especialidades/cirugia-bariatrica-y-metabolica' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-bariatrica-y-metabolica.webp',
        'title' => 'Cirugía Bariátrica y Metabólica | Clinica Montesur',
        'h1' => 'Cirugía Bariátrica y Metabólica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/by-pass-gastrico' => [
        'imagen' => 'https://montesur.newways.pe/images/by-pass-gastrico.webp',
        'title' => 'By Pass Gástrico | Clinica Montesur',
        'h1' => 'By Pass Gástrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/manga-gastrica' => [
        'imagen' => 'https://montesur.newways.pe/images/manga-gastrica.webp',
        'title' => 'Manga Gástrica | Clinica Montesur',
        'h1' => 'Manga Gástrica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-bariatrica-y-metabolica/mini-by-pass-gastrico' => [
        'imagen' => 'https://montesur.newways.pe/images/mini-by-pass-gastrico.webp',
        'title' => 'Mini By Pass Gástrico | Clinica Montesur',
        'h1' => 'Mini By Pass Gástrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],





    '/especialidades/cirugia-general' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-general.webp',
        'title' => 'Cirugía General | Clinica Montesur',
        'h1' => 'Cirugía General',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/apendicectomia-laparoscopica' => [
        'imagen' => 'https://montesur.newways.pe/images/apendicectomia-laparoscopica.webp',
        'title' => 'Apendicectomía laparoscópica | Clinica Montesur',
        'h1' => 'Apendicectomía laparoscópica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/colecistectomia-laparoscopica' => [
        'imagen' => 'https://montesur.newways.pe/images/colecistectomia-laparoscopica.webp',
        'title' => 'Colecistectomía laparoscópica | Clinica Montesur',
        'h1' => 'Colecistectomía laparoscópica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-anal-y-perianal' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-anal-y-perianal.webp',
        'title' => 'Cirugía anal y perianal | Clinica Montesur',
        'h1' => 'Cirugía anal y perianal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-enfermedad-pilonoidal' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-enfermedad-pilonoidal.webp',
        'title' => 'Cirugía de enfermedad pilonidal | Clinica Montesur',
        'h1' => 'Cirugía de enfermedad pilonidal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-eventraciones' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-eventraciones.webp',
        'title' => 'Cirugía de eventraciones | Clinica Montesur',
        'h1' => 'Cirugía de eventraciones',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-hernia-hiatal' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-hernia-hiatal.webp',
        'title' => 'Cirugía de hernia hiatal | Clinica Montesur',
        'h1' => 'Cirugía de hernia hiatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-higado' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-higado.webp',
        'title' => 'Cirugía de hígado | Clinica Montesur',
        'h1' => 'Cirugía de hígado',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/cirugia-de-prolapso-rectal' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-prolapso-rectal.webp',
        'title' => 'Cirugía de prolapspo rectal | Clinica Montesur',
        'h1' => 'Cirugía de prolapspo rectal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/hernioplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/hernioplastia.webp',
        'title' => 'Hernioplastía | Clinica Montesur',
        'h1' => 'Hernioplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-general/extirpacion-de-tumores-de-piel-y-partes-blandas' => [
        'imagen' => 'https://montesur.newways.pe/images/extirpacion-de-tumores-de-piel-y-partes-blandas.webp',
        'title' => 'Extirpación de tumores de piel y partes blandas | Clinica Montesur',
        'h1' => 'Extirpación de tumores de piel y partes blandas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],





    '/especialidades/cirugia-plastica' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-plastica.webp',
        'title' => 'Cirugía Plástica | Clinica Montesur',
        'h1' => 'Cirugía Plástica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/abdominoplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/abdominoplastia.webp',
        'title' => 'Abdominoplastía | Clinica Montesur',
        'h1' => 'Abdominoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/bichectomia' => [
        'imagen' => 'https://montesur.newways.pe/images/bichectomia.webp',
        'title' => 'Bichectomía | Clinica Montesur',
        'h1' => 'Bichectomía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/blefaroplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/blefaroplastia.webp',
        'title' => 'Blefaroplastía | Clinica Montesur',
        'h1' => 'Blefaroplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/implante-y-o-reduccion-de-mamas' => [
        'imagen' => 'https://montesur.newways.pe/images/implante-y-o-reduccion-de-mamas.webp',
        'title' => 'Implante y/o reducción de mamas | Clinica Montesur',
        'h1' => 'Implante y/o reducción de mamas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/liposuccion' => [
        'imagen' => 'https://montesur.newways.pe/images/liposuccion.webp',
        'title' => 'Liposucción | Clinica Montesur',
        'h1' => 'Liposucción',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/mentoplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/mentoplastia.webp',
        'title' => 'Mentoplastía | Clinica Montesur',
        'h1' => 'Mentoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/otoplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/otoplastia.webp',
        'title' => 'Otoplastía | Clinica Montesur',
        'h1' => 'Otoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/cirugia-plastica/rinoplastia' => [
        'imagen' => 'https://montesur.newways.pe/images/rinoplastia.webp',
        'title' => 'Rinoplastía | Clinica Montesur',
        'h1' => 'Rinoplastía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia' => [
        'imagen' => 'https://montesur.newways.pe/images/dermatologia.webp',
        'title' => 'Dermatología | Clinica Montesur',
        'h1' => 'Dermatología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia/dermatologia-pediatrica' => [
        'imagen' => 'https://montesur.newways.pe/images/dermatologia-pediatrica.webp',
        'title' => 'Dermatología Pediátrica | Clinica Montesur',
        'h1' => 'Dermatología Pediátrica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/dermatologia/dermatologia-para-gestantes' => [
        'imagen' => 'https://montesur.newways.pe/images/dermatologia-para-gestantes.webp',
        'title' => 'Dermatología para gestantes | Clinica Montesur',
        'h1' => 'Dermatología para gestantes',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/endocrinologia' => [
        'imagen' => 'https://montesur.newways.pe/images/endocrinologia.webp',
        'title' => 'Endocrinología | Clinica Montesur',
        'h1' => 'Endocrinología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/acromegalia' => [
        'imagen' => 'https://montesur.newways.pe/images/acromegalia.webp',
        'title' => 'Acromegalia | Clinica Montesur',
        'h1' => 'Acromegalia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/cancer-de-tiroides' => [
        'imagen' => 'https://montesur.newways.pe/images/cancer-de-tiroides.webp',
        'title' => 'Cáncer de tiroides | Clinica Montesur',
        'h1' => 'Cáncer de tiroides',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/diabetes-mellitus' => [
        'imagen' => 'https://montesur.newways.pe/images/diabetes-mellitus.webp',
        'title' => 'Diabetes mellitus | Clinica Montesur',
        'h1' => 'Diabetes mellitus',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/diabetes-gestacional' => [
        'imagen' => 'https://montesur.newways.pe/images/diabetes-gestacional.webp',
        'title' => 'Diabetes gestacional | Clinica Montesur',
        'h1' => 'Diabetes gestacional',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/dislipidemias' => [
        'imagen' => 'https://montesur.newways.pe/images/dislipidemias.webp',
        'title' => 'Dislipidemias | Clinica Montesur',
        'h1' => 'Dislipidemias',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/enfermedad-de-addison' => [
        'imagen' => 'https://montesur.newways.pe/images/enfermedad-de-addison.webp',
        'title' => 'Enfermedad de addison | Clinica Montesur',
        'h1' => 'Enfermedad de addison',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/hipotiroidismo-e-hipertiroidismo' => [
        'imagen' => 'https://montesur.newways.pe/images/hipotiroidismo-e-hipertiroidismo.webp',
        'title' => 'Hipotiroidismo e hipertiroidismo | Clinica Montesur',
        'h1' => 'Hipotiroidismo e hipertiroidismo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sindrome-de-cushing' => [
        'imagen' => 'https://montesur.newways.pe/images/sindrome-de-cushing.webp',
        'title' => 'Síndrome de cushing | Clinica Montesur',
        'h1' => 'Síndrome de cushing',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sindrome-de-ovario-poliquistico' => [
        'imagen' => 'https://montesur.newways.pe/images/sindrome-de-ovario-poliquistico.webp',
        'title' => 'Síndrome de ovario poliquístico  | Clinica Montesur',
        'h1' => 'Síndrome de ovario poliquístico ',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/endocrinologia/sobrepeso-y-obesidad' => [
        'imagen' => 'https://montesur.newways.pe/images/sobrepeso-y-obesidad.webp',
        'title' => 'Sobrepeso y obesidad | Clinica Montesur',
        'h1' => 'Sobrepeso y obesidad',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/gastroenterologia' => [
        'imagen' => 'https://montesur.newways.pe/images/gastroenterologia.webp',
        'title' => 'Gastroenterologia | Clinica Montesur',
        'h1' => 'Gastroenterologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/colonoscopia' => [
        'imagen' => 'https://montesur.newways.pe/images/colonoscopia.webp',
        'title' => 'Colonoscopía | Clinica Montesur',
        'h1' => 'Colonoscopía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/endoscopia' => [
        'imagen' => 'https://montesur.newways.pe/images/endoscopia.webp',
        'title' => 'Endoscopía | Clinica Montesur',
        'h1' => 'Endoscopía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/descarte-de-helicobacter-pylori' => [
        'imagen' => 'https://montesur.newways.pe/images/descarte-de-helicobacter-pylori.webp',
        'title' => 'Descarte de Helicobacter Pylori | Clinica Montesur',
        'h1' => 'Descarte de Helicobacter Pylori',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/cancer-de-colon' => [
        'imagen' => 'https://montesur.newways.pe/images/cancer-de-colon.webp',
        'title' => 'Cáncer de colon | Clinica Montesur',
        'h1' => 'Cáncer de colon',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/cancer-de-estomago' => [
        'imagen' => 'https://montesur.newways.pe/images/cancer-de-estomago.webp',
        'title' => 'Cáncer de estómago | Clinica Montesur',
        'h1' => 'Cáncer de estómago',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/enfermedad-por-reflujo-gastroesofagico' => [
        'imagen' => 'https://montesur.newways.pe/images/enfermedad-por-reflujo-gastroesofagico.webp',
        'title' => 'Enfermedad por reflujo gastroesofágico | Clinica Montesur',
        'h1' => 'Enfermedad por reflujo gastroesofágico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/gastritis' => [
        'imagen' => 'https://montesur.newways.pe/images/gastritis.webp',
        'title' => 'Gastritis | Clinica Montesur',
        'h1' => 'Gastritis',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/hemorroides' => [
        'imagen' => 'https://montesur.newways.pe/images/hemorroides.webp',
        'title' => 'Hemorroides | Clinica Montesur',
        'h1' => 'Hemorroides',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/gastroenterologia/ulcera-peptica' => [
        'imagen' => 'https://montesur.newways.pe/images/ulcera-peptica.webp',
        'title' => 'Úlcera péptica | Clinica Montesur',
        'h1' => 'Úlcera péptica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/ginecologia' => [
        'imagen' => 'https://montesur.newways.pe/images/ginecologia.webp',
        'title' => 'Ginecologia | Clinica Montesur',
        'h1' => 'Ginecologia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cirugia-de-prolapso-e-incontinencia' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-prolapso-e-incontinencia.webp',
        'title' => 'Cirugía de prolapso e incontinencia  | Clinica Montesur',
        'h1' => 'Cirugía de prolapso e incontinencia ',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cirugia-de-utero-y-anexos' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-utero-y-anexos.webp',
        'title' => 'Cirugía de útero y anexos | Clinica Montesur',
        'h1' => 'Cirugía de útero y anexos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/colpografia-anterior-y-posterior' => [
        'imagen' => 'https://montesur.newways.pe/images/colpografia-anterior-y-posterior.webp',
        'title' => 'Colpografía Anterior y Posterior | Clinica Montesur',
        'h1' => 'Colpografía Anterior y Posterior',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/cono-leep' => [
        'imagen' => 'https://montesur.newways.pe/images/cono-leep.webp',
        'title' => 'Cono LEEP | Clinica Montesur',
        'h1' => 'Cono LEEP',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/dilatacion-y-curetaje' => [
        'imagen' => 'https://montesur.newways.pe/images/dilatacion-y-curetaje.webp',
        'title' => 'Dilatación y curetaje | Clinica Montesur',
        'h1' => 'Dilatación y curetaje',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/histeroscopia-y-procedimientos-histeroscopicos' => [
        'imagen' => 'https://montesur.newways.pe/images/histeroscopia-y-procedimientos-histeroscopicos.webp',
        'title' => 'Histeroscopia y Procedimientos Histeroscópicos | Clinica Montesur',
        'h1' => 'Histeroscopia y Procedimientos Histeroscópicos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/laparoscopia-ginecologica' => [
        'imagen' => 'https://montesur.newways.pe/images/laparoscopia-ginecologica.webp',
        'title' => 'Laparoscopia Ginecológica | Clinica Montesur',
        'h1' => 'Laparoscopia Ginecológica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/ligadura-de-trompas' => [
        'imagen' => 'https://montesur.newways.pe/images/ligadura-de-trompas.webp',
        'title' => 'Ligadura de Trompas | Clinica Montesur',
        'h1' => 'Ligadura de Trompas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/recanalizacion-de-trompas' => [
        'imagen' => 'https://montesur.newways.pe/images/recanalizacion-de-trompas.webp',
        'title' => 'Recanalización de Trompas | Clinica Montesur',
        'h1' => 'Recanalización de Trompas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/ginecologia/tratamiento-quirugico-de-endometriosis' => [
        'imagen' => 'https://montesur.newways.pe/images/tratamiento-quirugico-de-endometriosis.webp',
        'title' => 'Tratamientos quirúrgico de endometriosis | Clinica Montesur',
        'h1' => 'Tratamiento quirúrgico de endometriosis',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/mastologia-y-cancer-de-piel' => [
        'imagen' => 'https://montesur.newways.pe/images/mastologia-y-cancer-de-piel.webp',
        'title' => 'Mastología y cáncer de piel | Clinica Montesur',
        'h1' => 'Mastología y cáncer de piel',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/ecografia-de-mama' => [
        'imagen' => 'https://montesur.newways.pe/images/ecografia-de-mama.webp',
        'title' => 'Ecografía de Mama | Clinica Montesur',
        'h1' => 'Ecografía de Mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mamografia' => [
        'imagen' => 'https://montesur.newways.pe/images/mamografia.webp',
        'title' => 'Mamografía | Clinica Montesur',
        'h1' => 'Mamografía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mastitis-granulomatosa' => [
        'imagen' => 'https://montesur.newways.pe/images/mastitis-granulomatosa.webp',
        'title' => 'Mastitis Granulomatosa | Clinica Montesur',
        'h1' => 'Mastitis Granulomatosa',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/mastectomia' => [
        'imagen' => 'https://montesur.newways.pe/images/mastectomia.webp',
        'title' => 'Mastectomía | Clinica Montesur',
        'h1' => 'Mastectomía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/biopsia-guiada-por-ecografia' => [
        'imagen' => 'https://montesur.newways.pe/images/biopsia-guiada-por-ecografia.webp',
        'title' => 'Biopsia guiada por ecografía | Clinica Montesur',
        'h1' => 'Biopsia guiada por ecografía',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/todo-sobre-el-cancer-de-mama' => [
        'imagen' => 'https://montesur.newways.pe/images/todo-sobre-el-cancer-de-mama.webp',
        'title' => 'Todo sobre el cáncer de mama | Clinica Montesur',
        'h1' => 'Todo sobre el cáncer de mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/cirugias-de-mama' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugias-de-mama.webp',
        'title' => 'Cirugías de Mama | Clinica Montesur',
        'h1' => 'Cirugías de Mama',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/mastologia-y-cancer-de-piel/cirugias-de-piel' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugias-de-piel.webp',
        'title' => 'Cirugías de Piel | Clinica Montesur',
        'h1' => 'Cirugías de Piel',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/neumologia' => [
        'imagen' => 'https://montesur.newways.pe/images/neumologia.webp',
        'title' => 'Neumología | Clinica Montesur',
        'h1' => 'Neumología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/asma-bronquial' => [
        'imagen' => 'https://montesur.newways.pe/images/asma-bronquial.webp',
        'title' => 'Asma bronquial | Clinica Montesur',
        'h1' => 'Asma bronquial',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/patologia-pulmonar-infecciosa' => [
        'imagen' => 'https://montesur.newways.pe/images/patologia-pulmonar-infecciosa.webp',
        'title' => 'Patología Pulmonar Infecciosa | Clinica Montesur',
        'h1' => 'Patología Pulmonar Infecciosa',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/cancer-de-pulmon' => [
        'imagen' => 'https://montesur.newways.pe/images/cancer-de-pulmon.webp',
        'title' => 'Cáncer de pulmón | Clinica Montesur',
        'h1' => 'Cáncer de pulmón',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neumologia/enfermedad-pulmonar-obstructiva-cronica' => [
        'imagen' => 'https://montesur.newways.pe/images/enfermedad-pulmonar-obstructiva-cronica.webp',
        'title' => 'Enfermedad Pulmonar Obstructiva Crónica | Clinica Montesur',
        'h1' => 'Enfermedad Pulmonar Obstructiva Crónica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/neurologia' => [
        'imagen' => 'https://montesur.newways.pe/images/neurologia.webp',
        'title' => 'Neurología | Clinica Montesur',
        'h1' => 'Neurología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/cefaleas-y-migranas' => [
        'imagen' => 'https://montesur.newways.pe/images/cefaleas-y-migranas.webp',
        'title' => 'Cefaleas y Migrañas | Clinica Montesur',
        'h1' => 'Cefaleas y Migrañas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/demencias' => [
        'imagen' => 'https://montesur.newways.pe/images/demencias.webp',
        'title' => 'Demencias | Clinica Montesur',
        'h1' => 'Demencias',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/enfermedad-de-parkinson' => [
        'imagen' => 'https://montesur.newways.pe/images/enfermedad-de-parkinson.webp',
        'title' => 'Enfermedad de parkinson | Clinica Montesur',
        'h1' => 'Enfermedad de parkinson',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/epilepsia' => [
        'imagen' => 'https://montesur.newways.pe/images/epilepsia.webp',
        'title' => 'Epilepsia | Clinica Montesur',
        'h1' => 'Epilepsia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/neurologia/neuralgia-del-trigemino' => [
        'imagen' => 'https://montesur.newways.pe/images/neuralgia-del-trigemino.webp',
        'title' => 'Neuralgia del Trigémino | Clinica Montesur',
        'h1' => 'Neuralgia del Trigémino',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/oftalmologia' => [
        'imagen' => 'https://montesur.newways.pe/images/oftalmologia.webp',
        'title' => 'Oftalmología | Clinica Montesur',
        'h1' => 'Oftalmología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/catarata' => [
        'imagen' => 'https://montesur.newways.pe/images/catarata.webp',
        'title' => 'Catarata | Clinica Montesur',
        'h1' => 'Catarata',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/estrabismo' => [
        'imagen' => 'https://montesur.newways.pe/images/estrabismo.webp',
        'title' => 'Estrabismo | Clinica Montesur',
        'h1' => 'Estrabismo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/pterigion' => [
        'imagen' => 'https://montesur.newways.pe/images/pterigion.webp',
        'title' => 'Pterigion | Clinica Montesur',
        'h1' => 'Pterigion',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/glaucoma' => [
        'imagen' => 'https://montesur.newways.pe/images/glaucoma.webp',
        'title' => 'Glaucoma | Clinica Montesur',
        'h1' => 'Glaucoma',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/cirugia-de-desprendimiento-de-retina' => [
        'imagen' => 'https://montesur.newways.pe/images/cirugia-de-desprendimiento-de-retina.webp',
        'title' => 'Cirugía de desprendimiento de retina | Clinica Montesur',
        'h1' => 'Cirugía de desprendimiento de retina',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/oftalmologia/tratamiento-de-retinoplastia-diabetica' => [
        'imagen' => 'https://montesur.newways.pe/images/tratamiento-de-retinoplastia-diabetica.webp',
        'title' => 'Tratamiento de retinoplastia diabética | Clinica Montesur',
        'h1' => 'Tratamiento de retinoplastia diabética',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/otorrinolaringologia' => [
        'imagen' => 'https://montesur.newways.pe/images/otorrinolaringologia.webp',
        'title' => 'Otorrinolaringología | Clinica Montesur',
        'h1' => 'Otorrinolaringología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/naso-laringologia-flexible' => [
        'imagen' => 'https://montesur.newways.pe/images/naso-laringologia-flexible.webp',
        'title' => 'Naso laringoscopia flexible | Clinica Montesur',
        'h1' => 'Naso laringoscopia flexible',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/endoscopia-nasal-laringea-y-otica' => [
        'imagen' => 'https://montesur.newways.pe/images/endoscopia-nasal-laringea-y-otica.webp',
        'title' => 'Endoscopia nasal, laríngea y ótica | Clinica Montesur',
        'h1' => 'Endoscopia nasal, laríngea y ótica',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/cauterizacion-nasal' => [
        'imagen' => 'https://montesur.newways.pe/images/cauterizacion-nasal.webp',
        'title' => 'Cauterización nasal | Clinica Montesur',
        'h1' => 'Cauterización nasal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/lavado-de-oidos' => [
        'imagen' => 'https://montesur.newways.pe/images/lavado-de-oidos.webp',
        'title' => 'Lavado de oídos | Clinica Montesur',
        'h1' => 'Lavado de oídos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/microaspiracion-de-oidos-entre-otros' => [
        'imagen' => 'https://montesur.newways.pe/images/microaspiracion-de-oidos-entre-otros.webp',
        'title' => 'Micro aspiración de oídos, entre otros | Clinica Montesur',
        'h1' => 'Micro aspiración de oídos, entre otros',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/potenciales-evocados-auditivos' => [
        'imagen' => 'https://montesur.newways.pe/images/potenciales-evocados-auditivos.webp',
        'title' => 'Potenciales evocados auditivos | Clinica Montesur',
        'h1' => 'Potenciales evocados auditivos',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/audiometria' => [
        'imagen' => 'https://montesur.newways.pe/images/audiometria.webp',
        'title' => 'Audiometría | Clinica Montesur',
        'h1' => 'Audiometría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/timpanometria' => [
        'imagen' => 'https://montesur.newways.pe/images/timpanometria.webp',
        'title' => 'Timpanometria | Clinica Montesur',
        'h1' => 'Timpanometria',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/otorrinolaringologia/logo-audiometria' => [
        'imagen' => 'https://montesur.newways.pe/images/logo-audiometria.webp',
        'title' => 'Logo audiometría | Clinica Montesur',
        'h1' => 'Logo audiometría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],

    '/especialidades/otorrinolaringologia/tamizaje-auditivo' => [
        'imagen' => 'https://montesur.newways.pe/images/tamizaje-auditivo.webp',
        'title' => 'Tamizaje auditivo | Clinica Montesur',
        'h1' => 'Tamizaje auditivo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/pediatria' => [
        'imagen' => 'https://montesur.newways.pe/images/pediatria.webp',
        'title' => 'Pediatría | Clinica Montesur',
        'h1' => 'Pediatría',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/pediatria-vacunas' => [
        'imagen' => 'https://montesur.newways.pe/images/pediatria-vacunas.webp',
        'title' => 'Pediatría Vacunas | Clinica Montesur',
        'h1' => 'Pediatría Vacunas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/bcg' => [
        'imagen' => 'https://montesur.newways.pe/images/bcg.webp',
        'title' => 'BCG | Clinica Montesur',
        'h1' => 'BCG',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/dtp' => [
        'imagen' => 'https://montesur.newways.pe/images/dtp.webp',
        'title' => 'DTP | Clinica Montesur',
        'h1' => 'DTP',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hepatitis-a' => [
        'imagen' => 'https://montesur.newways.pe/images/hepatitis-a.webp',
        'title' => 'Hepatitis A | Clinica Montesur',
        'h1' => 'Hepatitis A',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hepatitis-b' => [
        'imagen' => 'https://montesur.newways.pe/images/hepatitis-b.webp',
        'title' => 'Hepatitis B | Clinica Montesur',
        'h1' => 'Hepatitis B',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/hexavalente' => [
        'imagen' => 'https://montesur.newways.pe/images/hexavalente.webp',
        'title' => 'Hexavalente | Clinica Montesur',
        'h1' => 'Hexavalente',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/influenza' => [
        'imagen' => 'https://montesur.newways.pe/images/influenza.webp',
        'title' => 'Influenza | Clinica Montesur',
        'h1' => 'Influenza',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/meningococo' => [
        'imagen' => 'https://montesur.newways.pe/images/meningococo.webp',
        'title' => 'Meningococo | Clinica Montesur',
        'h1' => 'Meningococo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/neumococo' => [
        'imagen' => 'https://montesur.newways.pe/images/neumococo.webp',
        'title' => 'Neumococo | Clinica Montesur',
        'h1' => 'Neumococo',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/rotavirus' => [
        'imagen' => 'https://montesur.newways.pe/images/rotavirus.webp',
        'title' => 'Rotavirus | Clinica Montesur',
        'h1' => 'Rotavirus',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/triple-viral-mmr' => [
        'imagen' => 'https://montesur.newways.pe/images/triple-viral-mmr.webp',
        'title' => 'Triple viral MMR | Clinica Montesur',
        'h1' => 'Triple viral MMR',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/varicela' => [
        'imagen' => 'https://montesur.newways.pe/images/varicela.webp',
        'title' => 'Varicela | Clinica Montesur',
        'h1' => 'Varicela',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/especialidades/pediatria-vacunas/virus-del-papiloma-humano' => [
        'imagen' => 'https://montesur.newways.pe/images/virus-del-papiloma-humano.webp',
        'title' => 'Virus del papiloma humano | Clinica Montesur',
        'h1' => 'Virus del papiloma humano',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/especialidades/traumatologia' => [
        'imagen' => 'https://montesur.newways.pe/images/traumatologia.webp',
        'title' => 'Traumatología | Clinica Montesur',
        'h1' => 'Traumatología',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],




    '/servicios/centro-obstetrico' => [
        'imagen' => 'https://montesur.newways.pe/images/centro-obstetrico.webp',
        'title' => 'Centro obstétrico | Clinica Montesur',
        'h1' => 'Centro obstétrico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/centro-quirurgico' => [
        'imagen' => 'https://montesur.newways.pe/images/centro-quirurgico.webp',
        'title' => 'Centro quirúrgico | Clinica Montesur',
        'h1' => 'Centro quirúrgico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/consultas-externas' => [
        'imagen' => 'https://montesur.newways.pe/images/consultas-externas.webp',
        'title' => 'Consultas externas | Clinica Montesur',
        'h1' => 'Consultas externas',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/centro-de-vacunacion' => [
        'imagen' => 'https://montesur.newways.pe/images/centro-de-vacunacion.webp',
        'title' => 'Centro de vacunación | Clinica Montesur',
        'h1' => 'Centro de vacunación',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/emergencia' => [
        'imagen' => 'https://montesur.newways.pe/images/emergencia.webp',
        'title' => 'Emergencia | Clinica Montesur',
        'h1' => 'Emergencia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/farmacia' => [
        'imagen' => 'https://montesur.newways.pe/images/farmacia.webp',
        'title' => 'Farmacia | Clinica Montesur',
        'h1' => 'Farmacia',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/hospitalizacion' => [
        'imagen' => 'https://montesur.newways.pe/images/hospitalizacion.webp',
        'title' => 'Hospitalización | Clinica Montesur',
        'h1' => 'Hospitalización',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/imagenes' => [
        'imagen' => 'https://montesur.newways.pe/images/imagenes.webp',
        'title' => 'Imágenes | Clinica Montesur',
        'h1' => 'Imágenes',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/laboratorio-clinico' => [
        'imagen' => 'https://montesur.newways.pe/images/laboratorio-clinico.webp',
        'title' => 'Laboratorio clínico | Clinica Montesur',
        'h1' => 'Laboratorio clínico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/laboratorio-patologico' => [
        'imagen' => 'https://montesur.newways.pe/images/laboratorio-patologico.webp',
        'title' => 'Laboratorio patológico | Clinica Montesur',
        'h1' => 'Laboratorio patológico',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/uci-neonatal' => [
        'imagen' => 'https://montesur.newways.pe/images/uci-neonatal.webp',
        'title' => 'UCI Neonatal | Clinica Montesur',
        'h1' => 'UCI Neonatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/tamizaje-neonatal' => [
        'imagen' => 'https://montesur.newways.pe/images/tamizaje-neonatal.webp',
        'title' => 'Tamizaje neonatal | Clinica Montesur',
        'h1' => 'Tamizaje neonatal',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    '/servicios/visita-guiada' => [
        'imagen' => 'https://montesur.newways.pe/images/visita-guiada.webp',
        'title' => 'Visita guiada | Clinica Montesur',
        'h1' => 'Visita guiada',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],






    '/programas/dulce-espera' => [
        'imagen' => 'https://montesur.newways.pe/images/dulce-espera.webp',
        'title' => 'Dulce espera | Clinica Montesur',
        'h1' => 'Dulce espera',
        'keywords' => $commonMetadata['keywords'],
        'description' => 'DESCRIBIR'
    ],
    // Agrega las páginas específicas restantes aquí
];

// Obtener el nombre de la página actual
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'index';

// Verificar si la página actual tiene metadatos específicos, de lo contrario, usar los comunes
$metadata = $commonMetadata;

if (isset($pageSpecificMetadata[$page])) {
    $metadata = array_merge($metadata, $pageSpecificMetadata[$page]);
}
// Asignar los valores de metadatos a las variables individuales
$page_title = $metadata['title'];
$page_keyword = $metadata['keywords'];
$page_description = $metadata['description'];
$page_image = $metadata['imagen'];
$h1 = $metadata['h1'];

// Resto del código (requerir header, contenido y footer)
require_once('header.php');
require_once('content/' . $page . '.php');
require_once('bloques.php');
require_once('footer.php');
?>