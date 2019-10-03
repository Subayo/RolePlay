var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    // for dev
    .setPublicPath('/test/RolePlay/public/build')
    // .setManifestKeyPrefix('build')
    .cleanupOutputBeforeBuild()
    .addStyleEntry('css/app', './assets/css/app.scss')
    .addEntry('js/tate-no-yusha-skill/app', './assets/js/tate-no-yusha-skill/app.js')
    .addStyleEntry('css/tate-no-yusha-skill/app', './assets/css/tate-no-yusha-skill/app.scss')
    .addEntry('js/homestuck-craft/app', './assets/js/homestuck-craft/app.js')
    .addStyleEntry('css/homestuck-craft/app', './assets/css/homestuck-craft/app.scss')
    .enableSassLoader(function (sassOptions) {
        // https://github.com/sass/node-sass#options
        // options.includePaths = [...]
    })
    .autoProvidejQuery()
    .autoProvideVariables({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
    })
    .disableSingleRuntimeChunk()
    .enableSourceMaps(!Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();