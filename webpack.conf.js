const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const WebpackBuildNotifierPlugin = require('webpack-build-notifier');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const HtmlWebpackHarddiskPlugin = require('html-webpack-harddisk-plugin');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const HtmlWebpackInlineSourcePlugin = require('html-webpack-inline-source-plugin');
const HtmlMinifierPlugin = require('html-minifier-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ProgressBarPlugin = require('progress-bar-webpack-plugin');

const { NODE_ENV } = process.env.NODE_ENV;

const pages = [
  '404',
  'index',
  'terms-of-use',
];

module.exports = {
  devtool: 'inline-source-map',
  devServer: {
    contentBase: './public_html',
  },
  entry: {
    main: './src/index.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public_html'),
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            {
              loader: 'css-loader',
              options: {
                minimize: NODE_ENV === 'production',
              },
            }, {
              loader: 'sass-loader',
            },
          ],
        }),
      },
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.(html)$/,
        include: path.join(__dirname, 'src/partials'),
        use: {
          loader: 'html-loader',
          options: {
            minimize: NODE_ENV === 'production',
            removeComments: NODE_ENV === 'production',
            collapseWhitespace: NODE_ENV === 'production',
          },
        },
      },
      {
        test: /\.(gif|png|jpe?g|svg)$/i,
        use: [{
          loader: 'file-loader',
          options: {
            name: 'images/common/[name]-[hash].[ext]',
          },
        }],
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: 'fonts/[name].[ext]',
          },
        }],
      },
    ],
  },
  externals: {
    jquery: 'jQuery',
    $: 'jQuery',
  },
  plugins: [
    new ExtractTextPlugin('[name].css'),
    new CleanWebpackPlugin(['public_html']),
    new CopyWebpackPlugin([{
      from: 'src/assets/images/gallery/big-img-gallery/*.jpg',
      to: 'images/gallery/big-img-gallery/[name].[ext]',
    }, {
      from: 'src/assets/images/favicon/*',
      to: 'images/favicon/[name].[ext]',
    }, {
      from: '.htaccess',
      to: '[name].[ext]',
    }, {
      from: 'index.php',
      to: '[name].[ext]',
    }, {
      from: 'composer.json',
      to: '[name].[ext]',
    }]),
    new WebpackBuildNotifierPlugin({
      title: `nashchat ${NODE_ENV}`,
      suppressSuccess: true,
    }),
    new ProgressBarPlugin(),
  ],
};

// add pages to webpack build
pages.forEach((pageName) => {
  module.exports.plugins.push(new HtmlWebpackPlugin({
    template: `src/pages/${pageName}.html`,
    filename: path.resolve(__dirname, `public_html/${pageName}.html`),
    alwaysWriteToDisk: true,
    inlineSource: NODE_ENV === 'production' ? '.(css)$' : false,
  }));
});


switch (NODE_ENV) {
  // plugins for development mode
  case 'development':
    module.exports.plugins.push(
      new HtmlWebpackHarddiskPlugin(),
    );
    break;

  // plugins for production mode
  case 'production':
    module.exports.plugins.push(
      new UglifyJSPlugin(),
      new HtmlWebpackInlineSourcePlugin(),
      new HtmlMinifierPlugin(),
    );
    break;

  // plugins for analyze js mode
  case 'analyze':
    module.exports.plugins.push(new BundleAnalyzerPlugin());
    break;
  default:
    break;
}
