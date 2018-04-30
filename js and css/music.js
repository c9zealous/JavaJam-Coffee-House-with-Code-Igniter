// Put your Last.fm API key here
var api_key = "b1b9ec93d9bce5af6f28013697befc25";

function sendRequest () {
    var xhr = new XMLHttpRequest();
    var method = "artist.getinfo";
    var artist = encodeURI(document.getElementById("form-input").value);
    xhr.open("GET", "http://localhost/javajam/assets/js/proxy.php?method="+method+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var x = json.artist.name;
            var url = json.artist.url;
            var bio = json.artist.bio.summary;
            var z = json.artist.image[2]['#text'];
            var c = json.artist.similar.artist[0].name;
        var f = json.artist.similar.artist[1].name;
        var h = json.artist.similar.artist[2].name;
        var sim_art= c+'<br/>'+f+'<br/>'+h;
            }
                
         var disp="<table><tr>";
        disp +="<td colspan ='2'><h3>Name:"+x+"</h3></td>";
        disp +="<td colspan='2'><br/><h3>URL:</h3></br><a href ="+url+">"+url+"</a></td></tr>";
        disp +="<tr><td colspan='2'><img src ="+z+"></img></td>";
        disp +="<td colspan='2'><h3>Similar Artist:</h3>"+sim_art+"</td></tr>";
        disp +="<tr><td colspan ='4' rowspan='4'><h3>Bio:</h3>"+bio+"</td></tr></table>";

        document.getElementById("output").innerHTML = disp;
        gettop3album(artist);
        };
    xhr.send(null);
    
}

function gettop3album (artist) {
    var xhr1 = new XMLHttpRequest();
    var method1 = "artist.getTopAlbums";
    xhr1.open("GET", "http://localhost/javajam/assets/js/proxy.php?method="+method1+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
    xhr1.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json1 = JSON.parse(this.responseText);
            }
                
        var l2="<h3>Top three Albums:</h3>";
            l2 +="<table>";
            var img= json1.topalbums.album[0].image[0]['#text'];
            l2 +="<tr><td>"+"<img src="+img+" ' style='width:60px;height:50px;'></img></td>";
            l2 +="<td>"+json1.topalbums.album[0].name+"</td>";
            
            for (i=1;i<3;i++)
            {
            img= json1.topalbums.album[i].image[i]['#text'];
            l2 +="<td>"+"<img src="+img+" ' style='width:60px;height:50px;'></img></td>";
            l2 +="<td>"+json1.topalbums.album[i].name+"</td>";
            }
            l2 +="</tr></table>";
        document.getElementById("output1").innerHTML = l2;
    };
    xhr1.send(null);
}