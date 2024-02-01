---
title: Pre-introducing Jocko:: a static website deployment solution for laravel projects.
description: >-
  Jocko allows to create a static website from a Laravel project, providing the CMS section and more.
date: 2024-01-31
thumbnail: /assets/img/posts/a-feature-preview-of-sharp-8/thumbnail.png
author: philippe
---

We plan, at [Code 16](https://code16.fr), to launch our very first product this year. It’s quite a big deal, and to be honest it will still require a lot of work, but we think that it is mature enough toto onboard some early beta testers — if you’re interested, see at the end of this post.

## The why

For some projects, static websites are a good fit: they are fast, secure, and easy to maintain — for all this, we love them at Code 16. The usual drawbacks are also well known: there is no content management, and they can be complex to deploy.

There are solutions to address this (Netlify Create, Statamic, etc.), but they are not always a good fit for us. We wanted to be able to build a website as a regular Laravel project — with blade views, controllers, routes and Eloquent models — and deploy it as a static website on a Netlify space, or on really any VPS (side note: it’s important for many of our clients to be hosted in France).

And of course we want to allow our customers to manage the content of their website in a dedicated CMS, without too much compromises. That’s why we built Jocko.

## The what

Jocko is a custom content management system and an agnostic static website deployment system built for Laravel. Here’s a quick overview:

The first component is a **Laravel package** (`code16/jocko-client`) that you need to install on your project, and use a dedicated API to declare your "collections" (think of them as your models):

```php
class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(JockoCollectionsManager::class)
            ->addCollection(
                JockoCollection::make('pages')
                    ->setIcon('fa-file')
                    ->setLabel('Pages')
                    ->setIsDeletable(false)
                    ->setIsCreatable(false)
                    ->configureCmsList(function (JockoCmsListConfig $config) {
                        $config
                            ->addColumn(JockoColumn::makeImage('cover', 1))
                            ->addColumn(JockoColumn::makeText('title', 10)->setLabel('Name'))
                            ->setIsPaginated()
                            ->setIsSearchable();
                    })
                    ->configureCmsForm(function (JockoCmsFormConfig $config) {
                        $config
                            ->addField(JockoField::makeText('title')->setLabel('Title'))
                            ->addField(JockoField::makeImage('cover')->setLabel('Cover'))
                            ->addField(JockoField::makeRichText('content')->setLabel('Content'));
                    })
            )
            ->addCollection(
                JockoCollection::make('projects')
                    ->setIcon('fa-ruler-combined')
                    ->setLabel('Projects')
                    ->setHasEntityState()
                    ->configureCmsList(function (JockoCmsListConfig $config) {
                        $config
                            ->addColumn(JockoColumn::makeText('title', 5)->setLabel('Title'))
                            ->addColumn(JockoColumn::makeText('reference', 3)->setLabel('Ref'))
                            ->addColumn(JockoColumn::makeText('year', 3)->setLabel('Year'))
                            ->setIsReorderable();
                    })
                    ->configureCmsForm(function (JockoCmsFormConfig $config) {
                        $config
                            ->addCustomField(
                                JockoField::makeText('reference')
                                    ->setLabel('Ref')
                                    ->setValidationRules(['required'])
                            )
                            ->addCustomField(
                                JockoField::makeText('year')
                                    ->setLabel('Year')
                                    ->setValidationRules(['required', 'integer'])
                            )
                            ->addCustomField(
                                JockoField::makeImageList('visuals')
                                    ->setLabel('Visuals')
                                    ->setMaxItems(5)
                            );
                    })
            );
    }
}
```

A collection has a few base fields (cover, title, content...), and as you can see in the `posts` collection above, you can declare more of them if needed.

You can then develop the website (mostly) as usual, using blade views, controllers, routes and Eloquent models, without migrations but with seeder and factories, as the package will take care of linking models and collections.

When your project is ready, the next step is to **create a Jocko account**, to get a proper token and to run an artisan command to initialize the project on the Jocko side:

```bash
php artisan jocko:configure --project=your-project-name --token=your-token
```

After that you’ll be able to access to the Jocko dashboard of your project, where you can manage the content of your collections:

[VISUAL OF SHARP LOL]

Jocko comes with a preview (pre-deploy) website, where you can see the real production content; the final step is to deploy it to its real hosting space of your choice: once configured, it will be a one-click operation from Jocko:

[VISUAL OF DEPLOYMENT]

## Some details on the how

So, how does it work? Well, we use a few good packages, and a wrote a lot of code to glue them together:

- `spatie/laravel-export` is used to create the static bundle of the website,
- `calebporzio/sushi` handles the magic of Eloquent models linked to collections,
- and of course `code16/sharp` is leveraged for all the CMS part.

If you feel that Jocko could be a good fit for one of your projects, and if you want to test the product, you can [subscribe to the newsletter here](https://jocko.code16.fr) to be notified when we launch the beta (very soon hopefully).

As always, feel free to [catch me on Twitter](https://twitter.com/dvlpp) for any comment or question on this.
