var url = 'https://newsapi.org/v2/everything?' +
    'q=Apple&' +
    'from=2021-06-29&' +
    'sortBy=popularity&' +
    'apiKey=426a1247f2764c0cb3c7d4ffe8d252ae';
var jsn = 'https://www.macrumors.com/2021/06/28/apple-daytime-emmy-award-nominations/'
var req = new Request(url);
let update = document.getElementById('update').innerHTML;

fetch(req).then(response =>
    response.json().then(data => ({
        data: data,
        status: response.status
    })
    ).then(res => {
        console.log(res.status, res.data.title);
        var myJSObject = JSON.parse(jsn);
        myJSObject.articles[1].object + " " + myJSObject.articles[1].object.title;
        var jsonText = JSON.stringify(myJSObject);
        update += jsonText;
    }));
