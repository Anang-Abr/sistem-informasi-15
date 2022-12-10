let mix = require("laravel-mix");
mix.copyDirectory("vendor/tinymce/tinymce", "public/js/tinymce");
mix.js("resources/js/app.js", "js");
