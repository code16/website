---
title: Sharp 8 for Laravel is here.
description: >-
  This version brings many new features: let's review the main ones. 
date: 2023-08-18
thumbnail: /assets/img/posts/sharp-8-for-laravel-is-here/thumbnail.png
author: philippe
---

[Sharp](https://sharp.code16.fr) for Laravel just hit version 8, bringing two very good news: a lot of new features, and few breaking changes. In this post, I would like to quickly present the main new features. 

## Bulk commands

I've already written about this one in a [previous post](https://code16.fr/posts/a-feature-preview-of-sharp-8/), since it was on of the features that was requested for a long time. Truth is we thought it was an unnecessary one because command scoping was already a thing, through filters, but I must admit now it brings a lot of clarity to the user — along with more control.

<video width="1302" height="836" controls class="mb-6">
    <source src="/assets/img/posts/sharp-8-for-laravel-is-here/bulk-commands.mp4" type="video/mp4">
</video>

Implementation is quite easy, here's the full code corresponding to the video above (as always, remember that all these examples are taken from [the online demo of Sharp](https://sharp.code16.fr/sharp), which is of course [open source](https://github.com/code16/sharp/tree/main/demo)):

```php
class BulkPublishPostsCommand extends EntityCommand
{
    public function label(): ?string
    {
        return 'Publish all selected posts';
    }

    public function buildCommandConfig(): void
    {
        $this->configureDescription('Bulk command to publish posts')
            ->configureInstanceSelectionRequired();
    }

    public function execute(array $data = []): array
    {
        Post::whereIn('id', $this->selectedIds())
            ->where('state', 'draft')
            ->get()
            ->each(fn (Post $post) => $post->update(['state' => 'online']));
        
        $this->notify('All selected posts were published!');

        return $this->reload();
    }
}
```

You may have spotted another bonus brought by v8: the ability to add toast notifications to commands.

## Global search

In some of our projects we felt the need to provide a way to quickly search for an instance of an important entity: it can be orders in an e-commerce app, or customers in a CRM for instance. For this, we added a way to define a global search, accessible from the top bar:  

<video width="1302" height="836" controls class="mb-6">
    <source src="/assets/img/posts/sharp-8-for-laravel-is-here/global-search.mp4" type="video/mp4">
</video>

Since it's Sharp, you have full control on how to build the search results. Here's a (naive) implementation example:

```php
class AppSearchEngine extends SharpSearchEngine
{
    public function searchFor(array $terms): void
    {
        $this->searchForPosts($terms);
        $this->searchForAuthors($terms);
    }

    private function searchForPosts(array $terms): void
    {
        $resultSet = $this
            ->addResultSet(
                label: 'Posts',
                icon: 'fa-file-o',
            )
            ->setEmptyStateLabel('No post found');

        if (! $resultSet->validateSearch(['min:3'], ['min' => 'Enter at least 3 characters'])) {
            return;
        }

        $builder = Post::query()
            ->with('author');

        foreach ($terms as $term) {
            $builder->where('title->en', 'like', $term);
        }

        $builder
            ->limit(10)
            ->get()
            ->each(function (Post $post) use ($resultSet) {
                $resultSet->addResultLink(
                    link: LinkToShowPage::make('posts', $post->id),
                    label: $post->title,
                    detail: $post->author->name,
                );
            });
    }

    private function searchForAuthors(array $terms): void
    {
        // [...]
    }
}
```

This code is quite simple, but we leverage some cool features: we added different result sets, manage their empty state, and even validate the search terms; each result can be linked to a Show Page, a filtered Entity List, or any Sharp URL using `LinkTo` classes [which were enhanced in v8 as well](https://sharp.code16.fr/docs/guide/link-to.html).

## New login workflow with 2FA

This is the result of a complete refactoring of the login workflow, which brings cool stuff like rate limiting, and more importantly a solid staring point to implement a full and configurable two-factor authentication system, that could rely on notification (SMS, email...) or authenticator apps (TOTP).

For TOTP, Sharp can provide a way to allow users to register their authenticator app:

<video width="1302" height="836" controls class="mb-6">
    <source src="/assets/img/posts/sharp-8-for-laravel-is-here/2fa.mp4" type="video/mp4">
</video>

And then when login they will be asked to provide the code generated by the app:

![](/assets/img/posts/sharp-8-for-laravel-is-here/totp-auth-login.png)

I think I'll write a dedicated post about this, but in the meantime you can [check the documentation](https://sharp.code16.fr/docs/guide/authentication.html#two-factor-authentication) to see how to implement it, and browse the code of the demo app to see how it's done in a simple case.

## Dashboard: sections and Figure widget

I already showcased this one in the previous post, but there are some improvement to mention: we added a way to define sections with titles in dashboards, and to attach commands and filter to them. We also developed a new widget, Figure:

![](/assets/img/posts/sharp-8-for-laravel-is-here/dashboard.png)

All of this is properly documented, and you can experiment it in the demo.

## Better documentation

Talking about documentation, we made a big effort to improve it, rewriting sections and adding context, schemas and screenshots; even if there is still room for more work I think it's now a lot better. 

Since this is a topic where open source can be really helpful, feel free to open PRs if you find pages which can be improved.

## Lots of DX improvements

Let's make a list:

- new way to build EntityList layout (see [migration guide](https://sharp.code16.fr/docs/guide/upgrading/8.0.html#new-way-to-build-entity-list-layout))
- easier way to declare an embedded Entity List (2nd arg, entity key, is now optional, since it's often the same one)
- add `SimpleEloquentReorderHandler` default reorder implementation
- new methods to build `LinkToShow` and `LinkToForm` links with a custom breadcrumb
- allow middleware declaration in config
- allow to define upload (tmp) disk in configuration

## UI / UX refresh

I kept this one for the end of the post, but it was spoiled by screenshots and videos above: we refreshed the UI and the UX, with some pretty big changes:

- The top bar has been cleaned of all its buttons/actions, and the user menu has been moved inside.
- With `Show Page` generalization, we finally moved the "delete" action out of the `Form` (and this is the main breaking change, see migration guide).
- Filters and search of the `Entity List` were moved to its top section.
- Buttons of the `Form` were moved to its bottom section.
- Lowercase everywhere.
- and much more: [go test the demo app](https://sharp.code16.fr/sharp) to feel the difference.

## What's next?

Sharp is very much in our plans for the future, and the v9 is already in the works; it should be an ambitious technical release, without new features, but I'll talk about it in a future post.

As always, feel free to [catch me on X-twitter](https://twitter.com/dvlpp) for any comment or question on this.
