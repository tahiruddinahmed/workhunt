<?php

$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create', ['auth']);
$router->get('listings/edit/{id}', 'ListingController@edit', ['auth']);
$router->get('/listings/{id}', 'ListingController@show');
$router->get('listing/search', 'ListingController@search');
$router->get('/listings/apply/{id}', 'ListingController@apply', ['auth']);
$router->get('/users/jobseeker/dashboard', 'JobSeekerController@dashboard', ['auth']);
$router->get('/users/jobseeker/dashboard/download-resume', 'JobSeekerController@downloadResume', ['auth']);
$router->get('/users/employer/dashboard', 'EmployerController@index', ['auth']);
$router->get('/users/employer/dashboard/applications', 'EmployerController@applications', ['auth']);
$router->get('/users/employer/dashboard/applications/filter',  'EmployerController@filter', ['auth']);
$router->get('/users/employer/dashboard/applications/download-resume/{id}', 'EmployerController@downloadResume', ['auth']);
$router->get('/users/employer/dashboard/my-listings', 'EmployerController@myListings', ['auth']);

// Form Submission
$router->post('/listings', 'ListingController@store');
$router->put('/listings/{id}', 'ListingController@update', ['auth']);
// Delete Request 
$router->delete('/listings/{id}', 'ListingController@destroy', ['auth']);

$router->get('/auth/register', 'UserController@create', ['guest']);
$router->get('/auth/login', 'UserController@login', ['guest']);

$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
$router->post('/users/jobseeker/profile', 'JobSeekerController@update', ['auth']);
$router->post('/users/employer/dashboard/update-company', 'EmployerController@companyUpdate', ['auth']);
$router->put('/users/employer/dashboard/{id}', 'EmployerController@update', ['auth']);
// Application submit 
$router->post('/listings/apply/{id}', 'ListingController@application', ['auth']);
$router->put('/users/employer/dashboard/applications/{id}', 'EmployerController@updateStatus', ['auth']);