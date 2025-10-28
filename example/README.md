## Example Testing App

This folder contains an example testing app that demonstrates how to use your Extension. It might help you with development because it’s a real Darken Application that uses your Extension. If you don’t need it, you can safely delete this `example` folder.

- **Check the `composer.json` file:** If you change the name of your Extension, you must also update the `require` section in this file to match the new name.
- **Check the `app/Config.php` file:** It contains the configuration details for the Extension.

### How to Run the Example App

```bash
composer install
```

Ensure you dump the autoload file:

```bash
composer du
```

And finally, run the app:

```bash
composer dev
```