<?php

namespace App\Http;

use Breadcrumbs;

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('home'));
});


// Resumen
Breadcrumbs::register('resumen', function($breadcrumbs)
{
	$breadcrumbs->parent('home');
    $breadcrumbs->push('Resumen Presupuestario', route('resumen'));
});

// Visor

Breadcrumbs::register('visor', function($breadcrumbs)
{
	$breadcrumbs->parent('resumen');
    $breadcrumbs->push('Resumen Informativo', route('visor'));
});


//Plan Obras

Breadcrumbs::register('planobras_index', function($breadcrumbs)
{
	$breadcrumbs->parent('resumen');
    $breadcrumbs->push('Plan de Obras', route('planobras.index'));
});

Breadcrumbs::register('planobras_create', function($breadcrumbs)
{
	$breadcrumbs->parent('planobras_index');
    $breadcrumbs->push('Registrar', route('planobras.create'));
});

//Financiamiento de Obras

Breadcrumbs::register('financiaobras_index', function($breadcrumbs)
{
	$breadcrumbs->parent('resumen');
    $breadcrumbs->push('Financiamiento de Obras', route('financiaobras.index'));
});

Breadcrumbs::register('financiaobras_create', function($breadcrumbs)
{
    $breadcrumbs->parent('financiaobras_index');
    $breadcrumbs->push('Registrar', route('financiaobras.create'));
});



//Financiamiento de Creditos

Breadcrumbs::register('financiacreditos_index', function($breadcrumbs)
{
    $breadcrumbs->parent('resumen');
    $breadcrumbs->push('Financiamiento de Creditos', route('financiacreditos.index'));
});

Breadcrumbs::register('financiacreditos_create', function($breadcrumbs)
{
    $breadcrumbs->parent('financiacreditos_index');
    $breadcrumbs->push('Registrar', route('financiacreditos.create'));
});