<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bring Bootstrap to life with our optional JavaScript plugins built on jQuery. Learn about each plugin, our data and programmatic API options, and more.">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.7.0">

<title>JavaScript · Bootstrap</title>

<!-- Bootstrap core CSS -->

<link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- Documentation extras -->

<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

<link href="/docs/4.0/assets/css/docs.min.css" rel="stylesheet">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/favicon.ico">
<meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@getbootstrap">
<meta name="twitter:creator" content="@getbootstrap">
<meta name="twitter:title" content="JavaScript">
<meta name="twitter:description" content="Bring Bootstrap to life with our optional JavaScript plugins built on jQuery. Learn about each plugin, our data and programmatic API options, and more.">
<meta name="twitter:image" content="https://getbootstrap.com/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="https://getbootstrap.com/docs/4.0/getting-started/javascript/">
<meta property="og:title" content="JavaScript">
<meta property="og:description" content="Bring Bootstrap to life with our optional JavaScript plugins built on jQuery. Learn about each plugin, our data and programmatic API options, and more.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://getbootstrap.com/assets/brand/bootstrap-social.png">
<meta property="og:image:secure_url" content="https://getbootstrap.com/assets/brand/bootstrap-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-146052-10', 'getbootstrap.com');
  ga('send', 'pageview');
</script>

  </head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>

    <a href="https://getbootstrap.com" class="d-block px-3 py-2 text-center text-bold text-white old-bv">There's a newer version of Bootstrap 4!</a>

<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><svg class="d-block" width="36" height="36" viewbox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false"><title>Bootstrap</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"/><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"/></svg>
</a>

  <div class="navbar-nav-scroll">
    <ul class="navbar-nav bd-navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link " href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/docs/4.0/getting-started/introduction/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Documentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/docs/4.0/examples/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">Examples</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://themes.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Themes');" target="_blank" rel="noopener">Themes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://jobs.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Jobs');" target="_blank" rel="noopener">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');" target="_blank" rel="noopener">Expo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" target="_blank" rel="noopener">Blog</a>
      </li>
    </ul>
  </div>

  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    <li class="nav-item dropdown">
      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        v4.0
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
        <a class="dropdown-item" href="/docs/4.1/">Latest (v4.1.x)</a>
        <a class="dropdown-item active" href="/docs/4.0/">v4.0.0</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="https://v4-alpha.getbootstrap.com/">v4 Alpha 6</a>
        <a class="dropdown-item" href="https://getbootstrap.com/docs/3.3/">v3.3.7</a>
        <a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">v2.3.2</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link p-2" href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener" aria-label="GitHub"><svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"/></svg>
</a>
    </li>
    <li class="nav-item">
      <a class="nav-link p-2" href="https://twitter.com/getbootstrap" target="_blank" rel="noopener" aria-label="Twitter"><svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 416.32" focusable="false"><title>Twitter</title><path d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92" fill="currentColor"/></svg>
</a>
    </li>
    <li class="nav-item">
      <a class="nav-link p-2" href="https://bootstrap-slack.herokuapp.com" target="_blank" rel="noopener" aria-label="Slack"><svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" focusable="false"><title>Slack</title><path fill="currentColor" d="M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z"/><path d="M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z" fill="currentColor"/></svg>
</a>
    </li>
  </ul>

  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="https://github.com/twbs/bootstrap/archive/v4.0.0.zip">Download</a>
</header>


    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <form class="bd-search d-flex align-items-center">
  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
</button>
</form>

