//jQuery Click event.
$('#submitUrl').click(function () {
    document.getElementById('msgText').innerHTML = "";
    var usrText = document.getElementById('userUrl').value;
    usrText = usrText.replaceAll('/', '\'');
    usrText = usrText.replaceAll('?', '\'');
    getShortUrl(usrText);

    //Verfication checks, regex causes problems with larger URLs
    /*
    if(validURL(usrText)){
        var usrText = document.getElementById('userUrl').value;
        usrText = usrText.replaceAll('/', '\'');
        usrText = usrText.replaceAll('?', '\'');
        getShortUrl(usrText);
    }else{
        urlInvaild();
    }*/
});
//GET request for shortened URL
function getShortUrl(url){

        $.ajax({
            url: "/convert/" + url,
            method: 'GET',
            dataType: "text",
            success: function (data) {
                urlSuccess(data);
            }
        });
}
//Informs the user has been successful by using a BS4 alert box.
function urlSuccess(data){
    var finalLink = document.createElement('a')
    finalLink.href = data
    finalLink.innerHTML = data;

    var info = document.createElement('div');
    info.className = "alert alert-success";
    info.innerHTML = "Success your URL is: ";
    info.appendChild(finalLink);
    document.getElementById('msgText').appendChild(info);
}

//Informs the user of an error by using a BS4 alert box.
function urlInvaild(){
    var info = document.createElement('div');
    info.className = "alert alert-danger";
    info.innerHTML = "ERROR: INVAILD URL! Please try again."
    document.getElementById('msgText').appendChild(info);
}

//Doesn't work well for long URLs.
function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?' + 
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + 
        '((\\d{1,3}\\.){3}\\d{1,3}))' + 
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + 
        '(\\?[;&a-z\\d%_.~+=-]*)?' + 
        '(\\#[-a-z\\d_]*)?$', 'i'); 
    return !!pattern.test(str);
}