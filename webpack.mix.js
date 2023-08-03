const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
// mix.webpackConfig({
//   plugins: [
//       new webpack.EnvironmentPlugin({
//           MIX_PUSHER_APP_KEY: JSON.stringify(process.env.MIX_PUSHER_APP_KEY),
//           MIX_PUSHER_APP_CLUSTER: JSON.stringify(process.env.MIX_PUSHER_APP_CLUSTER),
//       }),
//   ],
// });

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
