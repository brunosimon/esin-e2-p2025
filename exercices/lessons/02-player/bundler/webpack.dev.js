const { merge } = require('webpack-merge')
const commonConfiguration = require('./webpack.common.js')

module.exports = merge(
    commonConfiguration,
    {
        mode: 'development',
        devServer:
        {
            open: true,
            host: 'local-ip'
        }
    }
)