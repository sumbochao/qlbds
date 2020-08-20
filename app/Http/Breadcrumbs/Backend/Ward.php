<?php

Breadcrumbs::register('admin.wards.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.wards.management'), route('admin.wards.index'));
});

Breadcrumbs::register('admin.wards.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.wards.index');
    $breadcrumbs->push(trans('menus.backend.wards.create'), route('admin.wards.create'));
});

Breadcrumbs::register('admin.wards.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.wards.index');
    $breadcrumbs->push(trans('menus.backend.wards.edit'), route('admin.wards.edit', $id));
});
