const https = require('https');
https.get('https://www.youtube.com/@TecNMCampusPachuca', (res) => {
    let data = '';
    res.on('data', chunk => data += chunk);
    res.on('end', () => {
        const match = data.match(/"channelId":"(UC[^"]+)"/);
        if (match) {
            console.log("PLAYLIST ID: " + match[1].replace(/^UC/, 'UU'));
        } else {
            console.log("No match found");
        }
    });
}).on('error', console.error);
