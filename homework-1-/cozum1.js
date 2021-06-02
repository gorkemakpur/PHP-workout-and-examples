//Soru-1-
var gorev1=document.getElementById("gorev1")
var metin=document.getElementsByTagName("h2");
gorev1.onclick=function(){
for(var i=0;i<3;i++)
{
    document.getElementById("gorev1").innerHTML += "<li>" + metin[i].innerHTML + "</li>"
}
}




//Soru-2
gorev2.onclick = function () {
    var h2 = document.getElementsByTagName("h2");
    sayac = 0;
    for (var i = 1; i < h2.length; i++) {
        sayac++;
    }
    $("#gorev2 > button").click(function () {
        $('#gorev2 > input[type=text]').val(sayac);
    });
}





//Soru-3-
var gorev3 = document.getElementById("gorev3");
gorev3.onclick = function () {
    var baslik = document.querySelector("h1");
    $("#gorev3 > button").click(function () {
        $('#gorev3 > input[type=text]').val(baslik.innerHTML);
    });
}





//Soru-4-
var gorev4=document.getElementById("gorev4")
var ogeler=document.querySelectorAll(".satir>.sutun>article>div>p");
var basliklar=document.querySelectorAll("h2");
gorev4.onclick=function(){
console.log(ogeler);
for(var i=0; i<ogeler.length;i++)
{
    var metin=ogeler[i].textContent;
    basliklar[i].textContent += " ( " + metin.length +" ) ";
}
}





//Soru-5-
var dizi=document.querySelectorAll("h2");
var h1baslik=document.querySelector("h1");
console.log(dizi);
gorev5.onclick = function () {            
for(var i=0;i<dizi.length;i++)
{
    if(i % 2 == 0)
{
        dizi[i].style.color="blue"
}
    else
    {
        dizi[i].style.color="orange"
    }
}
h1baslik.style.color="red";
}



//Soru-6-

gorev6.onclick = (function () {
    $("#gorev6 > button").click(function () {
        var paragraflar = Array.from($("p:lt(15)"));
        paragraflar.forEach(parag => {
            $("p:lt(1)").fadeOut();
        });
    });
});




//Soru-7-




//Soru-8-//bütün p lere yazdırıyor ilk p ye yazdırmamız gerek 
gorev8.onclick=(function(){
    $("article>div>p[1]").load("lorem.html"); 
$.ajax({
    url:"lorem.html",
    type:"get",
    success:function(sonuc)
    {
    
    }
})
})

//Soru-9- //gorev9 id sine gelince çalışıyor başlıklarda çalışmıyor
$("h2, h1").hover(function () {
    var fare = $(this).hover().text();
    $("#gorev9 > input[type=text]").val(fare);
}); 


//Soru-10-//sag sutunda gösterilmesi gerekiyor gorev10 da değil
document.getElementById("gorev10").innerHTML = "<img src='img/check.png' style='width:100px; height:100px;' >"; 
