export default function (){
	var  pathname = window.location.pathname;
    pathname = pathname.split('/');
    var language = pathname.pop();
	return language;
}