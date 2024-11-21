<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Stylish - Shoes Online Store HTML Template</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="TemplatesJungle" />
    <meta name="keywords" content="Online Store" />
    <meta name="description" content="Stylish - Shoes Online Store HTML Template" />

    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/style.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet" />

    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }

        ::after,
        ::before {
            --tw-content: "";
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif,
                Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
                "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em;
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

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        [type="button"],
        [type="reset"],
        [type="submit"],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: list-item;
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        dialog {
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        [role="button"],
        button {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        [hidden] {
            display: none;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .-left-20 {
            left: -5rem;
        }

        .top-0 {
            top: 0px;
        }

        .-bottom-16 {
            bottom: -4rem;
        }

        .-left-16 {
            left: -4rem;
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .aspect-video {
            aspect-ratio: 16 / 9;
        }

        .size-12 {
            width: 3rem;
            height: 3rem;
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem;
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem;
        }

        .h-12 {
            height: 3rem;
        }

        .h-40 {
            height: 10rem;
        }

        .h-full {
            height: 100%;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-full {
            width: 100%;
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem);
        }

        .w-auto {
            width: auto;
        }

        .max-w-\[877px\] {
            max-width: 877px;
        }

        .max-w-2xl {
            max-width: 42rem;
        }

        .flex-1 {
            flex: 1 1 0%;
        }

        .shrink-0 {
            flex-shrink: 0;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .flex-col {
            flex-direction: column;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-center {
            align-items: center;
        }

        .items-stretch {
            align-items: stretch;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .justify-center {
            justify-content: center;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .gap-4 {
            gap: 1rem;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .self-center {
            align-self: center;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .rounded-\[10px\] {
            border-radius: 10px;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-sm {
            border-radius: 0.125rem;
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1);
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from),
                #fff var(--tw-gradient-via-position), var(--tw-gradient-to);
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position);
        }

        .stroke-\[\#FF2D20\] {
            stroke: #ff2d20;
        }

        .object-cover {
            object-fit: cover;
        }

        .object-top {
            object-position: top;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .pt-3 {
            padding-top: 0.75rem;
        }

        .text-center {
            text-align: center;
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif,
                Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                var(--tw-shadow, 0 0 #0000);
        }

        .ring-transparent {
            --tw-ring-color: transparent;
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05);
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke,
                opacity, box-shadow, transform, filter, -webkit-text-decoration-color,
                -webkit-backdrop-filter;
            transition-property: color, background-color, border-color,
                text-decoration-color, fill, stroke, opacity, box-shadow, transform,
                filter, backdrop-filter;
            transition-property: color, background-color, border-color,
                text-decoration-color, fill, stroke, opacity, box-shadow, transform,
                filter, backdrop-filter, -webkit-text-decoration-color,
                -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-300 {
            transition-duration: 300ms;
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity));
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity));
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity));
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7);
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2);
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                var(--tw-shadow, 0 0 #0000);
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem;
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem;
            }

            .sm\:pt-5 {
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3;
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2;
            }

            .lg\:h-16 {
                height: 4rem;
            }

            .lg\:max-w-7xl {
                max-width: 80rem;
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .lg\:flex-col {
                flex-direction: column;
            }

            .lg\:items-end {
                align-items: flex-end;
            }

            .lg\:justify-center {
                justify-content: center;
            }

            .lg\:gap-8 {
                gap: 2rem;
            }

            .lg\:p-10 {
                padding: 2.5rem;
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem;
            }

            .lg\:pt-0 {
                padding-top: 0px;
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity));
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block;
            }

            .dark\:hidden {
                display: none;
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity));
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity));
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    #18181b var(--tw-gradient-via-position), var(--tw-gradient-to);
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position);
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5);
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7);
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity));
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7);
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8);
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity));
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
            }
        }
    </style>
</head>

