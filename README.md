# zicht/tinymce-bundle

"Bundle for connecting TinyMCE (WYSIWYG editor) to your Symfony2 project"

To have minimal impact in running projects but still have the possibility to add new features the bundle is heavily influenced by stfalcon/TinymceBundle which is widely used at the moment.
Replace the stfalcon/TinymceBundle with this one and you're good to go.

## Zicht vs Stfalcon
The current difference is that the `zicht_tinymce.yml` accepts a (non-required) `version` key. 
This key has the default value set to `ZichtTinymceBundle::BASE_VERSION`, which is 4.1.4. Update this at will to a version that this bundle supports.

## Things to know
* If enabled, zicht/moxiemanager-bundle adds a symlink in the vendor/plugins-folder using a composer-script to enable moxiemanager as a plugin in the editor.

### Maintainer(s)
* Erik Trapman <erik@zicht.nl>
