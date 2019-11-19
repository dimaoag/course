<?php

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;
use App\Model\Category\Entity\Category;


// Home

//Breadcrumbs::register('home', function (Crumbs $crumbs) {
//    $crumbs->push('Home', route('admin.home'));
//});


#======================================================================
// Admin

Breadcrumbs::register('admin.home', function (Crumbs $crumbs) {
    $crumbs->push('Главная', route('admin.home'));
});


// Categories

Breadcrumbs::register('admin.categories.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push('Категории', route('admin.categories.index'));
});

Breadcrumbs::register('admin.categories.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.index');
    $crumbs->push('Создать', route('admin.categories.create'));
});

Breadcrumbs::register('admin.categories.show', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.categories.index');
    $crumbs->push($category->name_ru, route('admin.categories.show', $category));
});

Breadcrumbs::register('admin.categories.edit', function (Crumbs $crumbs, Category $category) {
    $crumbs->parent('admin.categories.show', $category);
    $crumbs->push('Изменить', route('admin.categories.edit', $category));
});




//// Users
//
//Breadcrumbs::register('admin.users.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Users', route('admin.users.index'));
//});
//
//Breadcrumbs::register('admin.users.create', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.users.index');
//    $crumbs->push('Create', route('admin.users.create'));
//});
//
//Breadcrumbs::register('admin.users.show', function (Crumbs $crumbs, User $user) {
//    $crumbs->parent('admin.users.index');
//    $crumbs->push($user->name, route('admin.users.show', $user));
//});
//
//Breadcrumbs::register('admin.users.edit', function (Crumbs $crumbs, User $user) {
//    $crumbs->parent('admin.users.show', $user);
//    $crumbs->push('Edit', route('admin.users.edit', $user));
//});
//
//
//// Regions
//
//Breadcrumbs::register('admin.regions.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Regions', route('admin.regions.index'));
//});
//
//Breadcrumbs::register('admin.regions.create', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.regions.index');
//    $crumbs->push('Create', route('admin.regions.create'));
//});
//
//Breadcrumbs::register('admin.regions.show', function (Crumbs $crumbs, Region $region) {
//    if ($parent = $region->parent) {
//        $crumbs->parent('admin.regions.show', $parent);
//    } else {
//        $crumbs->parent('admin.regions.index');
//    }
//    $crumbs->push($region->name, route('admin.regions.show', $region));
//});
//
//Breadcrumbs::register('admin.regions.edit', function (Crumbs $crumbs, Region $region) {
//    $crumbs->parent('admin.regions.show', $region);
//    $crumbs->push('Edit', route('admin.regions.edit', $region));
//});



//// Advert Category Attributes
//
//Breadcrumbs::register('admin.adverts.categories.attributes.create', function (Crumbs $crumbs, Category $category) {
//    $crumbs->parent('admin.adverts.categories.show', $category);
//    $crumbs->push('Create', route('admin.adverts.categories.attributes.create', $category));
//});
//
//Breadcrumbs::register('admin.adverts.categories.attributes.show', function (Crumbs $crumbs, Category $category, Attribute $attribute) {
//    $crumbs->parent('admin.adverts.categories.show', $category);
//    $crumbs->push($attribute->name, route('admin.adverts.categories.attributes.show', [$category, $attribute]));
//});
//
//Breadcrumbs::register('admin.adverts.categories.attributes.edit', function (Crumbs $crumbs, Category $category, Attribute $attribute) {
//    $crumbs->parent('admin.adverts.categories.attributes.show', $category, $attribute);
//    $crumbs->push('Edit', route('admin.adverts.categories.attributes.edit', [$category, $attribute]));
//});
//
//
//// Banners
//
//Breadcrumbs::register('admin.banners.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Banners', route('admin.banners.index'));
//});
//
//Breadcrumbs::register('admin.banners.show', function (Crumbs $crumbs, Banner $banner) {
//    $crumbs->parent('admin.banners.index');
//    $crumbs->push($banner->name, route('admin.banners.show', $banner));
//});
//
//Breadcrumbs::register('admin.banners.edit', function (Crumbs $crumbs, Banner $banner) {
//    $crumbs->parent('admin.banners.show', $banner);
//    $crumbs->push('Edit', route('admin.banners.edit', $banner));
//});
//
//Breadcrumbs::register('admin.banners.reject', function (Crumbs $crumbs, Banner $banner) {
//    $crumbs->parent('admin.banners.show', $banner);
//    $crumbs->push('Reject', route('admin.banners.reject', $banner));
//});
//
//
//
//// Pages
//
//Breadcrumbs::register('admin.pages.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Pages', route('admin.pages.index'));
//});
//
//Breadcrumbs::register('admin.pages.create', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.pages.index');
//    $crumbs->push('Create', route('admin.pages.create'));
//});
//
//Breadcrumbs::register('admin.pages.show', function (Crumbs $crumbs, Page $page) {
//    if ($parent = $page->parent) {
//        $crumbs->parent('admin.pages.show', $parent);
//    } else {
//        $crumbs->parent('admin.pages.index');
//    }
//    $crumbs->push($page->title, route('admin.pages.show', $page));
//});
//
//Breadcrumbs::register('admin.pages.edit', function (Crumbs $crumbs, Page $page) {
//    $crumbs->parent('admin.pages.show', $page);
//    $crumbs->push('Edit', route('admin.pages.edit', $page));
//});
//
//
//// Tickets
//
//Breadcrumbs::register('admin.tickets.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Tickets', route('admin.tickets.index'));
//});
//
//Breadcrumbs::register('admin.tickets.show', function (Crumbs $crumbs, Ticket $ticket) {
//    $crumbs->parent('admin.tickets.index');
//    $crumbs->push($ticket->subject, route('admin.tickets.show', $ticket));
//});
//
//Breadcrumbs::register('admin.tickets.edit', function (Crumbs $crumbs, Ticket $ticket) {
//    $crumbs->parent('admin.tickets.show', $ticket);
//    $crumbs->push('Edit', route('admin.tickets.edit', $ticket));
//});
//
//
//
//// Adverts
//
//Breadcrumbs::register('admin.adverts.adverts.index', function (Crumbs $crumbs) {
//    $crumbs->parent('admin.home');
//    $crumbs->push('Adverts', route('admin.adverts.adverts.index'));
//});
//
//Breadcrumbs::register('admin.adverts.adverts.edit', function (Crumbs $crumbs, Advert $advert) {
//    $crumbs->parent('admin.home');
//    $crumbs->push($advert->title, route('admin.adverts.adverts.edit', $advert));
//});
//
//Breadcrumbs::register('admin.adverts.adverts.photos', function (Crumbs $crumbs, Advert $advert) {
//    $crumbs->parent('admin.home');
//    $crumbs->push($advert->title, route('admin.adverts.adverts.photos', $advert));
//});
//
//Breadcrumbs::register('admin.adverts.adverts.attributes', function (Crumbs $crumbs, Advert $advert) {
//    $crumbs->parent('admin.home');
//    $crumbs->push($advert->title, route('admin.adverts.adverts.attributes', $advert));
//});
//
//
//Breadcrumbs::register('admin.adverts.adverts.reject', function (Crumbs $crumbs, Advert $advert) {
//    $crumbs->parent('admin.home');
//    $crumbs->push($advert->title, route('admin.adverts.adverts.reject', $advert));
//});


