const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')

module.exports = {
    devtool: 'source-map',
    entry: path.resolve(__dirname, '../src/index.js'),
    output:
    {
        hashFunction: 'xxhash64',
        filename: 'bundle.[hash].js',
        path: path.resolve(__dirname, '../dist')
    },
    plugins:
    [
        new CopyWebpackPlugin({
            patterns:
            [
                { from: 'static' }
            ]
        }),
        new MiniCssExtractPlugin(),
        new HtmlWebpackPlugin({
            template: path.resolve(__dirname, '../src/index.html')
        })
    ],
    module:
    {
        rules:
        [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use:
                [
                    'babel-loader'
                ]
            },
            {
                test: /\.css$/,
                use:
                [
                    MiniCssExtractPlugin.loader,
                    'css-loader'
                ]
            },
            {
                test: /\.styl$/,
                use:
                [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'stylus-loader'
                ]
            },
            {
                test: /\.(jpg|png|gif|svg)$/,
                type: 'asset/resource',
                generator:
                {
                    filename: 'assets/images/[name][ext]'
                }
            },
            {
                test: /\.(mp3|mp4)$/,
                type: 'asset/resource',
                generator:
                {
                    filename: 'assets/video/[name][ext]'
                }
            },
            {
                test: /\.(ttf|eot|woff2?)$/,
                type: 'asset/resource',
                generator:
                {
                    filename: 'assets/fonts/[hash][ext]'
                }
            },
            {
                test: /\.html?$/,
                use:
                [
                    'html-loader'
                ]
            }
        ]
    }
}