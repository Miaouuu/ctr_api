let mix = require("laravel-mix");

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
 */

mix.scripts(
    [
        "resources/js/lib/jquery.min.js",
        "resources/js/lib/popper.js",
        "resources/js/lib/bootstrap.min.js",
        "resources/js/ga.js",
    ],
    "public/js/app.js"
).styles(
    [
        "resources/css/bootstrap.min.css",
        "resources/css/app.css",
    ],
    "public/css/app.css"
).copyDirectory('resources/img', 'public/img');

if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.js?$/,
                use: [
                    {
                        loader: "babel-loader",
                        options: mix.config.babel(),
                    },
                ],
            },
        ],
    },
});
