Arabic Font Lite
==================

[![Github Downloads (total)](https://img.shields.io/github/downloads/almahmudbd/arabic-font-plugin/total?color=blue&style=for-the-badge)](https://github.com/almahmudbd/arabic-font-plugin/releases)

- Contributors: almahmud & chatgpt
- Plugin URI: https://thealmahmud.blogspot.com/
- Tags: arabic, font, shortcode
- Requires at least: 5.0
- Tested up to: 6.1.1
- Stable tag: 1.0
- License: GPL2 (https://www.gnu.org/licenses/gpl-2.0.html)

This plugin allows you to change the font of a single line in a post or page using a shortcode.

## Description

The Arabic Font Lite plugin provides a simple way to apply a custom font to a single line of text in a post or page using a shortcode. By default, the plugin uses the "noorehira" font, with a font size of 26px and a line height of 44px. However, you can easily change the font by editing the css file.

## Installation

Upload the plugin files to the `/wp-content/plugins/arabic-font-lite` directory, or install the plugin through the WordPress plugins screen directly. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

To use the Arabic Font Lite plugin, simply add the following shortcode to the post or page where you want to apply the custom font:


```bbcode
[arabic]هذا هو نص عربي[/arabic]
```

This will apply the "noorehira" font to the text within the shortcode, with a font size of 26px and line gap of 44px.

If you want to use the same font again on the same page, you can use this code again, or you can add the `custom-arabic-font` class to any HTML element to apply the custom font style. For example:

```html
<span class="custom-arabic-font">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ </span>
```

> Currently, the plugin uses the default font "noorehira" with a font size of 26px and a line gap of 44px. If you want to change the font, size or line gap, you will need to edit the plugin code directly. The CSS and font files are located in the `font` folder.


Changelog
-----

1.0
Initial release

Upgrade Notice
-----

There are no upgrade notices for this version of the plugin.
