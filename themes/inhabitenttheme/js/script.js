(function($){
$(".icon-search").on("click",function(event){
 event.preventDefault();

 $(".search-field").toggle("slow").focus();

});

$(".search-field").on("blur",function(event){
    event.preventDefault();
$(".search-field").hide("slow")});


//  put all codes in here
// $('body').append('works');
    
})(jQuery); // end of js file
