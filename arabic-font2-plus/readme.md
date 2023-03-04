Arabic Font 2 Plus (not yet ready)
==================

Arabic Font 2 Plus is a WordPress plugin that allows you to change the font of a single line of Arabic text in a post using a shortcode.

Installation
------------

1.  Download the plugin from the WordPress Plugin Repository or from the [GitHub repository](https://github.com/almahmudbd/arabic-font2-plus).
2.  Upload the plugin files to the `/wp-content/plugins/arabic-font2-plus` directory, or install the plugin through the WordPress plugins screen directly.
3.  Activate the plugin through the 'Plugins' screen in WordPress.

Usage
-----

To use the plugin, simply wrap your Arabic text in the `[arabic]` shortcode:

`[arabic]هذا هو نص عربي[/arabic]` 

By default, the plugin will use the noorehira font. If you want to use a specific font, you can specify it in the shortcode:

`[arabic font="Amiri"]هذا هو نص عربي[/arabic]` 

The plugin supports TTF, WOFF, and WOFF2 font formats. To use a custom font, simply upload the font files to the `wp-content/plugins/arabic-font2-plus/fonts` directory. The font files must be named after the font family they represent. For example, if you have a font family named `Amiri`, you should name your font files `Amiri.ttf`, `Amiri.woff`, or `Amiri.woff2`.

You can also optionally specify the font size in the shortcode. The default font size is 26px. To change the font size, add the `size` attribute to the shortcode:

`[arabic font="Amiri" size="24px"]هذا هو نص عربي[/arabic]` 

You can also optionally specify the line-height aka line gap in the shortcode. The default line gap is 46px. To change the gap, add the `gap` attribute to the shortcode:

`[arabic font="Amiri" size="24px" gap="48px"]هذا هو نص عربي[/arabic]` 


Support
-------

If you encounter any issues with the plugin, please submit an issue on the [GitHub repository](https://github.com/almahmudbd/arabic-font2-plus/issues).
