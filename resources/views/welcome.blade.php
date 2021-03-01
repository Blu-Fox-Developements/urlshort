<!DOCTYPE html>
<html>
    <head>
        <title>UrlShort</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
    </head>
    <body>
        <ul class="nav">
            <h1>Conor's URL Shortner</h1>
        </ul>

        <form>
            <div class="mb-3">
                <label for="userUrl" class="form-label">URL</label>
                <input type="text" class="form-control" id="userUrl" aria-describedby="URL">
                <div class="form-text">Please enter the URL you want to shorten</div>
                </div>
                <button type="button" class="btn btn-primary" id="submitUrl">Submit</button>
        </form>
        <div class="container" id="msgText">

        </div>
        <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
        crossorigin="anonymous"></script>
        <script src="{{ asset('js/url.js')}}"></script>
    </body>
</html>