<body>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-carriage" viewBox="0 0 24 24" fill="none">
            <path
                d="M5 22H19C20.103 22 21 21.103 21 20V9C21 8.73478 20.8946 8.48043 20.7071 8.29289C20.5196 8.10536 20.2652 8 20 8H17V7C17 4.243 14.757 2 12 2C9.243 2 7 4.243 7 7V8H4C3.73478 8 3.48043 8.10536 3.29289 8.29289C3.10536 8.48043 3 8.73478 3 9V20C3 21.103 3.897 22 5 22ZM9 7C9 5.346 10.346 4 12 4C13.654 4 15 5.346 15 7V8H9V7ZM5 10H7V12H9V10H15V12H17V10H19L19.002 20H5V10Z"
                fill="black" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="quick-view" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 24 24" fill="none">
            <path
                d="M21 4H2V6H4.3L7.582 15.025C7.79362 15.6029 8.1773 16.1021 8.68134 16.4552C9.18539 16.8083 9.78556 16.9985 10.401 17H19V15H10.401C9.982 15 9.604 14.735 9.461 14.342L8.973 13H18.246C19.136 13 19.926 12.402 20.169 11.549L21.962 5.275C22.0039 5.12615 22.0109 4.96962 21.9823 4.81763C21.9537 4.66565 21.8904 4.52234 21.7973 4.39889C21.7041 4.27544 21.5837 4.1752 21.4454 4.106C21.3071 4.0368 21.1546 4.00053 21 4ZM18.246 11H8.246L6.428 6H19.675L18.246 11Z"
                fill="black" />
            <path
                d="M10.5 21C11.3284 21 12 20.3284 12 19.5C12 18.6716 11.3284 18 10.5 18C9.67157 18 9 18.6716 9 19.5C9 20.3284 9.67157 21 10.5 21Z"
                fill="black" />
            <path
                d="M16.5 21C17.3284 21 18 20.3284 18 19.5C18 18.6716 17.3284 18 16.5 18C15.6716 18 15 18.6716 15 19.5C15 20.3284 15.6716 21 16.5 21Z"
                fill="black" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 12.998H5v-2h14z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="dropdown" viewBox="0 0 24 24">
            <path fill="currentColor" d="m7 10l5 5l5-5H7Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M13.3 17.275q-.3-.3-.288-.725t.313-.725L16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.3-.713t.3-.712q.3-.3.713-.3t.712.3L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.687.275t-.713-.3Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M496 109.5a201.8 201.8 0 0 1-56.55 15.3a97.51 97.51 0 0 0 43.33-53.6a197.74 197.74 0 0 1-62.56 23.5A99.14 99.14 0 0 0 348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 0 0 2.54 22.1a280.7 280.7 0 0 1-203-101.3A95.69 95.69 0 0 0 36 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0 1 35.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 0 1-25.94 3.4a94.38 94.38 0 0 1-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0 1 39.5 405.6a203 203 0 0 1-23.5-1.4A278.68 278.68 0 0 0 166.74 448c181.36 0 280.44-147.7 280.44-275.8c0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 0 0 496 109.5Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
            <path fill="currentColor"
                d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="pinterest" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M9.04 21.54c.96.29 1.93.46 2.96.46a10 10 0 0 0 10-10A10 10 0 0 0 12 2A10 10 0 0 0 2 12c0 4.25 2.67 7.9 6.44 9.34c-.09-.78-.18-2.07 0-2.96l1.15-4.94s-.29-.58-.29-1.5c0-1.38.86-2.41 1.84-2.41c.86 0 1.26.63 1.26 1.44c0 .86-.57 2.09-.86 3.27c-.17.98.52 1.84 1.52 1.84c1.78 0 3.16-1.9 3.16-4.58c0-2.4-1.72-4.04-4.19-4.04c-2.82 0-4.48 2.1-4.48 4.31c0 .86.28 1.73.74 2.3c.09.06.09.14.06.29l-.29 1.09c0 .17-.11.23-.28.11c-1.28-.56-2.02-2.38-2.02-3.85c0-3.16 2.24-6.03 6.56-6.03c3.44 0 6.12 2.47 6.12 5.75c0 3.44-2.13 6.2-5.18 6.2c-.97 0-1.92-.52-2.26-1.13l-.67 2.37c-.23.86-.86 2.01-1.29 2.7v-.03Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
        </symbol>
    </svg>
    <!-- Loader 4 -->

    {{-- <div class="preloader"
        style="
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
      ">
        <svg version="1.1" id="L4" width="100" height="100" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 100"
            enable-background="new 0 0 0 0" xml:space="preserve">
            <circle fill="#111" stroke="none" cx="6" cy="50" r="6">
                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite"
                    begin="0.1" />
            </circle>
            <circle fill="#111" stroke="none" cx="26" cy="50" r="6">
                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite"
                    begin="0.2" />
            </circle>
            <circle fill="#111" stroke="none" cx="46" cy="50" r="6">
                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite"
                    begin="0.3" />
            </circle>
        </svg>
    </div> --}}

    <div class="search-box bg-dark position-relative">
        <div class="search-wrap">
            <div class="close-button">
                <svg class="close" style="fill: white">
                    <use xlink:href="#close"></use>
                </svg>
            </div>
            <form id="search-form" class="text-lg-center text-md-left pt-3" action="index.html" method="get">
                <input type="text" class="search-input" placeholder="Search..." />
                <svg class="search">
                    <use xlink:href="#search"></use>
                </svg>
            </form>
        </div>
    </div>

    <!-- quick view -->
    <div class="modal fade" id="modaltoggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12 me-3">
                        <div class="image-holder">
                            <img src="{{ asset('assets/img/summary-item1.jpg') }}" alt="Shoes" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="summary">
                            <div class="summary-content fs-6">
                                <div class="product-header d-flex justify-content-between mt-4">
                                    <h3 class="display-7">Running Shoes For Men</h3>
                                    <div class="modal-close-btn">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                                <span class="product-price fs-3">$99</span>
                                <div class="product-details">
                                    <p class="fs-7">
                                        Buy good shoes and a good mattress, because when you're
                                        not in one you're in the other. With four pairs of shoes,
                                        I can travel the world.
                                    </p>
                                </div>
                                <ul class="select">
                                    <li><strong>Colour Shown:</strong> Red, White, Black</li>
                                    <li><strong>Style:</strong> SM3018-100</li>
                                </ul>
                                <div class="variations-form shopify-cart">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="quantity d-flex pb-4">
                                                <div
                                                    class="qty-number align-top qty-number-plus d-flex justify-content-center align-items-center text-center">
                                                    <span class="increase-qty plus">
                                                        <svg class="plus">
                                                            <use xlink:href="#plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input type="number" id="quantity_001"
                                                    class="input-text text-center" step="1" min="1"
                                                    name="quantity" value="1" title="Qty" />
                                                <div
                                                    class="qty-number qty-number-minus d-flex justify-content-center align-items-center text-center">
                                                    <span class="increase-qty minus">
                                                        <svg class="minus">
                                                            <use xlink:href="#minus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a rel="nofollow" data-no-instant="" href="#"
                                                class="out-stock button">Out of stock</a>
                                            <button type="submit"
                                                class="btn btn-medium btn-black hvr-sweep-to-right">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- variations-form -->
                                <div class="categories d-flex flex-wrap pt-3">
                                    <strong class="pe-2">Categories:</strong>
                                    <a href="#" title="categories">Clothing,</a>
                                    <a href="#" title="categories">Men's Clothes,</a>
                                    <a href="#" title="categories">Tops & T-Shirts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / quick view -->

    <div class="modal fade" id="modallong" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5">Cart</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="shopping-cart">
                        <div class="shopping-cart-content">
                            <div class="mini-cart cart-list p-0 mt-3">
                                <div class="mini-cart-item d-flex border-bottom pb-3">
                                    <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                        <a href="#" title="product-image">
                                            <img src="images/single-product-thumb1.jpg" class="img-fluid"
                                                alt="single-product-item" />
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8">
                                        <div
                                            class="product-header d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="product-title fs-6 me-5">
                                                Sport Shoes For Men
                                            </h4>
                                            <a href="" class="remove" aria-label="Remove this item"
                                                data-product_id="11913" data-cart_item_key="abc" data-product_sku="">
                                                <svg class="close">
                                                    <use xlink:href="#close"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="quantity-price d-flex justify-content-between align-items-center">
                                            <div class="input-group product-qty">
                                                <button type="button"
                                                    class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                                                    data-type="minus">
                                                    <svg width="16" height="16">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </button>
                                                <input type="text" name="quantity"
                                                    class="form-control input-number quantity" value="1" />
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                                                    data-type="plus">
                                                    <svg width="16" height="16">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="price-code">
                                                <span class="product-price fs-6">$99</span>
                                            </div>
                                        </div>
                                        <!-- quantity-price -->
                                    </div>
                                </div>
                            </div>
                            <div class="mini-cart cart-list p-0 mt-3">
                                <div class="mini-cart-item d-flex border-bottom pb-3">
                                    <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                                        <a href="#" title="product-image">
                                            <img src="images/single-product-thumb2.jpg" class="img-fluid"
                                                alt="single-product-item" />
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8">
                                        <div
                                            class="product-header d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="product-title fs-6 me-5">
                                                Brand Shoes For Men
                                            </h4>
                                            <a href="" class="remove" aria-label="Remove this item"
                                                data-product_id="11913" data-cart_item_key="abc" data-product_sku="">
                                                <svg class="close">
                                                    <use xlink:href="#close"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="quantity-price d-flex justify-content-between align-items-center">
                                            <div class="input-group product-qty">
                                                <button type="button"
                                                    class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                                                    data-type="minus">
                                                    <svg width="16" height="16">
                                                        <use xlink:href="#minus"></use>
                                                    </svg>
                                                </button>
                                                <input type="text" name="quantity"
                                                    class="form-control input-number quantity" value="1" />
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                                                    data-type="plus">
                                                    <svg width="16" height="16">
                                                        <use xlink:href="#plus"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="price-code">
                                                <span class="product-price fs-6">$99</span>
                                            </div>
                                        </div>
                                        <!-- quantity-price -->
                                    </div>
                                </div>
                            </div>
                            <!-- cart-list -->
                            <div class="mini-cart-total d-flex justify-content-between py-4">
                                <span class="fs-6">Subtotal:</span>
                                <span class="special-price-code">
                                    <span class="price-amount amount fs-6" style="opacity: 1">
                                        <bdi>
                                            <span class="price-currency-symbol">$</span>198.00
                                        </bdi>
                                    </span>
                                </span>
                            </div>
                            <div class="modal-footer my-4 justify-content-center">
                                <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">
                                    View Cart
                                </button>
                                <button type="button" class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart view -->

    <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="modal-header mx-auto border-0">
                    <h2 class="modal-title fs-3 fw-normal">Login</h2>
                </div>
                <div class="modal-body">
                    <div class="login-detail">
                        <div class="login-form p-0">
                            <div class="col-lg-12 mx-auto">
                                <form id="login-form">
                                    <input type="text" name="username" placeholder="Username or Email Address *"
                                        class="mb-3 ps-3 text-input" />
                                    <input type="password" name="password" placeholder="Password"
                                        class="ps-3 text-input" />
                                    <div class="checkbox d-flex justify-content-between mt-4">
                                        <p class="checkbox-form">
                                            <label class="">
                                                <input name="rememberme" type="checkbox" id="remember-me"
                                                    value="forever" />
                                                Remember me
                                            </label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Forgot your password?</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer mt-5 d-flex justify-content-center">
                            <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">
                                Login
                            </button>
                            <button type="button" class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login -->

    <header id="header" class="site-header text-black">
        <div class="header-top border-bottom py-2">
            <nav id="header-nav" class="navbar navbar-expand-lg">
                <div class="container-lg">
                    <div class="row d-flex justify-content-beetween">
                        <div>
                            <div class="d-flex">
                                <a class="navbar-brand" href="index.html">
                                    <img src="{{ URL::asset('assets/logo/logo2.png') }}" class="logo" alt="logo" style="width:10%;" />
                                </a>
                            </div>

                            <div class="col d-none d-md-block">
                                <p class="text-center text-black m-0">
                                    <strong>Special Offer</strong>: Free Shipping on all the orders
                                    above $100
                                </p>
                            </div>
                            
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Dashboard
                                        </a>
                                    @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Register
                                        </a>
                                    @endif 
                                    @endauth
                                </nav>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>
            </header>

        <section id="intro" class="position-relative mt-4">
            <div class="container-lg">
                <div class="swiper main-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
                                <img src="images/card-image1.jpg" alt="shoes" class="img-fluid jarallax-img" />
                                <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                    <h2 class="card-title display-3 light">
                                        Stylish shoes for Women
                                    </h2>
                                    <a href="index.html"
                                        class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-4">
                                <div class="col-lg-12 mb-4">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="{{ asset('assets/img/card-image2.jpg') }}" alt="shoes"
                                            class="img-fluid jarallax-img" />
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">
                                                Sports Wear
                                            </h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="images/card-image3.jpg" alt="shoes"
                                            class="img-fluid jarallax-img" />
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">
                                                Fashion Shoes
                                            </h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
                                <img src="images/card-image4.jpg" alt="shoes" class="img-fluid jarallax-img" />
                                <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                    <h2 class="card-title display-3 light">
                                        Stylish shoes for men
                                    </h2>
                                    <a href="index.html"
                                        class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-4">
                                <div class="col-lg-12 mb-4">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="images/card-image5.jpg" alt="shoes"
                                            class="img-fluid jarallax-img" />
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">
                                                Men Shoes
                                            </h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                                        <img src="images/card-image6.jpg" alt="shoes"
                                            class="img-fluid jarallax-img" />
                                        <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                                            <h2 class="card-title style-2 display-4 light">
                                                Women Shoes
                                            </h2>
                                            <a href="index.html"
                                                class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="discount-coupon py-2 my-2 py-md-5 my-md-5">
            <div class="container">
                <div class="bg-gray coupon position-relative p-5">
                    <div class="bold-text position-absolute">10% OFF</div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-7 col-md-12 mb-3">
                            <div class="coupon-header">
                                <h2 class="display-7">10% OFF Discount Coupons</h2>
                                <p class="m-0">
                                    Subscribe us to get 10% OFF on all the purchases
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-black btn-medium text-uppercase hvr-sweep-to-right">Email
                                    me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="featured-products" class="product-store">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Featured Products</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item1.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item2.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item3.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item4.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item5.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="collection-products" class="py-2 my-2 py-md-5 my-md-5">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="collection-card card border-0 d-flex flex-row align-items-end jarallax-keep-img">
                            <img src="images/collection-item1.jpg" alt="product-item"
                                class="border-rounded-10 img-fluid jarallax-img" />
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Minimal Collection</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="collection-card card border-0 d-flex flex-row jarallax-keep-img">
                            <img src="images/collection-item2.jpg" alt="product-item"
                                class="border-rounded-10 img-fluid jarallax-img" />
                            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
                                <h3 class="card-title display-3">
                                    <a href="#">Sneakers Collection</a>
                                </h3>
                                <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="latest-products" class="product-store py-2 my-2 py-md-5 my-md-5 pt-0">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <h2 class="section-title text-uppercase">Latest Products</h2>
                    <div class="btn-right">
                        <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item6.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item7.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item8.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item9.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 mb-3">
                            <div class="product-card position-relative">
                                <div class="card-img">
                                    <img src="images/card-item10.jpg" alt="product-item"
                                        class="product-image img-fluid" />
                                    <div class="cart-concern position-absolute d-flex justify-content-center">
                                        <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modallong">
                                                <svg class="shopping-carriage">
                                                    <use xlink:href="#shopping-carriage"></use>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                                data-bs-toggle="modal">
                                                <svg class="quick-view">
                                                    <use xlink:href="#quick-view"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- cart-concern -->
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                    <h3 class="card-title fs-6 fw-normal m-0">
                                        <a href="index.html">Running shoes for men</a>
                                    </h3>
                                    <span class="card-price fw-bold">$99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="py-5 border-top">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Info</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="pb-2">
                                    <a href="#">Track Your Order</a>
                                </li>
                                <li class="pb-2">
                                    <a href="index.html">Our Blog</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Privacy policy</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Shipping</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Help</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Community</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">About</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="pb-2">
                                    <a href="#">History</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Our Team</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Services</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Company</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Manufacture</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Wholesale</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Retail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Women Shoes</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="pb-2">
                                    <a href="#">Track Your Order</a>
                                </li>
                                <li class="pb-2">
                                    <a href="index.html">Our Blog</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Privacy policy</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Shipping</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Help</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Community</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Popular</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="pb-2">
                                    <a href="#">Prices Drop</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">New Products</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Best Sales</a>
                                </li>
                                <li class="pb-2">
                                    <a href="index.html">Stores</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Login</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modallong">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-2">Mens Collection</h5>
                            <ul class="menu-list list-unstyled">
                                <li class="pb-2">
                                    <a href="#">Delivery</a>
                                </li>
                                <li class="pb-2">
                                    <a href="index.html">About Us</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Shoes</a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 pb-3">
                        <div class="footer-menu">
                            <h5 class="widget-title pb-3">Get In Touch</h5>
                            <div class="footer-contact-text">
                                <span>Stylish Online Store 123 Main Street, Toulouse - France.
                                </span>
                                <span> Call us: (+33) 800 456 789-987 </span>
                                <span class="text-hover fw-bold light-border"><a
                                        href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>© Copyright Stylish 2023.</p>
                    </div>
                    <div class="col-md-6 text-lg-end">
                        <p>
                            Free HTML by
                            <a href="https://templatesjungle.com/" target="_blank">TemplatesJungle</a><br />
                            Distributed by
                            <a href="https://themewagon.com" target="blank">ThemeWagon</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        </footer>
        <script src="{{ URL::asset('assets/js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins.js') }}"></script>
        <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    
    </body>

    </html>