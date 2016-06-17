# Fulcrum Catfish Plugin

There are several tools that each website needs such as social share buttons and quick links.  This plugin creates a catfish, i.e. a sticky footer toolbar.  When a viewer visits a single page and scrolls down (meaning s/he is reading your article), the catfish will slide up providing the features s/he needs to quickly navigate and share the article.

This is a WordPress plugin and [Fulcrum](https://github.com/hellofromtonya/fulcrum) addon.

## Features

1. Adds a sticky footer to the bottom right corner of the website
2. Facebook and Twitter social share links (configurable in the config file)
3. Quick link to the comments form
4. Quick link to read the comments
5. Quick link to scroll to the top of the page

### Styling

Oh silly, styling never goes in a plugin. Nope, you want to style this baby up in your theme.  However, a suggested starting point is provided in the `assets/sass` folder.  Simply copy the `catfish` folder into your theme and then import the index file into your `style.scss` file like so: `@import "catfish/index";`.  You can see an example of how I did it in my [Hello](https://github.com/hellofromtonya/hello-child-theme/blob/master/assets/sass/components/index.scss#L12) theme.

## Dependencies

Yup there are dependencies that you will need to have on your local development machine and in your project.  Let's walk through them.

1. [Genesis](http://my.studiopress.com/themes/genesis/) is my theming framework of choice. This plugin is using Genesis specific event hooks and will not work without Genesis.  However, you can modify the event hooks to fit your theme (see below for details).
2. [Fulcrum](https://github.com/hellofromtonya/Fulcrum) is my custom core plugin, as it powers all of my sites.  It is the central library to keep my sites clean, DRY, and modular.

## Installation

1. Install the [Fulcrum](https://github.com/hellofromtonya/fulcrum), the central custom repository plugin for WordPress.
2. Then you can install this plugin.

Installation from GitHub is as simple as cloning the repo onto your local machine.  To clone the repo, do the following:

1. Using PhpStorm, open your project and navigate to `wp-content/plugins/`. (Or open terminal and navigate there).
2. Then type: `git clone https://github.com/hellofromtonya/catfish`.
3. Copy the Sass files into your theme's Sass folder and add it to your main style via `@import "catfish/index";`. Change whatever you want for the styling to blend with your theme.

## Configuration

Everything is configurable using the configuration files found in the `config` folder.

### Using Without Genesis

If you are not using the [Genesis](http://my.studiopress.com/themes/genesis/) framework, then you will need to modify the event hooks in order for the catfish to work.  Follow these instructions:

1. Initializing:  The first step is to initialize the plugin which determines if this is a single article (post or custom post type) and then sets the properties and main hook.  You will need to modify the event name [here](https://github.com/hellofromtonya/catfish/blob/master/src/class-plugin.php#L72) to one that is within the Loop.  Why? Because the plugin needs to grab the title and permalink.
2. Rendering: The catfish HTML markup is rendered into the footer.  You will need to assign a new footer enabled event [here](https://github.com/hellofromtonya/catfish/blob/master/src/class-plugin.php#L89).  You could use `wp_footer` instead.

## Contributions

All feedback, bug reports, and pull requests are welcome.