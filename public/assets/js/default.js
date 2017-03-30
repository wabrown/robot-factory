/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function changeHeadImage(element) {
    document.getElementById("HeadImage").src = "../assets/images/parts/" + element.id;
}
function changeBodyImage(element) {
    document.getElementById("BodyImage").src = "../assets/images/parts/" + element.id;
}
function changeFeetImage(element) {
    document.getElementById("FeetImage").src = "../assets/images/parts/" + element.id;
}
function assemble() {
    var head = document.getElementById("HeadImage").src;
    var body = document.getElementById("BodyImage").src;
    var legs = document.getElementById("FeetImage").src;
    var id = 1;
    // call controller or model function here, passing head body and legs as parameters
    $.ajax({
        //url: '/assembly/insertAssembled/'+head+'/'+body+'/'+legs+'',
        url: '/assembly/insertAssembled',
        type: 'POST',
        dataType: 'text',
        data: {
            id: id,
            head: head, //You'll get it with $_POST['head']
            body: body, //You'll get it with $_POST['body']
            legs: legs  //You'll get it with $_POST['legs']
        },
    })
    .done(function(data) {
        // Do what you want in case of success
        alert('ajax worked');
    })
    .fail(function(err) {
        //Do what you want incase of error
        alert('ajax worked');
    });
}

