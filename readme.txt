=== Custom Translation Files ===
Contributors:       Michael Uno, miunosoft
Donate link:        http://en.michaeluno.jp/donate
Tags:               translation, text domain, mo, translate, localization
Requires at least:  3.4
Requires PHP:       5.2.4
Tested up to:       4.9.8
Stable tag:         1.0.0
License:            GPLv2 or later
License URI:        http://www.gnu.org/licenses/gpl-2.0.html

Allows you to set custom translation files for a particular text domain.

== Description ==

<h4>Custom Translations</h4>

Let's say, you have translated a plugin or theme and have a mo file ready. But the plugin author does not respond to your submission offer or you cannot contact the author for whatever reasons.

In this case, you may be able to upload the file in the location that the plugin uses within the plugin's directory but this is not ideal because when it is updated, your translation file will be gone. You have to repeat doing it.

This plugin solves this problem by allowing you to upload the mo file and lets WordPress use it.

What you need are:

- mo file (the translation file with a text domain prefix)
- text domain (usually the plugin/theme slug)

Set these in the setting page and the plugin will take care of the rest.

It's simple and lightweight.

== Installation ==

1. Upload **`custom-translation-files.php`** and other files compressed in the zip folder to the **`/wp-content/plugins/`** directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to **Dashboard** -> **Settings** -> **Custom Translation Files**.
1. Add your items there.

== Frequently asked questions ==

== Other Notes ==

== Screenshots ==

1. **Setting Page**

== Changelog ==

= 1.0.0 - 11/01/2018 =
- Released initially.