<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item active">
      <a class="bd-toc-link" href="/docs/4.0/getting-started/introduction/">
        Getting started
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/getting-started/introduction/">
              Introduction
            </a></li><li>
            <a href="/docs/4.0/getting-started/download/">
              Download
            </a></li><li>
            <a href="/docs/4.0/getting-started/contents/">
              Contents
            </a></li><li>
            <a href="/docs/4.0/getting-started/browsers-devices/">
              Browsers & devices
            </a></li><li class="active bd-sidenav-active">
            <a href="/docs/4.0/getting-started/javascript/">
              JavaScript
            </a></li><li>
            <a href="/docs/4.0/getting-started/theming/">
              Theming
            </a></li><li>
            <a href="/docs/4.0/getting-started/build-tools/">
              Build tools
            </a></li><li>
            <a href="/docs/4.0/getting-started/webpack/">
              Webpack
            </a></li><li>
            <a href="/docs/4.0/getting-started/accessibility/">
              Accessibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/layout/overview/">
              Overview
            </a></li><li>
            <a href="/docs/4.0/layout/grid/">
              Grid
            </a></li><li>
            <a href="/docs/4.0/layout/media-object/">
              Media object
            </a></li><li>
            <a href="/docs/4.0/layout/utilities-for-layout/">
              Utilities for layout
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/content/reboot/">
        Content
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/content/reboot/">
              Reboot
            </a></li><li>
            <a href="/docs/4.0/content/typography/">
              Typography
            </a></li><li>
            <a href="/docs/4.0/content/code/">
              Code
            </a></li><li>
            <a href="/docs/4.0/content/images/">
              Images
            </a></li><li>
            <a href="/docs/4.0/content/tables/">
              Tables
            </a></li><li>
            <a href="/docs/4.0/content/figures/">
              Figures
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/components/alerts/">
              Alerts
            </a></li><li>
            <a href="/docs/4.0/components/badge/">
              Badge
            </a></li><li>
            <a href="/docs/4.0/components/breadcrumb/">
              Breadcrumb
            </a></li><li>
            <a href="/docs/4.0/components/buttons/">
              Buttons
            </a></li><li>
            <a href="/docs/4.0/components/button-group/">
              Button group
            </a></li><li>
            <a href="/docs/4.0/components/card/">
              Card
            </a></li><li>
            <a href="/docs/4.0/components/carousel/">
              Carousel
            </a></li><li>
            <a href="/docs/4.0/components/collapse/">
              Collapse
            </a></li><li>
            <a href="/docs/4.0/components/dropdowns/">
              Dropdowns
            </a></li><li>
            <a href="/docs/4.0/components/forms/">
              Forms
            </a></li><li>
            <a href="/docs/4.0/components/input-group/">
              Input group
            </a></li><li>
            <a href="/docs/4.0/components/jumbotron/">
              Jumbotron
            </a></li><li>
            <a href="/docs/4.0/components/list-group/">
              List group
            </a></li><li>
            <a href="/docs/4.0/components/modal/">
              Modal
            </a></li><li>
            <a href="/docs/4.0/components/navs/">
              Navs
            </a></li><li>
            <a href="/docs/4.0/components/navbar/">
              Navbar
            </a></li><li>
            <a href="/docs/4.0/components/pagination/">
              Pagination
            </a></li><li>
            <a href="/docs/4.0/components/popovers/">
              Popovers
            </a></li><li>
            <a href="/docs/4.0/components/progress/">
              Progress
            </a></li><li>
            <a href="/docs/4.0/components/scrollspy/">
              Scrollspy
            </a></li><li>
            <a href="/docs/4.0/components/tooltips/">
              Tooltips
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/utilities/borders/">
        Utilities
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/utilities/borders/">
              Borders
            </a></li><li>
            <a href="/docs/4.0/utilities/clearfix/">
              Clearfix
            </a></li><li>
            <a href="/docs/4.0/utilities/close-icon/">
              Close icon
            </a></li><li>
            <a href="/docs/4.0/utilities/colors/">
              Colors
            </a></li><li>
            <a href="/docs/4.0/utilities/display/">
              Display
            </a></li><li>
            <a href="/docs/4.0/utilities/embed/">
              Embed
            </a></li><li>
            <a href="/docs/4.0/utilities/flex/">
              Flex
            </a></li><li>
            <a href="/docs/4.0/utilities/float/">
              Float
            </a></li><li>
            <a href="/docs/4.0/utilities/image-replacement/">
              Image replacement
            </a></li><li>
            <a href="/docs/4.0/utilities/position/">
              Position
            </a></li><li>
            <a href="/docs/4.0/utilities/screenreaders/">
              Screenreaders
            </a></li><li>
            <a href="/docs/4.0/utilities/sizing/">
              Sizing
            </a></li><li>
            <a href="/docs/4.0/utilities/spacing/">
              Spacing
            </a></li><li>
            <a href="/docs/4.0/utilities/text/">
              Text
            </a></li><li>
            <a href="/docs/4.0/utilities/vertical-align/">
              Vertical align
            </a></li><li>
            <a href="/docs/4.0/utilities/visibility/">
              Visibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/extend/approach/">
        Extend
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/extend/approach/">
              Approach
            </a></li><li>
            <a href="/docs/4.0/extend/icons/">
              Icons
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/migration/">
        Migration
      </a>

      <ul class="nav bd-sidenav"></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.0/about/overview/">
        About
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.0/about/overview/">
              Overview
            </a></li><li>
            <a href="/docs/4.0/about/brand/">
              Brand
            </a></li><li>
            <a href="/docs/4.0/about/license/">
              License
            </a></li><li>
            <a href="/docs/4.0/about/translations/">
              Translations
            </a></li></ul>
    </div></nav>

        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
