var limite=390;

function soma() {

var mais_um=eval(document.form1.msg_about.value.length-1);
mais_um++;

 if (document.form1.msg_about.value.length>limite)
 {
  document.form1.msg_about.value='';
  document.form1.msg_about.value=valor_limite;
  alert("Você deve digitar no máximo "+limite+" caracteres");
 }
 else
 {
  document.form1.exibe.value='';
  document.form1.exibe.value=eval(mais_um);
  valor_limite=document.form1.msg_about.value;
  document.form1.exibe2.value='';
  document.form1.exibe2.value=(limite-mais_um);
 }

document.form1.msg_about.focus();
}

function mostra_tamanho(){
document.form1.exibe2.value=limite;
}
