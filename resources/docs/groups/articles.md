# Articles


## Retrieve an article


Retrieve an article by his ID.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8080/blog/articles/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/blog/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/blog/articles/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost:8080/blog/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (500):

```json

<!-- Call to a member function parameter() on array (500 Internal Server Error) -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Call to a member function parameter() on array (500 Internal Server Error)</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAgCAYAAAABtRhCAAADVUlEQVRIx82XX0jTURTHLYPyqZdefQx66CEo80+aYpoIkqzUikz6Z5klQoWUWYRIJYEUGpQ+lIr9U5dOTLdCtkmWZis3rbnC5fw/neYW002307mX/cZvP3/7o1PwwOdh95x7vnf39zvnd29AgBer2xO6DclAXiMqZAqxIiNIN/IYSUS2BPhjmGATchUxI+ADWiRhpWK7HKuHFVBFdmU5YvnI4grFGCaReF/EBH4KsZlGgj2JBTuCYBWRIYF8YoEOJ6wBt/gEs7mBbyOjQXruPLSdOgPCiEiPSUUHDoL8Ug5IUo9B/d5wrt+G7OAKNrODPuVdB6vRCIzN6SdBlpW9RIgk/1FeAXabzRlrUPVCS/JhbmwudztnGeeH9AyXBIwtmM3wLinZJZHifjHw2V+NBoRh+9ixQrbgbnaSIcl7cGea6hoXQbNe7za241oeO5Z0p42M4BV2EqP2D50wo+6HzvwC6C4sApNOR8cmOrtcnhtj2kYRyC9eBvXzKrBZrXSs72kFd1t3MoKVbMekQkEnSNKOO8fac3LpmK6l1TlGtsxmsdKFsecPYgwxst0cwROMYDXboSotg0WLBRqjY51jLYcENElXwW2XJKPydvoI2GN9T8rBtrAArYIUruBJXkFheCQYlCpQP6uk5dAQFQNaUROMSGVQFxLmkoQsxDJrhLbTZ+nvVsERME9MgPJRKV/58AsyomTSzE813WLFvWK++qI0xSfQl8k8Pg46sYRuv5t6dS+4RqxDwaa4BGjYH+NTQvKScIp9+YL/hoZh3jDtLRHtt2C3g6bmhX+CpsFBWg7ilDSPgj0lD2ncr5ev/BP8VvyAJhqVyZeUhPOrEhEFxgEtjft846Z/guQTNT89Q5P9flMLoth4F7808wKtWWKzAwNQHxrh/1vaid2F+XpYTSbQf1XA2McOmOpROnvpvMEA4tSjq1cW0sws2gCYxswY6TKkvzYnJq1NHZLnRU4BX+4U0uburvusu8Kv8iHY7qefkM4IFngJHEOUXmLEPgiGsI8YnlZILit3vSSLRTQe/MPIZva5pshNIEmyFQlCvruJKXPkCEfmePzkphXHdzZNQdoRI9KPlBAxlj/I8U97ERPS5bjGbWDFbEdqHVe5caTBeZZx2H/IMvzeN15yoQAAAABJRU5ErkJggg==">
        <style>/* This file is based on WebProfilerBundle/Resources/views/Profiler/profiler.css.twig.
   If you make any change in this file, verify the same change is needed in the other file. */
:root {
    --font-sans-serif: Helvetica, Arial, sans-serif;
    --page-background: #f9f9f9;
    --color-text: #222;
    /* when updating any of these colors, do the same in toolbar.css.twig */
    --color-success: #4f805d;
    --color-warning: #a46a1f;
    --color-error: #b0413e;
    --color-muted: #999;
    --tab-background: #fff;
    --tab-color: #444;
    --tab-active-background: #666;
    --tab-active-color: #fafafa;
    --tab-disabled-background: #f5f5f5;
    --tab-disabled-color: #999;
    --metric-value-background: #fff;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #e0e0e0;
    --metric-label-color: inherit;
    --table-border: #e0e0e0;
    --table-background: #fff;
    --table-header: #e0e0e0;
    --trace-selected-background: #F7E5A1;
    --tree-active-background: #F7E5A1;
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --highlight-comment: #969896;
    --highlight-default: #222222;
    --highlight-keyword: #a71d5d;
    --highlight-string: #183691;
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
}

.theme-dark {
    --page-background: #36393e;
    --color-text: #e0e0e0;
    --color-muted: #777;
    --color-error: #d43934;
    --tab-background: #555;
    --tab-color: #ccc;
    --tab-active-background: #888;
    --tab-active-color: #fafafa;
    --tab-disabled-background: var(--page-background);
    --tab-disabled-color: #777;
    --metric-value-background: #555;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #777;
    --metric-label-color: #e0e0e0;
    --trace-selected-background: #71663acc;
    --table-border: #444;
    --table-background: #333;
    --table-header: #555;
    --info-background: rgba(79, 148, 195, 0.5);
    --tree-active-background: var(--metric-label-background);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(32, 32, 32, .2);
    --border: 1px solid #666;
    --background-error: #b0413e;
    --highlight-comment: #dedede;
    --highlight-default: var(--base-6);
    --highlight-keyword: #ff413c;
    --highlight-string: #70a6fd;
    --base-0: #2e3136;
    --base-1: #444;
    --base-2: #666;
    --base-3: #666;
    --base-4: #666;
    --base-5: #e0e0e0;
    --base-6: #f5f5f5;
    --card-label-background: var(--tab-active-background);
    --card-label-color: var(--tab-active-color);
}

html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

html {
    /* always display the vertical scrollbar to avoid jumps when toggling contents */
    overflow-y: scroll;
}
body { background-color: var(--page-background); color: var(--base-6); font: 14px/1.4 Helvetica, Arial, sans-serif; padding-bottom: 45px; }

a { cursor: pointer; text-decoration: none; }
a:hover { text-decoration: underline; }
abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, "Ubuntu Mono", "Liberation Mono", monospace; }

table, tr, th, td { background: var(--base-0); border-collapse: collapse; vertical-align: top; }
table { background: var(--base-0); border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
table th, table td { border: solid var(--base-2); border-width: 1px 0; padding: 8px 10px; }
table th { background-color: var(--base-2); font-weight: bold; text-align: left; }

.m-t-5 { margin-top: 5px; }
.hidden-xs-down { display: none; }
.block { display: block; }
.full-width { width: 100%; }
.hidden { display: none; }
.prewrap { white-space: pre-wrap; }
.nowrap { white-space: nowrap; }
.newline { display: block; }
.break-long-words { word-wrap: break-word; overflow-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; min-width: 0; }
.text-small { font-size: 12px !important; }
.text-muted { color: #999; }
.text-bold { font-weight: bold; }
.empty { border: 4px dashed var(--base-2); color: #999; margin: 1em 0; padding: .5em 2em; }

.status-success { background: rgba(94, 151, 110, 0.3); }
.status-warning { background: rgba(240, 181, 24, 0.3); }
.status-error { background: rgba(176, 65, 62, 0.2); }
.status-success td, .status-warning td, .status-error td { background: transparent; }
tr.status-error td, tr.status-warning td { border-bottom: 1px solid var(--base-2); border-top: 1px solid var(--base-2); }
.status-warning .colored { color: #A46A1F; }
.status-error .colored  { color: var(--color-error); }

.sf-toggle { cursor: pointer; }
.sf-toggle-content { -moz-transition: display .25s ease; -webkit-transition: display .25s ease; transition: display .25s ease; }
.sf-toggle-content.sf-toggle-hidden { display: none; }
.sf-toggle-content.sf-toggle-visible { display: block; }
thead.sf-toggle-content.sf-toggle-visible, tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
.sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
.sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

.tab-navigation { margin: 0 0 1em 0; padding: 0; }
.tab-navigation li { background: var(--tab-background); border: 1px solid var(--table-border); color: var(--tab-color); cursor: pointer; display: inline-block; font-size: 16px; margin: 0 0 0 -1px; padding: .5em .75em; z-index: 1; }
.tab-navigation li .badge { background-color: var(--base-1); color: var(--base-4); display: inline-block; font-size: 14px; font-weight: bold; margin-left: 8px; min-width: 10px; padding: 1px 6px; text-align: center; white-space: nowrap; }
.tab-navigation li.disabled { background: var(--tab-disabled-background); color: var(--tab-disabled-color); }
.tab-navigation li.active { background: var(--tab-active-background); color: var(--tab-active-color); z-index: 1100; }
.tab-navigation li.active .badge { background-color: var(--base-5); color: var(--base-2); }
.tab-content > *:first-child { margin-top: 0; }
.tab-navigation li .badge.status-warning { background: var(--color-warning); color: #FFF; }
.tab-navigation li .badge.status-error { background: var(--background-error); color: #FFF; }
.sf-tabs .tab:not(:first-child) { display: none; }

[data-filters] { position: relative; }
[data-filtered] { cursor: pointer; }
[data-filtered]:after { content: '\00a0\25BE'; }
[data-filtered]:hover .filter-list li { display: inline-flex; }
[class*="filter-hidden-"] { display: none; }
.filter-list { position: absolute; border: var(--border); box-shadow: var(--shadow); margin: 0; padding: 0; display: flex; flex-direction: column; }
.filter-list :after { content: ''; }
.filter-list li {
    background: var(--tab-disabled-background);
    border-bottom: var(--border);
    color: var(--tab-disabled-color);
    display: none;
    list-style: none;
    margin: 0;
    padding: 5px 10px;
    text-align: left;
    font-weight: normal;
}
.filter-list li.active {
    background: var(--tab-background);
    color: var(--tab-color);
}
.filter-list li.last-active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
}

.filter-list-level li { cursor: s-resize; }
.filter-list-level li.active { cursor: n-resize; }
.filter-list-level li.last-active { cursor: default; }
.filter-list-level li.last-active:before { content: '\2714\00a0'; }
.filter-list-choice li:before { content: '\2714\00a0'; color: transparent; }
.filter-list-choice li.active:before { color: unset; }

.container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
.container::after { content: ""; display: table; clear: both; }

header { background-color: #222; color: rgba(255, 255, 255, 0.75); font-size: 13px; height: 33px; line-height: 33px; padding: 0; }
header .container { display: flex; justify-content: space-between; }
.logo { flex: 1; font-size: 13px; font-weight: normal; margin: 0; padding: 0; }
.logo svg { height: 18px; width: 18px; opacity: .8; vertical-align: -5px; }

.help-link { margin-left: 15px; }
.help-link a { color: inherit; }
.help-link .icon svg { height: 15px; width: 15px; opacity: .7; vertical-align: -2px; }
.help-link a:hover { color: #EEE; text-decoration: none; }
.help-link a:hover svg { opacity: .9; }

.exception-summary { background: var(--background-error); border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 15px; }
.exception-metadata { background: rgba(0, 0, 0, 0.1); padding: 7px 0; }
.exception-metadata .container { display: flex; flex-direction: row; justify-content: space-between; }
.exception-metadata h2, .exception-metadata h2 > a { color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 400; margin: 0; }
.exception-http small { font-size: 13px; opacity: .7; }
.exception-hierarchy { flex: 1; }
.exception-hierarchy .icon { margin: 0 3px; opacity: .7; }
.exception-hierarchy .icon svg { height: 13px; width: 13px; vertical-align: -2px; }

.exception-without-message .exception-message-wrapper { display: none; }
.exception-message-wrapper .container { display: flex; align-items: flex-start; min-height: 70px; padding: 10px 15px 8px; }
.exception-message { flex-grow: 1; }
.exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
.exception-message.long { font-size: 18px; }
.exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
.exception-message a:hover { border-bottom-color: #ffffff; }

.exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

.trace + .trace { margin-top: 30px; }
.trace-head { background-color: var(--base-2); padding: 10px; position: relative; }
.trace-head .trace-class { color: var(--base-6); font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }
.trace-head .trace-namespace { color: #999; display: block; font-size: 13px; }
.trace-head .icon { position: absolute; right: 0; top: 0; }
.trace-head .icon svg { fill: var(--base-5); height: 24px; width: 24px; }

.trace-details { background: var(--base-0); border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; table-layout: fixed; }

.trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }

.trace-line { position: relative; padding-top: 8px; padding-bottom: 8px; }
.trace-line + .trace-line { border-top: var(--border); }
.trace-line:hover { background: var(--base-1); }
.trace-line a { color: var(--base-6); }
.trace-line .icon { opacity: .4; position: absolute; left: 10px; top: 11px; }
.trace-line .icon svg { fill: var(--base-5); height: 16px; width: 16px; }
.trace-line-header { padding-left: 36px; padding-right: 10px; }

.trace-file-path, .trace-file-path a { color: var(--base-6); font-size: 13px; }
.trace-class { color: var(--color-error); }
.trace-type { padding: 0 2px; }
.trace-method { color: var(--color-error); font-weight: bold; }
.trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

.trace-code { background: var(--base-0); font-size: 12px; margin: 10px 10px 2px 10px; padding: 10px; overflow-x: auto; white-space: nowrap; }
.trace-code ol { margin: 0; float: left; }
.trace-code li { color: #969896; margin: 0; padding-left: 10px; float: left; width: 100%; }
.trace-code li + li { margin-top: 5px; }
.trace-code li.selected { background: var(--trace-selected-background); margin-top: 2px; }
.trace-code li code { color: var(--base-6); white-space: nowrap; }

.trace-as-text .stacktrace { line-height: 1.8; margin: 0 0 15px; white-space: pre-wrap; }

@media (min-width: 575px) {
    .hidden-xs-down { display: initial; }
    .help-link { margin-left: 30px; }
}</style>
        <style>.sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: "\00A0";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    font-family: Arial, Helvetica, sans-serif;
    position: absolute;
    color: #C9C9C9;
    font-size: 8em;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: -0.5em;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count, .sf-reset .support {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}

.sf-reset .support a {
    display: inline-block;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: #000000;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}

.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
.sf-reset #traces-text pre {
    white-space: pre;
    font-size: 12px;
    font-family: monospace;
}</style>
    </head>
    <body>
        <script>
            document.body.classList.add(
                localStorage.getItem('symfony/profiler/theme') || (matchMedia('(prefers-color-scheme: dark)').matches ? 'theme-dark' : 'theme-light')
            );
        </script>

                    <header>
                <div class="container">
                    <h1 class="logo"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" d="M12 .9C5.8.9.9 5.8.9 12a11 11 0 1 0 22.2 0A11 11 0 0 0 12 .9zm6.5 6c-.6 0-.9-.3-.9-.8 0-.2 0-.4.2-.6l.2-.4c0-.3-.5-.4-.6-.4-1.8.1-2.3 2.5-2.7 4.4l-.2 1c1 .2 1.8 0 2.2-.3.6-.4-.2-.7-.1-1.2.1-.3.5-.5.7-.6.5 0 .7.5.7.9 0 .7-1 1.8-3 1.8l-.6-.1-.6 2.4c-.4 1.6-.8 3.8-2.4 5.7-1.4 1.7-2.9 1.9-3.5 1.9-1.2 0-1.9-.6-2-1.5 0-.8.7-1.3 1.2-1.3.6 0 1.1.5 1.1 1s-.2.6-.4.6c-.1.1-.3.2-.3.4 0 .1.1.3.4.3.5 0 .8-.3 1.1-.5 1.2-.9 1.6-2.7 2.2-5.7l.1-.7.7-3.2c-.8-.6-1.3-1.4-2.4-1.7-.6-.1-1.1.1-1.5.5-.4.5-.2 1.1.2 1.5l.7.6c.7.8 1.2 1.6 1 2.5-.3 1.5-2 2.6-4 1.9-1.8-.6-2-1.8-1.8-2.5.2-.6.6-.7 1.1-.6.5.2.6.7.6 1.2l-.1.3c-.2.1-.3.3-.3.4-.1.4.4.6.7.7.7.3 1.6-.2 1.8-.8a1 1 0 0 0-.4-1.1l-.7-.8c-.4-.4-1.1-1.4-.7-2.6.1-.5.4-.9.7-1.3a4 4 0 0 1 2.8-.6c1.2.4 1.8 1.1 2.6 1.8.5-1.2 1-2.4 1.8-3.5.9-.9 1.9-1.6 3.1-1.7 1.3.2 2.2.7 2.2 1.6 0 .4-.2 1.1-.9 1.1z"/></svg> Symfony Exception</h1>

                    <div class="help-link">
                        <a href="https://symfony.com/doc/5.1.3/index.html">
                            <span class="icon"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#FFF" d="M1703 478q40 57 18 129l-275 906q-19 64-76.5 107.5T1247 1664H324q-77 0-148.5-53.5T76 1479q-24-67-2-127 0-4 3-27t4-37q1-8-3-21.5t-3-19.5q2-11 8-21t16.5-23.5T116 1179q23-38 45-91.5t30-91.5q3-10 .5-30t-.5-28q3-11 17-28t17-23q21-36 42-92t25-90q1-9-2.5-32t.5-28q4-13 22-30.5t22-22.5q19-26 42.5-84.5T404 411q1-8-3-25.5t-2-26.5q2-8 9-18t18-23 17-21q8-12 16.5-30.5t15-35 16-36 19.5-32 26.5-23.5 36-11.5T620 134l-1 3q38-9 51-9h761q74 0 114 56t18 130l-274 906q-36 119-71.5 153.5T1089 1408H220q-27 0-38 15-11 16-1 43 24 70 144 70h923q29 0 56-15.5t35-41.5l300-987q7-22 5-57 38 15 59 43zm-1064 2q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5T1311 480l21-64q4-13-2-22.5t-20-9.5H702q-13 0-25.5 9.5T660 416zm-83 256q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5T1228 736l21-64q4-13-2-22.5t-20-9.5H619q-13 0-25.5 9.5T577 672z"/></svg></span>
                            <span class="hidden-xs-down">Symfony</span> Docs
                        </a>
                    </div>

                    <div class="help-link">
                        <a href="https://symfony.com/support">
                            <span class="icon"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#FFF" d="M896 0q182 0 348 71t286 191 191 286 71 348-71 348-191 286-286 191-348 71-348-71-286-191-191-286T0 896t71-348 191-286T548 71 896 0zm0 128q-190 0-361 90l194 194q82-28 167-28t167 28l194-194q-171-90-361-90zM218 1257l194-194q-28-82-28-167t28-167L218 535q-90 171-90 361t90 361zm678 407q190 0 361-90l-194-194q-82 28-167 28t-167-28l-194 194q171 90 361 90zm0-384q159 0 271.5-112.5T1280 896t-112.5-271.5T896 512 624.5 624.5 512 896t112.5 271.5T896 1280zm484-217l194 194q90-171 90-361t-90-361l-194 194q28 82 28 167t-28 167z"/></svg></span>
                            <span class="hidden-xs-down">Symfony</span> Support
                        </a>
                    </div>
                </div>
            </header>
        
        <div class="exception-summary ">
    <div class="exception-metadata">
        <div class="container">
            <h2 class="exception-hierarchy">
                                <a href="#trace-box-1"><abbr title="Error">Error</abbr></a>
            </h2>
            <h2 class="exception-http">
                HTTP 500 <small>Internal Server Error</small>
            </h2>
        </div>
    </div>

    <div class="exception-message-wrapper">
        <div class="container">
            <h1 class="break-long-words exception-message">Call to a member function parameter() on array</h1>

            <div class="exception-illustration hidden-xs-down">
                <svg viewBox="0 0 136 81" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.4"><path d="M92.4 20.4a23.2 23.2 0 0 1 9 1.9 23.7 23.7 0 0 1 5.2 3 24.3 24.3 0 0 1 3.4 3.4 24.8 24.8 0 0 1 5 9.4c.5 1.7.8 3.4 1 5.2v14.5h.4l.5.2a7.4 7.4 0 0 0 2.5.2l.2-.2.6-.8.8-1.3-.2-.1a5.5 5.5 0 0 1-.8-.3 5.6 5.6 0 0 1-2.3-1.8 5.7 5.7 0 0 1-.9-1.6 6.5 6.5 0 0 1-.2-2.8 7.3 7.3 0 0 1 .5-2l.3-.3.8-.9.3-.3c.2-.2.5-.3.8-.3H120.7c.2 0 .3-.1.4 0h.4l.2.1.3.2.2-.4.3-.4.1-.1 1.2-1 .3-.2.4-.1.4-.1h.3l1.5.1.4.1.8.5.1.2 1 1.1v.2H129.4l.4-.2 1.4-.5h1.1c.3 0 .7.2 1 .4.2 0 .3.2.5.3l.2.2.5.3.4.6.1.3.4 1.4.1.4v.6a7.8 7.8 0 0 1-.1.6 9.9 9.9 0 0 1-.8 2.4 7.8 7.8 0 0 1-3 3.3 6.4 6.4 0 0 1-1 .5 6.1 6.1 0 0 1-.6.2l-.7.1h-.1a23.4 23.4 0 0 1-.2 1.7 14.3 14.3 0 0 1-.6 2.1l-.8 2a9.2 9.2 0 0 1-.4.6l-.7 1a9.1 9.1 0 0 1-2.3 2.2c-.9.5-2 .6-3 .7l-1.4.1h-.5l-.4.1a15.8 15.8 0 0 1-2.8-.1v4.2a9.7 9.7 0 0 1-.7 3.5 9.6 9.6 0 0 1-1.7 2.8 9.3 9.3 0 0 1-3 2.3 9 9 0 0 1-5.4.7 9 9 0 0 1-3-1 9.4 9.4 0 0 1-2.7-2.5 10 10 0 0 1-1 1.2 9.3 9.3 0 0 1-2 1.3 9 9 0 0 1-2.4 1 9 9 0 0 1-6.5-1.1A9.4 9.4 0 0 1 85 77V77a10.9 10.9 0 0 1-.6.6 9.3 9.3 0 0 1-2.7 2 9 9 0 0 1-6 .8 9 9 0 0 1-2.4-1 9.3 9.3 0 0 1-2.3-1.7 9.6 9.6 0 0 1-1.8-2.8 9.7 9.7 0 0 1-.8-3.7v-4a18.5 18.5 0 0 1-2.9.2l-1.2-.1c-1.9-.3-3.7-1-5.1-2.2a8.2 8.2 0 0 1-1.1-1 10.2 10.2 0 0 1-.9-1.2 15.3 15.3 0 0 1-.7-1.3 20.8 20.8 0 0 1-1.9-6.2v-.2a6.5 6.5 0 0 1-1-.3 6.1 6.1 0 0 1-.6-.3 6.6 6.6 0 0 1-.9-.6 8.2 8.2 0 0 1-2.7-3.7 10 10 0 0 1-.3-1 10.3 10.3 0 0 1-.3-1.9V47v-.4l.1-.4.6-1.4.1-.2a2 2 0 0 1 .8-.8l.3-.2.3-.2a3.2 3.2 0 0 1 1.8-.5h.4l.3.2 1.4.6.2.2.4.3.3.4.7-.7.2-.2.4-.2.6-.2h2.1l.4.2.4.2.3.2.8 1 .2-.1h.1v-.1H63l1.1.1h.3l.8.5.3.4.7 1 .2.3.1.5a11 11 0 0 1 .2 1.5c0 .8 0 1.6-.3 2.3a6 6 0 0 1-.5 1.2 5.5 5.5 0 0 1-3.3 2.5 12.3 12.3 0 0 0 1.4 3h.1l.2.1 1 .2h1.5l.5-.2H67.8l.5-.2h.1V44v-.4a26.7 26.7 0 0 1 .3-2.3 24.7 24.7 0 0 1 5.7-12.5 24.2 24.2 0 0 1 3.5-3.3 23.7 23.7 0 0 1 4.9-3 23.2 23.2 0 0 1 5.6-1.7 23.7 23.7 0 0 1 4-.3zm-.3 2a21.2 21.2 0 0 0-8 1.7 21.6 21.6 0 0 0-4.8 2.7 22.2 22.2 0 0 0-3.2 3 22.7 22.7 0 0 0-5 9.2 23.4 23.4 0 0 0-.7 4.9v15.7l-.5.1a34.3 34.3 0 0 1-1.5.3h-.2l-.4.1h-.4l-.9.2a10 10 0 0 1-1.9 0c-.5 0-1-.2-1.5-.4a1.8 1.8 0 0 1-.3-.2 2 2 0 0 1-.3-.3 5.2 5.2 0 0 1-.1-.2 9 9 0 0 1-.6-.9 13.8 13.8 0 0 1-1-2 14.3 14.3 0 0 1-.6-2 14 14 0 0 1-.1-.8v-.2h.3a12.8 12.8 0 0 0 1.4-.2 4.4 4.4 0 0 0 .3 0 3.6 3.6 0 0 0 1.1-.7 3.4 3.4 0 0 0 1.2-1.7l.2-1.2a5.1 5.1 0 0 0 0-.8 7.2 7.2 0 0 0-.1-.8l-.7-1-1.2-.2-1 .7-.1 1.3a5 5 0 0 1 .1.4v.6a1 1 0 0 1 0 .3c-.1.3-.4.4-.7.5l-1.2.4v-.7A9.9 9.9 0 0 1 60 49l.3-.6v-.2l.1-.1v-1.6l-1-1.2h-1.5l-1 1.1v.4a5.3 5.3 0 0 0-.2.6 5.5 5.5 0 0 0 0 .5c0 .7 0 1.4.3 2 0 .4.2.8.4 1.2L57 51a9.5 9.5 0 0 1-1.1-.5h-.2a2 2 0 0 1-.4-.3c-.4-.4-.5-1-.6-1.6a5.6 5.6 0 0 1 0-.5v-.5-.5l-.6-1.5-1.4-.6-.9.3s-.2 0-.3.2a2 2 0 0 1-.1 0l-.6 1.4v.7a8.5 8.5 0 0 0 .5 2c.4 1.1 1 2.1 2 2.8a4.7 4.7 0 0 0 2.1.9h1a22.8 22.8 0 0 0 .1 1 18.1 18.1 0 0 0 .8 3.8 18.2 18.2 0 0 0 1.6 3.7l1 1.3c1 1 2.3 1.6 3.7 2a11.7 11.7 0 0 0 4.8 0h.4l.5-.2.5-.1.6-.2v6.6a8 8 0 0 0 .1 1.3 7.5 7.5 0 0 0 2.4 4.3 7.2 7.2 0 0 0 2.3 1.3 7 7 0 0 0 7-1.1 7.5 7.5 0 0 0 2-2.6A7.7 7.7 0 0 0 85 72V71a8.2 8.2 0 0 0 .2 1.3c0 .7.3 1.4.6 2a7.5 7.5 0 0 0 1.7 2.3 7.3 7.3 0 0 0 2.2 1.4 7.1 7.1 0 0 0 4.6.2 7.2 7.2 0 0 0 2.4-1.2 7.5 7.5 0 0 0 2.1-2.7 7.8 7.8 0 0 0 .7-2.4V71a9.3 9.3 0 0 0 .1.6 7.6 7.6 0 0 0 .6 2.5 7.5 7.5 0 0 0 2.4 3 7.1 7.1 0 0 0 7 .8 7.3 7.3 0 0 0 2.3-1.5 7.5 7.5 0 0 0 1.6-2.3 7.6 7.6 0 0 0 .5-2l.1-1.1v-6.7l.4.1a12.2 12.2 0 0 0 2 .5 11.1 11.1 0 0 0 2.5 0h.8l1.2-.1a9.5 9.5 0 0 0 1.4-.2l.9-.3a3.5 3.5 0 0 0 .6-.4l1.2-1.4a12.2 12.2 0 0 0 .8-1.2c0-.3.2-.5.3-.7a15.9 15.9 0 0 0 .7-2l.3-1.6v-1.3l.2-.9V54.6a15.5 15.5 0 0 0 1.8 0 4.5 4.5 0 0 0 1.4-.5 5.7 5.7 0 0 0 2.5-3.2 7.6 7.6 0 0 0 .4-1.5v-.3l-.4-1.4a5.2 5.2 0 0 1-.2-.1l-.4-.4a3.8 3.8 0 0 0-.2 0 1.4 1.4 0 0 0-.5-.2l-1.4.4-.7 1.3v.7a5.7 5.7 0 0 1-.1.8l-.7 1.4a1.9 1.9 0 0 1-.5.3h-.3a9.6 9.6 0 0 1-.8.3 8.8 8.8 0 0 1-.6 0l.2-.4.2-.5.2-.3v-.4l.1-.2V50l.1-1 .1-.6v-.6a4.8 4.8 0 0 0 0-.8v-.2l-1-1.1-1.5-.2-1.1 1-.2 1.4v.1l.2.4.2.3v.4l.1 1.1v.3l.1.5v.8a9.6 9.6 0 0 1-.8-.3l-.2-.1h-.3l-.8-.1h-.2a1.6 1.6 0 0 1-.2-.2.9.9 0 0 1-.2-.2 1 1 0 0 1-.1-.5l.2-.9v-1.2l-.9-.8h-1.2l-.8.9v.3a4.8 4.8 0 0 0-.3 2l.3.9a3.5 3.5 0 0 0 1.2 1.6l1 .5.8.2 1.4.1h.4l.2.1a12.1 12.1 0 0 1-1 2.6 13.2 13.2 0 0 1-.8 1.5 9.5 9.5 0 0 1-1 1.2l-.2.3a1.7 1.7 0 0 1-.4.3 2.4 2.4 0 0 1-.7.2h-2.5a7.8 7.8 0 0 1-.6-.2l-.7-.2h-.2a14.8 14.8 0 0 1-.6-.2 23.4 23.4 0 0 1-.4-.1l-.4-.1-.3-.1V43.9a34.6 34.6 0 0 0 0-.6 23.6 23.6 0 0 0-.4-3 22.7 22.7 0 0 0-1.5-4.7 22.6 22.6 0 0 0-4.6-6.7 21.9 21.9 0 0 0-6.9-4.7 21.2 21.2 0 0 0-8.1-1.8H92zm9.1 33.7l.3.1a1 1 0 0 1 .6.8v.4a8.4 8.4 0 0 1 0 .5 8.8 8.8 0 0 1-1.6 4.2l-1 1.3A10 10 0 0 1 95 66c-1.3.3-2.7.4-4 .3a10.4 10.4 0 0 1-2.7-.8 10 10 0 0 1-3.6-2.5 9.3 9.3 0 0 1-.8-1 9 9 0 0 1-.7-1.2 8.6 8.6 0 0 1-.8-3.4V57a1 1 0 0 1 .3-.6 1 1 0 0 1 1.3-.2 1 1 0 0 1 .4.8v.4a6.5 6.5 0 0 0 .5 2.2 7 7 0 0 0 2.1 2.8l1 .6c2.6 1.6 6 1.6 8.5 0a8 8 0 0 0 1.1-.6 7.6 7.6 0 0 0 1.2-1.2 7 7 0 0 0 1-1.7 6.5 6.5 0 0 0 .4-2.5 1 1 0 0 1 .7-1h.4zM30.7 43.7c-15.5 1-28.5-6-30.1-16.4C-1.2 15.7 11.6 4 29 1.3 46.6-1.7 62.3 5.5 64 17.1c1.6 10.4-8.7 21-23.7 25a31.2 31.2 0 0 0 0 .9v.3a19 19 0 0 0 .1 1l.1.4.1.9a4.7 4.7 0 0 0 .5 1l.7 1a9.2 9.2 0 0 0 1.2 1l1.5.8.6.8-.7.6-1.1.3a11.2 11.2 0 0 1-2.6.4 8.6 8.6 0 0 1-3-.5 8.5 8.5 0 0 1-1-.4 11.2 11.2 0 0 1-1.8-1.2 13.3 13.3 0 0 1-1-1 18 18 0 0 1-.7-.6l-.4-.4a23.4 23.4 0 0 1-1.3-1.8l-.1-.1-.3-.5V45l-.3-.6v-.7zM83.1 36c3.6 0 6.5 3.2 6.5 7.1 0 4-3 7.2-6.5 7.2S76.7 47 76.7 43 79.6 36 83 36zm18 0c3.6 0 6.5 3.2 6.5 7.1 0 4-2.9 7.2-6.4 7.2S94.7 47 94.7 43s3-7.1 6.5-7.1zm-18 6.1c2 0 3.5 1.6 3.5 3.6S85 49.2 83 49.2s-3.4-1.6-3.4-3.6S81.2 42 83 42zm17.9 0c1.9 0 3.4 1.6 3.4 3.6s-1.5 3.6-3.4 3.6c-2 0-3.5-1.6-3.5-3.6S99.1 42 101 42zM17 28c-.3 1.6-1.8 5-5.2 5.8-2.5.6-4.1-.8-4.5-2.6-.4-1.9.7-3.5 2.1-4.5A3.5 3.5 0 0 1 8 24.6c-.4-2 .8-3.7 3.2-4.2 1.9-.5 3.1.2 3.4 1.5.3 1.1-.5 2.2-1.8 2.5-.9.3-1.6 0-1.7-.6a1.4 1.4 0 0 1 0-.7s.3.2 1 0c.7-.1 1-.7.9-1.2-.2-.6-1-.8-1.8-.6-1 .2-2 1-1.7 2.6.3 1 .9 1.6 1.5 1.8l.7-.2c1-.2 1.5 0 1.6.5 0 .4-.2 1-1.2 1.2a3.3 3.3 0 0 1-1.5 0c-.9.7-1.6 1.9-1.3 3.2.3 1.3 1.3 2.2 3 1.8 2.5-.7 3.8-3.7 4.2-5-.3-.5-.6-1-.7-1.6-.1-.5.1-1 .9-1.2.4 0 .7.2.8.8a2.8 2.8 0 0 1 0 1l.7 1c.6-2 1.4-4 1.7-4 .6-.2 1.5.6 1.5.6-.8.7-1.7 2.4-2.3 4.2.8.6 1.6 1 2.1 1 .5-.1.8-.6 1-1.2-.3-2.2 1-4.3 2.3-4.6.7-.2 1.3.2 1.4.8.1.5 0 1.3-.9 1.7-.2-1-.6-1.3-1-1.3-.4.1-.7 1.4-.4 2.8.2 1 .7 1.5 1.3 1.4.8-.2 1.3-1.2 1.7-2.1-.3-2.1.9-4.2 2.2-4.5.7-.2 1.2.1 1.4 1 .4 1.4-1 2.8-2.2 3.4.3.7.7 1 1.3.9 1-.3 1.6-1.5 2-2.5l-.5-3v-.3s1.6-.3 1.8.6v.1c.2-.6.7-1.2 1.3-1.4.8-.1 1.5.6 1.7 1.6.5 2.2-.5 4.4-1.8 4.7H33a31.9 31.9 0 0 0 1 5.2c-.4.1-1.8.4-2-.4l-.5-5.6c-.5 1-1.3 2.2-2.5 2.4-1 .3-1.6-.3-2-1.1-.5 1-1.3 2.1-2.4 2.4-.8.2-1.5-.1-2-1-.3.8-.9 1.5-1.5 1.7-.7.1-1.5-.3-2.4-1-.3.8-.4 1.6-.4 2.2 0 0-.7 0-.8-.4-.1-.5 0-1.5.3-2.7a10.3 10.3 0 0 1-.7-.8zm38.2-17.8l.2.9c.5 1.9.4 4.4.8 6.4 0 .6-.4 3-1.4 3.3-.2 0-.3 0-.4-.4-.1-.7 0-1.6-.3-2.6-.2-1.1-.8-1.6-1.5-1.5-.8.2-1.3 1-1.6 2l-.1-.5c-.2-1-1.8-.6-1.8-.6a6.2 6.2 0 0 1 .4 1.3l.2 1c-.2.5-.6 1-1.2 1l-.2.1a7 7 0 0 0-.1-.8c-.3-1.1-1-2-1.6-1.8a.7.7 0 0 0-.4.3c-1.3.3-2.4 2-2.1 3.9-.2.9-.6 1.7-1 1.9-.5 0-.8-.5-1.1-1.8l-.1-1.2a4 4 0 0 0 0-1.7c0-.4-.4-.7-.8-.6-.7.2-.9 1.7-.5 3.8-.2 1-.6 2-1.3 2-.4.2-.8-.2-1-1l-.2-3c1.2-.5 2-1 1.8-1.7-.1-.5-.8-.7-.8-.7s0 .7-1 1.2l-.2-1.4c-.1-.6-.4-1-1.7-.6l.4 1 .2 1.5h-1v.8c0 .3.4.3 1 .2 0 1.3 0 2.7.2 3.6.3 1.4 1.2 2 2 1.7 1-.2 1.6-1.3 2-2.3.3 1.2 1 2 1.9 1.7.7-.2 1.2-1.1 1.6-2.2.4.8 1.1 1.1 2 1 1.2-.4 1.7-1.6 1.8-2.8h.2c.6-.2 1-.6 1.3-1 0 .8 0 1.5.2 2.1.1.5.3.7.6.6.5-.1 1-.9 1-.9a4 4 0 0 1-.3-1c-.3-1.3.3-3.6 1-3.7.2 0 .3.2.5.7v.8l.2 1.5v.7c.2.7.7 1.3 1.5 1 1.3-.2 2-2.6 2.1-3.9.3.2.6.2 1 .1-.6-2.2 0-6.1-.3-7.9-.1-.4-1-.5-1.7-.5h-.4zm-21.5 12c.4 0 .7.3 1 1.1.2 1.3-.3 2.6-.9 2.8-.2 0-.7 0-1-1.2v-.4c0-1.3.4-2 1-2.2zm-5.2 1c.3 0 .6.2.6.5.2.6-.3 1.3-1.2 2-.3-1.4.1-2.3.6-2.5zm18-.4c-.5.2-1-.4-1.2-1.2-.2-1 0-2.1.7-2.5v.5c.2.7.6 1.5 1.3 1.9 0 .7-.2 1.2-.7 1.3zm10-1.6c0 .5.4.7 1 .6.8-.2 1-1 .8-1.6 0-.5-.4-1-1-.8-.5.1-1 .9-.8 1.8zm-14.3-5.5c0-.4-.5-.7-1-.5-.8.2-1 1-.9 1.5.2.6.5 1 1 .8.5 0 1.1-1 1-1.8z" fill="#fff" fill-opacity=".6"/></svg>            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="sf-tabs">
        <div class="tab">
                        <h3 class="tab-title">
                                    Exception
                            </h3>

            <div class="tab-content">
                <div class="trace trace-as-html" id="trace-box-1">
    <div class="trace-details">
        <div class="trace-head">
            <span class="sf-toggle" data-toggle-selector="#trace-html-1" data-toggle-initial="display">
                <h3 class="trace-class">
                    <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1344 800v64q0 14-9 23t-23 9H480q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h832q14 0 23 9t9 23zm128 448V416q0-66-47-113t-113-47H480q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113zm128-832v832q0 119-84.5 203.5T1312 1536H480q-119 0-203.5-84.5T192 1248V416q0-119 84.5-203.5T480 128h832q119 0 203.5 84.5T1600 416z"/></svg></span>
                    <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1344 800v64q0 14-9 23t-23 9H960v352q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V896H480q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h352V416q0-14 9-23t23-9h64q14 0 23 9t9 23v352h352q14 0 23 9t9 23zm128 448V416q0-66-47-113t-113-47H480q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113zm128-832v832q0 119-84.5 203.5T1312 1536H480q-119 0-203.5-84.5T192 1248V416q0-119 84.5-203.5T480 128h832q119 0 203.5 84.5T1600 416z"/></svg></span>

                    <span class="trace-namespace">
                                            </span>
                    Error                </h3>

                            </span>
        </div>

        <div id="trace-html-1" class="sf-toggle-content">
                    <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-0" data-toggle-initial="display">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\http\<strong>Request.php</strong>
            </a>
                        (line 536)
        </span>
    </div>
    <div id="trace-html-1-0" class="trace-code sf-toggle-content">
        <ol start="531"><li><a class="anchor" name="line531"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line532"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">is_null</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">)&nbsp;||&nbsp;</span><span style="color: var(--highlight-default)">is_null</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$param</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line533"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line534"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line535"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line536"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">parameter</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$param</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$default</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line537"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line538"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line539"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line540"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Get&nbsp;a&nbsp;unique&nbsp;fingerprint&nbsp;for&nbsp;the&nbsp;request&nbsp;/&nbsp;route&nbsp;/&nbsp;IP&nbsp;address.</span></span></code></li>
<li><a class="anchor" name="line541"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-1" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Http\Request">Request</abbr></span><span class="trace-type">-></span><span class="trace-method">route</span><span class="trace-arguments">('article_id')</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\http\<strong>Request.php</strong>
            </a>
                        (line 699)
        </span>
    </div>
    <div id="trace-html-1-1" class="trace-code sf-toggle-content">
        <ol start="694"><li><a class="anchor" name="line694"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;mixed</span></span></code></li>
<li><a class="anchor" name="line695"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line696"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">__get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line697"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line698"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">Arr</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">all</span><span style="color: var(--highlight-keyword)">(),&nbsp;</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line699"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">route</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line700"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line701"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line702"></a><code><span style="color: var(--highlight-keyword)">}</span></span></code></li>
<li><a class="anchor" name="line703"></a><code><span style="color: var(--highlight-keyword)"></span>
</span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-2" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Http\Request">Request</abbr></span><span class="trace-type">-></span><span class="trace-method">Illuminate\Http\{closure}</span><span class="trace-arguments">()</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\support\<strong>helpers.php</strong>
            </a>
                        (line 532)
        </span>
    </div>
    <div id="trace-html-1-2" class="trace-code sf-toggle-content">
        <ol start="527"><li><a class="anchor" name="line527"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;&nbsp;mixed&nbsp;&nbsp;$value</span></span></code></li>
<li><a class="anchor" name="line528"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;mixed</span></span></code></li>
<li><a class="anchor" name="line529"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line530"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">function&nbsp;</span><span style="color: var(--highlight-default)">value</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line531"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line532"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$value&nbsp;</span><span style="color: var(--highlight-keyword)">instanceof&nbsp;</span><span style="color: var(--highlight-default)">Closure&nbsp;</span><span style="color: var(--highlight-keyword)">?&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">()&nbsp;:&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line533"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line534"></a><code><span style="color: var(--highlight-keyword)">}</span></span></code></li>
<li><a class="anchor" name="line535"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line536"></a><code><span style="color: var(--highlight-keyword)">if&nbsp;(!&nbsp;</span><span style="color: var(--highlight-default)">function_exists</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'windows_os'</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line537"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-3" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title=""></abbr></span><span class="trace-method">value</span><span class="trace-arguments">(<em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\support\<strong>Arr.php</strong>
            </a>
                        (line 297)
        </span>
    </div>
    <div id="trace-html-1-3" class="trace-code sf-toggle-content">
        <ol start="292"><li><a class="anchor" name="line292"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(static::</span><span style="color: var(--highlight-default)">exists</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line293"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">];</span></span></code></li>
<li><a class="anchor" name="line294"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line295"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line296"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">strpos</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-string)">'.'</span><span style="color: var(--highlight-keyword)">)&nbsp;===&nbsp;</span><span style="color: var(--highlight-default)">false</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line297"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">]&nbsp;??&nbsp;</span><span style="color: var(--highlight-default)">value</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$default</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line298"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line299"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line300"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: var(--highlight-default)">explode</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'.'</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">)&nbsp;as&nbsp;</span><span style="color: var(--highlight-default)">$segment</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line301"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(static::</span><span style="color: var(--highlight-default)">accessible</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">)&nbsp;&amp;&amp;&nbsp;static::</span><span style="color: var(--highlight-default)">exists</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$segment</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line302"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$array&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$array</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">$segment</span><span style="color: var(--highlight-keyword)">];</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-4" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Support\Arr">Arr</abbr></span><span class="trace-type">::</span><span class="trace-method">get</span><span class="trace-arguments">(<em>array</em>(), 'article_id', <em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\http\<strong>Request.php</strong>
            </a>
                        (line 700)
        </span>
    </div>
    <div id="trace-html-1-4" class="trace-code sf-toggle-content">
        <ol start="695"><li><a class="anchor" name="line695"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line696"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">__get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line697"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line698"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">Arr</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">all</span><span style="color: var(--highlight-keyword)">(),&nbsp;</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line699"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">route</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$key</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li class="selected"><a class="anchor" name="line700"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line701"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line702"></a><code><span style="color: var(--highlight-keyword)">}</span></span></code></li>
<li><a class="anchor" name="line703"></a><code><span style="color: var(--highlight-keyword)"></span>
</span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-5" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Http\Request">Request</abbr></span><span class="trace-type">-></span><span class="trace-method">__get</span><span class="trace-arguments">('article_id')</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\app\Http\Controllers\<strong>ArticleController.php</strong>
            </a>
                        (line 47)
        </span>
    </div>
    <div id="trace-html-1-5" class="trace-code sf-toggle-content">
        <ol start="42"><li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;JsonResponse</span></span></code></li>
<li><a class="anchor" name="line43"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line44"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">retrieve</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">Request&nbsp;$request</span><span style="color: var(--highlight-keyword)">):&nbsp;</span><span style="color: var(--highlight-default)">JsonResponse</span></span></code></li>
<li><a class="anchor" name="line45"></a><code><span style="color: var(--highlight-default)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">{</span></span></code></li>
<li><a class="anchor" name="line46"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line47"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$article&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">Article</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">where</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'id'</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">article_id</span><span style="color: var(--highlight-keyword)">)-&gt;</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line48"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line49"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: var(--highlight-default)">$article</span><span style="color: var(--highlight-keyword)">))</span></span></code></li>
<li><a class="anchor" name="line50"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line51"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">Exception</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'the&nbsp;article&nbsp;doesn\`t&nbsp;exist'</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">404</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line52"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words " data-toggle-selector="#trace-html-1-6" data-toggle-initial="">
    
            <span class="trace-class"><abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr></span><span class="trace-type">-></span><span class="trace-method">retrieve</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), '1')</span>    
    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-7" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title=""></abbr></span><span class="trace-method">call_user_func_array</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve'), <em>array</em>(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), 'article_id' => '1'))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 37)
        </span>
    </div>
    <div id="trace-html-1-7" class="trace-code sf-toggle-content">
        <ol start="32"><li><a class="anchor" name="line32"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callClass</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line33"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callBoundMethod</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">call_user_func_array</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;static::</span><span style="color: var(--highlight-default)">getMethodDependencies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-8" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">Illuminate\Container\{closure}</span><span class="trace-arguments">()</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>Util.php</strong>
            </a>
                        (line 37)
        </span>
    </div>
    <div id="trace-html-1-8" class="trace-code sf-toggle-content">
        <ol start="32"><li><a class="anchor" name="line32"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;&nbsp;mixed&nbsp;&nbsp;$value</span></span></code></li>
<li><a class="anchor" name="line33"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;mixed</span></span></code></li>
<li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">unwrapIfClosure</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$value&nbsp;</span><span style="color: var(--highlight-keyword)">instanceof&nbsp;</span><span style="color: var(--highlight-default)">Closure&nbsp;</span><span style="color: var(--highlight-keyword)">?&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">()&nbsp;:&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Get&nbsp;the&nbsp;class&nbsp;name&nbsp;of&nbsp;the&nbsp;given&nbsp;parameter's&nbsp;type,&nbsp;if&nbsp;possible.</span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-9" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\Util">Util</abbr></span><span class="trace-type">::</span><span class="trace-method">unwrapIfClosure</span><span class="trace-arguments">(<em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 95)
        </span>
    </div>
    <div id="trace-html-1-9" class="trace-code sf-toggle-content">
        <ol start="90"><li><a class="anchor" name="line90"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line91"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">hasMethodBinding</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line92"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callMethodBinding</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">0</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line93"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line94"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line95"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">Util</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">unwrapIfClosure</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$default</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line96"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line97"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line98"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line99"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Normalize&nbsp;the&nbsp;given&nbsp;callback&nbsp;into&nbsp;a&nbsp;Class@method&nbsp;string.</span></span></code></li>
<li><a class="anchor" name="line100"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-10" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">callBoundMethod</span><span class="trace-arguments">(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve'), <em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 39)
        </span>
    </div>
    <div id="trace-html-1-10" class="trace-code sf-toggle-content">
        <ol start="34"><li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callBoundMethod</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">call_user_func_array</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;static::</span><span style="color: var(--highlight-default)">getMethodDependencies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li class="selected"><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line43"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Call&nbsp;a&nbsp;string&nbsp;reference&nbsp;to&nbsp;a&nbsp;class&nbsp;using&nbsp;Class@method&nbsp;syntax.</span></span></code></li>
<li><a class="anchor" name="line44"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-11" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">call</span><span class="trace-arguments">(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve'), <em>array</em>('article_id' => '1'), <em>null</em>)</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>Container.php</strong>
            </a>
                        (line 596)
        </span>
    </div>
    <div id="trace-html-1-11" class="trace-code sf-toggle-content">
        <ol start="591"><li><a class="anchor" name="line591"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li>
<li><a class="anchor" name="line592"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@throws&nbsp;\InvalidArgumentException</span></span></code></li>
<li><a class="anchor" name="line593"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line594"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$parameters&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[],&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line595"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line596"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">BoundMethod</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line597"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line598"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line599"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line600"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Get&nbsp;a&nbsp;closure&nbsp;to&nbsp;resolve&nbsp;the&nbsp;given&nbsp;type&nbsp;from&nbsp;the&nbsp;container.</span></span></code></li>
<li><a class="anchor" name="line601"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-12" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\Container">Container</abbr></span><span class="trace-type">-></span><span class="trace-method">call</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve'), <em>array</em>('article_id' => '1'))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 386)
        </span>
    </div>
    <div id="trace-html-1-12" class="trace-code sf-toggle-content">
        <ol start="381"><li><a class="anchor" name="line381"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line382"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">protected&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">callControllerCallable</span><span style="color: var(--highlight-keyword)">(callable&nbsp;</span><span style="color: var(--highlight-default)">$callable</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$parameters&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[])</span></span></code></li>
<li><a class="anchor" name="line383"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line384"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line385"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareResponse</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line386"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$callable</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line387"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line388"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: var(--highlight-default)">HttpResponseException&nbsp;$e</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line389"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getResponse</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line390"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line391"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-13" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">callControllerCallable</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve'), <em>array</em>('article_id' => '1'))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 352)
        </span>
    </div>
    <div id="trace-html-1-13" class="trace-code sf-toggle-content">
        <ol start="347"><li><a class="anchor" name="line347"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callLumenControllerWithMiddleware</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line348"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$instance</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$middleware</span></span></code></li>
<li><a class="anchor" name="line349"></a><code><span style="color: var(--highlight-default)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line350"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line351"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callControllerCallable</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line352"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: var(--highlight-default)">$instance</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">],&nbsp;</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">2</span><span style="color: var(--highlight-keyword)">]</span></span></code></li>
<li><a class="anchor" name="line353"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line354"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line355"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line356"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line357"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-14" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">callLumenController</span><span class="trace-arguments">(<em>object</em>(<abbr title="App\Http\Controllers\ArticleController">ArticleController</abbr>), 'retrieve', <em>array</em>(1, <em>array</em>('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), <em>array</em>('article_id' => '1')))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 326)
        </span>
    </div>
    <div id="trace-html-1-14" class="trace-code sf-toggle-content">
        <ol start="321"><li><a class="anchor" name="line321"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!&nbsp;</span><span style="color: var(--highlight-default)">method_exists</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$instance&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">make</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$controller</span><span style="color: var(--highlight-keyword)">),&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line322"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">NotFoundHttpException</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line323"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line324"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line325"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$instance&nbsp;</span><span style="color: var(--highlight-keyword)">instanceof&nbsp;</span><span style="color: var(--highlight-default)">LumenController</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line326"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callLumenController</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$instance</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line327"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line328"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callControllerCallable</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line329"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: var(--highlight-default)">$instance</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">],&nbsp;</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">2</span><span style="color: var(--highlight-keyword)">]</span></span></code></li>
<li><a class="anchor" name="line330"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line331"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-15" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">callControllerAction</span><span class="trace-arguments">(<em>array</em>(1, <em>array</em>('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), <em>array</em>('article_id' => '1')))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 279)
        </span>
    </div>
    <div id="trace-html-1-15" class="trace-code sf-toggle-content">
        <ol start="274"><li><a class="anchor" name="line274"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">protected&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">callActionOnArrayBasedRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line275"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line276"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$action&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">1</span><span style="color: var(--highlight-keyword)">];</span></span></code></li>
<li><a class="anchor" name="line277"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line278"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: var(--highlight-default)">$action</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'uses'</span><span style="color: var(--highlight-keyword)">]))&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line279"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareResponse</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callControllerAction</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line280"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line281"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line282"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: var(--highlight-default)">$action&nbsp;</span><span style="color: var(--highlight-keyword)">as&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line283"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$value&nbsp;</span><span style="color: var(--highlight-keyword)">instanceof&nbsp;</span><span style="color: var(--highlight-default)">Closure</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line284"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$callable&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">bindTo</span><span style="color: var(--highlight-keyword)">(new&nbsp;</span><span style="color: var(--highlight-default)">RoutingClosure</span><span style="color: var(--highlight-keyword)">);</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-16" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">callActionOnArrayBasedRoute</span><span class="trace-arguments">(<em>array</em>(1, <em>array</em>('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), <em>array</em>('article_id' => '1')))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 264)
        </span>
    </div>
    <div id="trace-html-1-16" class="trace-code sf-toggle-content">
        <ol start="259"><li><a class="anchor" name="line259"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callActionOnArrayBasedRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'request'</span><span style="color: var(--highlight-keyword)">]-&gt;</span><span style="color: var(--highlight-default)">route</span><span style="color: var(--highlight-keyword)">());</span></span></code></li>
<li><a class="anchor" name="line260"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}));</span></span></code></li>
<li><a class="anchor" name="line261"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line262"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line263"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareResponse</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line264"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callActionOnArrayBasedRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line265"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line266"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line267"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line268"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line269"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Call&nbsp;the&nbsp;Closure&nbsp;or&nbsp;invokable&nbsp;on&nbsp;the&nbsp;array&nbsp;based&nbsp;route.</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-17" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">handleFoundRoute</span><span class="trace-arguments">(<em>array</em>(1, <em>array</em>('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), <em>array</em>('article_id' => '1')))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 234)
        </span>
    </div>
    <div id="trace-html-1-17" class="trace-code sf-toggle-content">
        <ol start="229"><li><a class="anchor" name="line229"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: var(--highlight-default)">Dispatcher</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">NOT_FOUND</span><span style="color: var(--highlight-keyword)">:</span></span></code></li>
<li><a class="anchor" name="line230"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">NotFoundHttpException</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line231"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: var(--highlight-default)">Dispatcher</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">METHOD_NOT_ALLOWED</span><span style="color: var(--highlight-keyword)">:</span></span></code></li>
<li><a class="anchor" name="line232"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">MethodNotAllowedHttpException</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">1</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line233"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: var(--highlight-default)">Dispatcher</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">FOUND</span><span style="color: var(--highlight-keyword)">:</span></span></code></li>
<li class="selected"><a class="anchor" name="line234"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handleFoundRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routeInfo</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line235"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line236"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line237"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line238"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line239"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Handle&nbsp;a&nbsp;route&nbsp;found&nbsp;by&nbsp;the&nbsp;dispatcher.</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-18" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">handleDispatcherResponse</span><span class="trace-arguments">(<em>array</em>(1, <em>array</em>('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), <em>array</em>('article_id' => '1')))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 170)
        </span>
    </div>
    <div id="trace-html-1-18" class="trace-code sf-toggle-content">
        <ol start="165"><li><a class="anchor" name="line165"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">router</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getRoutes</span><span style="color: var(--highlight-keyword)">()[</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">.</span><span style="color: var(--highlight-default)">$pathInfo</span><span style="color: var(--highlight-keyword)">]))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line166"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handleFoundRoute</span><span style="color: var(--highlight-keyword)">([</span><span style="color: var(--highlight-default)">true</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">router</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getRoutes</span><span style="color: var(--highlight-keyword)">()[</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">.</span><span style="color: var(--highlight-default)">$pathInfo</span><span style="color: var(--highlight-keyword)">][</span><span style="color: var(--highlight-string)">'action'</span><span style="color: var(--highlight-keyword)">],&nbsp;[]]);</span></span></code></li>
<li><a class="anchor" name="line167"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line168"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line169"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handleDispatcherResponse</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line170"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">createDispatcher</span><span style="color: var(--highlight-keyword)">()-&gt;</span><span style="color: var(--highlight-default)">dispatch</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$pathInfo</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line171"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line172"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line173"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: var(--highlight-default)">Throwable&nbsp;$e</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line174"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareResponse</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">sendExceptionToHandler</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line175"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-19" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">Laravel\Lumen\Concerns\{closure}</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 426)
        </span>
    </div>
    <div id="trace-html-1-19" class="trace-code sf-toggle-content">
        <ol start="421"><li><a class="anchor" name="line421"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: var(--highlight-default)">send</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">make</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'request'</span><span style="color: var(--highlight-keyword)">))</span></span></code></li>
<li><a class="anchor" name="line422"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: var(--highlight-default)">through</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$middleware</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line423"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: var(--highlight-default)">then</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$then</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line424"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line425"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line426"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$then</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">make</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'request'</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line427"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line428"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line429"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line430"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Prepare&nbsp;the&nbsp;response&nbsp;for&nbsp;sending.</span></span></code></li>
<li><a class="anchor" name="line431"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-20" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">sendThroughPipeline</span><span class="trace-arguments">(<em>array</em>(), <em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 172)
        </span>
    </div>
    <div id="trace-html-1-20" class="trace-code sf-toggle-content">
        <ol start="167"><li><a class="anchor" name="line167"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line168"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line169"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handleDispatcherResponse</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line170"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">createDispatcher</span><span style="color: var(--highlight-keyword)">()-&gt;</span><span style="color: var(--highlight-default)">dispatch</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$pathInfo</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line171"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li class="selected"><a class="anchor" name="line172"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line173"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: var(--highlight-default)">Throwable&nbsp;$e</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line174"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareResponse</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">sendExceptionToHandler</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line175"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line176"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line177"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-21" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">dispatch</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\<strong>RoutesRequests.php</strong>
            </a>
                        (line 92)
        </span>
    </div>
    <div id="trace-html-1-21" class="trace-code sf-toggle-content">
        <ol start="87"><li><a class="anchor" name="line87"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line88"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;{@inheritdoc}</span></span></code></li>
<li><a class="anchor" name="line89"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line90"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">handle</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">SymfonyRequest&nbsp;$request</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line91"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line92"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">dispatch</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line93"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line94"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">count</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">middleware</span><span style="color: var(--highlight-keyword)">)&nbsp;&gt;&nbsp;</span><span style="color: var(--highlight-default)">0</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line95"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callTerminableMiddleware</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line96"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line97"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-22" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\<strong>ResponseCalls.php</strong>
            </a>
                        (line 327)
        </span>
    </div>
    <div id="trace-html-1-22" class="trace-code sf-toggle-content">
        <ol start="322"><li><a class="anchor" name="line322"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$kernel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handle</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line323"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$kernel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">terminate</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line324"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line325"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">//&nbsp;Handle&nbsp;the&nbsp;request&nbsp;using&nbsp;the&nbsp;Lumen&nbsp;application.</span></span></code></li>
<li><a class="anchor" name="line326"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$kernel&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">app</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li class="selected"><a class="anchor" name="line327"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$kernel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handle</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line328"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line329"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line330"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line331"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line332"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-23" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls">ResponseCalls</abbr></span><span class="trace-type">-></span><span class="trace-method">callLaravelOrLumenRoute</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\<strong>ResponseCalls.php</strong>
            </a>
                        (line 304)
        </span>
    </div>
    <div id="trace-html-1-23" class="trace-code sf-toggle-content">
        <ol start="299"><li><a class="anchor" name="line299"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">protected&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">makeApiCall</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">Request&nbsp;$request</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">Route&nbsp;$route</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line300"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line301"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">config</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'router'</span><span style="color: var(--highlight-keyword)">)&nbsp;==&nbsp;</span><span style="color: var(--highlight-string)">'dingo'</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line302"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callDingoRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line303"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line304"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callLaravelOrLumenRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line305"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line306"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line307"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line308"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line309"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-24" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls">ResponseCalls</abbr></span><span class="trace-type">-></span><span class="trace-method">makeApiCall</span><span class="trace-arguments">(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\<strong>ResponseCalls.php</strong>
            </a>
                        (line 76)
        </span>
    </div>
    <div id="trace-html-1-24" class="trace-code sf-toggle-content">
        <ol start="71"><li><a class="anchor" name="line71"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$fileParameters&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">array_merge</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'fileParameters'</span><span style="color: var(--highlight-keyword)">]&nbsp;??&nbsp;[],&nbsp;</span><span style="color: var(--highlight-default)">$hardcodedFileParams</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line72"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line73"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$request&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">prepareRequest</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$urlParameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$bodyParameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$queryParameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$fileParameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'headers'</span><span style="color: var(--highlight-keyword)">]&nbsp;??&nbsp;[]);</span></span></code></li>
<li><a class="anchor" name="line74"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line75"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line76"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">makeApiCall</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$request</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line77"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$response&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[</span></span></code></li>
<li><a class="anchor" name="line78"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span></span></code></li>
<li><a class="anchor" name="line79"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-string)">'status'&nbsp;</span><span style="color: var(--highlight-keyword)">=&gt;&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getStatusCode</span><span style="color: var(--highlight-keyword)">(),</span></span></code></li>
<li><a class="anchor" name="line80"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-string)">'content'&nbsp;</span><span style="color: var(--highlight-keyword)">=&gt;&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getContent</span><span style="color: var(--highlight-keyword)">(),</span></span></code></li>
<li><a class="anchor" name="line81"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-25" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls">ResponseCalls</abbr></span><span class="trace-type">-></span><span class="trace-method">makeResponseCall</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>array</em>('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => <em>array</em>('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => <em>array</em>('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => <em>false</em>), 'urlParameters' => <em>array</em>('article_id' => <em>array</em>('description' => 'Article ID', 'required' => <em>true</em>, 'value' => '1')), 'cleanUrlParameters' => <em>array</em>('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => <em>null</em>, 'queryParameters' => <em>array</em>(), 'cleanQueryParameters' => <em>array</em>(), 'headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => <em>array</em>(), 'cleanBodyParameters' => <em>array</em>(), 'fileParameters' => <em>array</em>(), 'responses' => <em>array</em>()), <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>()))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\<strong>ResponseCalls.php</strong>
            </a>
                        (line 51)
        </span>
    </div>
    <div id="trace-html-1-25" class="trace-code sf-toggle-content">
        <ol start="46"><li><a class="anchor" name="line46"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'response_calls'</span><span style="color: var(--highlight-keyword)">]&nbsp;??&nbsp;[];</span></span></code></li>
<li><a class="anchor" name="line47"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">shouldMakeApiCall</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line48"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line49"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line50"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line51"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">makeResponseCall</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line52"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line53"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line54"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">makeResponseCall</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">Route&nbsp;$route</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line55"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line56"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">configureEnvironment</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">);</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-26" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls">ResponseCalls</abbr></span><span class="trace-type">-></span><span class="trace-method">makeResponseCallIfEnabledAndNoSuccessResponses</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>array</em>('headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>())), <em>array</em>('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => <em>array</em>('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => <em>array</em>('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => <em>false</em>), 'urlParameters' => <em>array</em>('article_id' => <em>array</em>('description' => 'Article ID', 'required' => <em>true</em>, 'value' => '1')), 'cleanUrlParameters' => <em>array</em>('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => <em>null</em>, 'queryParameters' => <em>array</em>(), 'cleanQueryParameters' => <em>array</em>(), 'headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => <em>array</em>(), 'cleanBodyParameters' => <em>array</em>(), 'fileParameters' => <em>array</em>(), 'responses' => <em>array</em>()))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\<strong>ResponseCalls.php</strong>
            </a>
                        (line 41)
        </span>
    </div>
    <div id="trace-html-1-26" class="trace-code sf-toggle-content">
        <ol start="36"><li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li>
<li><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;array|null</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">__invoke</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">Route&nbsp;$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">ReflectionClass&nbsp;$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">ReflectionFunctionAbstract&nbsp;$method</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$alreadyExtractedData&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[])</span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">makeResponseCallIfEnabledAndNoSuccessResponses</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$alreadyExtractedData</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line43"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line44"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">makeResponseCallIfEnabledAndNoSuccessResponses</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">Route&nbsp;$route</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line45"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line46"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'response_calls'</span><span style="color: var(--highlight-keyword)">]&nbsp;??&nbsp;[];</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-27" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls">ResponseCalls</abbr></span><span class="trace-type">-></span><span class="trace-method">__invoke</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>object</em>(<abbr title="ReflectionClass">ReflectionClass</abbr>), <em>object</em>(<abbr title="ReflectionMethod">ReflectionMethod</abbr>), <em>array</em>('headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>())), <em>array</em>('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => <em>array</em>('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => <em>array</em>('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => <em>false</em>), 'urlParameters' => <em>array</em>('article_id' => <em>array</em>('description' => 'Article ID', 'required' => <em>true</em>, 'value' => '1')), 'cleanUrlParameters' => <em>array</em>('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => <em>null</em>, 'queryParameters' => <em>array</em>(), 'cleanQueryParameters' => <em>array</em>(), 'headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => <em>array</em>(), 'cleanBodyParameters' => <em>array</em>(), 'fileParameters' => <em>array</em>(), 'responses' => <em>array</em>()))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\<strong>Generator.php</strong>
            </a>
                        (line 211)
        </span>
    </div>
    <div id="trace-html-1-27" class="trace-code sf-toggle-content">
        <ol start="206"><li><a class="anchor" name="line206"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: var(--highlight-default)">$strategies&nbsp;</span><span style="color: var(--highlight-keyword)">as&nbsp;</span><span style="color: var(--highlight-default)">$strategyClass</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line207"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**&nbsp;@var&nbsp;Strategy&nbsp;$strategy&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line208"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$strategy&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">$strategyClass</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">config</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line209"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$strategyArgs&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$arguments</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line210"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$strategyArgs</span><span style="color: var(--highlight-keyword)">[]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$extractedData</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li class="selected"><a class="anchor" name="line211"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$results&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$strategy</span><span style="color: var(--highlight-keyword)">(...</span><span style="color: var(--highlight-default)">$strategyArgs</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line212"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!&nbsp;</span><span style="color: var(--highlight-default)">is_null</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$results</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line213"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: var(--highlight-default)">$results&nbsp;</span><span style="color: var(--highlight-keyword)">as&nbsp;</span><span style="color: var(--highlight-default)">$index&nbsp;</span><span style="color: var(--highlight-keyword)">=&gt;&nbsp;</span><span style="color: var(--highlight-default)">$item</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line214"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$stage&nbsp;</span><span style="color: var(--highlight-keyword)">==&nbsp;</span><span style="color: var(--highlight-string)">'responses'</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line215"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">//&nbsp;Responses&nbsp;from&nbsp;different&nbsp;strategies&nbsp;are&nbsp;all&nbsp;added,&nbsp;not&nbsp;overwritten</span></span></code></li>
<li><a class="anchor" name="line216"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$extractedData</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">$stage</span><span style="color: var(--highlight-keyword)">][]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$item</span><span style="color: var(--highlight-keyword)">;</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-28" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Generator">Generator</abbr></span><span class="trace-type">-></span><span class="trace-method">iterateThroughStrategies</span><span class="trace-arguments">('responses', <em>array</em>('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => <em>array</em>('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => <em>array</em>('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => <em>false</em>), 'urlParameters' => <em>array</em>('article_id' => <em>array</em>('description' => 'Article ID', 'required' => <em>true</em>, 'value' => '1')), 'cleanUrlParameters' => <em>array</em>('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => <em>null</em>, 'queryParameters' => <em>array</em>(), 'cleanQueryParameters' => <em>array</em>(), 'headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => <em>array</em>(), 'cleanBodyParameters' => <em>array</em>(), 'fileParameters' => <em>array</em>(), 'responses' => <em>array</em>()), <em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>object</em>(<abbr title="ReflectionClass">ReflectionClass</abbr>), <em>object</em>(<abbr title="ReflectionMethod">ReflectionMethod</abbr>), <em>array</em>('headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>()))))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\<strong>Generator.php</strong>
            </a>
                        (line 149)
        </span>
    </div>
    <div id="trace-html-1-28" class="trace-code sf-toggle-content">
        <ol start="144"><li><a class="anchor" name="line144"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">iterateThroughStrategies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'bodyParameters'</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">,&nbsp;[</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line145"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line146"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line147"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">fetchResponses</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">ReflectionClass&nbsp;$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">ReflectionFunctionAbstract&nbsp;$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">Route&nbsp;$route</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$context&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[])</span></span></code></li>
<li><a class="anchor" name="line148"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line149"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$responses&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">iterateThroughStrategies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'responses'</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$context</span><span style="color: var(--highlight-keyword)">,&nbsp;[</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$rulesToApply</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line150"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">count</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$responses</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line151"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">array_filter</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$responses</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;(</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line152"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$response</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'content'</span><span style="color: var(--highlight-keyword)">]&nbsp;!=&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line153"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line154"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-29" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Generator">Generator</abbr></span><span class="trace-type">-></span><span class="trace-method">fetchResponses</span><span class="trace-arguments">(<em>object</em>(<abbr title="ReflectionClass">ReflectionClass</abbr>), <em>object</em>(<abbr title="ReflectionMethod">ReflectionMethod</abbr>), <em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>array</em>('headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>())), <em>array</em>('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => <em>array</em>('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => <em>array</em>('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => <em>false</em>), 'urlParameters' => <em>array</em>('article_id' => <em>array</em>('description' => 'Article ID', 'required' => <em>true</em>, 'value' => '1')), 'cleanUrlParameters' => <em>array</em>('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => <em>null</em>, 'queryParameters' => <em>array</em>(), 'cleanQueryParameters' => <em>array</em>(), 'headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => <em>array</em>(), 'cleanBodyParameters' => <em>array</em>(), 'fileParameters' => <em>array</em>()))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\<strong>Generator.php</strong>
            </a>
                        (line 109)
        </span>
    </div>
    <div id="trace-html-1-29" class="trace-code sf-toggle-content">
        <ol start="104"><li><a class="anchor" name="line104"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'headers'</span><span style="color: var(--highlight-keyword)">][</span><span style="color: var(--highlight-string)">'Content-Type'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;</span><span style="color: var(--highlight-string)">'multipart/form-data'</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line105"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line106"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'fileParameters'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$files</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">toArray</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line107"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'cleanBodyParameters'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$regularParameters</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">toArray</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line108"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line109"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$responses&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">fetchResponses</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line110"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'responses'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$responses</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line111"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'showresponse'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;!&nbsp;empty(</span><span style="color: var(--highlight-default)">$responses</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line112"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line113"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$responseFields&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">fetchResponseFields</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$controller</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeRules</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line114"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoute</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-string)">'responseFields'</span><span style="color: var(--highlight-keyword)">]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$responseFields</span><span style="color: var(--highlight-keyword)">;</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-30" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Extracting\Generator">Generator</abbr></span><span class="trace-type">-></span><span class="trace-method">processRoute</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\LumenRouteAdapter">LumenRouteAdapter</abbr>), <em>array</em>('headers' => <em>array</em>('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => <em>array</em>('methods' => <em>array</em>('GET'), 'config' => <em>array</em>('app.env' => 'documentation'), 'cookies' => <em>array</em>(), 'queryParams' => <em>array</em>(), 'bodyParams' => <em>array</em>(), 'fileParams' => <em>array</em>())))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Commands\<strong>GenerateDocumentation.php</strong>
            </a>
                        (line 118)
        </span>
    </div>
    <div id="trace-html-1-30" class="trace-code sf-toggle-content">
        <ol start="113"><li><a class="anchor" name="line113"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">warn</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'Skipping&nbsp;route:&nbsp;'</span><span style="color: var(--highlight-keyword)">.&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">getRouteRepresentation</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">).&nbsp;</span><span style="color: var(--highlight-string)">':&nbsp;@hideFromAPIDocumentation&nbsp;was&nbsp;specified.'</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line114"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;</span></span></code></li>
<li><a class="anchor" name="line115"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line116"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line117"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line118"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoutes</span><span style="color: var(--highlight-keyword)">[]&nbsp;=&nbsp;</span><span style="color: var(--highlight-default)">$generator</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">processRoute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$routeItem</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getRules</span><span style="color: var(--highlight-keyword)">());</span></span></code></li>
<li><a class="anchor" name="line119"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">info</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'Processed&nbsp;route:&nbsp;'</span><span style="color: var(--highlight-keyword)">.&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">getRouteRepresentation</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line120"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(\</span><span style="color: var(--highlight-default)">Exception&nbsp;$exception</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line121"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">warn</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'Skipping&nbsp;route:&nbsp;'</span><span style="color: var(--highlight-keyword)">.&nbsp;</span><span style="color: var(--highlight-default)">c</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">getRouteRepresentation</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$route</span><span style="color: var(--highlight-keyword)">)&nbsp;.&nbsp;</span><span style="color: var(--highlight-string)">'&nbsp;-&nbsp;Exception&nbsp;encountered.'</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line122"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">e</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">dumpExceptionIfVerbose</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$exception</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line123"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-31" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr></span><span class="trace-type">-></span><span class="trace-method">processRoutes</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\Match">Match</abbr>), <em>object</em>(<abbr title="Knuckles\Scribe\Matching\Match">Match</abbr>)))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\knuckleswtf\scribe\src\Commands\<strong>GenerateDocumentation.php</strong>
            </a>
                        (line 73)
        </span>
    </div>
    <div id="trace-html-1-31" class="trace-code sf-toggle-content">
        <ol start="68"><li><a class="anchor" name="line68"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;</span></span></code></li>
<li><a class="anchor" name="line69"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line70"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line71"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$routes&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$routeMatcher</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getRoutes</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">docConfig</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'routes'</span><span style="color: var(--highlight-keyword)">),&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">docConfig</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">get</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'router'</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line72"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line73"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$parsedRoutes&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">processRoutes</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$routes</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line74"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line75"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$groupedRoutes&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">collect</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$parsedRoutes</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line76"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: var(--highlight-default)">groupBy</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'metadata.groupName'</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line77"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: var(--highlight-default)">sortBy</span><span style="color: var(--highlight-keyword)">(static&nbsp;function&nbsp;(</span><span style="color: var(--highlight-default)">$group</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line78"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/*&nbsp;@var&nbsp;$group&nbsp;Collection&nbsp;*/</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words " data-toggle-selector="#trace-html-1-32" data-toggle-initial="">
    
            <span class="trace-class"><abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\RouteMatcher">RouteMatcher</abbr>))</span>    
    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-33" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title=""></abbr></span><span class="trace-method">call_user_func_array</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr>), 'handle'), <em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Matching\RouteMatcher">RouteMatcher</abbr>)))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 37)
        </span>
    </div>
    <div id="trace-html-1-33" class="trace-code sf-toggle-content">
        <ol start="32"><li><a class="anchor" name="line32"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callClass</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line33"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callBoundMethod</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">call_user_func_array</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;static::</span><span style="color: var(--highlight-default)">getMethodDependencies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-34" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">Illuminate\Container\{closure}</span><span class="trace-arguments">()</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>Util.php</strong>
            </a>
                        (line 37)
        </span>
    </div>
    <div id="trace-html-1-34" class="trace-code sf-toggle-content">
        <ol start="32"><li><a class="anchor" name="line32"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;&nbsp;mixed&nbsp;&nbsp;$value</span></span></code></li>
<li><a class="anchor" name="line33"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;mixed</span></span></code></li>
<li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">unwrapIfClosure</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$value&nbsp;</span><span style="color: var(--highlight-keyword)">instanceof&nbsp;</span><span style="color: var(--highlight-default)">Closure&nbsp;</span><span style="color: var(--highlight-keyword)">?&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">()&nbsp;:&nbsp;</span><span style="color: var(--highlight-default)">$value</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Get&nbsp;the&nbsp;class&nbsp;name&nbsp;of&nbsp;the&nbsp;given&nbsp;parameter's&nbsp;type,&nbsp;if&nbsp;possible.</span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-35" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\Util">Util</abbr></span><span class="trace-type">::</span><span class="trace-method">unwrapIfClosure</span><span class="trace-arguments">(<em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 95)
        </span>
    </div>
    <div id="trace-html-1-35" class="trace-code sf-toggle-content">
        <ol start="90"><li><a class="anchor" name="line90"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line91"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">hasMethodBinding</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line92"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">callMethodBinding</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$method</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">[</span><span style="color: var(--highlight-default)">0</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line93"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line94"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line95"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">Util</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">unwrapIfClosure</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$default</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line96"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line97"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line98"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line99"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Normalize&nbsp;the&nbsp;given&nbsp;callback&nbsp;into&nbsp;a&nbsp;Class@method&nbsp;string.</span></span></code></li>
<li><a class="anchor" name="line100"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-36" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">callBoundMethod</span><span class="trace-arguments">(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr>), 'handle'), <em>object</em>(<abbr title="Closure">Closure</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>BoundMethod.php</strong>
            </a>
                        (line 39)
        </span>
    </div>
    <div id="trace-html-1-36" class="trace-code sf-toggle-content">
        <ol start="34"><li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;static::</span><span style="color: var(--highlight-default)">callBoundMethod</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;function&nbsp;()&nbsp;use&nbsp;(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">call_user_func_array</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line37"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;static::</span><span style="color: var(--highlight-default)">getMethodDependencies</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$container</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line38"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li class="selected"><a class="anchor" name="line39"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</span></span></code></li>
<li><a class="anchor" name="line40"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line41"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line42"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line43"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Call&nbsp;a&nbsp;string&nbsp;reference&nbsp;to&nbsp;a&nbsp;class&nbsp;using&nbsp;Class@method&nbsp;syntax.</span></span></code></li>
<li><a class="anchor" name="line44"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-37" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr></span><span class="trace-type">::</span><span class="trace-method">call</span><span class="trace-arguments">(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr>), 'handle'), <em>array</em>(), <em>null</em>)</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\container\<strong>Container.php</strong>
            </a>
                        (line 596)
        </span>
    </div>
    <div id="trace-html-1-37" class="trace-code sf-toggle-content">
        <ol start="591"><li><a class="anchor" name="line591"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li>
<li><a class="anchor" name="line592"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@throws&nbsp;\InvalidArgumentException</span></span></code></li>
<li><a class="anchor" name="line593"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line594"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;array&nbsp;</span><span style="color: var(--highlight-default)">$parameters&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;[],&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line595"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line596"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">BoundMethod</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$callback</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$parameters</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$defaultMethod</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line597"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line598"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line599"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line600"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Get&nbsp;a&nbsp;closure&nbsp;to&nbsp;resolve&nbsp;the&nbsp;given&nbsp;type&nbsp;from&nbsp;the&nbsp;container.</span></span></code></li>
<li><a class="anchor" name="line601"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-38" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Container\Container">Container</abbr></span><span class="trace-type">-></span><span class="trace-method">call</span><span class="trace-arguments">(<em>array</em>(<em>object</em>(<abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr>), 'handle'))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\console\<strong>Command.php</strong>
            </a>
                        (line 134)
        </span>
    </div>
    <div id="trace-html-1-38" class="trace-code sf-toggle-content">
        <ol start="129"><li><a class="anchor" name="line129"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;&nbsp;\Symfony\Component\Console\Output\OutputInterface&nbsp;&nbsp;$output</span></span></code></li>
<li><a class="anchor" name="line130"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;int</span></span></code></li>
<li><a class="anchor" name="line131"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/</span></span></code></li>
<li><a class="anchor" name="line132"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">protected&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">execute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">InputInterface&nbsp;$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">OutputInterface&nbsp;$output</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line133"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line134"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">laravel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">call</span><span style="color: var(--highlight-keyword)">([</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-string)">'handle'</span><span style="color: var(--highlight-keyword)">]);</span></span></code></li>
<li><a class="anchor" name="line135"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line136"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line137"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line138"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Resolve&nbsp;the&nbsp;console&nbsp;command&nbsp;instance&nbsp;for&nbsp;the&nbsp;given&nbsp;command.</span></span></code></li>
<li><a class="anchor" name="line139"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-39" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Console\Command">Command</abbr></span><span class="trace-type">-></span><span class="trace-method">execute</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Illuminate\Console\OutputStyle">OutputStyle</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\symfony\console\Command\<strong>Command.php</strong>
            </a>
                        (line 258)
        </span>
    </div>
    <div id="trace-html-1-39" class="trace-code sf-toggle-content">
        <ol start="253"><li><a class="anchor" name="line253"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">validate</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line254"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line255"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">code</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line256"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$statusCode&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;(</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">code</span><span style="color: var(--highlight-keyword)">)(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line257"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line258"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$statusCode&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">execute</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line259"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line260"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!\</span><span style="color: var(--highlight-default)">is_int</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$statusCode</span><span style="color: var(--highlight-keyword)">))&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line261"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;\</span><span style="color: var(--highlight-default)">TypeError</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">sprintf</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-string)">'Return&nbsp;value&nbsp;of&nbsp;"%s::execute()"&nbsp;must&nbsp;be&nbsp;of&nbsp;the&nbsp;type&nbsp;int,&nbsp;"%s"&nbsp;returned.'</span><span style="color: var(--highlight-keyword)">,&nbsp;static::class,&nbsp;</span><span style="color: var(--highlight-default)">get_debug_type</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$statusCode</span><span style="color: var(--highlight-keyword)">)));</span></span></code></li>
<li><a class="anchor" name="line262"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line263"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-40" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Symfony\Component\Console\Command\Command">Command</abbr></span><span class="trace-type">-></span><span class="trace-method">run</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Illuminate\Console\OutputStyle">OutputStyle</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\console\<strong>Command.php</strong>
            </a>
                        (line 121)
        </span>
    </div>
    <div id="trace-html-1-40" class="trace-code sf-toggle-content">
        <ol start="116"><li><a class="anchor" name="line116"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">output&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">laravel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">make</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line117"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">OutputStyle</span><span style="color: var(--highlight-keyword)">::class,&nbsp;[</span><span style="color: var(--highlight-string)">'input'&nbsp;</span><span style="color: var(--highlight-keyword)">=&gt;&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-string)">'output'&nbsp;</span><span style="color: var(--highlight-keyword)">=&gt;&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">]</span></span></code></li>
<li><a class="anchor" name="line118"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line119"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line120"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">parent</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">run</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li class="selected"><a class="anchor" name="line121"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">input&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">output</span></span></code></li>
<li><a class="anchor" name="line122"></a><code><span style="color: var(--highlight-default)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line123"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line124"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line125"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">/**</span></span></code></li>
<li><a class="anchor" name="line126"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Execute&nbsp;the&nbsp;console&nbsp;command.</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-41" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Console\Command">Command</abbr></span><span class="trace-type">-></span><span class="trace-method">run</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\symfony\console\<strong>Application.php</strong>
            </a>
                        (line 911)
        </span>
    </div>
    <div id="trace-html-1-41" class="trace-code sf-toggle-content">
        <ol start="906"><li><a class="anchor" name="line906"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$helper</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">setInput</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line907"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line908"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line909"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line910"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: var(--highlight-default)">null&nbsp;</span><span style="color: var(--highlight-keyword)">===&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">dispatcher</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line911"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$command</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">run</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line912"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line913"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line914"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-comment)">//&nbsp;bind&nbsp;before&nbsp;the&nbsp;console.command&nbsp;event,&nbsp;so&nbsp;the&nbsp;listeners&nbsp;have&nbsp;access&nbsp;to&nbsp;input&nbsp;options/arguments</span></span></code></li>
<li><a class="anchor" name="line915"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">try&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line916"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$command</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">mergeApplicationDefinition</span><span style="color: var(--highlight-keyword)">();</span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-42" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Symfony\Component\Console\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">doRunCommand</span><span class="trace-arguments">(<em>object</em>(<abbr title="Knuckles\Scribe\Commands\GenerateDocumentation">GenerateDocumentation</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\symfony\console\<strong>Application.php</strong>
            </a>
                        (line 264)
        </span>
    </div>
    <div id="trace-html-1-42" class="trace-code sf-toggle-content">
        <ol start="259"><li><a class="anchor" name="line259"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line260"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$command&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">find</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$alternative</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line261"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line262"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line263"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">runningCommand&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$command</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li class="selected"><a class="anchor" name="line264"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$exitCode&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">doRunCommand</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$command</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line265"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">runningCommand&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line266"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line267"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$exitCode</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line268"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line269"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-43" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Symfony\Component\Console\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">doRun</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\symfony\console\<strong>Application.php</strong>
            </a>
                        (line 140)
        </span>
    </div>
    <div id="trace-html-1-43" class="trace-code sf-toggle-content">
        <ol start="135"><li><a class="anchor" name="line135"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line136"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line137"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">configureIO</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line138"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line139"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li class="selected"><a class="anchor" name="line140"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$exitCode&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">doRun</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line141"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(\</span><span style="color: var(--highlight-default)">Exception&nbsp;$e</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line142"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">catchExceptions</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line143"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">;</span></span></code></li>
<li><a class="anchor" name="line144"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</span></span></code></li>
<li><a class="anchor" name="line145"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-44" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Symfony\Component\Console\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">run</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\illuminate\console\<strong>Application.php</strong>
            </a>
                        (line 93)
        </span>
    </div>
    <div id="trace-html-1-44" class="trace-code sf-toggle-content">
        <ol start="88"><li><a class="anchor" name="line88"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">CommandStarting</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line89"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$commandName</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$output&nbsp;</span><span style="color: var(--highlight-keyword)">?:&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">ConsoleOutput</span></span></code></li>
<li><a class="anchor" name="line90"></a><code><span style="color: var(--highlight-default)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line91"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line92"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line93"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$exitCode&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">parent</span><span style="color: var(--highlight-keyword)">::</span><span style="color: var(--highlight-default)">run</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line94"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line95"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">events</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">dispatch</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line96"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">CommandFinished</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$commandName</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$exitCode</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line97"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span></span></code></li>
<li><a class="anchor" name="line98"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-45" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Illuminate\Console\Application">Application</abbr></span><span class="trace-type">-></span><span class="trace-method">run</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\vendor\laravel\lumen-framework\src\Console\<strong>Kernel.php</strong>
            </a>
                        (line 116)
        </span>
    </div>
    <div id="trace-html-1-45" class="trace-code sf-toggle-content">
        <ol start="111"><li><a class="anchor" name="line111"></a><code><span style="color: var(--highlight-comment)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-keyword)">public&nbsp;function&nbsp;</span><span style="color: var(--highlight-default)">handle</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">null</span><span style="color: var(--highlight-keyword)">)</span></span></code></li>
<li><a class="anchor" name="line112"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line113"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line114"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">app</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">boot</span><span style="color: var(--highlight-keyword)">();</span></span></code></li>
<li><a class="anchor" name="line115"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line116"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">getArtisan</span><span style="color: var(--highlight-keyword)">()-&gt;</span><span style="color: var(--highlight-default)">run</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$input</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line117"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: var(--highlight-default)">Throwable&nbsp;$e</span><span style="color: var(--highlight-keyword)">)&nbsp;{</span></span></code></li>
<li><a class="anchor" name="line118"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">reportException</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line119"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li><a class="anchor" name="line120"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-default)">$this</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">renderException</span><span style="color: var(--highlight-keyword)">(</span><span style="color: var(--highlight-default)">$output</span><span style="color: var(--highlight-keyword)">,&nbsp;</span><span style="color: var(--highlight-default)">$e</span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line121"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li></ol>    </div>            </div>
                        <div class="trace-line ">
                <div class="trace-line-header break-long-words sf-toggle" data-toggle-selector="#trace-html-1-46" data-toggle-initial="">
            <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
        <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1408 960V832q0-26-19-45t-45-19h-320V448q0-26-19-45t-45-19H832q-26 0-45 19t-19 45v320H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z"/></svg></span>
    
            <span class="trace-class"><abbr title="Laravel\Lumen\Console\Kernel">Kernel</abbr></span><span class="trace-type">-></span><span class="trace-method">handle</span><span class="trace-arguments">(<em>object</em>(<abbr title="Symfony\Component\Console\Input\ArgvInput">ArgvInput</abbr>), <em>object</em>(<abbr title="Symfony\Component\Console\Output\ConsoleOutput">ConsoleOutput</abbr>))</span>    
                    <span class="block trace-file-path">
            in
            <a href="">
                C:\IFA\blog\<strong>artisan</strong>
            </a>
                        (line 35)
        </span>
    </div>
    <div id="trace-html-1-46" class="trace-code sf-toggle-content">
        <ol start="30"><li><a class="anchor" name="line30"></a><code><span style="color: var(--highlight-comment)"></span></span></code></li>
<li><a class="anchor" name="line31"></a><code><span style="color: var(--highlight-comment)"></span><span style="color: var(--highlight-default)">$kernel&nbsp;</span><span style="color: var(--highlight-keyword)">=&nbsp;</span><span style="color: var(--highlight-default)">$app</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">make</span><span style="color: var(--highlight-keyword)">(</span></span></code></li>
<li><a class="anchor" name="line32"></a><code><span style="color: var(--highlight-keyword)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: var(--highlight-string)">'Illuminate\Contracts\Console\Kernel'</span></span></code></li>
<li><a class="anchor" name="line33"></a><code><span style="color: var(--highlight-string)"></span><span style="color: var(--highlight-keyword)">);</span></span></code></li>
<li><a class="anchor" name="line34"></a><code><span style="color: var(--highlight-keyword)"></span></span></code></li>
<li class="selected"><a class="anchor" name="line35"></a><code><span style="color: var(--highlight-keyword)">exit(</span><span style="color: var(--highlight-default)">$kernel</span><span style="color: var(--highlight-keyword)">-&gt;</span><span style="color: var(--highlight-default)">handle</span><span style="color: var(--highlight-keyword)">(new&nbsp;</span><span style="color: var(--highlight-default)">ArgvInput</span><span style="color: var(--highlight-keyword)">,&nbsp;new&nbsp;</span><span style="color: var(--highlight-default)">ConsoleOutput</span><span style="color: var(--highlight-keyword)">));</span></span></code></li>
<li><a class="anchor" name="line36"></a><code><span style="color: var(--highlight-keyword)"></span>
</span></code></li></ol>    </div>            </div>
                    </div>
    </div>
</div>            </div>
        </div>

        
        <div class="tab">
            <h3 class="tab-title">
                                    Stack Trace
                            </h3>

            <div class="tab-content">
                <table class="trace trace-as-text">
    <thead class="trace-head">
        <tr>
            <th class="sf-toggle" data-toggle-selector="#trace-text-1" data-toggle-initial="display">
                <h3 class="trace-class">
                                        Error                    <span class="icon icon-close"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1344 800v64q0 14-9 23t-23 9H480q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h832q14 0 23 9t9 23zm128 448V416q0-66-47-113t-113-47H480q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113zm128-832v832q0 119-84.5 203.5T1312 1536H480q-119 0-203.5-84.5T192 1248V416q0-119 84.5-203.5T480 128h832q119 0 203.5 84.5T1600 416z"/></svg></span>
                    <span class="icon icon-open"><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1344 800v64q0 14-9 23t-23 9H960v352q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V896H480q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h352V416q0-14 9-23t23-9h64q14 0 23 9t9 23v352h352q14 0 23 9t9 23zm128 448V416q0-66-47-113t-113-47H480q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113zm128-832v832q0 119-84.5 203.5T1312 1536H480q-119 0-203.5-84.5T192 1248V416q0-119 84.5-203.5T480 128h832q119 0 203.5 84.5T1600 416z"/></svg></span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id="trace-text-1">
        <tr>
            <td>
                                <pre class="stacktrace">
Error:
Call to a member function parameter() on array

  at C:\IFA\blog\vendor\illuminate\http\Request.php:536
  at Illuminate\Http\Request-&gt;route('article_id')
     (C:\IFA\blog\vendor\illuminate\http\Request.php:699)
  at Illuminate\Http\Request-&gt;Illuminate\Http\{closure}()
     (C:\IFA\blog\vendor\illuminate\support\helpers.php:532)
  at value(object(Closure))
     (C:\IFA\blog\vendor\illuminate\support\Arr.php:297)
  at Illuminate\Support\Arr::get(array(), 'article_id', object(Closure))
     (C:\IFA\blog\vendor\illuminate\http\Request.php:700)
  at Illuminate\Http\Request-&gt;__get('article_id')
     (C:\IFA\blog\app\Http\Controllers\ArticleController.php:47)
  at App\Http\Controllers\ArticleController-&gt;retrieve(object(Request), '1')
  at call_user_func_array(array(object(ArticleController), 'retrieve'), array(object(Request), 'article_id' => '1'))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:37)
  at Illuminate\Container\BoundMethod::Illuminate\Container\{closure}()
     (C:\IFA\blog\vendor\illuminate\container\Util.php:37)
  at Illuminate\Container\Util::unwrapIfClosure(object(Closure))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:95)
  at Illuminate\Container\BoundMethod::callBoundMethod(object(Application), array(object(ArticleController), 'retrieve'), object(Closure))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:39)
  at Illuminate\Container\BoundMethod::call(object(Application), array(object(ArticleController), 'retrieve'), array('article_id' => '1'), null)
     (C:\IFA\blog\vendor\illuminate\container\Container.php:596)
  at Illuminate\Container\Container-&gt;call(array(object(ArticleController), 'retrieve'), array('article_id' => '1'))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:386)
  at Laravel\Lumen\Application-&gt;callControllerCallable(array(object(ArticleController), 'retrieve'), array('article_id' => '1'))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:352)
  at Laravel\Lumen\Application-&gt;callLumenController(object(ArticleController), 'retrieve', array(1, array('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), array('article_id' => '1')))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:326)
  at Laravel\Lumen\Application-&gt;callControllerAction(array(1, array('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), array('article_id' => '1')))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:279)
  at Laravel\Lumen\Application-&gt;callActionOnArrayBasedRoute(array(1, array('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), array('article_id' => '1')))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:264)
  at Laravel\Lumen\Application-&gt;handleFoundRoute(array(1, array('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), array('article_id' => '1')))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:234)
  at Laravel\Lumen\Application-&gt;handleDispatcherResponse(array(1, array('uses' => 'App\\Http\\Controllers\\ArticleController@retrieve'), array('article_id' => '1')))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:170)
  at Laravel\Lumen\Application-&gt;Laravel\Lumen\Concerns\{closure}(object(Request))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:426)
  at Laravel\Lumen\Application-&gt;sendThroughPipeline(array(), object(Closure))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:172)
  at Laravel\Lumen\Application-&gt;dispatch(object(Request))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Concerns\RoutesRequests.php:92)
  at Laravel\Lumen\Application-&gt;handle(object(Request))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\ResponseCalls.php:327)
  at Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls-&gt;callLaravelOrLumenRoute(object(Request))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\ResponseCalls.php:304)
  at Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls-&gt;makeApiCall(object(Request), object(LumenRouteAdapter))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\ResponseCalls.php:76)
  at Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls-&gt;makeResponseCall(object(LumenRouteAdapter), array('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => array('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => array('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => false), 'urlParameters' => array('article_id' => array('description' => 'Article ID', 'required' => true, 'value' => '1')), 'cleanUrlParameters' => array('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => null, 'queryParameters' => array(), 'cleanQueryParameters' => array(), 'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => array(), 'cleanBodyParameters' => array(), 'fileParameters' => array(), 'responses' => array()), array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array()))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\ResponseCalls.php:51)
  at Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls-&gt;makeResponseCallIfEnabledAndNoSuccessResponses(object(LumenRouteAdapter), array('headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array())), array('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => array('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => array('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => false), 'urlParameters' => array('article_id' => array('description' => 'Article ID', 'required' => true, 'value' => '1')), 'cleanUrlParameters' => array('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => null, 'queryParameters' => array(), 'cleanQueryParameters' => array(), 'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => array(), 'cleanBodyParameters' => array(), 'fileParameters' => array(), 'responses' => array()))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Strategies\Responses\ResponseCalls.php:41)
  at Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls-&gt;__invoke(object(LumenRouteAdapter), object(ReflectionClass), object(ReflectionMethod), array('headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array())), array('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => array('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => array('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => false), 'urlParameters' => array('article_id' => array('description' => 'Article ID', 'required' => true, 'value' => '1')), 'cleanUrlParameters' => array('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => null, 'queryParameters' => array(), 'cleanQueryParameters' => array(), 'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => array(), 'cleanBodyParameters' => array(), 'fileParameters' => array(), 'responses' => array()))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Generator.php:211)
  at Knuckles\Scribe\Extracting\Generator-&gt;iterateThroughStrategies('responses', array('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => array('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => array('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => false), 'urlParameters' => array('article_id' => array('description' => 'Article ID', 'required' => true, 'value' => '1')), 'cleanUrlParameters' => array('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => null, 'queryParameters' => array(), 'cleanQueryParameters' => array(), 'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => array(), 'cleanBodyParameters' => array(), 'fileParameters' => array(), 'responses' => array()), array(object(LumenRouteAdapter), object(ReflectionClass), object(ReflectionMethod), array('headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array()))))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Generator.php:149)
  at Knuckles\Scribe\Extracting\Generator-&gt;fetchResponses(object(ReflectionClass), object(ReflectionMethod), object(LumenRouteAdapter), array('headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array())), array('id' => 'cec460706292bc4f1f2b79da7f4b5fb8', 'methods' => array('GET'), 'uri' => 'blog/articles/{article_id}', 'metadata' => array('groupName' => 'Articles', 'groupDescription' => '', 'title' => 'Retrieve an article', 'description' => 'Retrieve an article by his ID.', 'authenticated' => false), 'urlParameters' => array('article_id' => array('description' => 'Article ID', 'required' => true, 'value' => '1')), 'cleanUrlParameters' => array('article_id' => '1'), 'boundUri' => 'blog/articles/1', 'auth' => null, 'queryParameters' => array(), 'cleanQueryParameters' => array(), 'headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'bodyParameters' => array(), 'cleanBodyParameters' => array(), 'fileParameters' => array()))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Extracting\Generator.php:109)
  at Knuckles\Scribe\Extracting\Generator-&gt;processRoute(object(LumenRouteAdapter), array('headers' => array('Content-Type' => 'application/json', 'Accept' => 'application/json'), 'response_calls' => array('methods' => array('GET'), 'config' => array('app.env' => 'documentation'), 'cookies' => array(), 'queryParams' => array(), 'bodyParams' => array(), 'fileParams' => array())))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Commands\GenerateDocumentation.php:118)
  at Knuckles\Scribe\Commands\GenerateDocumentation-&gt;processRoutes(array(object(Match), object(Match)))
     (C:\IFA\blog\vendor\knuckleswtf\scribe\src\Commands\GenerateDocumentation.php:73)
  at Knuckles\Scribe\Commands\GenerateDocumentation-&gt;handle(object(RouteMatcher))
  at call_user_func_array(array(object(GenerateDocumentation), 'handle'), array(object(RouteMatcher)))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:37)
  at Illuminate\Container\BoundMethod::Illuminate\Container\{closure}()
     (C:\IFA\blog\vendor\illuminate\container\Util.php:37)
  at Illuminate\Container\Util::unwrapIfClosure(object(Closure))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:95)
  at Illuminate\Container\BoundMethod::callBoundMethod(object(Application), array(object(GenerateDocumentation), 'handle'), object(Closure))
     (C:\IFA\blog\vendor\illuminate\container\BoundMethod.php:39)
  at Illuminate\Container\BoundMethod::call(object(Application), array(object(GenerateDocumentation), 'handle'), array(), null)
     (C:\IFA\blog\vendor\illuminate\container\Container.php:596)
  at Illuminate\Container\Container-&gt;call(array(object(GenerateDocumentation), 'handle'))
     (C:\IFA\blog\vendor\illuminate\console\Command.php:134)
  at Illuminate\Console\Command-&gt;execute(object(ArgvInput), object(OutputStyle))
     (C:\IFA\blog\vendor\symfony\console\Command\Command.php:258)
  at Symfony\Component\Console\Command\Command-&gt;run(object(ArgvInput), object(OutputStyle))
     (C:\IFA\blog\vendor\illuminate\console\Command.php:121)
  at Illuminate\Console\Command-&gt;run(object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\vendor\symfony\console\Application.php:911)
  at Symfony\Component\Console\Application-&gt;doRunCommand(object(GenerateDocumentation), object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\vendor\symfony\console\Application.php:264)
  at Symfony\Component\Console\Application-&gt;doRun(object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\vendor\symfony\console\Application.php:140)
  at Symfony\Component\Console\Application-&gt;run(object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\vendor\illuminate\console\Application.php:93)
  at Illuminate\Console\Application-&gt;run(object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\vendor\laravel\lumen-framework\src\Console\Kernel.php:116)
  at Laravel\Lumen\Console\Kernel-&gt;handle(object(ArgvInput), object(ConsoleOutput))
     (C:\IFA\blog\artisan:35)                </pre>
                            </td>
        </tr>
    </tbody>
</table>            </div>
        </div>

            </div>
</div>
        <script>
            /* This file is based on WebProfilerBundle/Resources/views/Profiler/base_js.html.twig.
   If you make any change in this file, verify the same change is needed in the other file. */
/*<![CDATA[*/
Sfjs = (function() {
    "use strict";

    if ('classList' in document.documentElement) {
        var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
        var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
        var addClass = function(el, cssClass) { el.classList.add(cssClass); };
        var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
    } else {
        var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\b' + cssClass + '\\b')); };
        var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\b' + cssClass + '\\b'), ' '); };
        var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += " " + cssClass; } };
        var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
    }

    var addEventListener;

    var el = document.createElement('div');
    if (!('addEventListener' in el)) {
        addEventListener = function (element, eventName, callback) {
            element.attachEvent('on' + eventName, callback);
        };
    } else {
        addEventListener = function (element, eventName, callback) {
            element.addEventListener(eventName, callback, false);
        };
    }

    return {
        addEventListener: addEventListener,

        createTabs: function() {
            var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

            /* create the tab navigation for each group of tabs */
            for (var i = 0; i < tabGroups.length; i++) {
                var tabs = tabGroups[i].querySelectorAll(':scope > .tab');
                var tabNavigation = document.createElement('ul');
                tabNavigation.className = 'tab-navigation';

                var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */
                for (var j = 0; j < tabs.length; j++) {
                    var tabId = 'tab-' + i + '-' + j;
                    var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                    var tabNavigationItem = document.createElement('li');
                    tabNavigationItem.setAttribute('data-tab-id', tabId);
                    if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }
                    if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }
                    tabNavigationItem.innerHTML = tabTitle;
                    tabNavigation.appendChild(tabNavigationItem);

                    var tabContent = tabs[j].querySelector('.tab-content');
                    tabContent.parentElement.setAttribute('id', tabId);
                }

                tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                addClass(document.querySelector('[data-tab-id="' + selectedTabId + '"]'), 'active');
            }

            /* display the active tab and add the 'click' event listeners */
            for (i = 0; i < tabGroups.length; i++) {
                tabNavigation = tabGroups[i].querySelectorAll(':scope >.tab-navigation li');

                for (j = 0; j < tabNavigation.length; j++) {
                    tabId = tabNavigation[j].getAttribute('data-tab-id');
                    document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                    if (hasClass(tabNavigation[j], 'active')) {
                        document.getElementById(tabId).className = 'block';
                    } else {
                        document.getElementById(tabId).className = 'hidden';
                    }

                    tabNavigation[j].addEventListener('click', function(e) {
                        var activeTab = e.target || e.srcElement;

                        /* needed because when the tab contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '<li>' element */
                        while (activeTab.tagName.toLowerCase() !== 'li') {
                            activeTab = activeTab.parentNode;
                        }

                        /* get the full list of tabs through the parent of the active tab element */
                        var tabNavigation = activeTab.parentNode.children;
                        for (var k = 0; k < tabNavigation.length; k++) {
                            var tabId = tabNavigation[k].getAttribute('data-tab-id');
                            document.getElementById(tabId).className = 'hidden';
                            removeClass(tabNavigation[k], 'active');
                        }

                        addClass(activeTab, 'active');
                        var activeTabId = activeTab.getAttribute('data-tab-id');
                        document.getElementById(activeTabId).className = 'block';
                    });
                }

                tabGroups[i].setAttribute('data-processed', 'true');
            }
        },

        createToggles: function() {
            var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');

            for (var i = 0; i < toggles.length; i++) {
                var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                var element = document.querySelector(elementSelector);

                addClass(element, 'sf-toggle-content');

                if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                    addClass(toggles[i], 'sf-toggle-on');
                    addClass(element, 'sf-toggle-visible');
                } else {
                    addClass(toggles[i], 'sf-toggle-off');
                    addClass(element, 'sf-toggle-hidden');
                }

                addEventListener(toggles[i], 'click', function(e) {
                    e.preventDefault();

                    if ('' !== window.getSelection().toString()) {
                        /* Don't do anything on text selection */
                        return;
                    }

                    var toggle = e.target || e.srcElement;

                    /* needed because when the toggle contains HTML contents, user can click */
                    /* on any of those elements instead of their parent '.sf-toggle' element */
                    while (!hasClass(toggle, 'sf-toggle')) {
                        toggle = toggle.parentNode;
                    }

                    var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                    toggleClass(toggle, 'sf-toggle-on');
                    toggleClass(toggle, 'sf-toggle-off');
                    toggleClass(element, 'sf-toggle-hidden');
                    toggleClass(element, 'sf-toggle-visible');

                    /* the toggle doesn't change its contents when clicking on it */
                    if (!toggle.hasAttribute('data-toggle-alt-content')) {
                        return;
                    }

                    if (!toggle.hasAttribute('data-toggle-original-content')) {
                        toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                    }

                    var currentContent = toggle.innerHTML;
                    var originalContent = toggle.getAttribute('data-toggle-original-content');
                    var altContent = toggle.getAttribute('data-toggle-alt-content');
                    toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                });

                /* Prevents from disallowing clicks on links inside toggles */
                var toggleLinks = toggles[i].querySelectorAll('a');
                for (var j = 0; j < toggleLinks.length; j++) {
                    addEventListener(toggleLinks[j], 'click', function(e) {
                        e.stopPropagation();
                    });
                }

                toggles[i].setAttribute('data-processed', 'true');
            }
        },

        createFilters: function() {
            document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {
                var filters = filter.closest('[data-filters]'),
                    type = 'choice',
                    name = filter.dataset.filter,
                    ucName = name.charAt(0).toUpperCase()+name.slice(1),
                    list = document.createElement('ul'),
                    values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),
                    labels = {},
                    defaults = null,
                    indexed = {},
                    processed = {};
                if (typeof values === 'string') {
                    type = 'level';
                    labels = values.split(',');
                    values = values.toLowerCase().split(',');
                    defaults = values.length - 1;
                }
                addClass(list, 'filter-list');
                addClass(list, 'filter-list-'+type);
                values.forEach(function (value, i) {
                    if (value instanceof HTMLElement) {
                        value = value.dataset['filter'+ucName];
                    }
                    if (value in processed) {
                        return;
                    }
                    var option = document.createElement('li'),
                        label = i in labels ? labels[i] : value,
                        active = false,
                        matches;
                    if ('' === label) {
                        option.innerHTML = '<em>(none)</em>';
                    } else {
                        option.innerText = label;
                    }
                    option.dataset.filter = value;
                    option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'="'+value+'"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');
                    indexed[value] = i;
                    list.appendChild(option);
                    addEventListener(option, 'click', function () {
                        if ('choice' === type) {
                            filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                if (option.dataset.filter === row.dataset['filter'+ucName]) {
                                    toggleClass(row, 'filter-hidden-'+name);
                                }
                            });
                            toggleClass(option, 'active');
                        } else if ('level' === type) {
                            if (i === this.parentNode.querySelectorAll('.active').length - 1) {
                                return;
                            }
                            this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {
                                if (j <= i) {
                                    addClass(currentOption, 'active');
                                    if (i === j) {
                                        addClass(currentOption, 'last-active');
                                    } else {
                                        removeClass(currentOption, 'last-active');
                                    }
                                } else {
                                    removeClass(currentOption, 'active');
                                    removeClass(currentOption, 'last-active');
                                }
                            });
                            filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                if (i < indexed[row.dataset['filter'+ucName]]) {
                                    addClass(row, 'filter-hidden-'+name);
                                } else {
                                    removeClass(row, 'filter-hidden-'+name);
                                }
                            });
                        }
                    });
                    if ('choice' === type) {
                        active = null === defaults || 0 <= defaults.indexOf(value);
                    } else if ('level' === type) {
                        active = i <= defaults;
                        if (active && i === defaults) {
                            addClass(option, 'last-active');
                        }
                    }
                    if (active) {
                        addClass(option, 'active');
                    } else {
                        filters.querySelectorAll('[data-filter-'+name+'="'+value+'"]').forEach(function (row) {
                            toggleClass(row, 'filter-hidden-'+name);
                        });
                    }
                    processed[value] = true;
                });

                if (1 < list.childNodes.length) {
                    filter.appendChild(list);
                    filter.dataset.filtered = '';
                }
            });
        }
    };
})();

Sfjs.addEventListener(document, 'DOMContentLoaded', function() {
    Sfjs.createTabs();
    Sfjs.createToggles();
    Sfjs.createFilters();
});

/*]]>*/        </script>
    </body>
</html>
<!-- Call to a member function parameter() on array (500 Internal Server Error) -->
```

