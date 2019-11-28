<?php

/** @var array $rootsCategories; */

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <link rel="preload" href="{{ asset('build/fonts/Roboto-Light.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('build/fonts/Roboto-Medium.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">


    {{--    <link rel="stylesheet" href="{{ asset('build/css/style.min.css')}}">--}}
    <link href="{{ mix('css/style.css', 'build') }}" rel="stylesheet">
</head>
<body>

<div style="display: none">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clipPath id="hmgga"><path fill="#fff" d="M10.501 20.07l-1.47-1.47C3.571 13.77.001 10.515.001 6.525.001 3.27 2.521.75 5.776.75c1.785 0 3.57.84 4.725 2.205C11.656 1.59 13.441.75 15.226.75c3.255 0 5.775 2.52 5.775 5.775 0 3.99-3.57 7.245-9.03 12.075z"></path></clipPath><clipPath id="1jqva">
                <path fill="#fff" d="M11.413 21l-1.598-1.598C3.88 14.152 0 10.614 0 6.277 0 2.74 2.74 0 6.277 0c1.94 0 3.88.913 5.136 2.397C12.668.913 14.609 0 16.549 0c3.538 0 6.277 2.74 6.277 6.277 0 4.337-3.88 7.875-9.815 13.125z"></path>
            </clipPath></defs><symbol id="icon-arrow" viewBox="0 0 13 7">
            <g id="Group_701" data-name="Group 701" transform="translate(-130 -7)">
                <g id="down-arrow" transform="translate(130 7)">
                    <path id="Path_51" data-name="Path 51" d="M19.267,33.535a.457.457,0,0,0-.65,0L12.906,39.3l-5.722-5.76a.457.457,0,0,0-.65,0,.465.465,0,0,0,0,.654l6.036,6.076a.447.447,0,0,0,.325.135.466.466,0,0,0,.325-.135l6.036-6.076A.455.455,0,0,0,19.267,33.535Z" transform="translate(-6.4 -33.4)" fill="#0a0a0a"></path>
                </g>
            </g>
        </symbol><symbol id="icon-cabinet-exit" viewBox="0 0 21 21"><g><g><g><path fill="#7835bb" d="M20.971 9.31a.37.37 0 0 0-.086-.417l-4.754-4.581a.406.406 0 0 0-.56 0 .372.372 0 0 0 0 .54l4.078 3.93h-8.553c-.22 0-.397.17-.397.382 0 .21.177.381.397.381h8.553l-4.079 3.93a.372.372 0 0 0 0 .54.403.403 0 0 0 .28.112.403.403 0 0 0 .28-.112l4.755-4.581a.383.383 0 0 0 .086-.125z"></path></g><g><path fill="#7835bb" d="M8.718 20.096l-7.925-2.43V.904l7.925 2.43zm5.151-9.023c-.219 0-.396.17-.396.382v6.109H9.511V3.054a.383.383 0 0 0-.277-.363L2.95.764h10.524v6.109c0 .21.177.382.396.382.22 0 .396-.171.396-.382V.382A.389.389 0 0 0 13.87 0H.397C.385 0 .373.006.361.007.34.009.32.014.3.019A.393.393 0 0 0 .196.06C.186.066.173.066.163.073l-.032.03C.124.109.117.114.11.12a.397.397 0 0 0-.074.104L.03.248A.369.369 0 0 0 0 .382v17.563c0 .048.011.093.028.136.006.014.014.026.021.04a.367.367 0 0 0 .165.158c.015.008.028.016.044.022.007.002.012.006.019.009l8.717 2.672a.407.407 0 0 0 .353-.056.377.377 0 0 0 .163-.308v-2.29h4.358c.22 0 .396-.171.396-.383v-6.49a.39.39 0 0 0-.396-.382z"></path></g></g></g></symbol><symbol id="icon-cabinet-like" viewBox="0 0 21 20"><g><g><g><path fill="none" stroke="#7835bb" stroke-linecap="square" stroke-miterlimit="50" stroke-width="2" d="M10.501 20.07v0l-1.47-1.47C3.571 13.77.001 10.515.001 6.525.001 3.27 2.521.75 5.776.75c1.785 0 3.57.84 4.725 2.205C11.656 1.59 13.441.75 15.226.75c3.255 0 5.775 2.52 5.775 5.775 0 3.99-3.57 7.245-9.03 12.075z" clip-path="url(&quot;#hmgga&quot;)"></path></g></g></g></symbol><symbol id="icon-cabinet-setting" viewBox="0 0 21 21"><g><g><g><path fill="#7835bb" d="M10.5 15.166A4.672 4.672 0 0 1 5.833 10.5 4.672 4.672 0 0 1 10.5 5.833a4.672 4.672 0 0 1 4.666 4.667 4.672 4.672 0 0 1-4.666 4.666zm0-10.11A5.45 5.45 0 0 0 5.055 10.5a5.45 5.45 0 0 0 5.445 5.444 5.45 5.45 0 0 0 5.444-5.444A5.45 5.45 0 0 0 10.5 5.055z"></path></g><g><path fill="#7835bb" d="M20.222 11.752a.304.304 0 0 1-.303.303h-1.397l-.07.3a8.122 8.122 0 0 1-1.016 2.455l-.164.262.988.988a.303.303 0 0 1 0 .429l-1.771 1.77a.303.303 0 0 1-.43 0l-.987-.987-.262.164a8.104 8.104 0 0 1-2.454 1.016l-.3.07v1.397a.304.304 0 0 1-.304.303H9.248a.304.304 0 0 1-.304-.303v-1.397l-.3-.07a8.122 8.122 0 0 1-2.455-1.016l-.262-.164-.987.988a.303.303 0 0 1-.43 0l-1.77-1.771a.303.303 0 0 1 0-.43l.987-.987-.163-.262a8.104 8.104 0 0 1-1.016-2.454l-.07-.3H1.08a.304.304 0 0 1-.303-.304V9.248c0-.168.136-.304.303-.304h1.397l.07-.3a8.114 8.114 0 0 1 1.016-2.455l.163-.262-.987-.987a.303.303 0 0 1 0-.43l1.77-1.77a.303.303 0 0 1 .43 0l.987.987.262-.163a8.104 8.104 0 0 1 2.455-1.016l.3-.07V1.08c0-.167.136-.303.304-.303h2.504c.167 0 .303.136.303.303v1.397l.3.07c.87.203 1.696.544 2.455 1.016l.262.163.988-.987a.303.303 0 0 1 .429 0l1.77 1.77a.303.303 0 0 1 0 .43l-.987.987.164.262a8.096 8.096 0 0 1 1.016 2.455l.07.3h1.397c.167 0 .303.136.303.304zm-.303-3.585h-.785a8.863 8.863 0 0 0-.88-2.123l.555-.554c.205-.204.317-.476.317-.765 0-.289-.112-.56-.317-.765l-1.77-1.77a1.108 1.108 0 0 0-1.53 0l-.554.554a8.888 8.888 0 0 0-2.122-.878V1.08C12.833.485 12.348 0 11.752 0H9.248C8.65 0 8.167.485 8.167 1.081v.785c-.744.2-1.455.495-2.123.879L5.49 2.19a1.107 1.107 0 0 0-1.53 0L2.19 3.96a1.075 1.075 0 0 0-.317.766c0 .288.113.56.317.764l.554.555a8.852 8.852 0 0 0-.878 2.122H1.08C.485 8.167 0 8.65 0 9.247v2.505c0 .596.485 1.081 1.081 1.081h.785c.2.743.495 1.455.879 2.122l-.555.555a1.075 1.075 0 0 0-.316.764c0 .29.112.56.316.765l1.77 1.77c.41.41 1.122.41 1.53 0l.555-.554a8.898 8.898 0 0 0 2.122.88v.784c0 .596.485 1.081 1.081 1.081h2.504c.596 0 1.081-.485 1.081-1.081v-.785a8.883 8.883 0 0 0 2.122-.879l.555.555c.409.409 1.12.408 1.53 0l1.77-1.77c.204-.205.316-.477.316-.766 0-.288-.112-.56-.316-.764l-.555-.555a8.898 8.898 0 0 0 .88-2.122h.784c.596 0 1.081-.485 1.081-1.081V9.248c0-.597-.485-1.081-1.081-1.081z"></path></g><g><path fill="#7835bb" d="M10.5 13.61a3.115 3.115 0 0 1-3.111-3.11 3.115 3.115 0 0 1 3.11-3.111 3.115 3.115 0 0 1 3.112 3.11 3.115 3.115 0 0 1-3.111 3.112zm0-6.999A3.893 3.893 0 0 0 6.61 10.5a3.893 3.893 0 0 0 3.889 3.889 3.893 3.893 0 0 0 3.889-3.89 3.893 3.893 0 0 0-3.89-3.888z"></path></g></g></g></symbol><symbol id="icon-cabinet-star" viewBox="0 0 21 20"><g><g><g><path fill="#7835bb" d="M7.426 7.087a.376.376 0 0 0 .283-.205L10.5 1.226l2.792 5.655c.055.111.16.188.283.206l6.242.907-4.517 4.403a.376.376 0 0 0-.108.333l1.066 6.216-5.582-2.935a.374.374 0 0 0-.35 0l-5.584 2.935L5.81 12.73a.376.376 0 0 0-.108-.333L1.184 7.994zM4.243 20.01c.06 0 .12-.014.175-.043L10.5 16.77l6.082 3.197a.377.377 0 0 0 .545-.396l-1.16-6.772L20.886 8a.375.375 0 0 0-.209-.641l-6.8-.988L10.838.21a.374.374 0 0 0-.674 0L7.122 6.372l-6.8.988A.377.377 0 0 0 .114 8l4.92 4.797-1.161 6.773a.375.375 0 0 0 .37.439z"></path></g></g></g></symbol><symbol id="icon-download-file" viewBox="0 0 40 42"><g><g><g><path fill="currentColor" d="M34.446 26.353v9.445H5.553v-9.445H0v12.222a2.776 2.776 0 0 0 2.78 2.775H37.22a2.776 2.776 0 0 0 2.78-2.775V26.353z"></path></g><g><path fill="currentColor" d="M19.491 25.416l-7.95-9.607s-1.21-1.142.102-1.142h4.48v-1.953V.68S15.945 0 16.971 0h6.307c.74 0 .723.574.723.574v13.804h4.135c1.592 0 .393 1.196.393 1.196s-6.764 8.98-7.708 9.922c-.678.683-1.33-.08-1.33-.08z"></path></g></g></g></symbol><symbol id="icon-facebook" viewBox="0 0 19 19"><g><g><path fill="#3a559f" d="M0 0v19h10.119v-7.34H7.645V8.666h2.474V6.148a3.313 3.313 0 0 1 3.313-3.313h2.586v2.694h-1.85c-.582 0-1.053.472-1.053 1.053v2.083h2.857l-.395 2.996h-2.462V19H19V0z"></path></g></g></symbol><symbol id="icon-google" viewBox="0 0 20 19"><g><g><g><path fill="#fbbb00" d="M4.42 11.575l-.693 2.592-2.538.053A9.93 9.93 0 0 1 0 9.494C0 7.84.402 6.28 1.115 4.907l2.26.414.99 2.246a5.929 5.929 0 0 0-.32 1.927c0 .732.133 1.433.376 2.08z"></path></g><g><path fill="#518ef8" d="M19.774 7.163a9.988 9.988 0 0 1-.044 3.946 9.97 9.97 0 0 1-3.512 5.695l-2.846-.146-.403-2.514a5.944 5.944 0 0 0 2.558-3.036h-5.334V7.163h5.412z"></path></g><g><path fill="#28b446" d="M16.218 16.804A9.932 9.932 0 0 1 9.974 19a9.973 9.973 0 0 1-8.785-5.247l3.232-2.646a5.93 5.93 0 0 0 8.548 3.037z"></path></g><g><path fill="#f14336" d="M16.34 2.296l-3.23 2.646a5.932 5.932 0 0 0-8.744 3.106l-3.25-2.66A9.972 9.972 0 0 1 9.973 0c2.42 0 4.64.862 6.366 2.296z"></path></g></g></g></symbol><symbol id="icon-instargam" viewBox="0 0 20 19"><g><g><g><g></g></g><g><g><g><path fill="#7835bb" d="M18.535 14.989a3.05 3.05 0 0 1-3.046 3.046H4.512a3.05 3.05 0 0 1-3.046-3.046V4.013A3.05 3.05 0 0 1 4.512.967H15.49a3.05 3.05 0 0 1 3.046 3.046v10.976zM4.512 0A4.017 4.017 0 0 0 .5 4.013v10.976c0 2.212 1.8 4.012 4.012 4.012H15.49c2.212 0 4.012-1.8 4.012-4.012V4.013c0-2.212-1.8-4.012-4.012-4.012z"></path></g></g></g><g><g><g><path fill="#7835bb" d="M14.984 9.215a5.005 5.005 0 0 0-4.754-4.7 4.997 4.997 0 0 0-5.216 5.219 5.005 5.005 0 0 0 4.705 4.75 4.963 4.963 0 0 0 2.916-.746.479.479 0 0 0 .086-.744l-.007-.007a.481.481 0 0 0-.596-.064 4 4 0 0 1-2.16.603c-2.238-.023-4.044-1.903-3.981-4.14a4.03 4.03 0 0 1 4.282-3.902 4.036 4.036 0 0 1 3.753 3.679 4.005 4.005 0 0 1-.454 2.22.48.48 0 0 0 .08.567l.008.007a.477.477 0 0 0 .758-.108 4.961 4.961 0 0 0 .58-2.634z"></path></g></g></g><g><g><g><path fill="#7835bb" d="M14.297 3.219a1.288 1.288 0 1 1 2.576 0 1.288 1.288 0 0 1-2.576 0z"></path></g></g></g></g></g></symbol><symbol id="icon-like" viewBox="0 0 23 21"><g><g><path fill="currentColor" d="M11.413 21l-1.598-1.598C3.88 14.152 0 10.614 0 6.277 0 2.74 2.74 0 6.277 0c1.94 0 3.88.913 5.136 2.397C12.668.913 14.609 0 16.549 0c3.538 0 6.277 2.74 6.277 6.277 0 4.337-3.88 7.875-9.815 13.125z"></path></g></g></symbol><symbol id="icon-mobile-curse-online" viewBox="0 0 21 21"><g><g><g><g><g><g><path fill="#62259f" d="M18.9 8.234a3.153 3.153 0 0 1 2.1 2.965v6.651A3.153 3.153 0 0 1 17.85 21h-2.1a3.153 3.153 0 0 1-3.15-3.15V16.1H1.05C.47 16.1 0 15.628 0 15.05V2.1c0-.58.47-1.05 1.05-1.05h.35C1.4.47 1.87 0 2.45 0H8.4a1.39 1.39 0 0 1 1.05.484A1.39 1.39 0 0 1 10.5 0h5.95c.58 0 1.05.47 1.05 1.05h.35c.58 0 1.05.47 1.05 1.05v6.134zm-1.4-.184h.35c.117 0 .233.007.35.02V2.1a.35.35 0 0 0-.35-.35h-.35zM3.5.7v4.602l.777-.97a.35.35 0 0 1 .547-.001l.776.971V.7zM2.1 12.6h6.266c.26.002.515.077.734.216V1.4a.7.7 0 0 0-.7-.7H6.3v5.6a.35.35 0 0 1-.623.219L4.55 5.11 3.422 6.519a.35.35 0 0 1-.623-.22V.7H2.45a.35.35 0 0 0-.349.351zm0 1.4H9.09a.753.753 0 0 0-.725-.7H2.101zm10.5.7H1.75a.35.35 0 0 1-.35-.35V1.75h-.35a.351.351 0 0 0-.35.35v12.95c0 .193.156.35.35.35H12.6zm0-1.401h-2.065a.754.754 0 0 0-.726.7H12.6zm0-2.098a3.153 3.153 0 0 1 3.15-3.15h1.05v-7a.35.35 0 0 0-.35-.35H10.5a.7.7 0 0 0-.7.7v11.415c.22-.14.475-.214.735-.216H12.6zm3.15-2.451a2.452 2.452 0 0 0-2.45 2.45V13.3h3.15v-4.55zm4.55 9.1V14h-7.001v3.85a2.452 2.452 0 0 0 2.45 2.45h2.101a2.452 2.452 0 0 0 2.45-2.451zm0-6.65a2.452 2.452 0 0 0-2.45-2.45h-.7v4.55h3.15z"></path></g></g></g></g></g></g></symbol><symbol id="icon-mobile-curse" viewBox="0 0 21 21"><g><g><g><g><g><g><g><path fill="#7835bb" d="M11.938 9.959c.088.172.299.24.471.153.02-.01 2.08-1.056 3.097-1.379a.35.35 0 0 0-.212-.667c-1.07.34-3.116 1.38-3.203 1.422a.35.35 0 0 0-.153.471z"></path></g></g><g><g><path fill="#7835bb" d="M12.25 5.95a.35.35 0 0 0 .16-.038c.02-.01 2.08-1.057 3.096-1.379a.35.35 0 0 0-.212-.667c-1.07.338-3.116 1.378-3.203 1.423a.35.35 0 0 0 .16.661z"></path></g></g><g><g><path fill="#7835bb" d="M20.65 5.25a.35.35 0 0 0-.35.35v13.65c0 .579-.471 1.05-1.05 1.05h-8.4v-.805c.51-.179 1.84-.595 3.15-.595 3.048 0 5.12.675 5.14.682a.352.352 0 0 0 .46-.331V3.85a.35.35 0 0 0-.274-.343s-.274-.061-.744-.147a.35.35 0 0 0-.127.689l.445.084v14.65c-.793-.207-2.555-.583-4.9-.583-1.524 0-3.023.5-3.486.67a8.2 8.2 0 0 0-3.164-.67c-2.41 0-4.397.397-5.25.6V4.12a23.037 23.037 0 0 1 5.25-.62c1.277 0 2.371.396 2.8.575V17.85a.35.35 0 0 0 .53.3c.035-.02 3.503-2.091 6.58-3.118a.35.35 0 0 0 .24-.332V.35a.35.35 0 0 0-.473-.328c-2.8 1.05-5.634 2.814-5.662 2.83a.35.35 0 0 0 .37.595c.026-.017 2.492-1.55 5.065-2.585v13.587c-2.389.831-4.883 2.187-5.95 2.793V3.851a.35.35 0 0 0-.194-.314A8.105 8.105 0 0 0 7.35 2.8c-3.162 0-5.595.684-5.696.713a.35.35 0 0 0-.254.337v15.4a.351.351 0 0 0 .445.336c.025-.007 2.445-.687 5.506-.687 1.279 0 2.372.398 2.8.578v.823H1.75C1.17 20.3.7 19.83.7 19.25V5.6a.35.35 0 0 0-.7 0v13.65C0 20.215.785 21 1.75 21h17.5c.965 0 1.75-.786 1.75-1.75V5.6a.35.35 0 0 0-.35-.351z"></path></g></g><g><g><path fill="#7835bb" d="M11.938 7.86c.088.17.299.239.471.151.02-.01 2.08-1.056 3.097-1.377a.35.35 0 0 0-.212-.667c-1.07.337-3.116 1.377-3.203 1.422a.35.35 0 0 0-.153.47z"></path></g></g><g><g><path fill="#7835bb" d="M11.938 12.059c.088.172.299.24.471.153.02-.01 2.08-1.056 3.097-1.379a.35.35 0 0 0-.212-.667c-1.07.339-3.116 1.379-3.203 1.422a.35.35 0 0 0-.153.47z"></path></g></g><g><g><path fill="#7835bb" d="M8.48 6.495c-2.161-.507-4.617.14-4.72.167a.35.35 0 0 0 .18.677c.024-.007 2.389-.629 4.38-.162a.35.35 0 1 0 .16-.682z"></path></g></g><g><g><path fill="#7835bb" d="M8.48 8.595c-2.161-.507-4.617.14-4.72.167a.35.35 0 0 0 .18.676c.024-.006 2.389-.628 4.38-.16a.35.35 0 1 0 .16-.683z"></path></g></g><g><g><path fill="#7835bb" d="M11.938 14.159c.088.172.299.24.471.153.02-.01 2.08-1.056 3.097-1.379a.35.35 0 0 0-.212-.667c-1.07.339-3.116 1.379-3.203 1.422a.35.35 0 0 0-.153.47z"></path></g></g><g><g><path fill="#7835bb" d="M8.48 10.695c-2.161-.507-4.617.14-4.72.167a.35.35 0 0 0 .18.676c.024-.006 2.389-.628 4.38-.16a.35.35 0 1 0 .16-.683z"></path></g></g><g><g><path fill="#7835bb" d="M8.48 14.895c-2.161-.507-4.617.14-4.72.167a.35.35 0 0 0 .18.676c.024-.007 2.389-.628 4.38-.161a.35.35 0 0 0 .16-.682z"></path></g></g><g><g><path fill="#7835bb" d="M8.48 12.795c-2.161-.507-4.617.14-4.72.167a.35.35 0 0 0 .18.676c.024-.006 2.389-.628 4.38-.161a.35.35 0 1 0 .16-.682z"></path></g></g></g></g></g></g></g></symbol><symbol id="icon-mobile-home" viewBox="0 0 21 21"><g><g><g><g><path fill="#7835bb" d="M20.739 9.583a.36.36 0 0 1 .017.508.358.358 0 0 1-.508.019L19.054 9v12H1.784V9.001L.59 10.11a.36.36 0 0 1-.49-.527L10.419 0l10.32 9.582zm-8.16 10.697v-5.757c0-1.19-.969-2.158-2.16-2.158a2.16 2.16 0 0 0-2.159 2.158v5.757zm5.756-11.947L10.419.983l-7.915 7.35V20.28H7.54v-5.757a2.881 2.881 0 0 1 2.878-2.878 2.881 2.881 0 0 1 2.879 2.878v5.757h5.037z"></path></g></g></g></g></symbol><symbol id="icon-mobile-like" viewBox="0 0 23 21"><g><g><g><path fill="none" stroke="#7835bb" stroke-linecap="square" stroke-miterlimit="50" stroke-width="2" d="M11.413 21v0l-1.598-1.598C3.88 14.152 0 10.614 0 6.277 0 2.74 2.74 0 6.277 0c1.94 0 3.88.913 5.136 2.397C12.668.913 14.609 0 16.549 0c3.538 0 6.277 2.74 6.277 6.277 0 4.337-3.88 7.875-9.815 13.125z" clip-path="url(&quot;#1jqva&quot;)"></path></g></g></g></symbol><symbol id="icon-mobile-master-class" viewBox="0 0 20 21"><g><g><g><g><path fill="#7835bb" d="M11.904 7.345c0 .193.157.35.351.35h3.5a.35.35 0 0 0 0-.7h-3.5a.35.35 0 0 0-.351.35z"></path></g></g><g><g><path fill="#7835bb" d="M14.005 9.446c0 .193.157.35.35.35h2.102a.35.35 0 1 0 0-.701h-2.101a.35.35 0 0 0-.351.351z"></path></g></g><g><g><path fill="#7835bb" d="M13.656 5.594a.35.35 0 1 0 0-.7h-.701a.35.35 0 1 0 0 .7z"></path></g></g><g><g><path fill="#7835bb" d="M9.453 9.095a.35.35 0 0 0 0 .7h3.502a.35.35 0 1 0 0-.7z"></path></g></g><g><g><path fill="#7835bb" d="M11.205 18.9H4.552a1.052 1.052 0 0 1-1.05-1.052V1.743a.35.35 0 0 0-.351-.35c-.965 0-1.75.785-1.75 1.75a.35.35 0 1 0 .7 0c0-.456.293-.846.7-.99v15.695c0 .966.786 1.751 1.75 1.751h6.653a.35.35 0 1 0 0-.7z"></path></g></g><g><g><path fill="#7835bb" d="M5.953 7.695h4.901a.35.35 0 0 0 0-.7H5.953a.35.35 0 1 0 0 .7z"></path></g></g><g><g><path fill="#7835bb" d="M5.953 5.594h1.4a.35.35 0 1 0 0-.7h-1.4a.35.35 0 1 0 0 .7z"></path></g></g><g><g><path fill="#7835bb" d="M11.554 4.893h-2.8a.35.35 0 1 0 0 .701h2.801a.35.35 0 1 0 0-.7z"></path></g></g><g><g><path fill="#7835bb" d="M16.457 0H3.15A3.155 3.155 0 0 0 0 3.14v.015a3.163 3.163 0 0 0 1.575 2.718.35.35 0 1 0 .351-.606 2.461 2.461 0 0 1-1.225-2.12A2.454 2.454 0 0 1 3.151.7h13.306a2.454 2.454 0 0 1 2.45 2.45v14.707c0 .177-.05.356-.143.515a.35.35 0 0 0 .604.355 1.72 1.72 0 0 0 .238-.87V3.152A3.155 3.155 0 0 0 16.458 0z"></path></g></g><g><g><path fill="#7835bb" d="M17.507 16.098a2.103 2.103 0 0 1-2.101 2.101c-1.16 0-2.101-.943-2.101-2.1.001-1.16.941-2.1 2.1-2.101 1.16 0 2.1.94 2.102 2.1zm-.7 0a1.402 1.402 0 1 0-2.802 0 1.402 1.402 0 0 0 2.802 0z"></path></g></g><g><g><path fill="#7835bb" d="M14.773 18.55a.35.35 0 0 0-.477.127l-.754 1.306-.12-.18a.348.348 0 0 0-.27-.156l-.218-.014.767-1.327a.35.35 0 0 0-.607-.35l-1.049 1.818a.351.351 0 0 0 .283.525l.606.036.336.507a.35.35 0 0 0 .29.158h.012a.352.352 0 0 0 .293-.177l1.038-1.796a.35.35 0 0 0-.13-.478z"></path></g></g><g><g><path fill="#7835bb" d="M17.727 17.973a.35.35 0 1 0-.608.35l.758 1.31-.217.014a.351.351 0 0 0-.27.156l-.12.18-.75-1.299a.351.351 0 0 0-.606.35l1.033 1.79c.06.105.172.171.293.175h.01a.351.351 0 0 0 .293-.156l.334-.509.607-.035a.349.349 0 0 0 .282-.525z"></path></g></g><g><g><path fill="#7835bb" d="M5.953 9.796h2.1a.35.35 0 1 0 0-.701h-2.1a.35.35 0 0 0 0 .7z"></path></g></g><g><g><path fill="#7835bb" d="M5.953 11.897h4.201a.35.35 0 0 0 0-.701H5.953a.35.35 0 1 0 0 .7z"></path></g></g><g><g><path fill="#7835bb" d="M5.989 16.254a.35.35 0 1 0 .626-.312c-.347-.694-.424-1.315-.208-1.665.115-.186.315-.28.595-.28.168 0 .23.058.27.114.259.376.012 1.521-.248 2.214a.35.35 0 0 0 .577.37c.15-.148.311-.297.452-.418v.171a.349.349 0 0 0 .597.248c.16-.16.346-.316.502-.43a.351.351 0 0 0 .301.532h1.401a.35.35 0 1 0 0-.7h-.912c.03-.166.021-.336-.062-.473a.487.487 0 0 0-.426-.228c-.218 0-.471.132-.704.295a.405.405 0 0 0-.245-.334c-.093-.04-.214-.09-.507.086.116-.603.149-1.298-.151-1.732-.131-.189-.385-.415-.845-.415-.524 0-.947.218-1.19.612-.35.565-.285 1.42.177 2.345z"></path></g></g><g><g><path fill="#7835bb" d="M15.406 11.546a.35.35 0 0 0-.35-.35h-3.502a.35.35 0 1 0 0 .7h3.502a.35.35 0 0 0 .35-.35z"></path></g></g></g></g></symbol><symbol id="icon-mobile-place" viewBox="0 0 22 21"><g><g><g><g><path fill="#62259f" d="M5.907 13.367a.433.433 0 1 0-.432-.75.433.433 0 1 0 .433.75z"></path></g></g><g><g><path fill="#62259f" d="M4.134 16.356a3.033 3.033 0 0 1-2.641-5.44l3.678-2.123 5.656-7.206a1.29 1.29 0 0 1 1.094-.6h.017c.46.004.881.252 1.109.65l1.597 2.767 1.666-.1c.164-.01.32.074.402.216l.865 1.5a.433.433 0 0 1-.014.455l-.92 1.393 1.44 2.493a1.3 1.3 0 0 1-1.053 1.947l-8.295 1.627.563.975a.433.433 0 0 1-.158.59l-1.125.651 1.3 2.25a1.732 1.732 0 1 1-3 1.732l-2.181-3.776zm2.265-1.272l-1.5.865L7.065 19.7a.866.866 0 0 0 1.5-.865zm1.934-.116l-.434-.75-.75.433.433.75zm6.796-9.725l1.03 1.786.535-.807-.599-1.036zm-3.577-3.182c-.022.036-.036.05-.15.194l5.33 9.228c.15-.028.178-.04.237-.04a.433.433 0 0 0 .365-.649L12.296 2.07a.423.423 0 0 0-.368-.216.423.423 0 0 0-.376.21zm-5.57 7.102l2.296 3.979 7.555-1.482-5.006-8.67zm-4.848 5.46a2.168 2.168 0 0 0 2.957.794l3.376-1.949L5.3 9.718l-3.375 1.948a2.162 2.162 0 0 0-.792 2.958z"></path></g></g><g><g><path fill="#62259f" d="M4.566 13.64a.433.433 0 0 0-.59-.157l-.752.434a.434.434 0 0 1-.59-.159.433.433 0 0 0-.751.432 1.3 1.3 0 0 0 1.775.476l.75-.432a.433.433 0 0 0 .158-.592z"></path></g></g><g><g><path fill="#62259f" d="M21.505 1.913l-2.413 1.343a.433.433 0 0 0 .422.757l2.412-1.343a.433.433 0 0 0-.42-.756z"></path></g></g><g><g><path fill="#62259f" d="M21.252 6.399l-1.673-.449a.433.433 0 1 0-.224.836l1.673.449a.433.433 0 1 0 .224-.836z"></path></g></g><g><g><path fill="#62259f" d="M17.048.34l-.449 1.674a.433.433 0 0 0 .836.223l.449-1.672a.433.433 0 1 0-.836-.224z"></path></g></g></g></g></symbol><symbol id="icon-mobile-school" viewBox="0 0 21 21"><g><g><g><g><g><g><g><path fill="#62259f" d="M12.89 4.982c.174 0 .315.14.316.314v1.888a.315.315 0 0 1-.315.315h-1.258a.314.314 0 0 1-.315-.315V5.296c0-.174.141-.314.315-.314zm-.313.629h-.63V6.87h.63z"></path></g></g><g><g><path fill="#62259f" d="M2.23 8.182c.198 0 .358-.141.358-.315v-4.72h15.805v4.72c0 .174.161.315.36.315.198 0 .36-.141.36-.315V2.832c0-.174-.162-.315-.36-.315H10.49V.629h1.796v.63H11.21c-.199 0-.36.141-.36.315 0 .174.161.315.36.315h1.437c.199 0 .359-.142.358-.316V.315c0-.174-.16-.314-.358-.315h-2.515c-.198 0-.36.141-.36.315v2.202H2.23c-.199 0-.36.141-.36.315v5.035c0 .174.161.315.36.315z"></path></g></g><g><g><path fill="#62259f" d="M16.434 4.982c.173 0 .314.14.315.314v1.888c0 .173-.14.314-.314.315h-1.26a.314.314 0 0 1-.314-.315V5.296c0-.173.14-.314.314-.314zm-.314.629h-.63V6.87h.629z"></path></g></g><g><g><path fill="#62259f" d="M20.65 20.39H.33c-.186.01-.33.148-.33.315s.144.305.33.315H20.65c.194 0 .351-.141.351-.315 0-.174-.157-.315-.35-.315z"></path></g></g><g><g><path fill="#62259f" d="M12.692 18.502c.174 0 .315-.14.315-.314v-4.406a.314.314 0 0 0-.092-.222c-.03-.03-.74-.722-2.426-.722-1.684 0-2.395.692-2.425.722a.314.314 0 0 0-.092.222v4.406a.315.315 0 1 0 .63 0v-4.253c.192-.133.69-.402 1.573-.456v3.135a.315.315 0 1 0 0 .63v.944a.315.315 0 1 0 .63 0v-.944a.315.315 0 1 0 0-.63v-3.135c.883.055 1.382.324 1.573.455v4.254c0 .173.14.314.314.314z"></path></g></g><g><g><path fill="#62259f" d="M6.713 19.447c0 .173.141.314.315.314h6.923a.315.315 0 1 0 0-.63H7.028a.315.315 0 0 0-.315.316z"></path></g></g><g><g><path fill="#62259f" d="M1.953 19.132V11.58h-.356c-.197 0-.357-.141-.357-.315 0-.174.16-.315.357-.315h17.789c.189.01.336.147.336.314s-.147.305-.336.315h-.356v7.553h.356c.197 0 .356.14.356.315 0 .174-.16.315-.356.315h-3.558c-.197 0-.356-.141-.356-.315 0-.174.16-.315.356-.315h.356v-7.553H4.8v7.553h.355c.197 0 .357.14.357.315 0 .174-.16.315-.357.315H1.597c-.197 0-.357-.141-.357-.315 0-.174.16-.315.357-.315zm14.942 0h1.423v-7.553h-1.423zm-14.231 0h1.424v-7.553H2.664z"></path></g></g><g><g><path fill="#62259f" d="M5.805 4.982c.174 0 .314.14.314.314v1.888c0 .173-.14.314-.314.315H4.546a.315.315 0 0 1-.315-.315V5.296c.001-.174.142-.314.315-.314zm-.315.629h-.63V6.87h.63z"></path></g></g><g><g><path fill="#62259f" d="M9.348 4.982c.173 0 .314.14.315.314v1.888a.315.315 0 0 1-.315.315H8.09a.315.315 0 0 1-.315-.315V5.296c0-.174.141-.314.315-.314zm-.314.629h-.63V6.87h.63z"></path></g></g></g></g></g></g></g></symbol><symbol id="icon-save" viewBox="0 0 20 21"><g><g><g><path fill="#0b9f2e" d="M11.25 6.429V2.143h2.5v4.286z"></path></g><g><path fill="#0b9f2e" d="M16.25 20.143H3.333v-9H16.25zM4.167.857H15v6.857H4.167zM16.422 0H0v21h20V3.68z"></path></g><g><path fill="#0b9f2e" d="M5.417 13.714h2.916c.23 0 .417-.191.417-.428a.422.422 0 0 0-.417-.429H5.417a.422.422 0 0 0-.417.429c0 .237.186.428.417.428z"></path></g><g><path fill="#0b9f2e" d="M5.417 15.429h4.166c.23 0 .417-.192.417-.429a.422.422 0 0 0-.417-.429H5.417A.422.422 0 0 0 5 15c0 .237.186.429.417.429z"></path></g><g><path fill="#0b9f2e" d="M10.833 15.429a.424.424 0 0 0 .296-.125.457.457 0 0 0 .121-.304.457.457 0 0 0-.12-.304.422.422 0 0 0-.588 0 .433.433 0 0 0-.125.304c0 .116.045.223.12.304a.423.423 0 0 0 .296.125z"></path></g></g></g></symbol><symbol id="icon-search" viewBox="0 0 17 17"><g><g><g><path fill="#0a0a0a" d="M6.667 1.674c2.9 0 5.244 2.376 5.244 5.282 0 2.92-2.345 5.281-5.244 5.281-2.898 0-5.243-2.376-5.243-5.281 0-2.906 2.359-5.282 5.243-5.282zm0 11.737a6.266 6.266 0 0 0 4.093-1.503l4.974 5.01a.567.567 0 0 0 .412.172.567.567 0 0 0 .412-.172.59.59 0 0 0 0-.83l-4.974-5.01a6.473 6.473 0 0 0 1.492-4.122C13.076 3.392 10.206.5 6.667.5 3.143.5.26 3.406.26 6.956c0 3.564 2.884 6.455 6.408 6.455z"></path></g></g></g></symbol><symbol id="icon-telegram" viewBox="0 0 20 19"><g><g><g><g></g></g><g><g><g><path fill="#7835bb" d="M17.56 15.557l-6.167-2.811 6.96-10.38zm-7.114-3.243l-1.094-.499 5.384-5.898-.779 1.161zm-2.343 3.494l.756-3.102 1.014.462zm-1.099.145l-.8-4.69 8.152-6.448-6.239 6.834a.507.507 0 0 0-.117.22zM18.765.047L8.82 4.57a.5.5 0 0 0-.25.672c.12.253.427.362.686.244l6.135-2.79-2.982 2.36-6.845 5.413-3.744-1.6 5.246-2.387a.5.5 0 0 0 .25-.671.522.522 0 0 0-.686-.245L.983 8.135a.815.815 0 0 0-.482.758.817.817 0 0 0 .5.728l4.18 1.787 1.224 7.177c.075.444.69.57.943.194l3.472-5.18 6.568 2.995c.526.24 1.152-.126 1.186-.69L19.5.533a.49.49 0 0 0 0-.043c-.01-.358-.403-.594-.735-.444z"></path></g></g></g></g></g></symbol><symbol id="icon-youtube" viewBox="0 0 27 19"><g><g><g><g><g><path fill="#7835bb" d="M13.628 0h-.036-.002a.51.51 0 0 0-.508.512v.001a.51.51 0 0 0 .507.514h.038a.51.51 0 0 0 .508-.512V.514A.51.51 0 0 0 13.628 0z"></path></g></g></g><g><g><g><path fill="#7835bb" d="M25.961 3.19C25.628 1.906 24.644.897 23.395.553 22.106.2 18.514.07 15.727.022a.512.512 0 0 0-.517.505.511.511 0 0 0 .5.522c3.857.065 6.492.241 7.418.496.9.248 1.61.978 1.851 1.906.5 1.914.505 6.008.505 6.049 0 .041-.006 4.134-.505 6.05a2.661 2.661 0 0 1-1.851 1.904c-1.861.513-9.55.519-9.628.519-.077 0-7.767-.006-9.628-.519A2.661 2.661 0 0 1 2.02 15.55c-.5-1.915-.505-6.008-.505-6.049 0-.041.006-4.135.505-6.05a2.661 2.661 0 0 1 1.851-1.905c.947-.26 3.66-.438 7.638-.5a.51.51 0 0 0 .5-.521.512.512 0 0 0-.516-.506C8.621.063 4.921.192 3.606.554 2.356.898 1.372 1.907 1.039 3.19.506 5.232.5 9.327.5 9.5c0 .173.006 4.268.539 6.31.333 1.283 1.317 2.292 2.566 2.635 1.991.549 9.573.555 9.895.555.322 0 7.904-.006 9.894-.554 1.25-.344 2.234-1.353 2.567-2.635.533-2.043.539-6.138.539-6.311 0-.173-.006-4.268-.539-6.31z"></path></g></g></g><g><g><g><path fill="#7835bb" d="M11.575 12.383v-5.61l4.777 2.805zm6.044-3.249l-6.297-3.697a.503.503 0 0 0-.509-.001.515.515 0 0 0-.254.445v7.394a.515.515 0 0 0 .508.514.503.503 0 0 0 .255-.07l6.297-3.697a.515.515 0 0 0 0-.888z"></path></g></g></g></g></g></symbol></svg>
