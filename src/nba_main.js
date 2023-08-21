var URLString = top.location.href + "/";
tURLString = URLString.split("/");
iii = tURLString.length > 2 ? (tURLString[3].length > 0 ? false:true) : false
if(!iii){
    document.cookie = "UrlString=" + top.window.location.href + "; path=/;";
    top.window.location.href = "http://"+top.window.location.host;
}//////주소에 파일 경로 안보이게 하는 js