# Helpful Strangers

## A WordPress Plugin

**Helpful Strangers** is a plugin with several helper functions present in other frameworks to help with development.

## Installing The Plugin

The plugin is stored in the build folder.

[build/helpful-strangers.zip](build/helpful-strangers.zip)

1. Upload the plugin files to the `/wp-content/plugins/helpful-strangers` directory, or install the plugin through 
the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Helpful Strangers screen to configure the plugin. You must choose either frontend or admin to see changes.
4. Customize output by adding any of the files below based on the front or admin settings you selected.

## Settings

The plugin adds a menu item to the Settings menu. It is advisable to review and, if desired, update 
these settings after activating the plugin.

## Using This Plugin

This plugin operates by adding classes to the body tag on pages. The classes are all related to the 
current user, and can be helpful in stlying based on roles and other characteristics.

## Contributing

Please review the [CONTRIBUTING.md](CONTRIBUTING.md) file if you are interested in helping develop or 
maintain this plugin. Also, please be aware that contributors are expected to adhere to the 
[CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md) and use the [PULL_REQUEST_TEMPLATE.md](PULL_REQUEST_TEMPLATE.md) 
when submitting code.

## Development

You will need npm and phpcs to get started. Use `npm install` to install gulp and other libraries 
required to help package the plugin for publishing. Source files are in the `source` folder. The 
code style is defined in the `phpcs.xml` file and requires `phpcs` to validate the code.

## About This Plugin

This plugin was created by Noah J. Stewart to help develop plugins.

## License

The WordPress plugin **Helpful Strangers** is open-sourced software licensed under the ISC license.