<li class="toc-entry toc-h2"><a href="#individual-or-compiled">Individual or compiled</a></li>
<li class="toc-entry toc-h2"><a href="#dependencies">Dependencies</a></li>
<li class="toc-entry toc-h2"><a href="#data-attributes">Data attributes</a></li>
<li class="toc-entry toc-h2"><a href="#events">Events</a></li>
<li class="toc-entry toc-h2"><a href="#programmatic-api">Programmatic API</a>
<ul>
<li class="toc-entry toc-h3"><a href="#asynchronous-functions-and-transitions">Asynchronous functions and transitions</a></li>
<li class="toc-entry toc-h3"><a href="#default-settings">Default settings</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#no-conflict">No conflict</a></li>
<li class="toc-entry toc-h2"><a href="#version-numbers">Version numbers</a></li>
<li class="toc-entry toc-h2"><a href="#no-special-fallbacks-when-javascript-is-disabled">No special fallbacks when JavaScript is disabled</a></li>
<li class="toc-entry toc-h2"><a href="#util">Util</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">JavaScript</h1>
          <p class="bd-lead">Bring Bootstrap to life with our optional JavaScript plugins built on jQuery. Learn about each plugin, our data and programmatic API options, and more.</p>
          <script async src="https://cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=getbootstrapcom" id="_carbonads_js"></script>

          <h2 id="individual-or-compiled">Individual or compiled</h2>

<p>Plugins can be included individually (using Bootstrap’s individual <code class="highlighter-rouge">*.js</code> files), or all at once using <code class="highlighter-rouge">bootstrap.js</code> or the minified <code class="highlighter-rouge">bootstrap.min.js</code> (don’t include both).</p>

<h2 id="dependencies">Dependencies</h2>

<p>Some plugins and CSS components depend on other plugins. If you include plugins individually, make sure to check for these dependencies in the docs. Also note that <strong>all plugins depend on jQuery</strong> (this means jQuery must be included <strong>before</strong> the plugin files). <a href="https://github.com/twbs/bootstrap/blob/v4.0.0/package.json">Consult our <code class="highlighter-rouge">package.json</code></a> to see which versions of jQuery are supported.</p>

<p>Our dropdowns, popovers and tooltips also depend on <a href="https://popper.js.org/">Popper.js</a>.</p>

<h2 id="data-attributes">Data attributes</h2>

<p>Nearly all Bootstrap plugins can be enabled and configured through HTML alone with data attributes (our preferred way of using JavaScript functionality). Be sure to <strong>only use one set of data attributes on a single element</strong> (e.g., you cannot trigger a tooltip and modal from the same button.)</p>

<p>However, in some situations it may be desirable to disable this functionality. To disable the data attribute API, unbind all events on the document namespaced with <code class="highlighter-rouge">data-api</code> like so:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">off</span><span class="p">(</span><span class="s1">'.data-api'</span><span class="p">)</span></code></pre></figure>

<p>Alternatively, to target a specific plugin, just include the plugin’s name as a namespace along with the data-api namespace like this:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">off</span><span class="p">(</span><span class="s1">'.alert.data-api'</span><span class="p">)</span></code></pre></figure>

<h2 id="events">Events</h2>

<p>Bootstrap provides custom events for most plugins’ unique actions. Generally, these come in an infinitive and past participle form - where the infinitive (ex. <code class="highlighter-rouge">show</code>) is triggered at the start of an event, and its past participle form (ex. <code class="highlighter-rouge">shown</code>) is triggered on the completion of an action.</p>

<p>All infinitive events provide <a href="https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault"><code class="highlighter-rouge">preventDefault()</code></a> functionality. This provides the ability to stop the execution of an action before it starts. Returning false from an event handler will also automatically call <code class="highlighter-rouge">preventDefault()</code>.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'show.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">data</span><span class="p">)</span> <span class="k">return</span> <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span> <span class="c1">// stops modal from being shown</span>
<span class="p">})</span></code></pre></figure>

<h2 id="programmatic-api">Programmatic API</h2>

<p>We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.btn.danger'</span><span class="p">).</span><span class="nx">button</span><span class="p">(</span><span class="s1">'toggle'</span><span class="p">).</span><span class="nx">addClass</span><span class="p">(</span><span class="s1">'fat'</span><span class="p">)</span></code></pre></figure>

<p>All methods should accept an optional options object, a string which targets a particular method, or nothing (which initiates a plugin with default behavior):</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">()</span>                      <span class="c1">// initialized with defaults</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">({</span> <span class="na">keyboard</span><span class="p">:</span> <span class="kc">false</span> <span class="p">})</span>   <span class="c1">// initialized with no keyboard</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>                <span class="c1">// initializes and invokes show immediately</span></code></pre></figure>

