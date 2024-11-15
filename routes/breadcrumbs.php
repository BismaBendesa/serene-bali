<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('user-dashboard', function (BreadcrumbTrail $trail) {
  $trail->push('Dashboard', route('user-dashboard'));
});

Breadcrumbs::for('property-catalog', function (BreadcrumbTrail $trail) {
  $trail->push('Search Property', route('property-catalog'));
});

Breadcrumbs::for('property-details', function (BreadcrumbTrail $trail, $property) {
  $trail->parent('property-catalog',);
  $trail->push('Property Details', route('property-details', $property));
});

Breadcrumbs::for('property-gallery', function (BreadcrumbTrail $trail, $property) {
  $trail->parent('property-details', $property->id);
  $trail->push('Property Gallery', route('property-gallery', $property));
});

// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//   $trail->parent('user-dashboard');
//   $trail->push('Blog', route('landing-page'));
// });
