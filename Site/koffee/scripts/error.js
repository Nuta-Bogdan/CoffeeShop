function parseError() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params['error'] != null) {
        document.getElementById('errorMsg').innerHTML = params['error'].replace(/%20/g, ' ');
    }
}

parseError();