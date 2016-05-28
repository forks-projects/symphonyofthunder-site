
//player
function perseverance() {
  play1 = window.open("player/p.html","play1",
"top=400,left=400,status=no,toolbar=no,location=no,menu=no,width=300,height=200");
}

function black() {
  play2 = window.open("player/b.html","play2",
"top=400,left=400,status=no,toolbar=no,location=no,menu=no,width=300,height=200");
}

//video player
function soiled() {
  play3 = window.open("player/s.html","play3",
"top=400,left=400,status=no,toolbar=no,location=no,menu=no,width=418,height=400");
}

function memoriam() {
  play4 = window.open("player/m.html","play4",
"top=400,left=400,status=no,toolbar=no,location=no,menu=no,width=418,height=400");
}

//formulario
function enviardados(){

if(document.form.nome.value=="" || document.form.nome.value.length < 3)
{
alert( "Preencha campo NOME corretamente!" );
document.form.nome.focus();
return false;
}


if( document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.form.email.focus();
return false;
}

if (document.form.mensagem.value=="")
{
alert( "Preencha o campo MENSAGEM!" );
document.form.mensagem.focus();
return false;
}

return true;
}


// open browser window
function openPopUp(url, windowName, w, h, scrollbar) {

           var winl = (screen.width - w) / 2;
           var wint = (screen.height - h) / 2;
           winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scrollbar ;
		   win = window.open(url, windowName, winprops);
           if (parseInt(navigator.appVersion) >= 4) { 
              	win.window.focus(); 
           } 
}

// fotos
function findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}


function getImage(imageName)
{
		findObj('img').src = imageName;
}
