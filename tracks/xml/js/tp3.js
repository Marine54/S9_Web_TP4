var limit = 5;

// Méthode appelée dès que l'utilisateur modifie sa saisie.
function retrieve() {
    loadXMLDoc();
}


function loadXMLDoc() {
    // Create XMLHttpRequest object (Check browser) 
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari 
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE5 and IE6 
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // Things to do when a response arrives 
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            showTracks(this.responseText);
        }
    }

    // Initialize request with last.fm API
    var saisie = document.getElementById("bsearch").value;
    var url = "http://ws.audioscrobbler.com/2.0/?method=track.search&track=" + saisie + "&limit="+limit+"&api_key=e66c9c6929dce392c2e395ee08ab447f";
    xmlhttp.open("GET", url, true);
    // Send 
    xmlhttp.send();
}

// Affichage des musiques en fonction du XML reçu de l'API Last.Fm
function showTracks(xml) {
    var oParser = new DOMParser();
    var xmldoc = oParser.parseFromString(xml, "text/xml");

    var html = constructionHTML(xmldoc);
   
    document.getElementById("results").innerHTML = html;
}

function constructionHTML(xmldoc) {
    // Construction du HTML
    var tracks = xmldoc.getElementsByTagName("track");
    var html = "";
    for (i = 0; i < tracks.length; i++) {
        html += '<div class="trackDiv">';
        var track = tracks[i];
        //        console.log(track.childNodes);

        var name = track.childNodes[0].childNodes[0].data;
        var artist = track.childNodes[2].childNodes[0].data;
        // 12 = small ; 14= medium
        var image = track.childNodes[12].childNodes[0].data;

        console.log(name);
        console.log(artist);
        console.log(image);

        html += '<div class="inline"><img src="' + image + '" alt="image de l\'artiste" /></div>';
        html += '<div class="inline info"><h2 class="songName">' + name + '</h2>';
        html += '<h3 class="artistName">' + artist + '</h3></div>';

        html += "</div>";
    }
    
    return html;
}

