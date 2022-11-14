<head>
   <?php
      if ($_SERVER['APPLICATION_ENV'] == 'localdev' || $_SERVER['APPLICATION_ENV'] == 'uat') {
          define("WEB_URL", "https://beta.indiainfoline.com");
      } else {
          define("WEB_URL", "https://www.indiainfoline.com");
      }
      ?>
   <title><?php echo (!empty($this->articleObject->heading1)) ? $this->articleObject->heading1 : ''; ?></title>
   <link rel="shortcut icon" href="<?php echo WEB_URL; ?>/include/_mod/site/images/favicon.ico" type="image/x-icon" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/57x57.png" rel="apple-touch-icon" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/76x76.png" rel="apple-touch-icon" sizes="76x76" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/120x120.png" rel="apple-touch-icon" sizes="120x120" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/152x152.png" rel="apple-touch-icon" sizes="152x152" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/180x180.png" rel="apple-touch-icon" sizes="180x180" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/192x192.png" rel="icon" sizes="192x192" />
   <link href="<?php echo WEB_URL; ?>/include/_mod/site/images/logo_icon/128x128.png" rel="icon" sizes="128x128" />
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
   <meta name="robots" content="index, follow, noodp, noydir" />
   <link rel="canonical" href="<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>" />
   <meta name="description" content="<?php echo htmlspecialchars($this->articleObject->metaDescription); ?>" />
   <meta name="keywords" content="<?php echo htmlspecialchars($this->articleObject->metaKeywords); ?>" />
   <meta property="og:url" content="<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>">
   <meta property="og:title" content="<?php echo (!empty($this->articleObject->heading1)) ? htmlspecialchars($this->articleObject->heading1) : ''; ?>">
   <meta property="og:image" content="<?php echo $this->artImg; ?>">
   <meta property="og:type" content="article">
   <meta property="og:author" content="<?php echo trim($author_name); ?>" />
   <meta property="og:locale" content="en_US">
   <meta property="og:site_name" content="IIFL - India Infoline">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
   <style amp-custom>
      @font-face {
      font-family: "iifl-icon";
      src: url(/include/_mod/site/fonts/iifl-icon.eot);
      src: url("/include/_mod/site/fonts/iifl-icon.eot?#iefix") format("embedded-opentype"), url("/include/_mod/site/fonts/iifl-icon.woff") format("woff"), url("/include/_mod/site/fonts/iifl-icon.ttf") format("truetype"), url("/include/_mod/site/fonts/iifl-icon.svg#iifl-icon") format("svg");
      font-weight: normal;
      font-style: normal;
      }
      [data-icon]:before {
      font-family: "iifl-icon";
      content: attr(data-icon);
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      speak: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      }
      [class^="fa-"]:before,
      [class*=" fa-"]:before {
      font-family: "iifl-icon";
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      speak: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      }
      .fa-search:before {
      content: "\61";
      }
      .fa-user:before {
      content: "\62";
      }
      .fa-bars:before {
      content: "\63";
      }
      .fa-arrow-up:before {
      content: "\64";
      }
      .fa-arrow-down:before {
      content: "\65";
      }
      .fa-angle-double-right:before {
      content: "\66";
      }
      .fa-angle-down:before {
      content: "\67";
      }
      .fa-angle-right:before {
      content: "\68";
      }
      .fa-inr:before {
      content: "\69";
      }
      .fa-times:before {
      content: "\6a";
      }
      .fa-caret-down:before {
      content: "\6b";
      }
      .fa-caret-right:before {
      content: "\6c";
      }
      .fa-caret-left:before {
      content: "\6d";
      }
      .fa-caret-up:before {
      content: "\6e";
      }
      .fa-chevron-up:before {
      content: "\6f";
      }
      .fa-chevron-down:before {
      content: "\70";
      }
      .fa-chevron-right:before {
      content: "\71";
      }
      .fa-chevron-left:before {
      content: "\72";
      }
      .fa-comment-o:before {
      content: "\73";
      }
      .fa-commenting:before {
      content: "\74";
      }
      .fa-comments:before {
      content: "\75";
      }
      .fa-comments-o:before {
      content: "\76";
      }
      .fa-thumbs-down:before {
      content: "\77";
      }
      .fa-thumbs-o-down:before {
      content: "\78";
      }
      .fa-thumbs-o-up:before {
      content: "\79";
      }
      .fa-thumbs-up:before {
      content: "\7a";
      }
      .fa-minus:before {
      content: "\41";
      }
      .fa-plus:before {
      content: "\42";
      }
      .fa-bell:before {
      content: "\43";
      }
      .fa-bell-o:before {
      content: "\44";
      }
      .fa-binoculars:before {
      content: "\45";
      }
      .fa-angle-up:before {
      content: "\46";
      }
      .fa-angle-left:before {
      content: "\47";
      }
      .fa-exchange:before {
      content: "\48";
      }
      .fa-exclamation-circle:before {
      content: "\49";
      }
      .fa-exclamation:before {
      content: "\4a";
      }
      .fa-exclamation-triangle:before {
      content: "\4b";
      }
      .fa-facebook:before {
      content: "\4c";
      }
      .fa-twitter:before {
      content: "\4d";
      }
      .fa-linkedin:before {
      content: "\4e";
      }
      .fa-google-plus:before {
      content: "\4f";
      }
      .fa-whatsapp:before {
      content: "\50";
      }
      .fa-share:before {
      content: "\51";
      }
      .fa-share-alt:before {
      content: "\52";
      }
      .fa-share-square:before {
      content: "\53";
      }
      .fa-share-square-o:before {
      content: "\54";
      }
      .fa-bullhorn:before {
      content: "\55";
      }
      .fa-file-pdf-o:before {
      content: "\56";
      }
      .fa-youtube-play:before {
      content: "\57";
      }
      .fa-play:before {
      content: "\58";
      }
      .fa-pause:before {
      content: "\59";
      }
      .fa-calculator:before {
      content: "\5a";
      }
      .fa-calendar:before {
      content: "\30";
      }
      .fa-flag-o:before {
      content: "\31";
      }
      .fa-newspaper-o:before {
      content: "\32";
      }
      .fa-pencil:before {
      content: "\33";
      }
      .fa-paper-plane-o:before {
      content: "\34";
      }
      .fa-paper-plane:before {
      content: "\35";
      }
      .fa-pencil-square:before {
      content: "\36";
      }
      .fa-pencil-square-o:before {
      content: "\37";
      }
      .fa-plus-square:before {
      content: "\38";
      }
      .fa-plus-square-o:before {
      content: "\39";
      }
      .fa-print:before {
      content: "\21";
      }
      .fa-sliders:before {
      content: "\22";
      }
      .fa-tachometer:before {
      content: "\23";
      }
      .fa-filter:before {
      content: "\24";
      }
      .fa-sort-alpha-asc:before {
      content: "\25";
      }
      .fa-sort-alpha-desc:before {
      content: "\26";
      }
      .fa-sort-amount-asc:before {
      content: "\27";
      }
      .fa-sort-amount-desc:before {
      content: "\28";
      }
      .fa-sort-asc:before {
      content: "\29";
      }
      .fa-sort-desc:before {
      content: "\2a";
      }
      .fa-sort:before {
      content: "\2b";
      }
      .fa-sort-numeric-asc:before {
      content: "\2c";
      }
      .fa-sort-numeric-desc:before {
      content: "\2d";
      }
      .fa-spinner:before {
      content: "\2e";
      }
      .fa-star:before {
      content: "\2f";
      }
      .fa-star-half:before {
      content: "\3a";
      }
      .fa-star-half-o:before {
      content: "\3b";
      }
      .fa-star-o:before {
      content: "\3c";
      }
      .fa-youtube:before {
      content: "\3d";
      }
      .fa-youtube-square:before {
      content: "\3e";
      }
      .fa-wrench:before {
      content: "\3f";
      }
      .fa-history:before {
      content: "\40";
      }
      .fa-home:before {
      content: "\5b";
      }
      .fa-long-arrow-down:before {
      content: "\5d";
      }
      .fa-long-arrow-left:before {
      content: "\5e";
      }
      .fa-long-arrow-right:before {
      content: "\5f";
      }
      .fa-long-arrow-up:before {
      content: "\60";
      }
      .fa-map-marker:before {
      content: "\7b";
      }
      .fa-plus-circle:before {
      content: "\7c";
      }
      .fa-upload:before {
      content: "\7d";
      }
      .fa-unlock-alt:before {
      content: "\7e";
      }
      .fa-unlock:before {
      content: "\5c";
      }
      .fa-users:before {
      content: "\e000";
      }
      .fa-book:before {
      content: "\e001";
      }
      .fa-camera:before {
      content: "\e002";
      }
      .fa-clock-o:before {
      content: "\e003";
      }
      .fa-ellipsis-v:before {
      content: "\e004";
      }
      .fa-ellipsis-h:before {
      content: "\e005";
      }
      .fa-expand:before {
      content: "\e006";
      }
      .fa-file-video-o:before {
      content: "\e007";
      }
      .fa-file-word-o:before {
      content: "\e008";
      }
      .fa-floppy-o:before {
      content: "\e009";
      }
      .fa-flag:before {
      content: "\e00a";
      }
      .fa-repeat:before {
      content: "\e00b";
      }
      body {
      font-family: 'Roboto', sans-serif;
      font-size: 100%;
      color: #454545;
      font-size: 15px;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      padding: 0;
      margin: 0;
      background: #efefef;
      }
      body .serif {
      font-family: 'Roboto', sans-serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      vertical-align: baseline;
      }
      article,
      aside,
      details,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      main,
      menu,
      nav,
      section,
      summary {
      display: block;
      }
      a {
      background-color: transparent;
      }
      a:active,
      a:hover {
      outline: 0;
      }
      abbr[title] {
      border-bottom: 1px dotted;
      }
      b,
      strong {
      font-weight: bold;
      }
      dfn {
      font-style: italic;
      }
      mark {
      background: #ff0;
      color: #000;
      }
      small {
      font-size: 80%;
      }
      sub,
      sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
      }
      sup {
      top: -0.5em;
      }
      sub {
      bottom: -0.25em;
      }
      img {
      border: 0;
      }
      svg:not(:root) {
      overflow: hidden;
      }
      pre {
      overflow: auto;
      }
      code,
      kbd,
      pre,
      samp {}
      button,
      input,
      optgroup,
      select,
      textarea {
      color: inherit;
      font: inherit;
      margin: 0;
      }
      button {
      overflow: visible;
      }
      button,
      select {
      text-transform: none;
      }
      button,
      html input[type="button"],
      input[type="reset"],
      input[type="submit"] {
      -webkit-appearance: button;
      cursor: pointer;
      }
      button[disabled],
      html input[disabled] {
      cursor: default;
      }
      button::-moz-focus-inner,
      input::-moz-focus-inner {
      border: 0;
      padding: 0;
      }
      input {
      line-height: normal;
      }
      input[type="checkbox"],
      input[type="radio"] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 0;
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
      height: auto;
      }
      input[type="search"] {
      -webkit-appearance: textfield;
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      }
      input[type="search"]::-webkit-search-cancel-button,
      input[type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
      }
      fieldset {
      border: 1px solid #c0c0c0;
      margin: 0 2px;
      padding: 0.35em 0.625em 0.75em;
      }
      legend {
      border: 0;
      padding: 0;
      }
      textarea {
      overflow: auto;
      }
      optgroup {
      font-weight: bold;
      }
      table {
      border-collapse: collapse;
      border-spacing: 0;
      }
      td,
      th {
      padding: 0;
      }
      * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      }
      *:before,
      *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      }
      input,
      button,
      select,
      textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
      }
      figure {
      margin: 0;
      }
      img {
      vertical-align: middle;
      }
      .img-responsive {
      display: block;
      max-width: 100%;
      height: auto;
      }
      hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #eeeeee;
      }
      [role="button"] {
      cursor: pointer;
      }
      .container-fluid {
      margin-right: auto;
      margin-left: auto;
      padding-left: 30px;
      padding-right: 30px;
      }
      .row {
      margin-left: -15px;
      margin-right: -15px;
      }
      .row.rm15 {
      margin-left: -15px;
      margin-right: -15px;
      }
      .col-xs-1,
      .col-sm-1,
      .col-md-1,
      .col-lg-1,
      .col-xs-2,
      .col-sm-2,
      .col-md-2,
      .col-lg-2,
      .col-xs-3,
      .col-sm-3,
      .col-md-3,
      .col-lg-3,
      .col-xs-4,
      .col-sm-4,
      .col-md-4,
      .col-lg-4,
      .col-xs-5,
      .col-sm-5,
      .col-md-5,
      .col-lg-5,
      .col-xs-6,
      .col-sm-6,
      .col-md-6,
      .col-lg-6,
      .col-xs-7,
      .col-sm-7,
      .col-md-7,
      .col-lg-7,
      .col-xs-8,
      .col-sm-8,
      .col-md-8,
      .col-lg-8,
      .col-xs-9,
      .col-sm-9,
      .col-md-9,
      .col-lg-9,
      .col-xs-10,
      .col-sm-10,
      .col-md-10,
      .col-lg-10,
      .col-xs-11,
      .col-sm-11,
      .col-md-11,
      .col-lg-11,
      .col-xs-12,
      .col-sm-12,
      .col-md-12,
      .col-lg-12 {
      position: relative;
      min-height: 1px;
      padding-left: 15px;
      padding-right: 15px;
      }
      .col-xs-1,
      .col-xs-2,
      .col-xs-3,
      .col-xs-4,
      .col-xs-5,
      .col-xs-6,
      .col-xs-7,
      .col-xs-8,
      .col-xs-9,
      .col-xs-10,
      .col-xs-11,
      .col-xs-12 {
      float: left;
      }
      .col-xs-12 {
      width: 100%;
      }
      .col-xs-11 {
      width: 91.66666667%;
      }
      .col-xs-10 {
      width: 83.33333333%;
      }
      .col-xs-9 {
      width: 75%;
      }
      .col-xs-8 {
      width: 66.66666667%;
      }
      .col-xs-7 {
      width: 58.33333333%;
      }
      .col-xs-6 {
      width: 50%;
      }
      .col-xs-5 {
      width: 41.66666667%;
      }
      .col-xs-4 {
      width: 33.33333333%;
      }
      .col-xs-3 {
      width: 25%;
      }
      .col-xs-2 {
      width: 16.66666667%;
      }
      .col-xs-1 {
      width: 8.33333333%;
      }
      .col-xs-pull-12 {
      right: 100%;
      }
      .col-xs-pull-11 {
      right: 91.66666667%;
      }
      .col-xs-pull-10 {
      right: 83.33333333%;
      }
      .col-xs-pull-9 {
      right: 75%;
      }
      .col-xs-pull-8 {
      right: 66.66666667%;
      }
      .col-xs-pull-7 {
      right: 58.33333333%;
      }
      .col-xs-pull-6 {
      right: 50%;
      }
      .col-xs-pull-5 {
      right: 41.66666667%;
      }
      .col-xs-pull-4 {
      right: 33.33333333%;
      }
      .col-xs-pull-3 {
      right: 25%;
      }
      .col-xs-pull-2 {
      right: 16.66666667%;
      }
      .col-xs-pull-1 {
      right: 8.33333333%;
      }
      .col-xs-pull-0 {
      right: auto;
      }
      .col-xs-push-12 {
      left: 100%;
      }
      .col-xs-push-11 {
      left: 91.66666667%;
      }
      .col-xs-push-10 {
      left: 83.33333333%;
      }
      .col-xs-push-9 {
      left: 75%;
      }
      .col-xs-push-8 {
      left: 66.66666667%;
      }
      .col-xs-push-7 {
      left: 58.33333333%;
      }
      .col-xs-push-6 {
      left: 50%;
      }
      .col-xs-push-5 {
      left: 41.66666667%;
      }
      .col-xs-push-4 {
      left: 33.33333333%;
      }
      .col-xs-push-3 {
      left: 25%;
      }
      .col-xs-push-2 {
      left: 16.66666667%;
      }
      .col-xs-push-1 {
      left: 8.33333333%;
      }
      .col-xs-push-0 {
      left: auto;
      }
      .col-xs-offset-12 {
      margin-left: 100%;
      }
      .col-xs-offset-11 {
      margin-left: 91.66666667%;
      }
      .col-xs-offset-10 {
      margin-left: 83.33333333%;
      }
      .col-xs-offset-9 {
      margin-left: 75%;
      }
      .col-xs-offset-8 {
      margin-left: 66.66666667%;
      }
      .col-xs-offset-7 {
      margin-left: 58.33333333%;
      }
      .col-xs-offset-6 {
      margin-left: 50%;
      }
      .col-xs-offset-5 {
      margin-left: 41.66666667%;
      }
      .col-xs-offset-4 {
      margin-left: 33.33333333%;
      }
      .col-xs-offset-3 {
      margin-left: 25%;
      }
      .col-xs-offset-2 {
      margin-left: 16.66666667%;
      }
      .col-xs-offset-1 {
      margin-left: 8.33333333%;
      }
      .col-xs-offset-0 {
      margin-left: 0%;
      }
      .clearfix:before,
      .clearfix:after,
      .container:before,
      .container:after,
      .container-fluid:before,
      .container-fluid:after,
      .row:before,
      .row:after {
      content: " ";
      display: table;
      }
      .clearfix:after,
      .container:after,
      .container-fluid:after,
      .row:after {
      clear: both;
      }
      .center-block {
      display: block;
      margin-left: auto;
      margin-right: auto;
      }
      .pull-right {
      float: right;
      }
      .pull-left {
      float: left;
      }
      .hide {
      display: none;
      }
      .show {
      display: block;
      }
      .invisible {
      visibility: hidden;
      }
      .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
      }
      .hidden {
      display: none;
      }
      .card_np {
      border-radius: 2px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
      background-color: #fff;
      }
      .card {
      border-radius: 2px;
      margin: 0px 0px 10px 0px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
      padding: 10px 15px;
      background-color: #fff;
      }
      .card .title {
      padding: 10px 15px;
      }
      .card .title[aria-expanded="true"]:after {
      content: "\f068";
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
      color: #cc3434;
      }
      .card .title[aria-expanded="false"]:after {
      content: "\f067";
      color: #999999;
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg);
      }
      .card footer {
      margin-bottom: 15px;
      }
      * {
      box-sizing: border-box;
      }
      a {
      text-decoration: none;
      cursor: pointer;
      color: #0d47a1;
      text-transform: initial;
      }
      .fs18 {
      font-size: 18px;
      }
      .fs15 {
      font-size: 15px;
      }
      .fs16 {
      font-size: 16px;
      }
      .fs14 {
      font-size: 14px;
      }
      .fs12 {
      font-size: 12px;
      }
      .fs11 {
      font-size: 11px;
      }
      .fs144e {
      font-size: 9em
      }
      .fs100e {
      font-size: 6.250em
      }
      .fs60e {
      font-size: 4.75em;
      }
      .fs36e {
      font-size: 2.250em;
      }
      .fs30e {
      font-size: 1.875em;
      }
      .fs32e {
      font-size: 2em;
      }
      .fs28e {
      font-size: 1.750em;
      line-height: 120%
      }
      .fs24e {
      font-size: 1.500em;
      line-height: 120%
      }
      .fs22e {
      font-size: 1.375em;
      line-height: 130%
      }
      .fs20e {
      font-size: 1.25em;
      line-height: 130%
      }
      .fs18e {
      font-size: 1.125em;
      }
      .fs16e {
      font-size: 1em;
      }
      .fs14e {
      font-size: 0.875em;
      }
      .fs15e {
      font-size: 0.938em;
      }
      .fs12e {
      font-size: 0.750em;
      }
      .fs11e {
      font-size: 0.688em;
      }
      .txt_left {
      text-align: left;
      }
      .txt_center {
      text-align: center;
      }
      .txt_center_m {}
      .txt_left_m {}
      @media (max-width:767px) {
      .txt_center_m {
      text-align: center;
      }
      .txt_left_m {
      text-align: left;
      }
      }
      .txt_right {
      text-align: right;
      }
      .txt_bold {
      font-weight: bold;
      }
      .txt_italic {
      font-style: italic;
      }
      .txt_normal {
      font-weight: normal;
      }
      .txt_line {
      line-height: normal;
      }
      .txt_line p {
      line-height: normal;
      }
      .fw400 {
      font-weight: 400;
      }
      .fw300 {
      font-weight: 300;
      }
      .fw500 {
      font-weight: 500;
      }
      .fw100 {
      font-weight: 100;
      }
      .fw200 {
      font-weight: 200;
      }
      .positive {
      color: #66cc33;
      }
      .negative {
      color: #cc3434;
      }
      .gray_txt {
      color: #898989;
      }
      .white_txt {
      color: #FFFFFF;
      text-decoration: none;
      }
      .primary_highlight_txt {
      color: #ff673d;
      }
      a.primary_highlight_txt {
      color: #ff673d;
      }
      a.white_txt {
      color: #FFFFFF;
      text-decoration: none;
      }
      .black_txt {
      color: #454545;
      text-decoration: none;
      }
      .black_txt a {
      color: #454545;
      text-decoration: none;
      }
      a.black_txt {
      color: #454545;
      text-decoration: none;
      }
      .blue_text {
      color: #241f57;
      }
      a.blue_text {
      color: #0d47a1;
      text-decoration: none;
      }
      .gray_txt {
      color: #898989;
      text-decoration: none;
      }
      .light_gray_txt {
      color: #E0E0E0;
      text-decoration: none;
      }
      .light_blue_txt {
      color: #00aeef;
      }
      .black_tran_txt {
      color: rgba(0, 0, 0, 0.60);
      }
      .golden_txt {
      color: #ffd700;
      }
      .accumulate_txt {
      color: #0d47a1
      }
      .hold_txt {
      color: #1967be;
      }
      .sell_txt {
      color: #cc3434;
      }
      .reduce_txt {
      color: #E67373
      }
      .under_review_txt {
      color: #787878
      }
      .buy_txt {
      color: #66cc33;
      }
      .btn-facebook {
      background: #3b5998;
      font-size: 90%;
      color: #FFFFFF;
      }
      .btn-twitter {
      background: #00aced;
      font-size: 90%;
      color: #FFFFFF;
      }
      .btn-google {
      background: #c32f10;
      font-size: 90%;
      color: #FFFFFF;
      }
      .facebook_txt {
      color: #3b5998;
      }
      .twitter_txt {
      color: #00aced;
      }
      .google_txt {
      color: #dd4b38
      }
      /*widht*/
      .w100p {
      width: 100%;
      }
      .w10p {
      width: 10%;
      }
      .w50p {
      width: 48.5%;
      }
      .w33p {
      width: 31.5%;
      }
      .w66p {
      width: 64.5%;
      }
      .w80p {
      width: 80%;
      }
      .bdr_non {
      border: none;
      }
      .bdr_Bnone {
      border-bottom: none;
      }
      .bdr_all {
      border: solid 1px #d0d0d0;
      }
      .gray_bdr_b {
      border-bottom: solid 1px #d0d0d0;
      }
      .gray_bdr_bd {
      border-bottom: dotted 1px #d0d0d0;
      }
      .gray_bdr_t {
      border-top: solid 1px #d0d0d0;
      }
      .gray_bdr_l {
      border-left: solid 1px #d0d0d0;
      }
      .gray_bdr_r {
      border-right: solid 1px #d0d0d0;
      }
      .doted_bdr_r {
      border-right: dotted 1px #d0d0d0;
      }
      .gray_bdr_b_dash {
      border-bottom: 1px dashed #adadad;
      }
      .bdr_r0 {
      border-radius: 0px;
      }
      .green_bdr_b {
      border-bottom: solid 1px #3ab161;
      }
      .dark_red_bdr_b {
      border-bottom: solid 1px #dc514d;
      }
      .blue_bdr_b {
      border-bottom: solid 1px #005b7f;
      }
      .blue_bdr_skyb {
      border-bottom: solid 1px #00aeef;
      }
      .light_blue_bdr_b {
      border-bottom: solid 1px #B1CBFA;
      }
      .blue_tb_b {
      border-bottom: solid 3px #005b7f;
      border-top: solid 3px #005b7f
      }
      .light_red_bdr_b {
      border-bottom: solid 1px #E67373;
      }
      .dark_red_bdr_t {
      border-top: solid 3px #f16e2d;
      }
      .dark_red_bdr_b {
      border-bottom: solid 1px #dc514d;
      }
      .brown_bdr {
      border: solid 1px #e8e8d9;
      }
      .primary_color {
      background: #1976d2;
      }
      .primary_light {
      background: #e3f2fd;
      }
      .primary_dark {
      background: #0d47a1;
      }
      .primary_darker {
      background: #0a3474;
      }
      .primary_darkerest {
      background: #04152f;
      }
      .primary_highlight_txt {
      color: #ff673d;
      }
      .primary_highlight_bg {
      background: #ff673d;
      }
      .primary_highlight_txt a {
      color: #ff673d;
      }
      .primary_contnent_bg {
      background: rgba(255, 255, 255, 1.00);
      }
      .yellow_bg {
      background: rgba(255, 254, 235, 1.0);
      }
      .gray_bg {
      background: rgba(0, 0, 0, 0.10);
      }
      .green_bg {
      background: rgba(58, 177, 97, 1.0);
      }
      .red_bg {
      background: rgba(220, 80, 71, 1.0);
      }
      .lgreen_bg {
      background: #f1ffed 
      ;
      }
      .lgreen2_bg {
      background: #ddffcd 
      ;
      }
      .lred_bg {
      background: #ffeded;
      }
      .lred2_bg {
      background: #ffd7d7;
      }
      .dark_gray_bg {
      background: #ececec;
      }
      .light_gray_bg {
      background: #f8fafa;
      }
      .blue_bg {
      background: #005b7f;
      }
      .dark_red_bg {
      background: #E80909;
      }
      .light_red_bg {
      background: #ffeded;
      }
      .light_blue_bg {
      background: #B1CBFA;
      }
      .dark_grey_bg {
      background: #787878;
      }
      .bg_non {
      background-color: transparent;
      }
      .orange_bg {
      background: #f16e2d;
      }
      .orange_bg a.white_txt {
      color: #fff;
      }
      .orange_bg a.white_txt:hover,
      .orange_bg a.white_txt:active {
      color: #263238;
      }
      .relative {
      position: relative;
      }
      .absolute {
      position: absolute;
      }
      .fixed {
      position: fixed;
      }
      .overflow .row {
      overflow: hidden
      }
      .overflow {
      overflow: hidden
      }
      .overflow-x-scroll {
      overflow-x: auto;
      }
      .overflow-y-scroll {
      overflow-y: auto;
      }
      .overflow-h-scroll {
      white-space: nowrap;
      overflow-x: auto;
      }
      .block {
      display: block
      }
      .inline-block {
      display: inline-block
      }
      .m-inline-block {}
      .dis-table {
      display: table
      }
      .dis-table-cell {
      display: table-cell
      }
      .v-middle {
      vertical-align: middle;
      }
      .v-top {
      vertical-align: top;
      }
      .v-base {
      vertical-align: baseline;
      }
      .pointer {
      cursor: pointer
      }
      .ellipsis {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      }
      .p5 {
      padding: 5px;
      }
      .p10 {
      padding: 10px;
      }
      .p15 {
      padding: 15px;
      }
      .p19 {
      padding: 20px;
      }
      .p0 {
      padding: 0px;
      }
      .pt0 {
      padding-top: 0px;
      }
      .pt0i {
      padding-top: 0px;
      }
      .pt5 {
      padding-top: 5px;
      }
      .pt5i {
      padding-top: 5px;
      }
      .pt10 {
      padding-top: 10px;
      }
      .pt20 {
      padding-top: 20px;
      }
      .pt30 {
      padding-top: 30px;
      }
      .pr5 {
      padding-right: 5px;
      }
      .prd5 {}
      .pr8 {
      padding-right: 8px;
      }
      .pr0 {
      padding-right: 0px;
      }
      .pr10 {
      padding-right: 10px;
      }
      .p2_8 {
      padding: 2px 8px;
      }
      .plr0 {
      padding: 0px;
      }
      .ptb5 {
      padding-top: 5px;
      padding-bottom: 5px;
      }
      .ptb10 {
      padding-top: 10px;
      padding-bottom: 10px;
      }
      .ptb15 {
      padding-top: 15px;
      padding-bottom: 15px;
      }
      .ptb20 {
      padding-top: 20px;
      padding-bottom: 20px;
      }
      .ptb30 {
      padding-top: 30px;
      padding-bottom: 30px;
      }
      .ptb0 {
      padding: 0px inherit 0px inherit;
      }
      .plr3 {
      padding: 0 3px;
      }
      .plr5 {
      padding: 0 5px;
      }
      .plr10 {
      padding-left: 10px;
      padding-right: 10px;
      }
      .plr15 {
      padding-left: 15px;
      padding-right: 15px;
      }
      .pl5 {
      padding-left: 5px;
      }
      .pl10 {
      padding-left: 10px;
      }
      .pl15 {
      padding-left: 15px;
      }
      .pb0 {
      padding-bottom: 0px;
      }
      .pb2 {
      padding-bottom: 2px;
      }
      .pb5 {
      padding-bottom: 5px;
      }
      .pb10 {
      padding-bottom: 10px;
      }
      .pb15 {
      padding-bottom: 15px;
      }
      .pb20 {
      padding-bottom: 20px;
      }
      .pb30 {
      padding-bottom: 30px;
      }
      .pb45 {
      padding-bottom: 45px;
      }
      .pl0 {
      padding-left: 0px;
      }
      @media (max-width:767px) {
      .pm_lr0 {
      padding-left: 0px;
      padding-right: 0px;
      }
      .mlrm_5 {
      margin-left: 5px;
      margin-right: 5px;
      }
      .plrm_5 {
      padding-left: 5px;
      padding-right: 5px;
      }
      .prm_5 {
      padding-right: 5px;
      }
      .pm_t15 {
      padding-top: 15px;
      }
      .mm_t0 {
      margin-top: 0px;
      }
      .mm_t5 {
      margin-top: 5px;
      }
      .mm_t10 {
      margin-top: 10px;
      }
      .mm_t15 {
      margin-top: 15px;
      }
      .plrm_0 {
      padding-left: 0px;
      padding-right: 0px;
      }
      .ptm_5 {
      padding-top: 5px;
      }
      .prm_0 {
      padding-right: 0px;
      }
      .m-inline-block {
      display: inline-block
      }
      }
      @media (min-width:769px) {
      .prd5 {
      padding-right: 5px;
      }
      .pld0 {
      padding-left: 0px;
      }
      }
      .m0 {
      margin: 0px;
      }
      .mt0 {
      margin-top: 0px;
      }
      .mt1 {
      margin-top: 1px;
      }
      .mt2 {
      margin-top: 2px;
      }
      .mt3 {
      margin-top: 3px;
      }
      .mt4 {
      margin-top: 4px;
      }
      .mt5 {
      margin-top: 5px;
      }
      .mt6 {
      margin-top: 6px;
      }
      .mt7 {
      margin-top: 7px;
      }
      .mt8 {
      margin-top: 8px;
      }
      .mt9 {
      margin-top: 9px;
      }
      .mt10 {
      margin-top: 10px;
      }
      .mt13 {
      margin-top: 13px;
      }
      .mt-15 {
      margin-top: -15px;
      }
      .mt15 {
      margin-top: 15px;
      }
      .mt16 {
      margin-top: 16px;
      }
      .mt20 {
      margin-top: 20px;
      }
      .mt30 {
      margin-top: 30px;
      }
      .mt50 {
      margin-top: 50px;
      }
      .mr1 {
      margin-right: 1px;
      }
      .mr5 {
      margin-right: 5px;
      }
      .mr10 {
      margin-right: 10px;
      }
      .mr15 {
      margin-right: 15px;
      }
      .mr20 {
      margin-right: 20px;
      }
      .mb0 {
      margin-bottom: 0px;
      }
      .mb5 {
      margin-bottom: 5px
      }
      .mb8 {
      margin-bottom: 8px
      }
      .mb10 {
      margin-bottom: 10px
      }
      .mb15 {
      margin-bottom: 15px
      }
      .mb20 {
      margin-bottom: 20px
      }
      .mb30 {
      margin-bottom: 30px;
      }
      .mb45 {
      margin-bottom: 45px
      }
      .ml0 {
      margin-left: 0px;
      }
      .ml10 {
      margin-left: 10px;
      }
      .header {
      min-height: 50px;
      top: 0px;
      width: 100%;
      z-index: 5;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      background: transparent linear-gradient(90deg, #641C7F 0%, #551A78 9%, #301667 36%, #15135B 61%, #051154 83%, #001152 100%) 0% 0% no-repeat padding-box;
      }
      .menu {
      vertical-align: super;
      }
      .logo {
      text-align: center;
      width: 110px;
      margin: 5px 0 0 10px;
      }
      .search {
      margin: 5px 10px 0 10px;
      display: inline-block;
      background: none;
      float: right
      }
      .login {
      padding: 5px 10px 0 10px;
      display: inline-block;
      background: none;
      float: right
      }
      .main {
      margin-top: 40px;
      }
      #search {
      height: 56px
      }
      .search_bar {
      background: #04152f;
      padding: 0 5px 5px 5px;
      height: 56px
      }
      .common_list {
      list-style: none;
      }
      .common_list {
      -webkit-margin-before: 0em;
      -webkit-margin-after: 0em;
      -webkit-margin-start: 0px;
      -webkit-margin-end: 0px;
      -webkit-padding-start: 0px;
      }
      .common_list li {
      padding: 10px;
      border-bottom: 1px solid #d8d8d8;
      }
      .common_list li:last-child {
      border-bottom: none;
      }
      .top_link {
      padding: 10px;
      background: #e3f2fd;
      }
      .back_to_top {
      padding: 10px;
      background: #0a3474;
      }
      .back_to_top a {
      color: #FFFFFF;
      }
      .main .footer {
      line-height: 36px;
      padding: 10px 0;
      margin-top: 15px;
      border-top: 1px solid #d8d8d8;
      }
      .main .footer a {
      padding: 10px;
      margin: 5px;
      }
      .footer {
      position: relative;
      overflow: hidden;
      padding: 0px 15px;
      }
      .footer .set1 {
      float: left;
      width: 45%;
      margin-right: 2.5%
      }
      .footer .set1 ul {
      list-style: none;
      padding: 0px;
      -webkit-margin-before: 0;
      -webkit-margin-after: 0em;
      -webkit-margin-start: 0px;
      -webkit-margin-end: 0px;
      -webkit-padding-start: 0px;
      }
      .footer .set1 li {
      padding: 10px 0px;
      }
      .copyright {
      text-align: center;
      font-size: 12px;
      padding: 5px 0;
      }
      .img_caption {
      margin-bottom: 8px;
      font-style: italic;
      font-size: 13px;
      text-align: center;
      }
      .table-responsive {
      overflow-x: auto;
      min-height: 0.01%;
      }
      }
      table,
      .table_mkt {
      border-collapse: collapse;
      margin-bottom: 10px;
      }
      table a,
      .table_mkt a {
      color: #2780e3
      }
      table,
      .table_mkt {
      text-align: right;
      width: 100%;
      }
      table th,
      .table_mkt th {
      padding: 15px 3px;
      font-weight: normal;
      text-align: right;
      color: #898989;
      border-bottom: 1px solid #dddddd
      }
      table tr th,
      .table_mkt tr th:hover {
      background: none;
      }
      table tr,
      .table_mkt tr {
      border-bottom: solid 1px #d0d0d0;
      }
      table thead tr:hover,
      .table_mkt thead tr:hover {
      background: inherit;
      }
      table tr:hover,
      .table_mkt tr:hover {
      background-color: rgba(50, 211, 251, 0.20);
      -webkit-animation-duration: 0.5s;
      animation-duration: .3s;
      -moz-transition: all 0.5s ease-in-out;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      }
      table tr:hover td .table_mkt tr:hover td {
      background-color: rgba(50, 211, 251, 0.20);
      -webkit-animation-duration: 0.5s;
      animation-duration: .3s;
      -moz-transition: all 0.5s ease-in-out;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      }
      table col,
      .table_mkt col:hover {
      background: #fef0ea;
      }
      table td:first-child,
      .table_mkt td:first-child {
      text-align: left;
      }
      table th:first-child,
      .table_mkt th:first-child {
      text-align: left;
      }
      .txt-rigt {
      text-align: right;
      }
      .txt-center {
      text-align: center;
      }
      .txt-left {
      text-align: left;
      }
      .side_bar {
      width: 272px;
      background: #131845;
      position: relative
      }
      a.menu-closebtn {    position: absolute;
      right: 0px;
      width: 30px;
      height: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f56e28;
      font-size: 14px;
      color: #fff;
      z-index: 999;}
      .side_bar h2,
      h3,
      h4,
      h5,
      h6 {
      font-size: 16px;
      text-decoration: none;
      font-weight: normal;
      }
      .side_bar .accordion-header {
      color: #fff;
      background: none;
      padding: 10px 15px;
      border: none;
      font-size: 14px;
      text-transform: uppercase;
      font-weight: 600;
      }
      .side_bar .accordion-header a {
      text-transform: uppercase;
      font-weight: 600;
      font-size: 14px;
      }
      .side_bar .accordion-content {
      color: #e3f2fd;
      padding-left: 30px;
      background: #131845;
      }
      .side_bar .accordion-content li a {
      padding: 4px 0;
      font-weight: 400;
      font-size: 16px;
      }
      .side_bar .has_sublink,
      .side_bar .has_sublink .sublink {
      position: relative
      }
      .side_bar .has_sublink[expanded] .accordion-content {
      border-bottom: 1px solid rgba(255, 255, 255, 0.30);
      border-top: 1px solid rgba(255, 255, 255, 0.30);
      }
      .side_bar .has_sublink[expanded]:after {
      font-family: "iifl-icon";
      content: "\67";
      }
      .side_bar .has_sublink:after {
      font-family: "iifl-icon";
      content: "\68";
      color: #fff;
      right: 15px;
      position: absolute;
      top: 14px;
      font-size: .875em
      }
      .side_bar .has_sublink .sublink[expanded]:after {
      font-family: "iifl-icon";
      content: "\67";
      ;
      color: #fff;
      right: 15px;
      position: absolute;
      top: 14px;
      font-size: .875em
      }
      .side_bar .has_sublink .sublink:after {
      font-family: "iifl-icon";
      content: "\68";
      color: #fff;
      right: 15px;
      position: absolute;
      top: 14px;
      font-size: .875em
      }
      .side_bar .has_sublink ul {
      list-style: none;
      -webkit-padding-start: 00px;
      }
      .side_bar .has_sublink ul li {
      font-size: 1em;
      padding: 5px 14px 0 0px;
      color: rgba(255, 255, 255, 0.8);
      }
      .side_bar .has_sublink p {
      font-size: 1em;
      padding: 8px 0px 7px 0px;
      color: rgba(255, 255, 255, 0.8);
      }
      .side_bar .has_sublink .nested-accordion .accordion-header {
      color: #e3f2fd;
      background: none;
      padding: 10px 15px 10px 0px;
      border: none;
      }
      .side_bar section a {
      font-size: 14px;
      color: #fff;
      justify-content: center;
      align-items: center;
      position: relative;
      display: block;
      }
      .accordion-content a {
      font-weight: 400;
      }
      .for-mobile-top-option ul {
      padding: 0;
      margin: 0;
      }
      .for-mobile-top-option ul li a {
      padding: 10px;
      font-size: 14px;
      color: #fff;
      justify-content: center;
      align-items: center;
      position: relative;
      font-weight: 600;
      display: block;
      }
      .for-mobile-top-option .otherGroup h5 {
      color: #fff;
      font-size: 14px;    font-weight: 600;
      }
      .otherGroup ul li::marker {
      font-size: 0;
      }
      .otherGroup {
      text-align: center;
      }
      .for-mobile-top-option .otherGroup ul {
      background: white;
      margin: 8px 0;
      border: 2px solid #131845;
      display: flex;
      justify-content: center;
      align-items: center;
      }
      li.open-demat-btn-menu a {
      background: #f56e28;
      text-transform: uppercase;
      }
      .buzz_right {
      height: 100%;
      position: fixed;
      border-right: 5px solid #ff673d;
      z-index: 1000;
      top: 0px;
      right: 0px;
      }
      .buzz_right:after,
      .buzz_right:after {
      content: 'buzz';
      position: absolute;
      right: -15px;
      border-radius: 5px 5px 0 0;
      -webkit-transform: rotate(90deg);
      transform: rotate(-90deg);
      top: 50%;
      z-index: 1100;
      background: #ff673d;
      padding: 5px 10px;
      color: #fff;
      text-transform: uppercase;
      font-size: 14px;
      }
      .marekt_buzz.is-active .top_fix_head {
      position: fixed;
      top: 0;
      background: #0a3474;
      width: 320px;
      z-index: 1033;
      padding: 10px;
      }
      .btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: normal;
      text-align: center;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      white-space: nowrap;
      padding: 10px 18px;
      font-size: 15px;
      line-height: 1.42857143;
      border-radius: 0;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }
      .btn_sm {
      display: inline-block;
      margin-bottom: 0;
      font-weight: normal;
      text-align: center;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      white-space: nowrap;
      font-size: 15px;
      line-height: 1.42857143;
      border-radius: 0;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }
      .btn.seach {
      padding: 3px 10px;
      }
      .ampTabContainer {
      display: flex;
      flex-wrap: wrap;
      }
      .tabButton[selected],
      .tabButton[option][selected] {
      outline: none;
      border: none;
      -webkit-box-shadow: inset 0 -2px 0 #2196f3;
      box-shadow: inset 0 -2px 0 #2196f3;
      color: #2196f3;
      }
      .tabButton {
      list-style: none;
      text-align: center;
      cursor: pointer;
      color: #666666;
      padding: 10px 15px;
      background: transparent;
      }
      .tabContent {
      display: none;
      width: 100%;
      order: 1;
      border-top: 1px solid #ccc;
      border-bottom: none;
      border-left: none;
      border-right: none:
      }
      .tabButton[selected]+.tabContent {
      display: block;
      }
      .itemCustom {
      height: 280px;
      width: 380px;
      margin: 10px;
      text-align: center;
      padding-top: 140px;
      }
      amp-selector {
      padding: 1px;
      margin: 0px;
      }
      input[type='text'],
      input[type='search'],
      input[type='number'],
      input[type='tel'],
      input[type='email'] {
      display: block;
      height: 43px;
      padding: 10px 18px;
      font-size: 15px;
      line-height: 1.42857143;
      color: #333333;
      background-color: #ffffff;
      background-image: none;
      border: 1px solid #cccccc;
      border-radius: 0;
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      }
      .white_txt input[type='text'],
      {
      border-color: rgba(255, 255, 255, 0.63);
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.63);
      margin: 0px;
      width: 100%;
      border-bottom: none;
      }
      .white_txt input[type='search'] {
      border-color: rgba(255, 255, 255, 0.63);
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.63);
      margin: 0px;
      width: 98%;
      border-bottom: none;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search'] {
      border: 0;
      border-bottom: 1px solid #cccccc;
      border-radius: 0;
      padding: 0;
      resize: none;
      color: #fff;
      background-color: transparent;
      }
      .white_txt label {
      color: #fff;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']::-webkit-input-placeholder {
      color: #fff;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']:-moz-placeholder {
      color: #fff;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']::-moz-placeholder {
      color: #fff;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']::-ms-input-placeholder {
      color: #fff;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']::-webkit-input-placeholder {
      color: #e3f2fd;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']:focus {
      outline-style: none;
      box-shadow: none;
      border-color: #3FBAE4;
      box-shadow: 0 1px 0 #3FBAE4;
      }
      .white_txt input[type='text'],
      .white_txt input[type='search']:focus::-webkit-input-placeholder {
      color: #e3f2fd;
      }
      .current_description {
      line-height: 28px;
      }
      .current_content {
      line-height: 32px;
      font-size: 1.125em;
      }
      amp-accordion section[expanded] .show-more {
      display: none;
      }
      amp-accordion section:not([expanded]) .show-less {
      display: none;
      }
      .btn-blue {
      background-position: center;
      color: #fff;
      background-color: #0d47a1;
      transition: background 0.8s;
      }
      .btn-blue:hover {
      background: #0d47a1 radial-gradient(circle, transparent 1%, #0d47a1 1%) center/15000%;
      }
      .btn-blue:active {
      background-color: #fff;
      background-size: 100%;
      transition: background 0s;
      }
      .btn-blue_bdr {
      background-color: #ecf3ff;
      color: #04152f;
      border: 1px solid #04152f;
      }
      .btn-blue_bdr:hover {
      border: solid 1px #012d50;
      background: #012d50;
      color: #fff;
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
      }
      .btn-blue_bdr .badge {
      color: #fff;
      background-color: #012d50;
      }
      .btn-blue_bdr.disabled:hover,
      .btn-blue_bdr[disabled]:hover,
      fieldset[disabled] .btn-blue_bdr:hover,
      .btn-blue_bdr.disabled:focus,
      .btn-blue_bdr[disabled]:focus,
      fieldset[disabled] .btn-blue_bdr:focus,
      .btn-blue_bdr.disabled.focus,
      .btn-blue_bdr[disabled].focus,
      fieldset[disabled] .btn-blue_bdr.focus {
      border: solid 1px #B3B3B3;
      background: #04152f;
      color: #fff;
      }
      .btn-blue_bdr .badge {
      color: #fff;
      background-color: #012d50;
      }
      .round_type {
      border-radius: 32px;
      }
      .btn-lblue {
      background-position: center;
      color: #fff;
      background-color: #00aeef;
      transition: background 0.8s;
      border: 1px solid #00aeef
      }
      .btn-lblue:hover {
      background: #00aeef radial-gradient(circle, transparent 1%, #00aeef 1%) center/15000%;
      color: #fff
      }
      .btn-lblue:active {
      background-color: #fff;
      background-size: 100%;
      transition: background 0s;
      }
      .btn-green_bdr {
      background-position: center;
      color: #3ab161;
      background-color: #f1ffed;
      transition: background 0.8s;
      border: 1px solid #3ab161
      }
      .btn-green_bdr:hover {
      background: #3ab161 radial-gradient(circle, transparent 1%, #3ab161 1%) center/15000%;
      color: #fff
      }
      .btn-green_bdr:active {
      background-color: #fff;
      background-size: 100%;
      transition: background 0s;
      }
      .btn-gray_bdr {
      background-position: center;
      color: #787878;
      background-color: #ececec;
      transition: background 0.8s;
      border: 1px solid #787878
      }
      .btn-gray_bdr:hover {
      background: #787878 radial-gradient(circle, transparent 1%, #787878 1%) center/15000%;
      color: #fff
      }
      .btn-gray_bdr:active {
      background-color: #787878;
      background-size: 100%;
      transition: background 0s;
      }
      .more {
      width: 100%;
      margin: 0;
      padding: 0;
      text-align: center;
      z-index: 2;
      }
      .more:after {
      position: absolute;
      bottom: 50%;
      height: 1px;
      font-size: 0px;
      line-height: 0;
      content: "";
      text-shadow: none;
      background-color: #00aeef;
      width: 95%;
      right: 2.5%;
      z-index: -1
      }
      .more div {
      z-index: 3;
      }
      .more a {
      z-index: 4;
      }
      .scrollToTop {
      color: #fafafa;
      font-size: 1.4em;
      box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, .12), 0 1px 1px 0 rgba(0, 0, 0, .24);
      width: 30px;
      height: 30px;
      border-radius: 100px;
      border: none;
      outline: none;
      background: #0d47a1;
      z-index: 9999;
      bottom: 60px;
      right: 10px;
      position: fixed;
      opacity: 1;
      visibility: visible;
      }
      #marker {
      position: absolute;
      top: 300px;
      width: 0px;
      height: 0px;
      }
      .lead-form {
      position: relative;
      margin-top: 10px;
      }
      .has-float-label {
      display: block;
      position: relative;
      }
      .has-float-label label,
      .has-float-label > span {
      position: absolute;
      left: 0;
      top: 0;
      cursor: text;
      font-size: 75%;
      opacity: .75;
      transition: all .2s;
      }
      .has-float-label select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      }
      .has-float-label input,
      .has-float-label select {
      font-size: inherit;
      padding: 1em 0 0 0;
      margin-bottom: 2px;
      border: 0;
      border-radius: 0;
      border-bottom: 2px solid #efefef;
      width: 100%;
      }
      .has-float-label input::-webkit-input-placeholder,
      .has-float-label select::-webkit-input-placeholder {
      opacity: 1;
      transition: all .2s;
      }
      .has-float-label input:-ms-input-placeholder,
      .has-float-label select:-ms-input-placeholder {
      opacity: 1;
      transition: all .2s;
      }
      .has-float-label input::-ms-input-placeholder,
      .has-float-label select::-ms-input-placeholder {
      opacity: 1;
      transition: all .2s;
      }
      .has-float-label input::placeholder,
      .has-float-label select::placeholder {
      opacity: 0.5;
      transition: all .2s;
      }
      .has-float-label input:placeholder-shown:not(:focus)::-webkit-input-placeholder,
      .has-float-label select:placeholder-shown:not(:focus)::-webkit-input-placeholder {
      opacity: 0;
      }
      .has-float-label input:placeholder-shown:not(:focus):-ms-input-placeholder,
      .has-float-label select:placeholder-shown:not(:focus):-ms-input-placeholder {
      opacity: 0;
      }
      .has-float-label input:placeholder-shown:not(:focus)::-ms-input-placeholder,
      .has-float-label select:placeholder-shown:not(:focus)::-ms-input-placeholder {
      opacity: 0;
      }
      .has-float-label input:placeholder-shown:not(:focus)::placeholder,
      .has-float-label select:placeholder-shown:not(:focus)::placeholder {
      opacity: 0;
      }
      .has-float-label input:placeholder-shown:not(:focus) + *,
      .has-float-label select:placeholder-shown:not(:focus) + * {
      font-size: 16px;
      opacity: 1;
      top: 1em;
      }
      .has-float-label input:focus,
      .has-float-label select:focus {
      outline: none;
      border-bottom: 2px solid #2196f3;
      }
      .has-float-label select {
      padding-right: 1em;
      background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.5em bottom 0.25em;
      background-size: 8px 10px;
      }
      .submit-btn {
      border-radius: 5px;
      padding: 8px 10%;
      margin: 30px 0px 15px;
      background: #ff5f00;
      font-weight: 600;
      text-transform: uppercase;
      width: 100%;
      }
      .submit-btn:hover {
      background: #ff5f00;
      }
      .border-color-ff673d {
      border-color: #ff673d;
      }
      .lead-form-btn {
      position: fixed;
      bottom: 0;
      width: 100%;
      text-transform: uppercase;
      font-weight: 600;
      }
      [type="checkbox"]:not(:checked),
      [type="checkbox"]:checked {
      position: absolute;
      left: -9999px;
      }
      [type="checkbox"]:not(:checked) + label,
      [type="checkbox"]:checked + label {
      position: relative;
      padding-left: 1.5em;
      cursor: pointer;
      font-size: 14px;
      }
      [type="checkbox"]:not(:checked) + label:before,
      [type="checkbox"]:checked + label:before {
      content: '';
      position: absolute;
      left: 0;
      top: 2px;
      width: 1.15em;
      height: 1.15em;
      border: 1px solid #a0a0a0;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, .1);
      }
      [type="checkbox"]:not(:checked) + label:after,
      [type="checkbox"]:checked + label:after {
      content: '✔';
      position: absolute;
      top: 0.37em;
      left: 0.2em;
      font-size: 0.8rem;
      line-height: 0.8;
      color: #fc7625;
      transition: all .2s;
      }
      [type="checkbox"]:not(:checked) + label:after {
      opacity: 0;
      transform: scale(0);
      }
      [type="checkbox"]:checked + label:after {
      opacity: 1;
      transform: scale(1);
      }
      form.amp-form-submit-success [submit-success],
      form.amp-form-submit-error [submit-error] {
      margin-top: 16px;
      }
      form.amp-form-submit-success [submit-success] {
      color: green;
      }
      form.amp-form-submit-error [submit-error] {
      color: red;
      }
      form.amp-form-submit-success > input {
      display: none
      }
      .autosuggest-container {
      position: relative;
      }
      .autosuggest-box {
      position: absolute;
      width: 100%;
      height: 100px;
      overflow-y: scroll;
      overflow-x: hidden;
      z-index: 9999;
      background-color: #fafafa;
      }
      a#become-a-sub-broker {
      padding: 5px 10px 10px;
      }
      .select-option.no-outline[selected] {
      outline: initial;
      }
      .hidden {
      display: none;
      }
      .select-option {
      padding: 0 5px;
      }
      .footer {
      position: relative;
      overflow: hidden;
      margin-top: 10px;
      }
      .footer-accordion {
      background: #636363;
      color: #fff;
      padding: 10px 20px;
      }
      .footer-acc-content {
      background: #fff;
      padding-bottom: 15px;
      }
      .fix_menu_div {
      margin-top: 56px;
      position: fixed;
      z-index: 5;
      }
      .fix_menu {
      overflow-x: auto;
      overflow-y: hidden;
      display: -webkit-box;
      display: -moz-box;
      }
      .fix_menu ul {
      padding-left: 0;
      list-style: none;
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      vertical-align: baseline;
      }
      .fix_menu ul li {
      float: none;
      padding: 0;
      border-bottom: none;
      display: table-cell
      }
      .fix_menu ul li.active a {
      color: #2196f3;
      background-color: transparent;
      box-shadow: inset 0 -2px 0 #2196f3;
      -webkit-box-shadow: inset 0 -2px 0 #2196f3;
      -ms-box-shadow: inset 0 -2px 0 #2196f3;
      border-right: none;
      font-weight: 500;
      }
      .fix_menu ul li a {
      background-color: transparent;
      color: #666666;
      position: relative;
      display: block;
      padding: 10px 15px;
      white-space: nowrap;
      }
      header.header .plr15.ptb5 {
      display: flex;
      }
      .opendembut {
      margin-right: 9px;
      }
      a.headerbut {
      color: #fff;
      border-radius: 6px;
      padding: 10px 11px;
      display: inline-block;
      background: linear-gradient(to right, #ff5f00 50%, #f37022 50%);
      background-size: 200% 100%;
      background-position: right bottom;
      transition: all .5s ease;
      border: 0;
      outline: 0;
      text-shadow: none;
      transition: all .5s ease;
      text-align: center;
      text-transform: uppercase;
      font-size: 12px;
      }
      .menu {
      vertical-align: super;
      margin-top: 9px;
      }
      header.header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      }
      .logo {
      text-align: center;
      width: 110px;
      margin: 5px 0 0 -6px;
      }
      @media only screen and (max-width:320px) {
      a.headerbut {
      padding: 8px 8px;
      }
      header.header .plr15.ptb5 {
      padding-right: 0;
      padding-left: 9px;
      }
      }
      .blue_text.current_title.fw500 {
      font-size: 17px;
      }
      .current_description {
      color: #241f57;
      font-size: 14px;
      margin: 5px 0;
      line-height: 22px;
      font-weight: 500;
      }
      .current_content.serif {
      font-size: 14px;
      line-height: 18px;
      color: #787878;
      font-weight: 400;
      }
      .current_content.serif amp-img {
      display: none;
      }
      .current_content.serif {
      word-break: break-word;
      overflow: hidden;
      text-overflow: ellipsis;
      line-height: 16px;
      max-height: 100px;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      min-height: 193px;
      margin: 13px 0;
      position: relative;
      }
      .current_content.serif:after {
      content: "Read more...";
      position: absolute;
      right: 0;
      bottom: 0;
      background: white;
      padding: 0 0 0 17px;
      color: #f16e2d;
      }
      .current_content.serif:hover {
      word-break: break-word;
      overflow: visible;
      text-overflow: ellipsis;
      display: -webkit-box;
      line-height: 16px;
      max-height: 100%;
      -webkit-line-clamp: unset;
      -webkit-box-orient: vertical;
      min-height: 32px;
      margin: 13px 0;
      position: relative;
      }
      .current_content.serif:hover:after {
      display: none;
      }
      body .lead-form-btn {
      position: fixed;
      background: #f36f21;
      }
      span.story_tags a.btn-link {
      padding: 4px 0 0;
      }
      body .lead-form-btn a {
      color: #fff;
      }
      .amp-lead-form {
      background: #241F57 0% 0% no-repeat padding-box;
      border-radius: 10px;
      color: #fff;
      margin: 0 -15px;
      }
      .leadformwrap .leadformheader {
      width: 100%;
      text-align: center;
      padding-bottom: 10px;
      }
      .leadformheader img {
      max-width: 170px;
      margin: auto;
      }
      .leadformwrap h2 {
      color: #fff ;
      font-weight: 500;
      font-size: 20px ;
      text-align: center;
      margin: 10px 0 15px;
      font-family: 'Roboto' ;
      line-height: normal;
      border: 0;
      }
      .article-lead-form .leadformwrap h2 span.s-text {
      font-size: 16px;
      }
      span.ptext,
      span.bText {
      font-size: 20px;
      color: #F56E28;
      }
      .leadformwrap label.has-label input {
      display: block;
      width: 100%;
      height: 40px;
      border: solid 1px #ccc;
      transition: all .3s ease;
      padding: 0 38px 0 15px;
      box-sizing: border-box;
      border: 4px solid #FFFFFF;
      border-radius: 6px;
      height: 44px;
      }
      .leadformwrap .dmobileicon {
      background: url(https://www.indiainfoline.com/new_hp/include/_mod/site/images/mobile.svg) no-repeat 97% 8px #ffffff;
      }
      .leadformwrap .demailicon {
      background: url(https://www.indiainfoline.com/new_hp/include/_mod/site/images/emailicon.svg) no-repeat 97% 10px #ffffff;
      }
      .leadformwrap input.submit-btn {
      color: #FFFFFF;
      text-transform: uppercase;
      font-weight: 700;
      text-align: center;
      width: 100%;
      cursor: pointer;
      border: 0;
      margin-top: 10px;
      background: #F56E28 0% 0% no-repeat padding-box;
      border-radius: 6px;
      margin-left: 0;
      border: 2px solid #f56e28;
      transition: 0.9s;
      font-size: 15px;
      height: 44px;
      padding: 0;
      }
      .leadformwrap input.submit-btn:hover {
      background: #f5834800;
      }
      .lead-form label.has-label {
      margin-bottom: 15px;
      display: block;
      }
      .leadformwrap p.demattext {
      text-align: center;
      font-size: 12px;
      margin: 10px 20px 0 20px;
      width: 90%;
      color: #fff;
      }
      .leadformwrap p.demattext a {
      color: #F56E28;
      text-decoration: none;
      }
      .leadformwrap .denmatlist ul {
      list-style-type: none;
      padding: 0;
      margin: 14px 0 0 0;
      display: flex;
      clear: both;
      align-content: center;
      align-items: baseline;
      text-align: center;
      border-top: 1px solid #524E7B;
      }
      .leadformwrap .denmatlist ul li {
      border-right: 1px solid #524E7B;
      width: 50%;
      padding: 0 10px;
      border-radius: 0;
      max-width: 100%;
      margin: auto;
      display: block;
      flex: auto;
      }
      .leadformwrap .denmatlist ul li:last-child {
      border-right: 0;
      }
      .article-lead-form .leadformwrap .denmatlist ul li h3 {
      font-size: 54px;
      color: #FAAA38;
      font-weight: 600;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      padding: 0;
      line-height: 58px;
      }
      .leadformwrap .denmatlist ul li h3 sub {
      font-size: 30px;
      font-weight: 400;
      color: #fff;
      line-height: 0;
      display: contents;
      }
      .article-lead-form .leadformwrap .denmatlist ul li p.text {
      font-size: 10px;
      line-height: 16px;
      margin: 0;
      color: #fff;
      }
      .logo-boxd {
      display: flex;
      align-items: center;
      }
      .logo-boxd  a.menu {
      margin-right: 17px;
      }
   </style>
   <style amp-boilerplate>
      body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
      }
      @-webkit-keyframes -amp-start {
      from {
      visibility: hidden
      }
      to {
      visibility: visible
      }
      }
      @-moz-keyframes -amp-start {
      from {
      visibility: hidden
      }
      to {
      visibility: visible
      }
      }
      @-ms-keyframes -amp-start {
      from {
      visibility: hidden
      }
      to {
      visibility: visible
      }
      }
      @-o-keyframes -amp-start {
      from {
      visibility: hidden
      }
      to {
      visibility: visible
      }
      }
      @keyframes -amp-start {
      from {
      visibility: hidden
      }
      to {
      visibility: visible
      }
      }
   </style>
   <noscript>
      <style amp-boilerplate>
         body {
         -webkit-animation: none;
         -moz-animation: none;
         -ms-animation: none;
         animation: none
         }
      </style>
   </noscript>
   <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
   <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
   <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
   <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
   <script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>
   <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
   <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
   <script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
   <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
   <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
   <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
   <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
   <script type="application/ld+json">
      {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement":
      [
      {
      "@type": "ListItem",
      "position": 1,
      "item":
      {
      	"@id": "https://www.indiainfoline.com/",
      	"name": "Home"
      	}
      },
      {
      "@type": "ListItem",
      "position": 2,
      "item":
      {
      	"@id": "https://www.indiainfoline.com/top-share-market-news",
      	"name": "Top News"
      	}
      },
      {
      "@type": "ListItem",
      "position": 3,
      "item":
      {
      	"@id": "https://www.indiainfoline.com<?php echo $this->articleObject->articleUrl; ?>",
      	"name": "<?php echo $this->articleObject->heading1 ?>"
      	}
      }
      ]
      }
   </script>
   <script type="application/ld+json">
      {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
      "@type":"WebPage",
      "@id":"<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>"
      },
      "headline": "<?php echo (!empty($this->articleObject->heading1)) ? htmlspecialchars($this->articleObject->heading1) : ''; ?>",
      "articleSection": "<?php echo $this->articleObject->categoryUrlString; ?>",
      "image": {
      "@type": "ImageObject",
      "url": "<?php echo $this->artImg; ?>",
      "height" : <?php echo (!empty($this->articleObject->firstImage[0]->height)) ? $this->articleObject->firstImage[0]->height : '194'; ?>,
      "width" : <?php echo (!empty($this->articleObject->firstImage[0]->width)) ? $this->articleObject->firstImage[0]->width : '290'; ?>
      
      },
      "datePublished": "<?php echo date(DATE_ATOM, $this->articleObject->creationDate); ?>",
      "dateModified": "<?php echo date(DATE_ATOM, $this->articleObject->creationDate); ?>",
      "author": {
      "@type": "Person",
      "name": "<?php echo (!empty($this->articleObject->authorName)) ? $this->articleObject->authorName : 'IIFL News Service'; ?>"
      },
      "publisher": {
      "@type": "Organization",
      "name": "IIFL",
      "logo": {
      "@type": "ImageObject",
      "url": "<?php echo DATA_URL; ?>/logo/IIFL_logo_192x60.png",
      "width": 192,
      "height":  60
      },
      "description": "<?php echo htmlspecialchars($this->articleObject->metaDescription); ?>"
      }
      }
   </script>
   <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>
