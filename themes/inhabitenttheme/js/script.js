(function($){
    $(function(){
        const $searchField = $(".search-field");
$(".icon-search").on("click",function(event){
 event.preventDefault();

 $searchField.toggle("slow").focus();
});

$searchField.on("blur",function(event){
    event.preventDefault();
   if($searchField.val() === ""){
    $searchField.hide("slow")} 

});

});   
})(jQuery); // end of js file