<p>Each plugin also exposes its raw constructor on a <code class="highlighter-rouge">Constructor</code> property: <code class="highlighter-rouge">$.fn.popover.Constructor</code>. If you’d like to get a particular plugin instance, retrieve it directly from an element: <code class="highlighter-rouge">$('[rel="popover"]').data('popover')</code>.</p>

<h3 id="asynchronous-functions-and-transitions">Asynchronous functions and transitions</h3>

<p>All programmatic API methods are <strong>asynchronous</strong> and returns to the caller once the transition is started but <strong>before it ends</strong>.</p>

<p>In order to execute an action once the transition is complete, you can listen to the corresponding event.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myCollapse'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'shown.bs.collapse'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// Action to execute once the collapsible area is expanded</span>
<span class="p">})</span></code></pre></figure>

<p>In addition a method call on a <strong>transitioning component will be ignored</strong>.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'slid.bs.carousel'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">).</span><span class="nx">carousel</span><span class="p">(</span><span class="s1">'2'</span><span class="p">)</span> <span class="c1">// Will slide to the slide 2 as soon as the transition to slide 1 is finished</span>
<span class="p">})</span>

<span class="nx">$</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">).</span><span class="nx">carousel</span><span class="p">(</span><span class="s1">'1'</span><span class="p">)</span> <span class="c1">// Will start sliding to the slide 1 and returns to the caller</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">).</span><span class="nx">carousel</span><span class="p">(</span><span class="s1">'2'</span><span class="p">)</span> <span class="c1">// !! Will be ignored, as the transition to the slide 1 is not finished !!</span></code></pre></figure>

<h3 id="default-settings">Default settings</h3>

<p>You can change the default settings for a plugin by modifying the plugin’s <code class="highlighter-rouge">Constructor.Default</code> object:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">modal</span><span class="p">.</span><span class="nx">Constructor</span><span class="p">.</span><span class="nx">Default</span><span class="p">.</span><span class="nx">keyboard</span> <span class="o">=</span> <span class="kc">false</span> <span class="c1">// changes default for the modal plugin's `keyboard` option to false</span></code></pre></figure>

<h2 id="no-conflict">No conflict</h2>

<p>Sometimes it is necessary to use Bootstrap plugins with other UI frameworks. In these circumstances, namespace collisions can occasionally occur. If this happens, you may call <code class="highlighter-rouge">.noConflict</code> on the plugin you wish to revert the value of.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">bootstrapButton</span> <span class="o">=</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">button</span><span class="p">.</span><span class="nx">noConflict</span><span class="p">()</span> <span class="c1">// return $.fn.button to previously assigned value</span>
<span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">bootstrapBtn</span> <span class="o">=</span> <span class="nx">bootstrapButton</span>            <span class="c1">// give $().bootstrapBtn the Bootstrap functionality</span></code></pre></figure>

<h2 id="version-numbers">Version numbers</h2>

<p>The version of each of Bootstrap’s jQuery plugins can be accessed via the <code class="highlighter-rouge">VERSION</code> property of the plugin’s constructor. For example, for the tooltip plugin:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">tooltip</span><span class="p">.</span><span class="nx">Constructor</span><span class="p">.</span><span class="nx">VERSION</span> <span class="c1">// =&gt; "4.0.0"</span></code></pre></figure>

<h2 id="no-special-fallbacks-when-javascript-is-disabled">No special fallbacks when JavaScript is disabled</h2>

<p>Bootstrap’s plugins don’t fall back particularly gracefully when JavaScript is disabled. If you care about the user experience in this case, use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript"><code class="highlighter-rouge">&lt;noscript&gt;</code></a> to explain the situation (and how to re-enable JavaScript) to your users, and/or add your own custom fallbacks.</p>

<div class="bd-callout bd-callout-warning">
<h5 id="third-party-libraries">Third-party libraries</h5>

<p><strong>Bootstrap does not officially support third-party JavaScript libraries</strong> like Prototype or jQuery UI. Despite <code class="highlighter-rouge">.noConflict</code> and namespaced events, there may be compatibility problems that you need to fix on your own.</p>
</div>

<h2 id="util">Util</h2>

<p>All Bootstrap’s JavaScript files depend on <code class="highlighter-rouge">util.js</code> and it has to be included alongside the other JavaScript files. If you’re using the compiled (or minified) <code class="highlighter-rouge">bootstrap.js</code>, there is no need to include this—it’s already there.</p>

<p><code class="highlighter-rouge">util.js</code> includes utility functions and a basic helper for <code class="highlighter-rouge">transitionEnd</code> events as well as a CSS transition emulator. It’s used by the other plugins to check for CSS transition support and to catch hanging transitions.</p>

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="/docs/4.0/assets/js/docs.min.js"></script>
  </body>
</html>
