<script src="./jquery-3.6.0.min.js"></script>

<script>
function Data(action){
$(document).ready(function(){
let tab =[];
var n1 =$(".Football").prop('checked');
var res1 =$(".Football").val();
var n2 =$(".Basketball").prop('checked');
var res2 =$(".Basketball").val();
var n3 =$(".Handball").prop('checked');
var res3 =$(".Handball").val();
var n4 =$(".Voleyball").prop('checked');
var res4 =$(".Voleyball").val();
var n5 =$(".Baseball").prop('checked');
var res5 =$(".Baseball").val();
var n6 =$(".Swimming").prop('checked');
var res6=$(".Swimming").val();
var n7=$(".Running").prop('checked');
var res7 =$(".Running").val();
var n8 =$(".Raley").prop('checked');
var res8 =$(".Raley").val();
var n9 =$(".UFC").prop('checked');
var res9 =$(".UFC").val();
var n10 =$(".Golf").prop('checked');
var res10 =$(".Golf").val();


if (n1){  tab.push(res1)}
if (n2){  tab.push(res2)}
if (n3){  tab.push(res3)}
if (n4){  tab.push(res4)}
if (n5){  tab.push(res5)}
if (n6){  tab.push(res6)}
if (n7){  tab.push(res7)}
if (n8){  tab.push(res8)}
if (n9){  tab.push(res9)}
if (n10){  tab.push(res10)}

ValSelection=$("input[type='radio'][name='sexe']:checked").val();
var check = tab.join(",");

var data ={
action:action,
id:$("#id").val(),
Nom:$(".Nom").val(),
Prenom:$(".Prenom").val(),
Ville:$(".Ville").val(),
Contact:$(".Contact").val(),
Sexe:ValSelection,
Loisirs:check,
STATUE:$("#statue").val(),
};

$.ajax({
url: 'fonction.php',
type:'POST',
data:data,
success:function(response){ 
    
    alert(response);
if (response == "Delete"){
$("#"+action ).css("display","none");
}}
})
});
}












</script>