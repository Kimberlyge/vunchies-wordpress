/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	// var navItem = document.querySelectorAll('.Nav-item');

	// $.ajaxSetup({cache:false});
 //    $(".Nav-item").click(function(){
 //        var post_link = $(this).attr("href");
 //        var filtered = post_link.filter("#main");
 //        console.log(post_link);
 //        console.log(filtered);
 //        // var post_link = "http://vunchies.com/wp-json/wp/v2/posts?filter[category_name]=dessert";

 //        $("#overview").html("content loading");
 //        $("#overview").load(post_link);

 //        console.log('clicked', post_link);
 //    return false;
 //    });

 //    a.onclick = fn(e) {
	//     e.preventDefault();

	//     pushState({optional data}, 'Title, you can also set it later', e.currentTarget.pathname);

	// }

	// window.history.addEventListener('popstate', historyChangeHandler);

	// var page = d.query('.Page');
	// var container = d.query('.Container');

	// function historyChangeHandler(e) {
	//     var data= e.fakeData //doesnt exist u should look in e where the props are.
	//     $.ajax(data.path).then(fn(data) {
	//         container.remove(page);
	//         var result = parseHtml(data);
	//         container.append(result.page);
	//         document.title = result.title
	//     })
	// }

	// fn parseHtml(html) {
	//     var div = createDiv()
	//     div.innerHtml = html;

	//     return {
	//         title: div.query('title').textContent,
	//         page: div.query('.Page'),
	//     }
	// }

	// for(var i=0; i < navItem.length; i++) {

	// 	navItem[i].addEventListener("click", function (event) {

	// 		// $.post(ajaxurl, {


	// 		// }, function (response) {
	// 		//     // TODO
	// 		//     console.log('response', response);
	// 		// });
	// 		event.preventDefault();

	// 		jQuery.post(
	// 		    ajaxurl,
	// 		    {
	// 		        'action': 'add_foobar',
	// 		        'data':   'foobarid'
	// 		    },
	// 		    function(response){
	// 		        alert('The server responded: ' + response);
	// 		    }
	// 		);

	// 	});
	// }

} )();
