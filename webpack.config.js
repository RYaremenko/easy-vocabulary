// webpack.config.js
let Encore = require('@symfony/webpack-encore');
let webpack = require('webpack');


Encore
  .setOutputPath('web/build/')
  .setPublicPath('/build')
  .cleanupOutputBeforeBuild()
  .enableSassLoader()
  .addPlugin(new webpack.ProvidePlugin({
    $: 'jquery',
    jquery: 'jquery',
    jQuery: 'jquery',
    'window.jquery': 'jquery',
    'window.jQuery': 'jquery'
  }))
  .addEntry('js/app', './src/EasyVocabularyBundle/Resources/assets/js/app.js')
  .addStyleEntry('css/app', './src/EasyVocabularyBundle/Resources/assets/scss/app.scss')
;

// export the final configuration
module.exports = Encore.getWebpackConfig();