<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => 'Flexibility - version 1.0.5-pl

-----------------------------------------------------------------------------------------------------------
ABOUT
-----------------------------------------------------------------------------------------------------------

"Flexibility" is a HTML5/CSS3/jQuery based frontend MODx Revolution template based on the "MODX Boilerplate".
With this package you will have a fully functional website with a contact form, slider and a image gallery.

"Flexibility" is designed and coded by Menno Pietersen (blog: http://designfromwithin.com - Twitter: ThaClown)

NOTE:
"MODX Boilerplate" is created by Anselm Hannemann, and it is not a direct clone of the original HTML5Boilerplate by Paul Irish.


-----------------------------------------------------------------------------------------------------------
QUICKSTART        PLEASE READ THIS 
-----------------------------------------------------------------------------------------------------------

1. Install MODx Revolution on your website.

2. download "flexibility-1.0.5-pl.transport.zip" and upload it to "your_url/core/packages/"

3. Install the "Flexibility" package: Go to "System" > "Package Management" > "Add New Package" > "Search Locally for Packages" > "Yes".

THAT IS ALL!
(to be sure clear your cache > "Site" > "Clear Cache")

-----------------------------------------------------------------------------------------------------------
Don\'t forget to setup FriendlyURL\'s:
-----------------------------------------------------------------------------------------------------------

1. Backup the "ht.access" file in from root folder to your desktop and remove the "ht.access" file from your website root (your root is probably something like: "your_url/public_html/").

2. Open the "ht.access" file from your desktop (with notepad or any code editor) and save it as ".htaccess".

3. Copy the new "ht.access" file to your website root.

4. Enter your MODX Revolution manager ("your_url/manager"): Go to "System" > "System Settings" > Click on "Filter by area" and select "Friendly URL" > For "Use Friendly URL\'s" and "Use Friendly Alias Path" choose "Yes".

-----------------------------------------------------------------------------------------------------------
ADDING AND CHANGING CONTENT
-----------------------------------------------------------------------------------------------------------

Your MODX website needs three main thing:

1. A Logo.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Logo"

2. An e-mail adress where you want to get mail from the contact form.
- Add this under "Resources" > "Site settings" > "Template Variables" > "E-mail adress"

3. Your adress (remove the default text to keep it empty).
- Add this under "Resources" > "Site settings" > "Template Variables" > "Adress"


And three optional things (only if you want a slider and/or gallery and want custom template colors):

1. Slide content for your website slider.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Slider items"

2. Images and (optional) descriptions for your gallery.
- Add this under "Components" > "Gallery" > "Create Album"


I general you can find all website settings under:

"Resources" > \'select the page you want\'
"Resources" > \'select the page you want\' > "Template Variables"
"System" > "System Settings" > "Filter by area" > "Site"


-----------------------------------------------------------------------------------------------------------
CONTENT:
-----------------------------------------------------------------------------------------------------------

- Packages: FlexibilitySubPackages (containing: bloggingessentials-1.0-pl, formit-1.7.0-pl, gallery-1.2.1-pl, getresources-1.3.1-pl, if-1.1-pl, login-1.6.5-pl, migx-1.1.0-rc1, tinymce-4.3.0-rc2, wayfinder-2.3.1-pl)
- Templates: Basic page template, Contact page template, Gallery page template, Homepage template, Page settings template
- Template Variables: tv.email_adress, tv.logo, tv_sidebar, tv_slider, tv_tagline, tv_tagline_link, tv_taline_link_text, tv_tagline_option
- Cunks: chunk_contact_form, chunk_email_adress, email_adress_tpl, GalAlbumRowTpl, GalItemThumb, GalleryAlbumTpl, chunk_email_form, logo_tpl, settings_page_id, thank_you_page_id
- Directories: [base_path}/assets
- HTML5 Boilerplate HTML Body
- jQuery 1.6
- basic CSS with reset
- .htaccess File (MODX + Boilerplate)
- favicon + apple touch icons
- Modernizr with HTML5Shim + Modernizr.load/yepnope.js (JS-Loadhelper)
- A Simpler Grid CSS


-----------------------------------------------------------------------------------------------------------
UPDATE instructions:
-----------------------------------------------------------------------------------------------------------

You can update the package via package installer, download the new version and place it in:
[base_path}/core/packages/
Update the package under "System" > "Package Managment"


-----------------------------------------------------------------------------------------------------------
IMPORTANT NOTICES FOR DEVELOPMENT:
-----------------------------------------------------------------------------------------------------------

- yepnope.js always executes things in the order they are listed. This is very important to know because it can hurt the speed of your website critically!
- If you need more than basic HTML5 support enabling with modernizr please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- for how-to use the modernizr please read this: http://blogs.sitepoint.com/2011/03/08/regressive-enhancement-with-modernizr-and-yepnope/
+ added monderizr blog entry
- If you need more than basic HTML5 support enabling with modernizer please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- If you want to add CSS3 behavior to IE<9 you can use the PIE.htc. You just have to add behavior: url(path/to/PIE.htc); to your css properties. See here for more info: http://css3pie.com/documentation/getting-started/
- I provided support for different devices with @media-queries. Please consider to either use all that stylesheet links in "site_header.html" or remove them to avoid dead links!


-----------------------------------------------------------------------------------------------------------
CREDITS:
-----------------------------------------------------------------------------------------------------------

ALL supporters and contributors of the great HTML5Boilerplate:
- http://html5boilerplate.com/
- special thanks to: Paul Irish and Divya Manian for all they\'ve done with HTML5Boilerplate
- https://github.com/paulirish/html5-boilerplate for the initial base and idea
- https://github.com/modernizr for MOdernizr
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann for the MODx Boilerplate, http://anselm.novolo.de/


-----------------------------------------------------------------------------------------------------------
BUGS and FEATURE REQUESTS:
-----------------------------------------------------------------------------------------------------------

Please e-mail me at: info@designfromwithin.com',
    'setup-options' => 'flexibility-1.0.6-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '748441d650ab8e059e20905480f2242f',
      'native_key' => 'flexibility',
      'filename' => 'modNamespace/392b242e55e0d331a899a1c451b262f9.vehicle',
      'namespace' => 'flexibility',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'f2010f4720015ff7b509530213c46960',
      'native_key' => 'f2010f4720015ff7b509530213c46960',
      'filename' => 'xPDOTransportVehicle/d53acadc79340885508ffe92d3d6501c.vehicle',
      'namespace' => 'flexibility',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'e9557609b27731832321f7d2ffc585c7',
      'native_key' => 1,
      'filename' => 'modResource/5f5fc27c7996967016f01452b78d4f4f.vehicle',
      'namespace' => 'flexibility',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '8f2533504af85f8ff62b31e7262fa17f',
      'native_key' => 2,
      'filename' => 'modResource/7d5da8fe913b98ecc0aa9e3e504cb331.vehicle',
      'namespace' => 'flexibility',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'b966407f7027f5095729a6f3f90d4ae9',
      'native_key' => 3,
      'filename' => 'modResource/35649464df9d6b94ffebe3d5a1a56d12.vehicle',
      'namespace' => 'flexibility',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '209dade43be17095346e057b763418e2',
      'native_key' => 4,
      'filename' => 'modResource/1f95b0ef095c36aa00383d30ffbd3f43.vehicle',
      'namespace' => 'flexibility',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '8a78b61c2f5a9be5378d53be11bc2f64',
      'native_key' => 5,
      'filename' => 'modResource/d6c78c9db0b51e1c339e92d3dc059082.vehicle',
      'namespace' => 'flexibility',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '0614cec88c2e2e0e3b51d5427af3ab66',
      'native_key' => 6,
      'filename' => 'modResource/982a39c267deb02faa6dff925d8402eb.vehicle',
      'namespace' => 'flexibility',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '311674c80cff2772852ec4ef6cc0bf17',
      'native_key' => 1,
      'filename' => 'modCategory/fbde440bf1ba2a2e4686bd413083b7e1.vehicle',
      'namespace' => 'flexibility',
    ),
  ),
);