</div>

<div class="wrapper">
    <header>
        <nav class="navigation navigation--no-js">
            <div class="mobile-menu">
                <div class="mobile-menu__header">
                    <div class="logo logo--mobile-menu">
                        <a href="{{ route('home', app()->getLocale()) }}" class="logo__link">
                            <picture><img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45" alt="Логотип сайта"></picture>
                        </a>
                    </div>
                    <a href="#" class="button button--mobile-menu">{{ __('layout/header.My cabinet') }}</a>
                </div>
                <ul class="mobile-menu__list">
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21"><use xlink:href="#icon-mobile-home"></use></svg>
                            {{ __('layout/header.Home') }}
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21"><use xlink:href="#icon-mobile-curse"></use></svg>
                            {{ $rootsCategories[\App\Model\Category\Entity\Category::OFFLINE]->getName()}}
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21"><use xlink:href="#icon-mobile-curse-online"></use></svg>
                            {{ $rootsCategories[\App\Model\Category\Entity\Category::ONLINE]->getName()}}
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="20" height="21"><use xlink:href="#icon-mobile-master-class"></use></svg>
                            {{ $rootsCategories[\App\Model\Category\Entity\Category::MASTER]->getName()}}
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="21" height="21"><use xlink:href="#icon-mobile-school"></use></svg>
                            {{ __('layout/header.Publishers') }}
                        </a>
                    </li>
                    <li class="mobile-menu__item mobile-menu__item--indicator">
                        <a href="#" class="mobile-menu__link">
                            <svg width="23" height="21"><use xlink:href="#icon-mobile-like"></use></svg>
                            {{ __('layout/header.Favorites') }}
                            <span class="mobile-menu__indicator">1</span>
                        </a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link">
                            <svg width="23" height="21"><use xlink:href="#icon-mobile-place"></use></svg>
                            {{ __('layout/header.Create organization') }}
                        </a>
                    </li>
                </ul>
                <div class="mobile-menu__footer">
                    <ul class="language">
                        <li class="language__item {{ app()->getLocale() === 'uk' ? 'language__item--active' : '' }}">
                            <a class="language__link" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'uk') }}">українська</a>
                        </li>
                        <li class="language__item {{ app()->getLocale() === 'ru' ? 'language__item--active' : '' }}">
                            <a class="language__link" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ru') }}">русский</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navigation__user-wrapper">
                <div class="container navigation__user--inner">
                    <ul class="language language--header">
                        <li class="language__item {{ app()->getLocale() === 'uk' ? 'language__item--active' : '' }}">
                            <a class="language__link" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'uk') }}">українська</a>
                        </li>
                        <li class="language__item {{ app()->getLocale() === 'ru' ? 'language__item--active' : '' }}">
                            <a class="language__link" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ru') }}">русский</a>
                        </li>
                    </ul>
                    <ul class="user-features user-features--header">
                        <li class="user-features__item">
                            <a href="#" class="user-features__link">
                                {{ __('layout/header.Improve Ideas') }}
                            </a>
                        </li>

                        @guest
                            <li class="user-features__item">
                                <a href="{{ route('login', app()->getLocale()) }}" class="user-features__link">
                                    {{ __('layout/header.Log In') }}
                                </a>
                            </li>
                            <li class="user-features__item user-features__item--registration">
                                <a href="#" class="user-features__link">
                                    {{ __('layout/header.Sign Up') }}
                                    <svg width="13" height="7" class="user-features__drop-icon"><use xlink:href="#icon-arrow"></use></svg>
                                </a>
                            </li>
                        @else
                            <li class="user-features__item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="user-features__link">
                                        {{ __('layout/header.Log Out') }}
                                    </button>
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="container navigation__inner navigation__inner--middle">
                <button type="button" class="navigation__open-menu" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="logo logo--header">
                    <a href="{{ route('home', app()->getLocale()) }}" class="logo__link">
                        <picture>
                            <img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45" alt="Логотип сайта">
                        </picture>
                    </a>
                </div>
                <div class="navigation__text">
                    <p class="navigation__curse">6 544</p>
                    <p class="navigation__count-curse">{{ __('layout/header.Adverts of courses') }}</p>
                </div>
                <a href="#" class="like like--header" aria-label="Понравившееся">
                    <svg width="23" height="21"><use xlink:href="#icon-like"></use></svg>
                    <span class="like__count">1</span>
                </a>
                <div class="search">
                    <label for="search" class="search__label">
                        <span class="visually-hidden">{{ __('layout/header.Search label') }}</span>
                        <svg width="15" height="16" class="search__icon"><use xlink:href="#icon-search"></use></svg>
                    </label>
                    <input type="search" name="search" class="input input--search" placeholder="{{ __('layout/header.Search input placeholder') }}" id="search">
                </div>
                <a href="#" class="button button--organization-header">{{ __('layout/header.Create organization') }}</a>
            </div>
            <div class="navigation__wrapper-menu">
                <div class="container navigation__inner--menu">
                    <ul class="menu">
                        <li class="menu__list menu__list--active">
                            <a href="#" class="menu__link">
                                {{ $rootsCategories[\App\Model\Category\Entity\Category::OFFLINE]->getName()}}
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                {{ $rootsCategories[\App\Model\Category\Entity\Category::ONLINE]->getName()}}
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                {{ $rootsCategories[\App\Model\Category\Entity\Category::MASTER]->getName()}}
                            </a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__link">
                                {{ __('layout/header.Publishers') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overlay"></div>
        </nav>
    </header>
    <main class="site-main">
        @include('layouts.partials.alerts')
        {{ Breadcrumbs::view('layouts.partials.breadcrumbs') }}
        @yield('breadcrumbs')
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="container site-footer__inner-top">
            <div class="site-footer__social">
                <div class="logo logo--footer">
                    <a href="{{ route('home', app()->getLocale()) }}" class="logo__link">
                        <picture>
                            <img src="{{ asset('build/img/logo-375.png') }}" width="167" height="45" alt="Логотип сайта">
                        </picture>
                    </a>
                </div>
                <div class="social social--footer">
                    <p class="social__title">
                        {{ __('layout/footer.Join us') }}
                    </p>
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в инстаграм" title="Мы в инстаграм">
                                <svg width="20" height="19"><use xlink:href="#icon-instargam"></use></svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в ютуб" title="Мы в ютуб">
                                <svg width="27" height="19">
                                    <use xlink:href="#icon-youtube"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Мы в телеграм" title="Мы в телеграм">
                                <svg width="20" height="19">
                                    <use xlink:href="#icon-telegram"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="site-footer__navigation">
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">{{ __('layout/footer.For users') }}</h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню" title="Открыть меню">
                            <svg width="13" height="7"><use xlink:href="#icon-arrow"></use></svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li><a href="#">{{ $rootsCategories[\App\Model\Category\Entity\Category::OFFLINE]->getName()}}</a></li>
                        <li><a href="#">{{ $rootsCategories[\App\Model\Category\Entity\Category::ONLINE]->getName()}}</a></li>
                        <li><a href="#">{{ $rootsCategories[\App\Model\Category\Entity\Category::MASTER]->getName()}}</a></li>
                        <li><a href="#">{{ __('layout/footer.Publishers') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Articles') }}</a></li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">
                            {{ __('layout/footer.For organizations') }}
                        </h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню">
                            <svg width="13" height="7"><use xlink:href="#icon-arrow"></use></svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li><a href="#">{{ __('layout/footer.About project') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Services and rates') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Knowledge base') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Contacts') }}</a></li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <div class="site-footer__title-wrapper">
                        <h6 class="h6">
                            {{ __('layout/footer.Common') }}
                        </h6>
                        <button type="button" class="site-footer__toggle" aria-label="Открыть меню">
                            <svg width="13" height="7"><use xlink:href="#icon-arrow"></use></svg>
                        </button>
                    </div>
                    <ul class="site-footer__menu site-footer__menu--no-js">
                        <li><a href="#">{{ __('layout/footer.Improve of site') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Rules of site') }}</a></li>
                        <li><a href="#">{{ __('layout/footer.Offer') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="site-footer__background">
            <div class="container site-footer__inner site-footer__inner--bottom">
                <p class="site-footer__copyright">
                    © {{ now()->year }} Get Skill
                </p>
                <ul class="site-footer__pay">
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/visa-tablet.png') }}">
                            <img src="{{ asset('build/img/visa.png') }}" width="45" height="14" alt="Visa">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/mastercard-tablet.png') }}">
                            <img src="{{ asset('build/img/mastercard.png') }}" width="32" height="19" alt="MasterCard">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(min-width: 992px)" srcset="{{ asset('build/img/liqpay-tablet.png') }}">
                            <img src="{{ asset('build/img/liqpay.png') }}" width="64" height="14" alt="Liqpay">
                        </picture>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

{{--    <script src="{{ asset('build/js/scripts.min.js')}}"></script>--}}
@include('sweetalert::alert')
<script src="{{ mix('js/app.js', 'build') }}"></script>
@yield('scripts')
</body>
</html>