<body>
   <amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-WFD9S88&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
   <?php
      $ranValue = time();
      $_SESSION['contact_string'] = md5($myvalue . $ranValue);
      ?>
   <header class="header">
      <div class="plr15 ptb5 logo-boxd">
         <a on="tap:sidebar-left.toggle" class="menu">
            <amp-img src="https://www.indiainfoline.com/new_hp/include/_mod/site/img/Header-Image/menu-new-icon.svg"   width="23" height="31"  alt="AMP"></amp-img>
         </a>
         <a href="https://www.indiainfoline.com" >
            <amp-img src="https://www.indiainfoline.com/new_hp/include/_mod/site/img/Header-Image/mobile-brand-logo.svg" alt="IIFL" width="124" height="20" class="logo"></amp-img>
         </a>
      </div>
      <div class="opendembut">
         <a href="#open_account_form" class="headerbut" target="_blank">Open Demat Account</a>
      </div>
   </header>
   <div id="search"></div>
   <div id="top-page"></div>
   <div class="container-fluid relative">
      <div id="marker">
         <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay"> </amp-position-observer>
      </div>
      <div class="row">
         <div class="col-xs-12 ptb15">
            <div class="breadcrum">
               <a href="/">Home » </a><a href="/news-listing/top-news"><?php //echo $articleData->defaultArticleCat->category_name ?>Top News</a> » <a href="#"><?php echo $this->articleObject->heading1 ?></a>
            </div>
         </div>
         <div class="col-xs-12 card pt0">
            <header class=" pb15 pt10 ">
               <?php if($this->articleObject->articleId == '122020900986') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Brace up for <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO:</a> Decipher key terms used to assess financial performance of a life insurer
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  On the eve of the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, we help you decode some of the prominent terminologies and key performance indicators (KPIs) used in evaluating life insurers.
               </p>
               <?php } else if($this->articleObject->articleId == '122020901012') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO:</a> Top 10 details investors are seeking from the prospectus
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Prior to the IPO filing, we bring you the top 10 questions which might be answered in the IPO prospectus of LIC
               </p>
               <?php } else if($this->articleObject->articleId == '122021400179') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>: How does LIC's key financials stack up versus top 3 private life insurers?
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  We bring you the comparison of its financials with the top private life insurers on important parameters
               </p>
               <?php } else if($this->articleObject->articleId == '122021700314') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Policyholders, here is what you should know about the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Read on the know what the IPO has to offer its policyholders.
               </p>
               <?php } else if($this->articleObject->articleId == '122021700319') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO:</a> Which policyholders are not eligible to apply?
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Read on to know all important details
               </p>
               <?php } else if($this->articleObject->articleId == '122022100090') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  How to link PAN card with LIC insurance policy for <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>?
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  As LIC India has made it clear that those life insurance policyholders who want to apply under the policyholders' category must have their PAN card linked to their policy.
               </p>
               <?php } else if($this->articleObject->articleId == '122030700037') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> likely to get pushed to next fiscal amid volatility due to Russia-Ukraine war
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The weak market sentiments, especially in the wake of the Ukraine-Russia war, have been a dampener for the IPO.
               </p>
               <?php } else if($this->articleObject->articleId == '122030700058') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Ukraine conflict can impact FII participation in <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  A barrage of sanctions, including ejection of several banks from financial messaging platform SWIFT, has led to the tightening of funds for investors with interests in the Russian markets.
               </p>
               <?php } else if($this->articleObject->articleId == '122030800185') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO:</a> Bankers may buy time to decide valuations amid market volatility
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Investors may have to keep waiting a little longer to determine the right valuations and pricing risks, pushing the IPO beyond March expectantly.
               </p>
               <?php } else if($this->articleObject->articleId == '122030800184') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Likely delay in <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> to hit government's disinvestment target for FY22
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The Russia-Ukraine war which has severely impacted the stock markets has prompted the government to do a rethink with regard to the timing of the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, originally to hit the market by March 31.
               </p>
               <?php } else if($this->articleObject->articleId == '122040400112') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  India's disinvestment target stood at Rs1.75 trillion for FY22
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  According to the current plan, the Centre’s disinvestment revenues could exceed the annual disinvestment target of Rs65,000 crore for the current fiscal in Q1 itself, thanks to the proposed <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, the media reports added.
               </p>
               <?php } else if($this->articleObject->articleId == '122040600095') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Govt to seek Rs50,000 crore in <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> in May: Reports
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  It aims to launch the share sale before current approvals for the offering expire on May 12, the media reports added.
               </p>
               <?php } else if($this->articleObject->articleId == '122040600080') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Government ready to launch <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> in May 2022: Reports
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The Centre is hoping to launch the public issue before approvals for the IPO expire on May 12.
               </p>
               <?php } else if($this->articleObject->articleId == '122041300278') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  LIC board likely to file revise IPO papers next week: Reports
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> was initially set to launch in late March 2022, prior to the financial year 2021-2022 ending, however, it had to be deferred to FY23 due to high volatility in markets led by the aggravating Russia-Ukraine crisis.
               </p>
               <?php } else if($this->articleObject->articleId == '122040600249') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>: Centre unlikely to reduce its stake in LIC for at least 2 years
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The government was expecting to garner over Rs60,000 crore by selling about 31.6 crore or 5 per cent stake in the life insurance firm to meet the curtailed disinvestment target of Rs78,000 crore in 2021-22.
               </p>
               <?php } else if($this->articleObject->articleId == '122042500144') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  Centre cuts <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> size to 3.5%, looking to raise Rs21,000 crore
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The government was earlier planning to sell its 5 per cent stake in LIC to raise Rs63,000 crore.
               </p>
               <?php } else if($this->articleObject->articleId == '122042600358') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> price band likely at Rs902-949 per share: Reports
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Policyholders will likely get an Rs60 discount and an Rs45 discount for retail investors and employees.
               </p>
               <?php } else if($this->articleObject->articleId == '122042600241') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> likely to open on May 4
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  LIC has cut the size of IPO from 5 per cent to 3.5 per cent due to the market condition.
               </p>
               <?php } else if($this->articleObject->articleId == '122050200237') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  All about India’s largest public issue: <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is expected to garner up to Rs21,000 crore and its valuation stands at Rs6 lakh crore, which is 1.11 times the embedded value of around Rs5.40 lakh crore.
               </p>
               <?php } else if($this->articleObject->articleId == '122050400334') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>: 10 things you should know about India's biggest IPO
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Life Insurance Corporation of India (LIC), India’s largest insurance company had a market share of ~37%/74% in FY22 in retail APE/group NBP segments, respectively.
               </p>
               <?php } else if($this->articleObject->articleId == '122050400319') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> issue subscribed 48% on Day 1; Policyholders segment subscribed 1.38 times
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The employee reserved portion has been subscribed 84 per cent, while retail investors portion has been subscribed 51 per cent.
               </p>
               <?php } else if($this->articleObject->articleId == '122050400365') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> subscribed 0.65 times on Day 1
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The portion reserved for policyholders was fully subscribed in about three hours.
               </p>
               <?php } else if($this->articleObject->articleId == '122050500172') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> total issue subscribed 0.75 times on day 2; retail portion subscribed 0.69 times
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The policyholder quota was subscribed 2.26 times, while the portion reserved for employees was subscribed 1.46 times on day 2.
               </p>
               <?php } else if($this->articleObject->articleId == '122050500316') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> issue subscribed 0.83 times on day 2
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The portion set aside for policyholders portion has been subscribed 2.53 times, staff 1.74 times.
               </p>
               <?php } else if($this->articleObject->articleId == '122050500436') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> issue fully subscribed on day 2; Policyholder & Employees bid rush continues
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  The offer received bids for 16,68,27,570 shares against the offered 16,20,78,067 equity shares (excluding shares offered to anchor investors), as per the 7:00 pm data available on the bourses.
               </p>
               <?php } else if($this->articleObject->articleId == '122050600271') { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> policyholders quota subscribed over 3 times on day 3
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  Retail investors subscribed 0.97 times, while QIBs bid for 0.40 times shares of their allotted quota and NII lapped up 0.48 times of their portion.
               </p>
               <?php } else { ?>
               <h1 class="fs28e blue_text current_title fw500 ">
                  <?php echo (!empty($this->articleObject->heading1)) ? $this->articleObject->heading1 : ''; ?>
               </h1>
               <p class="current_description fs18e mt10 mb10 fw500">
                  <?php echo (!empty($this->articleObject->description)) ? $this->articleObject->description : ''; ?>
               </p>
               <?php } ?>
               <?php
                  if ((!empty($this->articleObject->authorName) && (16384 & $this->articleObject->articleOptions) == 16384)) {
                     if (!empty($this->articleObject->designation)) {
                        $author_name = $this->articleObject->authorName . ", " . $this->articleObject->designation;
                     } else {
                        $author_name = $this->articleObject->authorName;
                     }
                  }
                  ?>
               <p class="gray_txt">
                  <span class=" fs14e current_publishDate"><?php echo (!empty($this->articleObject->publishDate) && (8192 & $this->articleObject->articleOptions) == 8192) ? $this->escape(date('F d, Y', $this->articleObject->publishDate)) : '' ?> <?php echo (!empty($this->articleObject->publishDate) && (8192 & $this->articleObject->articleOptions) == 8192) ? $this->escape(date('H:i T', $this->articleObject->publishDate)) : '' ?></span>
                  <span class="light_gray_txt hidden-xs">|</span>
                  <span class="current_sourceTitle fs14e"><?php echo (!empty($this->articleObject->sourceTitle) && $this->articleObject->sourceTitle != 'others') ? $this->escape($this->articleObject->sourceTitle) . "" : '' ?></span>
                  <span class="light_gray_txt hidden-xs">|</span>
                  <span class="fs14e current_author"><?php echo trim($author_name); ?></span> 
               </p>
            </header>
            <div class="relative" id="story_card">
               <div class=" current_content serif">
                  <div style="text-align: justify;">
                     <div style="display:inline; float: ;">
                        <?php if (
                           $this->articleObject->articleId != '122020900986' &&
                           $this->articleObject->articleId != '122020901012' &&
                           $this->articleObject->articleId != '122021400179' &&
                           $this->articleObject->articleId != '122021700314' &&
                           $this->articleObject->articleId != '122021700319' &&
                           $this->articleObject->articleId != '122030700037' &&
                           $this->articleObject->articleId != '122030700058' &&
                           $this->articleObject->articleId != '122030800185' &&
                           $this->articleObject->articleId != '122030900171' &&
                           $this->articleObject->articleId != '122022300039' &&
                           $this->articleObject->articleId != '122022100090' &&
                           $this->articleObject->articleId != '122021800423' &&
                           $this->articleObject->articleId != '122021400134' &&
                           $this->articleObject->articleId != '122021400363' &&
                           $this->articleObject->articleId != '122020901013' &&
                           $this->articleObject->articleId != '122030800184' &&
                           $this->articleObject->articleId != '122040400112' &&
                           $this->articleObject->articleId != '122040600095' &&
                           $this->articleObject->articleId != '122040600080' &&
                           $this->articleObject->articleId != '122041300278' &&
                           $this->articleObject->articleId != '122040600249' &&
                           $this->articleObject->articleId != '122042500144' &&
                           $this->articleObject->articleId != '122042600358' &&
                           $this->articleObject->articleId != '122042600241' &&
                           $this->articleObject->articleId != '122050200205' &&
                           $this->articleObject->articleId != '122050200237' &&
                           $this->articleObject->articleId != '122050400334' &&
                           $this->articleObject->articleId != '122050400319' &&
                           $this->articleObject->articleId != '122050400365' &&
                           $this->articleObject->articleId != '122050500172' &&
                           $this->articleObject->articleId != '122050500316' &&
                           $this->articleObject->articleId != '122050500436' &&
                           $this->articleObject->articleId != '122050600271' &&
                           $this->articleObject->articleId != '122032100249'
                           ) { ?>
                        <?php if (!empty($this->articleObject->media_name)): ?>
                        <amp-img src="<?php echo $this->artImg; ?>"  title="<?php echo $this->articleObject->firstImage[0]->media_tags; ?>"  layout="responsive"  alt="<?php echo $this->articleObject->firstImage[0]->media_tags; ?>" height="194" width="290"></amp-img>
                        <?php else: ?>
                        <amp-img src="<?php echo $this->artImg; ?>"  title="News"  layout="responsive"  alt="News" height="194" width="290"></amp-img>
                        <?php endif; ?>
                        <?php } ?>
                     </div>
                     <?php if($this->articleObject->articleId == '122030900171') { ?>
                     Country's largest insurance company, Life Insurance Corporation of India (LIC) has received SEBI’s approval to float its mega public issue, media reports stated on Wednesday. State-owned LIC is set for its mega IPO and has completed all its planned roadshows with investors, said report. <br><br>
                     The insurance company had filed the Draft Red Herring Prospectus (DRHP) for its IPO with the capital markets regulator earlier on February 12 to sell a 5% stake in the firm. <br><br>
                     Although SEBI has given its green light to the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, the government is still in the process to finalize the date of the launch of IPO owing to current geopolitical situation where foreign investors have reduced their appetite for Indian equities. Also, the final call on the timing of the IPO will be taken by the government only, the source said, as per the media report.  <br><br>
                     Originally, the government aimed for the mid-March week to launch the IPO. However, the market turbulence due to ongoing Russia-Ukraine war put the government on dilemma over the launching of IPO as it may get pushed to next fiscal amid high market volatility environment.  <br><br>
                     Also, during a recent interview, Finance Minister Nirmala Sitharaman has stated, “if global considerations warrant that I need to look at it, I wouldn’t mind looking at it again".  <br><br>
                     <?php } else if($this->articleObject->articleId == '122030800184') { ?>
                     With the much awaited  Life Insurance Corporation of India (LIC) IPO likely to be delayed, India is set to miss the revised disinvestment target for FY22, second time in the past eight years. <br><br>
                     The Russia-Ukraine war which has severely impacted the stock markets world over has prompted government to do a rethink with regard to the timing of the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>. Though there hasn’t been any official word on it, but If the IPO fails to hit the market by March 31, the government will stare at a huge shortfall in the disinvestment mop-up. <br><br>
                     The government may not be able to raise an expected over Rs60,000 crore from the IPO of insurance behemoth LIC in 2021-22.  <br><br>
                     Previously in the financial year 2019-20, the Government had failed to achieve the revised CPSE disinvestment target of Rs65,000 crore. The mop-up during the year was only Rs50,304 crore. <br><br>
                     But for the financial year 2019-20, the government has invariably exceeded the Revised Estimates of the disinvestment proceeds. <br><br>
                     In the ongoing financial year 2021-22, the government was all set to go ahead with the share sale of LIC this month and draft papers for the same were also filed with markets regulator Sebi. However, the Russia-Ukraine war has dampened the plans. <br><br>
                     So far, reportedly the government has collected Rs12,434 crore including Rs2,700 crore from Air India sale and Rs3,994 crore from sale of SUUTI stake in Axis Bank. It was banking on <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> to achieve the revised target of Rs78,000 crore. <br><br>
                     While Finance Minister Nirmala Sitharaman had set a target of Rs1.75 lakh crore through disinvestment in the Budget estimates in 2021-22, the target has now been revised to Rs78,000 crore. And for the year 2022-23, she has set a softer target of Rs65,000 crore. <br><br>
                     LIC is yet to decide on the offer price for the listing, but the IPO is poised to be the largest in Indian stock market history and is crucial for the Centre to meet its Rs78,000 crore divestment target for FY22. <br><br>
                     <?php } else if($this->articleObject->articleId == '122022100090') { ?>
                     The largest-ever IPO in the history of the Indian market Life Insurance Corporation (LIC) is all set to kick off for subscriptions on March 11 for anchor investors. For other types of investors, including retail investors, <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> will open in the next few days. Before applying to the IPO, policyholders must link their PAN cards. <br><br>
                     As LIC India has made it clear that those life insurance policyholders who want to apply under the policyholders' category must have their PAN card linked to their policy. <br><br>
                     In case, one's LIC policy is not linked to its PAN card, the insurer has asked the policyholders to do this by February 28th, 2022. <br><br>
                     As per LIC in its latest statement said “A policyholder of our Corporation shall ensure that his / her PAN details are updated in the policy records of our Corporation at the earliest. A policyholder who has not updated his / her PAN details with our Corporation before the expiry of two weeks from the date of the filing of this Draft Red Herring Prospectus with SEBI (i.e., by February 28, 2022) shall not be considered as an Eligible Policyholder.” <br><br>
                     Here are the steps to follow LIC India PAN card link: <br><br>
                     First, go to the official LIC website Select the ‘Online PAN Registration’ option and next click on Proceed option. Enter your e-mail ID which you have used in the registration, PAN number, mobile phone number and policy number. Once you are done with this complete Captcha verification and click on the ‘Get OTP’ button and the last select Submit option. Once done with the above procedure, you will see a message for the success of the PAN linking process. <br><br>
                     <?php } else if($this->articleObject->articleId == '122021700319') { ?>
                     As we know that <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is expected to open for subscription by the end of March 2022, so we bring you all updates about this mega issue. <br><br>
                     Take a quick look at which LIC policyholders are not eligible to apply for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>. <br><br>
                     LIC policyholders having a joint demat account in the name of their spouse and themselves (where they have two separate policies and PAN is linked therein), cannot apply in the offer based on that one joint Demat account. <br><br>
                     The spouse of an annuity policyholder (now deceased) who is currently receiving annuities is not eligible to apply for LIC’s equity shares in the offer. <br><br>
                     A policyholder must have the demat account in his/her name. A policyholder cannot apply from the demat account of his/her spouse or son or relative. <br><br>
                     NRIs cannot apply for the IPO via the Policyholder Reservation Portion, only a person residing in India during the bid or offer period is eligible for applying in the offer. <br><br>
                     A nominee under a policy issued by LIC is not eligible to bid for the equity shares under his/her name. Only eligible policyholder(s) can bid under the Policyholder Reservation Portion. <br><br>
                     All policies other than group policies qualify for bidding in the Policyholder Reservation Portion. <br><br>
                     Only LIC policyholders are eligible to bid under the Policyholder Reservation Portion. However, one can apply as a Retail Individual Bidder (RIB) or Non-Institutional Bidder. <br><br>
                     <?php } else if($this->articleObject->articleId == '122021700314') { ?>
                     LIC has nearly 29 crore policyholders and commands 74.6% market share in terms of a number of individual policies issued in the financial year 2021. <br><br>
                     Of the total shares offered via the IPO, up to 10% would be reserved for LIC policyholders and upto 5%, for LIC employees. Policyholders along with employees will receive a discount on applying for the IPO. However, not all LIC policyholders will be eligible to apply via the Policyholder Reservation Portion. <br><br>
                     If you are a policyholder and wish to participate from this quota, here are a few pointers that you must keep in mind: <br><br>
                     1. Similar to other investors in the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, policyholders need to update their PAN details and maintain a Demat account for subscribing to the issue offer. <br><br>
                     2. Only eligible LIC policyholders can apply for the discounted shared in the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> <br><br>
                     So before participating in IPO you must go through the FAQs in the LIC DRHP. <br><br>
                     <?php } else if($this->articleObject->articleId == '122021400134') { ?>
                     Life Insurance Corporation of India (LIC), the Country's largest life insurer with a market share of 64.1% in terms of premiums, has filed its draft red herring prospectus (DRHP) for an initial public offering (IPO). <br><br>
                     The issue with a face value of Rs10 each per equity share will be a comprehensive offer-for-sale (OFS) of up to 316,249,885 equity shares by the President of India through the Ministry of Finance, Government of India ("Selling shareholders"). <br><br>
                     <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> offer also includes not more than 5% reservation for its eligible employees and not more than 10% for its policyholders. <br><br>
                     LIC was created on September 1, 1956, when 245 private life insurance companies in India were merged and nationalized. Till 2000, it was India's only life insurance company. Based on its size, market relevance, and domestic and global interconnection, IRDAI classified it as a Domestic Systemically Important Insurer ("D-SII") in September 2020. <br><br>
                     As of September 30, 2021 the embedded value of LIC stood at Rs5.40 trillion. <br><br>
                     According to a report by Brand Finance, LIC is the third strongest and tenth most valuable insurance brand around the world. The value of a brand represents the worth of earnings tied to the brand's reputation. <br><br>
                     LIC had an asset under management (AUM) of Rs39.74 trillion as of September 30, 2021, which was more than three times the total AUM of all private life insurers in India, approximately 16.2 times the AUM of the second-largest player in the Indian life insurance industry, and 1.1 times the entire Indian mutual fund industry. <br><br>
                     In terms of market share, LIC had the highest gap by life insurance Gross Written Premiums (GWP) relative to the second-largest life insurer in India as compared to the market leaders in the top seven markets globally in 2020 for the other players and in Fiscal 2021. <br><br>
                     The insurance behemoth had a 66.2% market share in terms of New Business Premium (or NBP), 74.6% in terms of number of individual policies issued, 81.1% in terms of number of group policies issued, and a 55% market share in terms of individual agents as of September 30, 2021. <br><br>
                     The 282.58 million in-force policies under individual business being handled in India as of September 30, 2021, demonstrate the trust in the LIC brand. <br><br>
                     In addition, LIC has a sizable market share in health insurance and annuities. In terms of GWP, it had a market share of 46.9% and 53.6% in health insurance supplied by life insurance carriers in India for Fiscal 2020 and Fiscal 2021, respectively. <br><br>
                     With 32 Individual and 10 group products, LIC caters to a wide range of market segments. Individual products include microinsurance and items specialized to certain market niches, such as women's and children's products. <br><br>
                     In India, LIC issued approximately 21 million individual policies in Fiscal 2021, accounting for nearly 75% of new individual policy issuances. The industry's second-largest player, with a 5.9% market share in Fiscal 2021, issued 1.66 million individual policies. <br><br>
                     As of September 30, 2021, LIC had 2,048 branch offices and 1,554 satellite offices across India, covering 91% of the country's districts. In addition to its life insurance business in India, it has branches in Fiji, Mauritius, and India. <br><br>
                     The company has subsidiaries in Bahrain (with operations in Qatar, Kuwait, Oman, and the United Arab Emirates), Bangladesh, Nepal, Singapore, and Sri Lanka in the life insurance industry. <br><br>
                     LIC's total income increased by 9.00% to Rs703,732.43 crore in fiscal 2021, compared to Rs645,640.91 crore in fiscal 2020, owing to higher net earned premiums and investment income, while net profits increased by 9.73% from Rs2710.48 crore in fiscal 2020 to Rs2974.14 crore in fiscal 2021. Total income for the six months ended September 2021 was Rs336,972.92 crore, with profit after tax of Rs1,504.01 crore. <br><br>
                     The Indian life insurance industry generated a total premium value of Rs6.2 trillion in fiscal 2021, up from Rs5.7 trillion in fiscal 2020. The industry's total premium climbed at a 11% compound annual growth rate (CAGR) in the five years leading up to Fiscal 2021. CRISIL, a credit rating agency, forecasts a 14-15% CAGR growth over the following five years, taking the total to Rs12.4 trillion by Fiscal 2026. <br><br>
                     <?php } else if($this->articleObject->articleId == '122032100249') { ?>
                     The Securities and Exchange Board of India (SEBI) has approved LIC's updated draft red herring prospectus (DRHP) for the Initial Public Offering (IPO), as per media reports.<br><br>
                     As experts say that since the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is not expected in this fiscal year, the DRHP will need to be updated again.<br><br>
                     Life Insurance Corporation (LIC) had filed an updated DRHP for the IPO with the Securities and Exchange Board of India (SEBI), a government official told CNBC-TV18. The updated DRHP for the IPO is based on LIC's December financials, the official said.<br><br>
                     In March, LIC received SEBI's go-ahead to raise funds through an initial share sale and the IPO launch was originally planned for March, but the Russia-Ukraine crisis derailed the plans as stock markets have been highly volatile.<br><br>
                     It has been reported that the LIC is likely to issue its IPO in April.<br><br>
                     LIC had filed its IPO papers with SEBI in February 2022.&nbsp; As per the DRHP for the IPO in February, LIC's offer is entirely an offer for sale (OFS) of 316,249,885 shares by the shareholder, President of India, acting through the Ministry of Finance, Government of India. This means the government will sell a 5 per cent stake via the IPO.
                     <?php } else if($this->articleObject->articleId == '122040400112') { ?>
                     According to the media reports, India's disinvestment target came at Rs1.75 trillion for FY22, with a huge margin of collecting only Rs13,531 crore. This was the being lowest mop-up after the disinvestment programme was revived in FY10.
                     <br />
                     <br />
                     According to the current plan, the Centre’s disinvestment revenues could exceed the annual disinvestment target of Rs65,000 crore for the current fiscal in Q1 itself, thanks to the proposed <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, the media reports added.
                     <br />
                     <br />
                     With this, DIPAM will have sufficient time to pursue other big-ticket transactions such as the strategic disinvestment of IDBI Bank and Container Corporation of India in the remainder of the current financial year. DIPAM has started the new financial year by collecting about Rs3,000 crore from a 1.5% stake sale in oil explorer Oil and Natural Gas Corporation (ONGC) via an offer for sale held on March 30-31. Also, another Rs600 crore is expected from the buyback of shares by Gail India in this month, the media reports added.
                     <br />
                     <br />
                     Further, a 5% stake sale in LIC, which could have carried Rs65,000-70,000 crore, was enough to achieve the revised (RE) disinvestment receipt target of Rs78,000 crore (down 56% from the budget estimate of Rs1.75 trillion) for FY22. Without the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, the government’s disinvestment receipts were just 8% of the budget estimate and 17% of the RE, the media reports added.
                     <?php } else if($this->articleObject->articleId == '122041300278') { ?>
                     According to the media reports, the Life Insurance Corporation (LIC) of India's board will likely meet over the weekend to finalise its results for FY22. The company will file a revised public offer document by mid-next week.
                     <br />
                     <br />
                     Roadshows for the initial public offer (IPO) would start soon after and the issue is expected to open by the end of the month, the media reports added.
                     <br /> <br />
                     <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> was initially set to launch in late March 2022, prior to the financial year 2021-2022 ending, however, it had to be deferred to FY23 due to high volatility in markets led by the aggravating Russia-Ukraine crisis.
                     <br /> <br />
                     Further, the media reports also stated that the Indian Government is also planning to reduce the Life Insurance Corporation (LIC) public offer valuation by 30 per cent to make the issue more attractive despite concerns about soaring inflation, imminent interest rate hikes, and uncertainty surrounding the Russian invasion of Ukraine that has rattled markets across the world.
                     <br /> <br />
                     The government may also file an updated draft red herring prospectus (UDRHP) for the IPO with the Securities and Exchange Board of India (Sebi), the media reports added.
                     <?php } else if($this->articleObject->articleId == '122042500144') { ?>
                     According to media reports, the government is likely to cut the initial public offering (IPO) of Life Insurance Corporation (LIC) to 3.5 per cent at Rs21,000 crore amidst the escalating Russia-Ukraine war.
                     <br /> <br />
                     The issue size, which is likely to take place in the first week of May 2022, will be valued at Rs6,000 crore.
                     <br /> <br />
                     The government was earlier planning to sell its 5 per cent stake in LIC to raise Rs63,000 crore. Earlier the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> was supposed to be taken place on March 11, to meet the disinvestment target of Rs78,000 crore for FY2022, however, the Russian invasion of Ukraine derailed the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>.
                     <br /> <br />
                     Further, the report added that now the stake sale could be a little over 5 per cent. In the last week, Business Standard reported that the government’s stake sale could be as much as 7 per cent. <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is likely to place within the next two weeks at a valuation of Rs6 lakh crore.
                     <br /> <br />
                     Meanwhile, LIC had filed the DRHP with Sebi in February, stating that the government would sell 31.6 crore shares in a 5 per cent stake sale in the state-run insurer. The government’s offer for sale including the draft herring prospectus expires on May 12.
                     <?php } else if($this->articleObject->articleId == '122042600358') { ?>
                     According to the various media sources, the long-awaited public issue offer, Life Insurance Corporation's (LIC) will be in the price band of Rs902-949 per share. <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> likely to open for subscription from May 4, 2022. The issue is expected to close on May 9 and with this the anchor book for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is likely open on May 2.
                     <br /> <br />
                     Policyholders will likely get an Rs60 discount and an Rs45 discount for retail investors and employees. At the upper end of the price band, LIC is looking to raise close to Rs21,000 crore, the media reports added.
                     <br /> <br />
                     Meanwhile, the company is set to officially announce the same in a press conference on Wednesday in Mumbai.
                     <br /> <br />
                     Click here to know more about <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> with the latest news and FAQs.
                     <?php } else if($this->articleObject->articleId == '122042600241') { ?>
                     The much-awaited initial public offering (IPO) of the Life Insurance Corporation of India is likely to open for subscription from May 4, 2022. The issue is expected to close on May 9 and with this the anchor book for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is likely open on May 2.
                     <br /> <br />
                     LIC has cut the size of IPO from 5 per cent to 3.5 per cent due to the market condition. A proposal to reduce the size of LIC's IPO to 3.5 per cent from 5 per cent proposed in its draft red herring prospectus (DRHP) was tabled and approved at a board meeting held on Saturday.
                     <br /> <br />
                     The revised DRHP was submitted before the market regulator last week. The government, which wholly owns the insurance behemoth, plans to raise an amount of Rs21,000 crore by selling around 22 crore shares which is equivalent to a 3.5 percent stake.
                     <br /> <br />
                     As per the LIC Act, the government can reserve up to 10 per cent for the policyholders.
                     <br /> <br />
                     However, the government had initially wanted to list LIC in the last financial year that ended March 31 but had to delay the sale after the Russia-Ukraine war triggered a market rout.
                     <br /> <br />
                     <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> has received Rs13,000 crore worth of investment commitments from anchor investors, more than twice the value of shares offered to such investors.
                     <?php } else if($this->articleObject->articleId == '122050200237') { ?>
                     India’s largest public issue <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is all set to launch on May 4 and the issue will close on May 9. The price band for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> has been fixed at Rs902-949 per equity share. It will have an Rs60 per equity share discount for policyholders, and an Rs45 discount for employees and retail investors.
                     <br /> <br />
                     Retail investors will have a quota of 35 per cent of the IPO size, while 10 per cent of the IPO shares will be reserved for policyholders. Qualified institutional buyers (QIB) will have access to 50 per cent of the shares. The remaining five per cent is reserved for non-institutional buyers.
                     <br /> <br />
                     The <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is expected to garner up to Rs21,000 crore and its valuation stands at Rs6 lakh crore, which is 1.11 times the embedded value of around Rs5.40 lakh crore. This IPO is purely an offer for sale (OFS) where the government will carry its strategic sale of 3.5% in the insurer. The total number of shares offered in the IPO is 22.10 crore equity shares.
                     <br /> <br />
                     A bidder can invest in a minimum of one lot comprising 15 shares, and in multiples of 15 thereafter with a maximum cap of 14 lots.
                     <br /> <br />
                     Also, the government has proposed to keep 10% reserved for policyholders. However, policyholders who have their updated PAN link with their LIC policies and hold a Demat account are eligible for subscribing to the IPO. Apart from the government's strategic sale plan, the object of the IPO is also to achieve the benefits of listing the Equity Shares on the stock exchanges.
                     <br /> <br />
                     Post the IPO, the government's shareholding in LIC will be 96.5% from the current 100%.
                     <br /> <br />
                     Further, the 18 investment banks are competing to manage the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> and the last date to submit bids was Friday.
                     <br /> <br />
                     Domestic banks that have bid to manage the IPO include Kotak Mahindra Capital, Axis Capital, ICICI Securities, JM Financial, DAM Capital, Edelweiss, HDFC Bank, Yes Securities, SBI Capital and IIFL, while foreign investment banks in the running include Citi, Bank of America, HSBC, Goldman Sachs, JPMorgan, BNP Paribas, Nomura and CLSA, the people cited above said on condition of anonymity, the media reports added.
                     <br /> <br />
                     This government-owned insurer surely holds quite a significant leadership in the insurance industry. With more than six decades of experience, LIC is the largest insurer in India with a market share of 61.6% in terms of premium and a share of 61.4% e in terms of New Business Premium. Not just that, LIC holds dominance with 71.8% market share in terms of the number of individual policies issued, and an 88.8% market share in terms of the number of group policies issued for the nine months ended December 31, 2021.
                     <?php } else if($this->articleObject->articleId == '122050200205') { ?>
                     <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is all set to hit the market on May 4, 2022, as investors have started making commitments for the initial public offer. The IPO subscription window for anchor investors will be opened on May 2 and will close on May 9.
                     <br /> <br />
                     According to the media reports, the government has asked public and private sector banks to raise per transaction limit for UPI payments to Rs2 lakh to ensure applications by retail investors for Life Insurance Corporation of India’s (LIC’s) initial public offering (IPO) through UPI are successfully processed.
                     <br /> <br />
                     The present limit for UPI is Rs2 lakh, but different banks have different per transaction limits. About Rs1 lakh can be spent in a day through UPI, but exception is made for IPO and insurance payments, among others. So, Retail investors can invest up to Rs2 lakh in an IPO.
                     <br /> <br />
                     Further, DIPAM created to check the technological readiness of back-end systems for IPOs, had found that processing of many applications failed if UPI was selected as a mode of payment by retail investors due to per transaction caps imposed by banks, the media statement added.
                     <br /> <br />
                     Life Insurance Corporation (LIC) estimates up to 70 lakh retail applications, which is more than five times the average retail applications received for the Indian primary equity market issuances in the last financial year, the ET report added. It said half of the retail subscriptions are expected to come from the country’s western region, including Maharashtra, Gujarat and Rajasthan.
                     <br /> <br />
                     Norway’s Norges Bank Investment Management, Singapore’s GIC Pte, and Abu Dhabi Investment Authority have also committed to becoming anchor investors in the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, according to a Bloomberg report.
                     <br /> <br />
                     The price band for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> has been fixed at Rs902-Rs 949 per equity share. It will have a Rs60 per equity share discount for policyholders, and a Rs45 discount for employees and retail investors. The share allotment is likely to be done on May 12 and its listing will take place on May 17.
                     <?php } else if($this->articleObject->articleId == '122041800022') { ?>
                     According to the media reports, the government on Sunday has amended rules of the Foreign Exchange Management Act (FEMA), paving the way for up to 20 per cent foreign direct investment in the insurance behemoth LIC.
                     <br /> <br />
                     Further, the government is planning to dilute its stake in LIC through the Initial Public Offering (IPO).
                     <br /> <br />
                     LIC, in February, had filed the Draft Red Herring Prospectus (DRHP) before the markets regulator Sebi for the IPO.
                     <br /> <br />
                     Following the Cabinet's approval, the Department for Promotion of Industry and Internal Trade (DPIIT) on March 14 amended the Foreign Direct Investment (FDI) policy to facilitate overseas investment in LIC ahead of the mega public offer.
                     <br /> <br />
                     "These rules may be called the Foreign Exchange Management (Non-debt Instruments) (Amendment) Rules, 2022," as per a gazette notification issued recently.
                     <br /> <br />
                     Since the foreign inflows' ceiling for public sector banks is 20 per cent under the government approval route as per the present FDI policy, it has been decided to allow foreign investment of up to 20 per cent in LIC and other such corporate bodies.
                     <br /> <br />
                     According to the draft paper, LIC's embedded value, a measure of the consolidated shareholders' value in an insurance company, has been pegged at about Rs5.4 lakh crore as of September 30, 2021, by international actuarial firm Milliman Advisors.
                     <br><br>
                     While the government may consider a little more than the 5 per cent stake sale at the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>, it is not likely to reduce its stake significantly in LIC for at least 2 years following the insurer listing, because such a move could affect returns for investors participating in the mega IPO.
                     <?php } else if($this->articleObject->articleId == '122050400334') { ?>
                     LIC’s long-awaited initial public offering is open for subscription till May 9, 2022. The public issue opened to anchor investors on May 2.
                     <br /> <br />
                     <b>Below are the key points you need to know about <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a>:</b>
                     <br /> <br />
                     The total value of <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is set at Rs21,000 crore which makes it India's biggest public issue to date Around 15.81 lakh shares have been reserved for employees and around 2.21 crore shares for policyholders One IPO lot comprises 15 LIC shares and an applicant can apply for a minimum of one and a maximum of 14 lots The minimum amount required to apply for the <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is Rs14,235 The government announced a Rs60 discount to the policyholders and Rs45 discount to LIC employees applying for the  issue LIC policy holders' reservation portion will be 10 per cent of the offer size, while employees will have five per cent of post-offer equity share capital reserved The <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> has received Rs13,000 crore worth of investment commitments from anchor investors – over twice the value of shares offered to such investors, as per news reports The LIC shares are likely to be listed on BSE and NSE on May 17 LIC, India’s largest insurance company had market share of ~37%/74% in FY22 in retail APE/group NBP segments, respectively.  The government, which owns the insurance giant, plans to sell a 3.5 per cent stake instead of the five per cent planned earlier The IPO will contribute significantly to the government's disinvestment proceeds this fiscal. 
                     <?php } else if($this->articleObject->articleId == '122050400319') { ?>
                     The biggest initial public offering (IPO) in the history of Indian markets, <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> is subscribed 48 per cent on the first day of bidding.
                     <br /> <br />
                     The LIC policyholders lead the initial bout of buying in the insurer's IPO as they have subscribed 1.61 times the portion reserved for them.
                     <br /> <br />
                     The employee reserved portion has been subscribed 84 per cent, while the retail investors portion has been subscribed 51 per cent.
                     <br /> <br />
                     Non Institutional investors have subscribed 12 per cent of their portion while qualified institutional buyers bought 3 per cent of allotted quota of 3.95 crore shares, till now.
                     <br /> <br />
                     The initial public offering of Life Insurance Corporation of India (LIC) will open on Wednesday, 4 May 2022 and will close on Monday, 9 May 2022.
                     <br /> <br />
                     Life Insurance Corporation of India (LIC) on Monday raised Rs5,627.27 crore from anchor investors ahead of its mega initial public offering (IPO).
                     <br /> <br />
                     The state-owned insurer allotted about 5.93 crore shares to 123 investors at Rs949 per share.
                     <br><br>
                     The Singapore governments sovereign wealth fund (GIC) subscribed to shares worth over Rs414 crore through three funds. BNP Investments subscribed to shares worth about Rs450 crore.
                     <br><br>
                     Out of the total allocation to the anchor investors, 4,21,73,610 equity shares (71% of the total allocation) were allotted to 15 domestic mutual funds through 99 schemes.
                     <br><br>
                     SBI Mutual Fund subscribed to shares worth over Rs1,000 crore through four different schemes.
                     <br><br>
                     The Government of India currently holds a 100% stake in LIC. It is offering 22.13 crore shares, or 3.5% stake, through the initial offer.
                     <br><br>
                     The price band has been set at Rs902 to Rs949. The company will offer a discount of Rs60 per share to LIC policyholders. For retail investors and eligible employees, the discount will be Rs45 per share.
                     <br><br>
                     The firm has reserved around 15.81 lakh shares for eligible employees while 2.21 crore shares are reserved for policyholders. About 6.91 crore shares are reserved for retail investors category
                     <br><br>
                     An investor can bid for a minimum of 15 equity shares and in multiples thereof.
                     <?php } else if($this->articleObject->articleId == '122050500316') { ?>
                     The initial public offering of country's largest life insurance company Life Insurance Corporation of India has subscribed 83 per cent, receiving bids for 13.57 crore equity shares against offer size of 16.2 crore equity shares.
                     <br /> <br />
                     The portion set aside for policyholders portion has been subscribed 2.53 times, staff 1.74 times, and retail investors subscribed 0.77 times, while QIBs bid for 0.34 times shares of their allotted quota and NII lapped up 0.33 times of their portion.
                     <br /> <br />
                     LIC is the biggest IPO in terms of issue size in Indian market history, the total issue size of the IPO is Rs20,557 crores. <a href="https://www.indiainfoline.com/lic-ipo/">LIC IPO</a> will remain open till 9th May 2022.
                     <?php } else { ?>
                     <?php if ($this->isPaidContent === FALSE): ?>
                     <?php
                        $this->articleObject->articleContent = str_replace('clear="all"', '', $this->articleObject->articleContent);
                        $this->articleObject->articleContent = str_replace('xml:', '', $this->articleObject->articleContent);
                        $this->articleObject->articleContent = str_replace('border="2"', 'border="1"', $this->articleObject->articleContent);
                        $this->articleObject->articleContent = str_replace('border="3"', 'border="1"', $this->articleObject->articleContent);
                        $this->articleObject->articleContent = str_replace('border="4"', 'border="1"', $this->articleObject->articleContent);
                        echo $this->articleObject->articleContent;
                        ?>
                     <?php else: ?>
                     <?php echo $this->wordsSliceByLength(strip_tags($this->articleObject->articleContent), 13); ?>
                     <?php
                        endif;
                        ?>
                     <?php } ?>
                  </div>
               </div>
               <div id="lead_form_div"></div>
               <div class="article-lead-form">
                  <section class="card primary_contnent_bg company-history-container amp-lead-form">
                     <div class="relative leadformwrap" id="open_account_form">
                        <div class="leadformheader"> <img src="https://www.indiainfoline.com/new_hp/include/_mod/site/images/2logo.png" alt=""></div>
                        <h2>
                           OPEN A DEMAT ACCOUNT  <span class="s-text">&amp; Get<br></span> <span class="bText">FREE</span>  <span class="s-text">Benefits Upto</span>
                           <span class="ptext">
                           <b style="color:white">₹</b>
                           10,000
                           </span>
                        </h2>
                        <div class="clearfix"></div>
                        <div class="">
                           <form class="form" method="post" action-xhr="https://www.indiainfoline.com/core/request-handler/zoho-lead-test" target="_top" custom-validation-reporting="show-all-on-submit">
                              <div class="hidden">
                                 <input type="text" id="utm_source" name="utm_source" value="article-page">
                                 <input type="text" id="utm_medium" name="utm_medium" value="Website-News">
                                 <input type="text" id="utm_campaign" name="utm_campaign" value="On page form">
                                 <input type="text" id="utm_term" name="utm_term" value="">
                                 <input type="text" id="utm_content" name="utm_content" value="">
                                 <input type="text" id="deviceName" name="deviceName" value="">
                                 <input type="text" id="pageName" name="pageName" value="News Page">
                                 <input type="text" name="pixel" id="pixel" value="" />
                                 <input type="text" maxlength=100 id="page_id" name="page_id" value="FREETA-BUDGET" />
                                 <input type="text" name="lead_campaign" id="lead_campaign" value="Article AMP Section" />
                                 <input type="text" name="source" id="source" value="Website" />
                                 <input type="text" maxlength="100" id="ran_value" name="ran_value" value="1648373333" />
                                 <input type="text" maxlength="100" id="sess_value" name="sess_value" value="51932907ddaeced9f73fc0c002ca9da6" />
                                 <input type="text" id="article_Id" name="article_Id" value="122032400206" />
                                 <input type="text" id="catid" name="catid" value="1030101000" /> 
                              </div>
                              <div class="ampstart-input relative m0 p0 mb3">
                                 <div class="lead-form">
                                    <label class="has-label">
                                    <input type="tel" id="show-all-on-submit-telephone" class="dmobileicon" placeholder="Enter Mobile No" name="mobile1" required maxlength="10" pattern="[6-9]{1}[0-9]{9}" /> </label> <span class="validation-error" visible-when-invalid="valueMissing" validation-for="show-all-on-submit-telephone"></span> <span class="validation-error" visible-when-invalid="patternMismatch" validation-for="show-all-on-submit-telephone">Please enter valid mobile number in given format (e.g 9999999999)</span> 
                                 </div>
                                 <div class="lead-form">
                                    <label class="has-label">
                                    <input type="text" id="show-all-on-submit" class="demailicon" name="email" placeholder="Enter Email Id" required pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" /> </label> <span class="validation-error" visible-when-invalid="valueMissing" validation-for="show-all-on-submit"></span> <span class="validation-error" visible-when-invalid="patternMismatch" validation-for="show-all-on-submit">Please enter valid email id. </span> 
                                 </div>
                              </div>
                              <input type="submit" name="submitlogin" value="Open Free Account" class="ampstart-btn submit-btn caps mt15 btn btn-blue">
                              <div submit-success>
                                 <template type="amp-mustache"> {{msg}} </template>
                              </div>
                              <div submit-error>
                                 <template type="amp-mustache"> {{msg}} </template>
                              </div>
                           </form>
                           <div id="footer-txt">
                              <p class="demattext">By continuing, I accept the <a href="">Terms &amp; Conditions</a> and agree to receive updates on Whatsapp</p>
                              <div class="denmatlist">
                                 <ul>
                                    <li>
                                       <h3><sub>₹</sub>0</h3>
                                       <p class="text">Per Order for ETF &amp; Mutual Funds Brokerage</p>
                                    </li>
                                    <li>
                                       <h3><sub>₹</sub>20</h3>
                                       <p class="text">Per Order for Delivery, Intraday, F&amp;O, Currency &amp; Commodity</p>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div class="clearfix"></div>
               <div class="ptb15 visible-lg visible-md visible-sm hidden-xs"><span class="fs15e"> Related Tags:</span>
                  <span class="story_tags">
                  <?php
                     $relatedTagStr = explode(",", $this->relatedTags);
                     foreach ($relatedTagStr as $result) {
                         ?>
                  <a href="/search/news/<?php echo preg_replace('/^-+|-+$/', '', strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $result))); ?>" class='btn-link blue_text btn plr5'>#<?php echo preg_replace('/^-+|-+$/', '', preg_replace('/[^a-zA-Z0-9]+/', ' ', $result)); ?></a>
                  <?php } ?>
                  </span>
               </div>
               <?php
                  $social_head = urlencode($this->articleObject->heading1);
                  $social_desc = urlencode($this->articleObject->description);
                  ?>
               <div class="row ">
                  <div class="col-xs-12 hidden-lg hidden-md hidden-sm visible-xs ptb10  gray_bdr_t  mt15 ">
                     <p class="txt_center_m fs24e">
                        <amp-social-share type="facebook" class="plr10"><a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>&[title]=<?php echo $social_head; ?>&display=popup' class=" btn-link plr5" title="Share this on Facebook"></a></amp-social-share>
                        <amp-social-share type="twitter" class="plr10"><a target="_blank" href='https://twitter.com/share?url=<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>&text=<?php echo $social_head; ?>' class=" btn-link plr5"  title="Share this on Twitter"></a></amp-social-share>
                        <amp-social-share type="whatsapp"  class="plr10"><a target="_blank" href='whatsapp://send?text=<?php echo urlencode($this->siteUrl . $this->articleObject->articleUrl); ?>' data-action="share/whatsapp/share"></a></amp-social-share>
                        <amp-social-share type="linkedin"  class="plr10">
                           <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $this->siteUrl . $this->articleObject->articleUrl; ?>&amp;title=<?php echo $social_head; ?>&amp;source=" class="btn btn-link btn-block ripple-effect"></a>
                        </amp-social-share>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <section class="col-xs-12 card primary_contnent_bg">
            <div class="row relative">
               <header class="col-lg-12 ">
                  <h2 class="txt_normal fs16e"><a class="plr5 btn-blue btn_sm" title="Top News">Top News</a></h2>
               </header>
               <div class="clearfix"></div>
               <ul class="common_list row">
                  <?php
                     $topNewsData = $this->topNewsObject[data][newsArticle];
                     foreach ($topNewsData as $result) {
                         ?>
                  <li>
                     <p><a href="<?php echo $result['newsUrl']; ?>" class="blue_text "><?php echo $result['title']; ?></a></p>
                  </li>
                  <?php } ?>
               </ul>
            </div>
         </section>
      </div>
   </div>
   <footer class="footer">
      <amp-accordion disable-session-states>
         <section>
            <h4 class="footer-accordion fs16e ptb15 bdr_all dark_gray_bg">
               <span class="show-more">ATTENTION INVESTORS: <i class="pull-right fs14e fa-plus"></i></span>
               <span class="show-less">ATTENTION INVESTORS: <i class="pull-right fs14e fa-minus negative"></i></span>
            </h4>
            <div class="footer-acc-content ">
               <p class="mt10 plr15 fs14"> "Prevent Unauthorized Transactions in your demat / trading account Update your Mobile Number/ email Id with your stock broker / Depository Participant. Receive information of your transactions directly from Exchanges on your mobile / email at the end of day and alerts on your registered mobile for all debits and other important transactions in your demat account directly from NSDL/ CDSL on the same day." - Issued in the interest of investors." | "KYC is one time exercise while dealing in securities markets - once KYC is done through a SEBI registered intermediary (broker, DP, Mutual Fund etc.), you need not undergo the same process again when you approach another intermediary." | "No need to issue cheques by investors while subscribing to IPO. Just write the bank account number and sign in the application form to authorise your bank to make payment in case of allotment. No worries for refund as the money remains in investor's account." </p>
               <p class="mt10 plr15 fs14"> www.indiainfoline.com is part of the IIFL Group, a leading financial services player and a diversified NBFC. The site provides comprehensive and real time information on Indian corporates, sectors, financial markets and economy. On the site we feature industry and political leaders, entrepreneurs, and trend setters. The research, personal finance and market tutorial sections are widely followed by students, academia, corporates and investors among others. </p>
            </div>
         </section>
      </amp-accordion>
      <p class="fs14e mt20 plr15" role="contentinfo"> Copyright Â© 2018 IIFL Securities Ltd. All rights Reserved. </p>
      <p class="fs14e mt10 plr15 mb15"> Stock Broker SEBI Regn. No: INZ000164132, PMS SEBI Regn. No: INP000002213, IA SEBI Regn. No: INA000000623, SEBI RA Regn. No: INH000000248 </p>
   </footer>
   <button class="btn btn-blue lead-form-btn"><a href="#open_account_form" target="_blank">OPEN DEMAT ACCOUNT</a></button>
   <div class=" p10 txt-center"><a href="">View Full Site </a></div>
   <amp-sidebar id="sidebar-left" layout="nodisplay" side="left" class="side_bar">
      <a href="" class="menu-closebtn" on="tap:sidebar-left.close">x</a>
      <div class="for-mobile-top-option desk-hide">
         <ul>
            <li> <a href="https://ttweb.indiainfoline.com/Trade/Login.aspx" target="_blank" class="ripple-effect">Login to Trade</a> </li>
            <li> <a href="/client/dp-holding/login/" target="_blank" class="ripple-effect">Login to DP</a> </li>
            <li> <a href="https://wecarekarvy.indiainfoline.com/" target="_blank" class="ripple-effect">Karvy Customer</a> </li>
            <li>
               <div class="otherGroup">
                  <h5>OTHER GROUP COMPANIES</h5>
                  <ul>
                     <li>
                        <a href="https://www.iifl.com/?_ga=2.25483965.1872960210.1638182741-131251111.1637559469"> <img src="https://www.indiainfoline.com/new_hp/include/_mod/site/img/Header-Image/brand-right-logo1.svg" alt="" width="66" height="30"> </a>
                     </li>
                     <li>
                        <a href="https://www.iiflwealth.com/"> <img src="https://www.indiainfoline.com/new_hp/include/_mod/site/img/Header-Image/brand-right-logo2.svg" alt="" width="66" height="30"> </a>
                     </li>
                     <li>
                        <a href="https://www.iiflhomeloans.com/"> <img src="https://www.indiainfoline.com/new_hp/include/_mod/site/img/Header-Image/brand-right-logo3.svg" alt="" width="74" height="30"> </a>
                     </li>
                  </ul>
               </div>
            </li>
            <li> <a href="/" class="ripple-effect ripple">Home</a> </li>
            <li class="open-demat-btn-menu"> <a href="/open-demat-account?utm_source=website&amp;utm_campaign=CTA_MenuBar_Mobile" target="_blank">Open Demat Account</a> </li>
         </ul>
      </div>
      <amp-accordion expand-single-section animate>
         <section class="has_sublink">
            <h2 class="accordion-header">IPOs </h2>
            <div class="accordion-content">
               <ul>
                  <li><a href="/lic-ipo">LIC IPO</a></li>
                  <li><a href="/nse-ipo">NSE IPO</a></li>
                  <li><a href="/delhivery-ipo">Delhivery IPO</a></li>
                  <li><a href="/pharmeasy-ipo">Pharmeasy IPO</a></li>
                  <li><a href="/boat-ipo">Boat IPO</a></li>
                  <li><a href="/snapdeal-ipo">Snapdeal IPO</a></li>
                  <li><a href="/oyo-ipo">OYO IPO</a></li>
                  <li><a href="/droom-ipo">Droom IPO</a></li>
                  <li><a href="/fivestar-ipo">Five star IPO</a></li>
               </ul>
            </div>
         </section>
         <section>
            <h2 class="accordion-header"><a href="/webinars?utm_source=website&amp;utm_medium=Homepage&amp;utm_campaign=CTA_Homepage_Webinar_Mobile" target="_blank">WEBINARS</a></h2>
            <p class="hidden"></p>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">Market</h2>
            <div class="accordion-content">
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">Equities </h3>
                     <div class="accordion-content">
                        <ul class="">
                           <li><a href="/markets/market-commentary/">Market Commentary</a></li>
                           <li><a href="/markets/nse-bse/gainers-losers/">Trending</a></li>
                           <li><a href="/markets/indices">Indices</a></li>
                           <li><a href="/markets/sector-overview/">Sector Summary</a></li>
                           <li><a href="/markets/global-indices/major-indices/">Global Markets</a></li>
                           <li><a href="/markets/sectoral-news-letter/">Sectoral Newsletter</a></li>
                           <li><a href="/markets/fii-dii/equity-debt">FII &amp; DII Activity</a></li>
                           <li><a href="/markets/depository-receipt/gdr-adr-idr">GDR/ADR/IDR</a></li>
                           <li><a href="/markets/bulk-and-block">Bulk &amp; Block Deals</a></li>
                           <li><a href="/markets/corporate-action">Corporate Actions</a></li>
                           <li><a href="/markets/hot-stocks">Hot Stocks</a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
               <p><a href="/markets/marketmap/">Market Map</a></p>
               <p><a href="/markets/derivatives/">Derivatives</a></p>
               <p><a href="/markets/commodity/">Commodity</a></p>
               <p><a href="/markets/ipo">IPO</a></p>
               <p><a href="/live-market/company">Companies</a></p>
               <p><a href="/nse">NSE</a></p>
               <p><a href="/bse">BSE</a></p>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">News </h2>
            <div class="accordion-content">
               <ul>
                  <li><a href="/markets/news">Overview</a></li>
                  <li><a href="/markets/news/top-news">Top</a></li>
                  <li><a href="/markets/news/business-news">Business</a></li>
                  <li><a href="/markets/news/corporate-news">Corporate</a></li>
                  <li><a href="/markets/news/marketnews/indian-equities">Equity</a></li>
                  <li><a href="/markets/news/marketnews/commodity">Commodity</a></li>
                  <li><a href="/markets/news/marketnews/currency">Currency</a></li>
                  <li><a href="/markets/news/personalfinance/mutual-funds">Mutual Funds</a></li>
                  <li><a href="/markets/news/personalfinance/insurance">Insurance</a></li>
                  <li><a href="/markets/news/ipo">IPO</a></li>
                  <li><a href="/markets/news/economy">Economy</a></li>
                  <li><a href="/markets/news/marketnews/global">Global News</a></li>
                  <li><a href="/markets/news/othernews/mergers-acquisitions">M&amp;A Deals</a></li>
                  <li><a href="/markets/news/othernews/gold">Gold</a></li>
                  <li><a href="/BWNewsWire/">Business Wire</a></li>
                  <li><a href="/markets/news/prnewswire">PRNewsWire</a></li>
                  <li><a href="/news/startups">Start-Ups</a></li>
               </ul>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">RESEARCH </h2>
            <div class="accordion-content">
               <ul>
                  <li><a href="/stock-ideas" class="top_navigation" id="stock_ideas">Stock Ideas</a></li>
                  <li><a href="/market-research-reports" class="top_navigation" id="research_report">Research Report</a></li>
                  <li><a href="https://smallcases.indiainfoline.com/discover/all" class="top_navigation" id="smallcase">SmallCase</a></li>
                  <li><a href="https://investwithai.indiainfoline.com/iifl_offer" target="_blank" class="ripple-effect top_navigation" id="invest_AI">Invest with AI </a></li>
               </ul>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">DEMAT </h2>
            <div class="accordion-content">
               <ul>
                  <li><a href="/demat/why-iifl" class="top_navigation" id="d_overview">Overview  </a></li>
                  <li><a href="/demat/investment-products" class="top_navigation" id="invest_product">Investment Products</a></li>
                  <li><a href="/demat/online-trading-platforms" class="top_navigation" id="trading_platform">Trading Platforms </a></li>
                  <li><a href="/demat/share-market-research-and-ideas" class="top_navigation" id="d_research">Research</a></li>
                  <li><a href="/demat/customer-support" class="top_navigation" id="cust_support">Customer Support</a></li>
                  <li><a href="/nri-services" class="top_navigation" id="nri">NRI </a></li>
                  <li><a href="https://ttweb.indiainfoline.com/Trade/FAQs/Faqs.aspx" class="top_navigation" id="faqs">FAQs </a></li>
                  <li><a href="https://gocharting.indiainfoline.com/" class="top_navigation" id="faqs">Charting &amp; Trading<sup>NEW</sup></a></li>
                  <li><a href="https://api.iiflsecurities.com/" class="top_navigation" id="faqs">Trading APIs</a></li>
               </ul>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">BECOME A BUSINESS PARTNER </h2>
            <div class="accordion-content">
               <ul>
                  <li class="mobileList">
                     <a href="https://www.indiainfoline.com/business-partners/" class="ripple has-dropdown" id="mobequ">IIFL Partner Program</a>
                     <ul class="secondLevelMobileView">
                        <li><a href="/business-partners/" class="top_navigation" id="iifl-bus-partner">IIFL Business Partners</a></li>
                        <li><a href="/business-partners/sub-broker-business-model.html" class="top_navigation" id="sub-broker-bus-mod">Sub-Broker Business Models</a></li>
                        <li><a href="/business-partners/overview.html" class="top_navigation" id="why-become-partner-iifl">Why Become a Partner with IIFL?</a></li>
                        <li><a href="/business-partners/aaa-advisor-anytime-anywhere.html" class="top_navigation" id="independent-financial-adv">Independent Financial Advisor</a></li>
                        <li><a href="https://www.indiainfoline.com/business-partners/aaa-advisor-anytime-anywhere" class="top_navigation" id="web-adv-sol">Web Advisory Solutions</a></li>
                        <li class="orange_bg"><a href="https://www.indiainfoline.com/business-partners/become-a-partner.html" class="top_navigation" id="become-a-sub-broker">Become A Sub-broker</a></li>
                     </ul>
                  </li>
                  <li class="mobileList2">
                     <a href="https://www.indiainfoline.com/business-partners/knowledge-center" class="ripple has-dropdown" id="mobequ">Knowledge Centre</a>
                     <ul class="secondLevelMobileView">
                        <li><a href="/business-partners/what-is-sub-broker.html" class="top_navigation" id="what-is-sub-broker">What Is Sub-broker? </a></li>
                        <li><a href="/business-partners/how-to-become-sub-broker.html" class="top_navigation" id="how-to-sub-broker">How to Become a Sub Broker?</a></li>
                        <li><a href="/business-partners/eligibility-criteria-for-sub-broker.html" class="top_navigation" id="eligibility-sub-broker">Eligibility Criteria For Sub-broker</a></li>
                        <li><a href="/business-partners/how-much-sub-broker-earn-in-india.html" class="top_navigation" id="how-much-sub-broker-earn">How Much Does A Sub-broker Earn?</a></li>
                        <li><a href="/business-partners/what-is-sub-broker-program-of-iifl.html" class="top_navigation" id="what-is-sub-broker-program">What is the Sub-broker Program of IIFL?</a></li>
                        <li><a href="https://www.indiainfoline.com/business-partners/knowledge-centre.html" class="top_navigation" id="more-articles">More Articles...</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">Personal Finance </h2>
            <div class="accordion-content">
               <ul>
                  <li><a href="/personalfinance" class="top_navigation" id="p_overview"> Overview</a></li>
                  <li><a href="/fp360" target="_blank" class="top_navigation" id="financial_plan">Financial Plan 360°</a></li>
                  <li><a href="/pdf/fp360_brochure.pdf" download="FP360_brochure.pdf" class="top_navigation" id="financial_plan_brochure">Financial Plan 360° Brochure</a></li>
                  <li><a href="/mutualfunds/overview" class="top_navigation" id="mutual-funds"> Mutual Funds</a></li>
                  <li><a href="/global-investing" class="top_navigation" id="global-invest">Global Investing</a></li>
                  <li><a href="/personalfinance/insurance" class="top_navigation" id="insurance">Insurance </a></li>
                  <li><a href="/personalfinance/calculators/" class="top_navigation" id="calculator">Calculator </a></li>
                  <li><a href="/nri-services" class="top_navigation" id="nri">NRI </a></li>
                  <li><a href="/personalfinance/corporate-fixed-deposits" class="top_navigation" id="co-fixe_depo">Corporate Fixed Deposits</a></li>
                  <li><a href="https://wealthdesk.indiainfoline.com/" class="top_navigation" id="wealthbasket">WealthBaskets</a></li>
                  <li><a href="/ETFy/" class="top_navigation" id="exchange-trad-fund">Exchange Traded Funds</a></li>
                  <li><a href="https://etfy.indiainfoline.com/" class="top_navigation" id="etfy">ETFy</a></li>
                  <li><a href="https://grobox.indiainfoline.com/" class="top_navigation" id="etfy">GroBox<sup>NEW</sup></a></li>
                  <li><a href="https://iifl.alphaniti.com/" class="top_navigation" id="etfy">Alphaniti<sup>NEW</sup></a></li>
                  <li><a href="/buy-now-pay-later/" class="top_navigation">BNPL</a></li>
                  <li><a href="https://www.indiainfoline.com/secondary-bonds/" class="top_navigation">Secondary Bonds<sup>NEW</sup></a></li>
               </ul>
            </div>
         </section>
         <section class="has_sublink">
            <h2 class="accordion-header">KNOWLEDGE CENTER</h2>
            <div class="accordion-content">
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">Demat Account </h3>
                     <div class="accordion-content">
                        <ul class="secondLevelMobileView" >
                           <li><a href="/about-demat-account/" class="top_navigation active-know" id="what-is-demat-act">What is Demat Account</a></li>
                           <li><a href="/knowledge-center/demat-account/aims-and-objectives" class="top_navigation active-know" id="aim-obj-demat-act">Aims, Objectives and Importance of Demat Account</a></li>
                           <li><a href="/knowledge-center/demat-account/how-does-demat-account-work" class="top_navigation active-know" id="how-does-demat-act">How Does Demat Account Work </a></li>
                           <li><a href="/knowledge-center/demat-account/demat-account-opening-charges" class="top_navigation active-know" id="demat-act-opening-charge">Demat Account Opening Charges</a></li>
                           <li><a href="/knowledge-center/demat-account/how-to-open-demat-account" class="top_navigation active-know" id="how-to-open-deacct">How to Open a Demat Account</a></li>
                           <li><a href="/knowledge-center/demat-account/documents-required-to-open-demat-account" class="top_navigation active-know" id="document-req-open-deacct">Documents Required to Open a Demat Account </a></li>
                           <li><a href="/knowledge-center/demat-account/difference-between-demat-account-and-trading-account" class="top_navigation active-know" id="diff-bet-demat-trad-acct">Difference Between Demat and Trading Account</a></li>
                           <li><a href="/knowledge-center/demat-account/dematerialization" class="top_navigation active-know" id="what-is-dematerialization">What is Dematerialization &amp; It's Process </a></li>
                           <li><a href="https://www.indiainfoline.com/knowledge-center/demat-account" class="active-know">More &gt; </a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">Trading Account </h3>
                     <div class="accordion-content">
                        <ul class="secondLevelMobileView">
                           <li><a href="/knowledge-center/trading-account/what-is-trading-account" class="top_navigation" id="what-is-trad-acct">What is Trading Account </a></li>
                           <li><a href="/knowledge-center/trading-account/open-trading-account" class="top_navigation" id="how-to-open-tradacct">How to Open a Trading Account</a></li>
                           <li><a href="/knowledge-center/trading-account/fees-and-charges" class="top_navigation" id="trad-acct-open-fees">Trading Account Opening Fees &amp; Charges </a></li>
                           <li><a href="/knowledge-center/trading-account/difference-between-nre-and-nro-account" class="top_navigation" id="diff-bet-nre-nro">Difference between NRE and NRO Account </a></li>
                           <li><a href="https://www.indiainfoline.com/knowledge-center/trading-account">More &gt; </a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">Stock Market </h3>
                     <div class="accordion-content">
                        <ul class="secondLevelMobileView">
                           <li><a href="/knowledge-center/share-market/what-is-share-market" class="top_navigation" id="what-is-share-market">What Is Share Market </a></li>
                           <li><a href="/knowledge-center/share-market/what-are-shares-and-types-of-shares" class="top_navigation" id="type-of-shares">What Are Shares &amp; Types Of Shares </a></li>
                           <li><a href="/knowledge-center/share-market/what-are-equities-equity-shares" class="top_navigation" id="equity-shares">What are Equity Shares</a></li>
                           <li><a href="/knowledge-center/share-market/what-are-stock-market-index" class="top_navigation" id="share-market-indices"> What Are Share Market Indices </a></li>
                           <li><a href="/knowledge-center/share-market/share-market-for-beginners" class="top_navigation" id="stock-market-begineers">Stock Market for Beginners</a></li>
                           <li><a href="/knowledge-center/share-market/how-to-invest-in-share-market" class="top_navigation" id="invest-share-market">How to Invest in Share Market</a></li>
                           <li><a href="/knowledge-center/share-market/what-is-ltp-in-share-market" class="top_navigation" id="LTP-share-market">What is LTP in Share Market</a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">KYC </h3>
                     <div class="accordion-content">
                        <ul class="secondLevelMobileView">
                           <li><a href="/knowledge-center/kyc/what-is-kyc" class="top_navigation" id="what-is-kyc">What is KYC</a></li>
                           <li><a href="/knowledge-center/kyc/documents-required-for-kyc" class="top_navigation" id="docs-requ-kyc">Documents Required for KYC</a></li>
                           <li><a href="/knowledge-center/kyc/understand-kyc-process" class="top_navigation" id="understand-kyc-process">Understanding KYC Process</a></li>
                           <li><a href="/knowledge-center/kyc/how-to-update-kyc-details" class="top_navigation" id="update-kyc-details">How to Update KYC Details?</a></li>
                           <li><a href="/knowledge-center/kyc/how-to-check-kyc-status" class="top_navigation" id="check-kyc-xtatus">How to Check KYC Status?</a></li>
                           <li><a href="/knowledge-center/kyc/what-is-ekyc" class="top_navigation" id="what-is-ekyc">What is eKYC?</a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
               <amp-accordion class="nested-accordion" expand-single-section animate>
                  <section class="sublink">
                     <h3 class="accordion-header">More Articles </h3>
                     <div class="accordion-content">
                        <ul class="secondLevelMobileView">
                           <li><a href="/knowledge-center/mutual-funds" class="top_navigation" id="mutual-fund-basic">Mutual Fund Basics </a></li>
                           <li><a href="/dhankibaat/videos" class="top_navigation" id="dhan-ki-baat">Dhan Ki Baat</a></li>
                           <li><a href="/knowledge-center/share-market" class="top_navigation" id="share-market-guide">Share Market Guide</a></li>
                           <li><a href="/knowledge-center/derivative-market" class="top_navigation" id="derivative-market-guide">Derivatives Market Guide</a></li>
                           <li><a href="/knowledge-center/ipo" class="top_navigation" id="ipo-guide">IPO Guide</a></li>
                           <li><a href="/knowledge-center" class="top_navigation" id="knowledge-center-guide">Knowledge Center Guide</a></li>
                        </ul>
                     </div>
                  </section>
               </amp-accordion>
            </div>
         </section>
         <section>
            <h2 class="accordion-header"><a href="/clip?utm_source=website&amp;utm_medium=HamburgerMenu&amp;utm_campaign=Indiainfoline_Mobile_Menu" class="ripple">CLIP (Influencer Program)</a></h2>
            <p class="hidden"></p>
         </section>
         <section>
            <h2 class="accordion-header"><a href="/contactus">Contact Us</a></h2>
            <p class="hidden"></p>
         </section>
         <section>
            <h2 class="accordion-header"><a href="/blog" >Blogs </a></h2>
            <p class="hidden"></p>
         </section>
      </amp-accordion>
   </amp-sidebar>
   <amp-animation id="showAnim" layout="nodisplay">
      <script type="application/json"> { "duration": "200ms", "fill": "both", "iterations": "1", "direction": "alternate", "animations": [{ "selector": "#scrollToTopButton, #leadform", "keyframes": [{ "opacity": "1", "visibility": "visible" }] }] } </script>
   </amp-animation>
   <amp-animation id="hideAnim" layout="nodisplay">
      <script type="application/json"> { "duration": "200ms", "fill": "both", "iterations": "1", "direction": "alternate", "animations": [{ "selector": "#scrollToTopButton, #leadform", "keyframes": [{ "opacity": "0", "visibility": "hidden" }] }] } </script>
   </amp-animation>
   <amp-font layout="nodisplay" font-family="iifl-icon" timeout="0" on-error-remove-class="unavailable-font-loading" on-error-add-class="unavailable-font-missing" on-load-remove-class="unavailable-font-loading" on-load-add-class="unavailable-font-loaded"> </amp-font>
   <amp-state id="autosuggest">
      <script type="application/json"> { "endpoint": "/core/request-handler/amp-city?q=", "emptyAndInitialTemplateJson": [{ "query": "", "results": [] }] } </script>
   </amp-state>
   <amp-analytics type="googleanalytics">
      <script type="application/json"> { "vars": { "account": "UA-75078793-1" }, "triggers": { "defaultPageview": { "on": "visible", "request": "pageview", "vars": { "title": "
         Market pulse at 1:30 PM today" } } } } 
      </script>
   </amp-analytics>
   <amp-analytics type="gtag" data-credentials="include">
      <script type="application/json"> { "vars" : { "gtag_id": "UA-75078793-1", "config" : { "UA-75078793-1": { "groups": "default" } } }, "triggers" : { } } </script>
   </amp-analytics>
   <amp-analytics type="newrelic" id="newrelic">
      <script type="application/json"> { "vars": { "appId": "220864293", "licenseKey": "1cbc7016e9" } } </script>
   </amp-analytics>
</body>
</html>
