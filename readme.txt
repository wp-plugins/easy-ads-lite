=== Easy Ads ===
Contributors: manojtd
Donate link: http://affiliates.thulasidas.com
Tags: google adsense, chitika, clicksor, bidvertiser, adsense, google, ads, advertising, ad rotation, wordpress google adsense
Requires at least: 2.8
Tested up to: 3.4
Stable tag: 2.08

Easy Ads displays AdSense and its alternatives on your blog pages and sidebar widgets: Chitika, BidVertiser, Clicksor etc. Simple yet flexible.

== Description ==

*Easy Ads* provides a unified and intuitive interface to manage multiple ad providers on your blog. Currently supported are Chitika, BidVertiser, Clicksor, and, of course, AdSense. The list of ad providers will be expanded later on at your request.

AdSense dumped you? Don't be heartbroken; there are other fish in the sea. You may find happiness with [BidVertiser](http://www.bidvertiser.com/bdv/bidvertiser/bdv_ref_publisher.dbm?Ref_Option=pub&Ref_PID=229404 "A fine ad provider"), Chitika or Clicksor. Use *Easy Ads*, and you may get lucky!

Note that this plugin requires PHPv5.0+. If it does not work on your web host, please consider [Easy AdSense](http://wordpress.org/extend/plugins/easy-adsense-lite/ "Freely available from this directory") or [Easy AdSense Pro](http://buy.thulasidas.com/easy-adsense "The Pro version of the most popular plugin to insert AdSense on your blog for $4.95").

= Features =

1. Tabbed and intuitive interface for multiple ad providers (AdSense, Chitika etc.).
2. Rich display and alignment options.
3. Robust codebase for extending to more ad providers.
4. Control over the positioning and display of ad blocks in each post or page.
5. Simple configuration interface -- nothing more than entering your provider id for AdSense or Chitika, and with sensible defaults for the few options present, all with clear instructions.
6. Specialized widgets for AdSense and Chitika, and common widget interface for the rest.

If you want to use only AdSense, you would want to consider my full-fledged, feature-rich plugin [Easy AdSense](http://www.thulasidas.com/plugins/easy-adsense "The complete solution for all things AdSense related").

= Pro Version =

*Easy Ads* is the freely distributed version of a premium plugin. The [Pro version](http://buy.thulasidas.com/easy-ads "Pro version of the Easy Ads plugin for $8.95") gives you even more features.

1. In the Pro version you have an *Admin* (Control Panel) tab with:
 - Option to selectively activate or deactivate various ad providers in the *Admin* Tab, so that you can have only AdSense, or only Chitika, if you so choose.
 - More information about ad positions and slots (as an image in the *Admin* Tab).
 - Option to set number of ad slots per position.
 - New commands (in the *Admin* Tab) to *Reset All Options*, *Drop All Options* or *Migrate Options* to a new plugin version.
2. A filter to ensure that your ads show only on those pages that seem to comply with Google AdSense (and other common provider) policies, which can be important since some comments may render your pages inconsistent with those policies.
3. It also lets you specify a list of computers where your ads will not be shown, in order to prevent accidental clicks on your own ads -- one of the main reasons AdSense bans you.
4. Also in the works for the Pro version is a compatibility mode, which solves the issue of the ad insertion messing up your page appearances when using some  themes.

The Pro version costs $8.95 and can be [purchased online](http://buy.thulasidas.com/easy-ads/ "Pro version of the Easy Ads plugin for $8.95") with instant download link.

= Future Plans =

I would like to hear from you if you have any feature requests or comments.

1. Ad Rotation: I will provide means to rotate ads among various providers with user-defined frequency.
1. Tooltip Help: Most of the fields and buttons will feature JS tool tip to help the user along.
1. More Providers: This plugin is designed with extensibility in mind. I will keep adding more ad providers, or even let the end-users add them.
1. Expertise Level: I plan to introduce expertise levels (Easy, Advanced and Expert tabs) within the tab for each ad provider.
1. Max Number of Ad blocks: Since some providers require you to limit the number of ad blocks to some policy-driven ceiling, I will expose that option to you. Also to be customized is the number of ads per slot. In this initial release, there are three slots (top, middle and bottom), each of which can take two ad blocks. In a future release, you will have much more customization options.
1. Internationalization: Future versions will provide MO/PO files for internationalization.
1. Documentation: As this plugin may have an overwhelming set of options and features, I will try to write a comprehensive help system for it.

= New in this Release =

Adding more add sizes.

== Upgrade Notice ==

= 2.08 =

Adding more add sizes.

== Screenshots ==

1. *Easy Ads* "Overview" tab.
2. How to set the options for one provider (Chitika) in *Easy Ads*.

== Installation ==

1. Upload the *Easy Ads* plugin (the whole easy-ads-lite folder) to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to the Settings -> *Easy Ads* and enter your ad codes and options.

== Frequently Asked Questions ==

= I enabled the widgets for various ad providers. But I don't see any on my blog pages. Howcome? =

The widgets are enabled and available on your Appearance -> Widgets area. Please drag and drop them to the appropriate side-bar.

= I get the error "Error locating or loading the defaults! Ensure 'defaults.php' exists, or reinstall the plugin." What to do? =

Please copy *all* the files in the zip archive to your plugin directory. You need all the files in the `easy-ads-lite` directory. One of these files is the missing `defaults.php`.

= I activate the plugin, but nothing happens. I see some red error message stating something about PHP version. What gives? =

This plugin requires PHP version 5.x or later. If it doesn't find the right version, it posts an error message in the plugins page, and does nothing. You will need to contact the system admin or support folks of your hosting service and request them to install PHP5.x for you. Usually, all it takes is just an email to get it sorted out.

= How can I control the appearance of the ad blocks using CSS? =

All `<div>`s that *Easy Ads* creates have the class attribute `easy-ads`. Furthermore, they have class attributes like `easy-ads-adsense-top`, `easy-ads-clicksor-bottom` etc., (i.e., `easy-ads-provider-position`). You can set the style for these classes in your theme `style.css` to control their appearance.

= Why does my code disappear when I switch to a new theme? =

*Easy Ads* stores the ad code and options in your database indexed by the theme name, so that if you set up the options for a particular theme, they persist even when you switch to another theme. If you ever switch back to an old theme, all your options will be reused without your worrying about it.

But this unfortunately means that you do have to set the code *once* whenever you switch to a new theme.

= Can I control how the ad blocks are formatted in each page? =

Yes! In *Easy Ads*, you have more options [through **custom fields**] to control ad blocks in individual posts/pages. Add custom fields with keys like **easy-ads-adsense-top, easy-ads-adsense-middle, easy-ads-adsense-bottom** and with values like **left, right, center** or **no** to have control how the ad blocks show up in each post or page. The value "**no**" suppresses all the ad blocks in the post or page for that provider.

= How do I report a bug or ask a question? =

Please report any problems, and share your thoughts and comments [at the plugin forum at WordPress](http://wordpress.org/tags/easy-ads-lite "Post comments/suggestions/bugs on the WordPress.org forum. [Requires login/registration]") Or send an [email to the plugin author](http://manoj.thulasidas.com/mail.shtml "Email the author") for paid support.

== Change Log ==

* V2.08: Adding more add sizes. [Aug 12, 2012]
* V2.07: Minor changes to the admin page. [July 18, 2012]
* V2.06: Testing compatibility with WP 3.4. [July 11, 2012]
* V2.05: Bug fixes. [May 25, 2012]
* V2.04: Bug fixes. [May 18. 2012]
* V2.03: Renaming the plugin to drop the word Lite. [May 11, 2012]
* V2.02: Relaxing the PHP version required to 5.0 [Apr 20, 2012]
* V2.01: Fixing the PHP version checker. [Apr 19, 2012]
* V2.00: Initial release as Easy Ads Lite. [Apr 16, 2012]
* V1.31: Documentation and admin-page display changes. Non-critical. [Aug 30, 2011]
* V1.30: Chitika tab mirrors the ad customization as in [Chitika](http://chitika.com/ "Compatible with AdSense").
* V1.20: Mini-tabs and widgets. Going back to simple CSS tabs. Options are versioned in the DB now. [Nov 12 2010]
* V1.10: Specialized screen for Chitika. Different implementation of JS tabs (using YETII). [Oct 25 2010]
* V1.05: More technical and user interface enhancements (preparing to reuse `ezAPI.php` for other plugins) . Switching to Chitika for default and shared ads. [Oct 3, 2010]
* V1.04: Graceful handling of PHP4, improvements in the admin interface. [Sep 20, 2010]
* V1.03: Technical enhancements; no functional changes. (Refactoring static utility functions into a new class in `ezExtras.php`.) [Sep 11, 2010]
* V1.02: Technical enhancements; no functional changes. (Simulating namespace to avoid potential name collisions, minor bug fixes etc.) [Sep 4, 2010]
* V1.01: Google policy enforcement (no more than three ad blocks). [Sep 2, 2010]
* V1.00: Initial release. [Aug 31, 2010]

= Plan =

* Improvements in Widgets handling. Beautification of mini tabs. Body top/mid/end ad blocks.
* "Linked options" -- if a widget is disabled, the corresponding options (its text, alignment etc) should be disabled using JS.
* Specialization for Clicksor.
* Enter Ads Easy.
* Technical enhancements; PHP5.0 (__construct functions).
