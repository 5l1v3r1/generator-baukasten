const extend = require('deep-extend')

function addBrowserSyncSettings(files = {}, context) {

    // Set BrowserSync Settings
    let openBrowser = true
    let proxyURL = false

    if (context.props.projectProxy !== 'false') {
        openBrowser = false
        proxyURL = `http://${context.props.projectProxy}/`
    }

    extend(files.pkg, {
        browsersync: {
            openbrowser: openBrowser,
            proxy: proxyURL
        }
    })
}

module.exports = addBrowserSyncSettings