### Request
<small class="badge badge-green">GET</small>
 **`blog/articles/{article_id}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>article_id</b></code>&nbsp;      <br>
    Article ID



## List all the articles


List all the articles.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8080/blog/articles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/blog/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/blog/articles'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost:8080/blog/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
[
    {
        "id": 1,
        "titre": "Quas et cumque sunt numquam.",
        "description": "Pariatur a et blanditiis praesentium porro ipsum eius similique dolores voluptatibus debitis et soluta commodi quidem facilis vel ipsa vero quam explicabo et eaque aut dolor.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 2,
        "titre": "Quia et odio consectetur.",
        "description": "Omnis repudiandae fugit ipsam reiciendis ipsa omnis alias numquam sunt culpa cum reiciendis ut dolor tempora voluptatum aut placeat vel ratione placeat distinctio rerum asperiores rem et quam unde perferendis explicabo nam.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 3,
        "titre": "Illo quam porro voluptates.",
        "description": "Neque voluptatem alias tempora ipsa voluptas debitis quae assumenda voluptatum ut libero reprehenderit error dolor quia officiis et doloremque molestias dolores.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 4,
        "titre": "Qui omnis labore.",
        "description": "Quia perspiciatis voluptatum ut consectetur accusantium architecto numquam in corrupti voluptates labore omnis amet ipsam inventore aut dolorem quasi deserunt eligendi hic voluptas velit veniam aut illo non est vitae.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 5,
        "titre": "Aliquid quibusdam reiciendis est.",
        "description": "Commodi officiis alias deserunt occaecati accusantium cumque at eum vero non labore expedita dolorum totam doloribus vitae quibusdam.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`blog/articles`**




